<?php

include_once('lib/ezutils/classes/ezini.php');
include_once('extension/collectexport/modules/collectexport/basehandler.php');
include_once('kernel/classes/ezcontentobjecttreenode.php');

class Parser {

var $handlerMap=array();
var $exportableDatatypes;

	function Parser() {
		$ini = eZINI::instance( "export.ini" );
		$this->exportableDatatypes=$ini->variable( "General", "ExportableDatatypes" );
		foreach ($this->exportableDatatypes as $typename) {
			include_once("extension/collectexport/modules/collectexport/".$ini->variable($typename, 'HandlerFile'));
			$classname = $ini->variable($typename, 'HandlerClass'); 
			$handler = new $classname;
			$this->handlerMap[$typename]=array("handler" => $handler,
						"exportable" => true);
		}
	}
	
	function getExportableDatatypes() {
		return $this->exportableDatatypes;
	}
	
	function exportAttribute(&$attribute, $seperationChar) {
            $ret = false;
	    $objectAttribute = $attribute->contentObjectAttribute();
		$handler=$this->handlerMap[$objectAttribute->DataTypeString]['handler'];

/*

BC: Error Debug Comment Test Case Output

echo ( '<hr />' );

print_r( $objectAttribute->DataTypeString );

echo ( '<hr />' );

print_r( $objectAttribute );

echo ( '<hr />' );		

print_r( $this->handlerMap );

echo ( '<hr />' );
*/

        if( $attribute && $seperationChar )
        { 
          if( is_object( $handler ) )
          {
            if( $handler->exportAttribute($attribute, $seperationChar) )
            $ret = $handler->exportAttribute($attribute, $seperationChar);
          }
        } else {
          $ret = false;
        }

	return $ret;	
	}

	function exportCollectionObject(&$collection, &$attributes_to_export, $seperationChar) {
		$resultstring = array();
		foreach ($attributes_to_export as $attributeid) {
			if ($attributeid == "contentobjectid") {
				array_push($resultstring,$collection->ID);
			} else if ($attributeid == -1) {
			    array_push($resultstring,"");
			} else if ($attributeid != -2) {
				$attributes=$collection->informationCollectionAttributes();
				foreach ($attributes as $currentattribute) {
					if ( ((int) $attributeid)== ((int) $currentattribute->ContentClassAttributeID) ) {
					    array_push($resultstring,$this->exportAttribute($currentattribute, $seperationChar));
					}
				}
			}
		}
		return $resultstring;
	}

	function exportCollectionObjectHeader(&$attributes_to_export) {
		$resultstring = array();
		foreach($attributes_to_export as $attributeid)
		{
			if ($attributeid == "contentobjectid") {
				array_push($resultstring,"ID");
			} else if ($attributeid == -1) {
			    array_push($resultstring,"");
			} else if ($attributeid != -2) {
			    $attribute = & eZContentClassAttribute::fetch($attributeid);
			    if( $attribute instanceof eZContentClassAttribute ) {
			    	array_push( $resultstring, $attribute->name() );
			    }

			    // works for 3.8 only
			    // array_push($resultstring,$attribute->Name);
			}			
		}
		return $resultstring;
	}


	function exportInformationCollection( $collections, $attributes_to_export, $seperationChar, $export_type='csv') {

        // eZDebug::writeDebug($attributes_to_export);

        switch($export_type){
            case "csv" :
		        $returnstring = array();
        		foreach ($collections as $collection) {
        			array_push($returnstring, $this->exportCollectionObject($collection, $attributes_to_export, $seperationChar));
        		}
        		return $this->csv($returnstring,$seperationChar);
        		break;            
            case "sylk":
                $returnstring = array();
                array_push($returnstring, $this->exportCollectionObjectHeader($attributes_to_export));
        		foreach ($collections as $collection) {
        			array_push($returnstring, $this->exportCollectionObject($collection, $attributes_to_export, $seperationChar));
        		}
        		return $this->sylk($returnstring);
        		break;            
        	default:
        	    $export_type='csv';
		        $returnstring = array();
        		foreach ($collections as $collection) {
        			array_push($returnstring, $this->exportCollectionObject($collection, $attributes_to_export, $seperationChar));
        		}
        		return $this->csv($returnstring,$seperationChar);
        		break;            
            }
	}
	
	
    /* -------------- SYLK EXPORT ------------ */	
    	
    function sylk( $tableau )
    {
       define("FORMAT_REEL",   1); // #,##0.00
       define("FORMAT_ENTIER", 2); // #,##0
       define("FORMAT_TEXTE",  3); // @

       $cfg_formats[FORMAT_ENTIER] = "FF0";
       $cfg_formats[FORMAT_REEL]   = "FF2";
       $cfg_formats[FORMAT_TEXTE]  = "FG0";

       if ($tableau)
       {
          // en-t? du fichier SYLK
          // $sylkcontent = "ID;Atchoum Production\n"; // ID;Pappli
 	  $sylkcontent = "ID;Pcie\n"; // ID;Pappli
          $sylkcontent = $sylkcontent."\n";
          // formats
          $sylkcontent = $sylkcontent."P;PGeneral\n";     
          $sylkcontent = $sylkcontent."P;P#,##0.00\n";       // P;Pformat_1 (reels)
          $sylkcontent = $sylkcontent."P;P#,##0\n";          // P;Pformat_2 (entiers)
          $sylkcontent = $sylkcontent."P;P@\n";              // P;Pformat_3 (textes)
          $sylkcontent = $sylkcontent."\n";
          // polices
          $sylkcontent = $sylkcontent."P;EArial;M200\n";
          $sylkcontent = $sylkcontent."P;EArial;M200\n";
          $sylkcontent = $sylkcontent."P;EArial;M200\n";
          $sylkcontent = $sylkcontent."P;FArial;M200;SB\n";
          $sylkcontent = $sylkcontent."\n";
          // nb lignes * nb colonnes :  B;Yligmax;Xcolmax
          $sylkcontent = $sylkcontent."B;Y".(count($tableau));
          // detection du nb de colonnes
          
          for($i=0;$i < count($tableau) ;$i++)
             $tmp[$i]=count($tableau[$i]);
          $nbcol=max($tmp);
          $sylkcontent = $sylkcontent.";X".$nbcol."\n";
          $sylkcontent = $sylkcontent."\n";
          // r?p?tion des infos de formatage des colonnes
          for($cpt=0; $cpt< $nbcol;$cpt++)
          {
             switch(gettype($tableau[1][$cpt]))
             {
                case "integer":
                   $num_format[$cpt]=FORMAT_ENTIER;   
                $format[$cpt]= $cfg_formats[$num_format[$cpt]]."R";
                break;
                case "double":
                   $num_format[$cpt]=FORMAT_REEL;   
                $format[$cpt]= $cfg_formats[$num_format[$cpt]]."R";
                break;
                default:
                $num_format[$cpt]=FORMAT_TEXTE;   
                $format[$cpt]= $cfg_formats[$num_format[$cpt]]."L";
                break;
             }   
          }
          // largeurs des colonnes
          for ($cpt = 1; $cpt <= $nbcol; $cpt++)
          {
             for($t=0;$t < count($tableau);$t++)
                $tmpo[$t]= strlen($tableau[$t][$cpt-1]);
             $taille=max($tmpo);
             if ($taille==0)
                $taille=1;
             // F;Wcoldeb colfin largeur
             if (strlen($tableau[0][$cpt-1]) > $taille)
                $taille=strlen($tableau[0][$cpt-1]);
             if ($taille>50)
                $taille=50;
             $sylkcontent = $sylkcontent."F;W".$cpt." ".$cpt." ".$taille."\n";
          }
          $sylkcontent = $sylkcontent."F;W".$cpt." 256 8\n"; // F;Wcoldeb colfin largeur
          $sylkcontent = $sylkcontent."\n";
          // en-t? des colonnes (en gras --> SDM4)
          for ($cpt = 1; $cpt <= $nbcol; $cpt++)
          {
             $sylkcontent = $sylkcontent."F;SDM4;FG0C;".($cpt == 1 ? "Y1;" : "")."X".$cpt."\n";
             $sylkcontent = $sylkcontent."C;N;K\"".$tableau[0][$cpt-1]."\"\n";
          }
          $sylkcontent = $sylkcontent."\n";
          // donn? utiles
          $ligne = 2;
          for($i=1;$i< count($tableau);$i++)
          {
             // parcours des champs
             for ($cpt = 0; $cpt < $nbcol; $cpt++)
             {
                // format
                $sylkcontent = $sylkcontent."F;P".$num_format[$cpt].";".$format[$cpt];
                $sylkcontent = $sylkcontent.($cpt == 0 ? ";Y".$ligne : "").";X".($cpt+1)."\n";
                // valeur
                if ($num_format[$cpt] == FORMAT_TEXTE)
                   $sylkcontent = $sylkcontent."C;N;K\"".str_replace(';', ';;', $tableau[$i][$cpt])."\"\n";
                else
                   $sylkcontent = $sylkcontent."C;N;K".$tableau[$i][$cpt]."\n";
             }
             $sylkcontent = $sylkcontent."\n";
             $ligne++;
          }
          // fin du fichier
          $sylkcontent = $sylkcontent."E\n";
          return $sylkcontent;
       }else
          return false;
    }	



    /* -------------- CSV EXPORT ------------ */	



    function csv($tableau, $seperator)
    {
        if ($tableau) {
            $line="truc";
            for($i=0;$i < count($tableau) ;$i++)
                $tmp[$i]=count($tableau[$i]);
            $nbcol=max($tmp);

          $line = "";
          
          for($i=0;$i< count($tableau);$i++)
          {
             // parcours des champs
             for ($cpt = 0; $cpt < $nbcol; $cpt++)
             {
                $line .= trim($tableau[$i][$cpt]) . $seperator;
             }
             $line .= "\n";
          }
            return $line;
        }
    }	



	
}
?>

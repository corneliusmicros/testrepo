<?php

include_once ('kernel/classes/ezcontentclass.php');
include_once ( 'kernel/classes/ezinformationcollection.php' );
include_once ('lib/ezutils/classes/ezhttptool.php');
include_once ('extension/collectexport/modules/collectexport/parser.php');
include_once ('lib/ezutils/classes/ezexecution.php');

$http =& eZHTTPTool::instance();
$module =& $Params['Module'];
$objectID = $Params['ObjectID'];

$object = false;

if( is_numeric( $objectID ) )
{
    $object =& eZContentObject::fetch( $objectID );
}

if( !$object )
{
    return $module->handleError( EZ_ERROR_KERNEL_NOT_AVAILABLE, 'kernel' );
}

$collections = eZInformationCollection::fetchCollectionsList( $objectID, /* object id */
                                                              false, /* creator id */
                                                              false, /* user identifier */
                                                              array() /* limit array */ );
$counter=0;
$attributes_to_export=array();
while (true) {
	$currentattribute=eZHTTPTool::postVariable("field_$counter");
	if (!$currentattribute) {
		break;
	}
	$attributes_to_export[]=$currentattribute;
	$counter++;
}

$seperation_char = eZHTTPTool::postVariable("separation_char");
$export_type = eZHTTPTool::postVariable("export_type");
$parser=new Parser();

$date_export = date("d-m-Y");
$contentobject = & eZContentObject::fetch($objectID);

switch($export_type){
    case 'csv':
        $filename = $contentobject->attribute( 'name' ) ."_export_". $date_export .".csv";
        break;
    case 'sylk':
        $filename = $contentobject->attribute( 'name' ) ."_export_". $date_export .".slk";
        break;
    default :
        $filename = $contentobject->attribute( 'name' ) ."_export_". $date_export .".csv";
        break;
    }

$export_string=$parser->exportInformationCollection( $collections, $attributes_to_export, $seperation_char, $export_type, $objectID);

$filename = rawurlencode( $filename );
$filepath = 'var/storage/' . $filename;
$fp = fopen( $filepath, 'w' );
fwrite( $fp, $export_string );
fclose( $fp );
$file = new eZFile();
$file->download( $filepath, true, rawurlencode( $filename ) );
eZExecution::cleanExit();
?>
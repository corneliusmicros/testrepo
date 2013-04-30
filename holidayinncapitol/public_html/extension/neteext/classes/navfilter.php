<?php

class navFilter
{
    function navFilter()
    {
    }

    function createSqlParts( $params )
    {	
    	$result = array( 'tables' => '', 'columns' => '', 'joins' => '' );
   	
		if (isset($params['attribute'])&&isset($params['menu'])):
			$filterAttributeID = $params['attribute'];
			$filterText        = $params['menu'];
		else:
			return $result;
		endif;		

		$filterAttributeIDList = array();
		if (is_array($filterAttributeID)):						
			foreach($filterAttributeID as $attribute):
				if(is_numeric($attribute))
					$filterAttributeIDList[] = $attribute;
				else 
					$filterAttributeIDList[] = eZContentObjectTreeNode::classAttributeIDByIdentifier($attribute);
			endforeach;
		elseif (!is_numeric($filterAttributeID)):		
			$filterAttributeIDList[] = eZContentObjectTreeNode::classAttributeIDByIdentifier($filterAttributeID);			
		endif;
		$filter = implode($filterAttributeIDList,",");
				
		if(is_array($filterText)):			
			$menuFilter = "RLIKE '".implode($filterText,"|")."'";
		else:			
			$menuFilter = "LIKE '%".$filterText."%'";
		endif;		

		$filterSQL 			= array();
		$filterSQL['from']  = ", ezcontentobject_attribute ezco_a ";
		$filterSQL['where'] = "( ezco_a.contentobject_id = ezcontentobject.id AND
                      			 ezco_a.contentclassattribute_id IN ($filter) AND
                      			 ezco_a.version = ezcontentobject_name.content_version AND
                      			 ezco_a.language_code = ezcontentobject_name.real_translation AND
                      			 ezco_a.data_text $menuFilter ) AND ";
         
		return array('tables' => $filterSQL['from'],'joins' => $filterSQL['where'],'columns'=>'');    		
    }
}

?>
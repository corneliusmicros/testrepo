<?php
 
class navigationFunctionCollection
{
	function navigationFunctionCollection()
	{ }
	
	function fetchList( $navigation_group, $parent_node_id, $depth, $main_node_only, $sort_by )
 	{	
		$ini 			= eZINI::instance("navfilter.ini");
 		$attributes     = $ini->variable("NavigationFilter", "Attributes");
 		$extendedParams = array("attribute" => $attributes , "menu" => $navigation_group);
 		$extended       = array("id" => "navFilter" , "params" => $extendedParams); 		
 		$fetchParams    = array("ExtendedAttributeFilter" => $extended,
 						 		"Depth"  				  => $depth,
 								"MainNodeOnly"			  => $main_node_only,
                         		"SortBy" 				  => $sort_by );
 		
 		$result = eZContentObjectTreeNode::subTreeByNodeID( $fetchParams, $parent_node_id );
		return array('result' => $result);
    }	
}
 
?>
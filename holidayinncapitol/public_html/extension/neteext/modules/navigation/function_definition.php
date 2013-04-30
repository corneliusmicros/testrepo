<?php

$FunctionList = array();
$FunctionList['list'] = array( 
							'name' 		  => 'list',
                           	'call_method' => array( 'class'  => 'navigationFunctionCollection', 
                          							'method' => 'fetchList' ),
							'parameters'  => array( 
												array( 'name'	  => 'navigation_group',
                           							   'type' 	  => 'mixed',
                           							   'required' => true ),
												array( 'name'     => 'parent_node_id',
                                                       'type' 	  => 'integer',
                                                       'required' => false,
													   'default'  => 2),
												array( 'name' 	  => 'depth',
                                                       'type' 	  => 'integer',
                                                       'required' => false,
													   'default'  => 1),
												array( 'name'     => 'main_node_only',
                                                       'type' 	  => 'bool',
                                                       'required' => false,
                                                       'default'  => false ),															
                                                array( 'name'     => 'sort_by',
                                                       'type' 	  => 'array',
                                                       'required' => false,
                                                       'default'  => array( 'priority', true ) ) ) );
?>
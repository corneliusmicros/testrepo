<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl
// Timestamp: 1315480051 (Thu Sep 8 6:07:31 CDT 2011)
$oldSetArray_96bef9f8beb510822e5dc8be9a2bc04b = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/plain_site/cache/template/compiled/common.php' );

$node = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "node", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["node"] : null;
if ( is_object( $node ) )
$object = $node->attribute( 'object' );
if ( isset( $object ) && is_object( $object ) )
$nod_96bef9f8beb510822e5dc8be9a2bc04b = $object->attribute( 'data_map' );
else
$nod_96bef9f8beb510822e5dc8be9a2bc04b = false;
unset( $node, $object );

if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '0';
$blockText = $text;
$vars[$rootNamespace]['cache_ttl'] = $blockText;
unset( $blockText );

$text = array_pop( $textStack );
$text .= '	';
// def $maplocations
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => 147,
    'sort_by' => array(),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "category" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'maplocations', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'maplocations' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 57,
  ),
  1 => 
  array (
    0 => 2,
    1 => 143,
    2 => 200,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'maplocations', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'maplocations', $var, $rootNamespace );
}

$text .= '

<script type="text/javascript" src="http://dev.tigglobal.com/neteMapApi.js"></script> 

	 <script type="text/javascript">
		<!--
		var map;
		var newpoints = new Array();
		
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != \'function\'){
				window.onload = func
			} else {
				window.onload = function() {
					oldonload();
					func();
				}
			}
		}
		
		addLoadEvent(loadMap);
		addLoadEvent(addPoints);
		
		function loadMap() {
			map = new GMap2(document.getElementById("map1"));
			map.addControl(new GLargeMapControl3D());
			
			//map.addControl(new GLargeMapControl());
			//map.addControl(new GMapTypeControl());
			
			map.enableScrollWheelZoom();
			map.addControl(new GMapTypeControl());
			
			map.setCenter(new GLatLng(';
unset( $var );
$var = $nod_96bef9f8beb510822e5dc8be9a2bc04b;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['latitude'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['latitude'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['latitude'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', ';
unset( $var );
$var = $nod_96bef9f8beb510822e5dc8be9a2bc04b;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['longitude'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['longitude'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['longitude'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '), ';
unset( $var );
$var = $nod_96bef9f8beb510822e5dc8be9a2bc04b;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['zoom_level'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['zoom_level'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['zoom_level'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '); 
		}
		function addPoints() {
		
			choice = \'all\';
			 																			 
			newpoints[0] = new Array(';
unset( $var );
$var = $nod_96bef9f8beb510822e5dc8be9a2bc04b;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['latitude'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['latitude'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['latitude'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', ';
unset( $var );
$var = $nod_96bef9f8beb510822e5dc8be9a2bc04b;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['longitude'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['longitude'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['longitude'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', 1, \'';
unset( $var );
$var = $nod_96bef9f8beb510822e5dc8be9a2bc04b;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['hotel_name'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['hotel_name'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['hotel_name'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\', \'';
unset( $var );
$var = $nod_96bef9f8beb510822e5dc8be9a2bc04b;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['hotel_address'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['hotel_address'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['hotel_address'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\', \'main\'); 
			';
$vars[$currentNamespace]['counter'] = 1;
$text .= '			';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_2 ) ) $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_2 = array();
$fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_2[] = compact( 'fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_i_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_key_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_val_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_max_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_2', 'fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_2' );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2 );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2 );
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocations'] : null;
if (! isset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2 ) ) $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2 = NULL;
while ( is_object( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2 ) and method_exists( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2, 'templateValue' ) )
    $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2->templateValue();

$fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_2 = is_array( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2 ) ? array_keys( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2 ) : array();
$fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2 = count( $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_2 );
$fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_2 = 0;
$fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2 = 0;
$fe_max_ecb0013a844c095e9e9f0d40bd1cd830_2 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2;
$fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_2 = false;
if ( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2 < 0 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2 >= $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2 )
{
    $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2 = ( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2 < 0 ) ? 0 : $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2;
    if ( $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified. Array count: $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2");   
}
}
if ( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_2 < 0 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2 + $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_2 > $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2 )
{
    if ( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_2");
    $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_2 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2;
}
if ( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_2 )
{
    $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_2 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2 - 1 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2;
    $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_2  = 0;
}
else
{
    $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_2 = $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2;
    $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_2  = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2 - 1;
}
// foreach
for ( $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_2 = $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_2; $fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_2 < $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_2 && ( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_2 ? $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_2 >= $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_2 : $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_2 <= $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_2 ); $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_2 ? $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_2-- : $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_2++ )
{
$fe_key_ecb0013a844c095e9e9f0d40bd1cd830_2 = $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_2[$fe_i_ecb0013a844c095e9e9f0d40bd1cd830_2];
$fe_val_ecb0013a844c095e9e9f0d40bd1cd830_2 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2[$fe_key_ecb0013a844c095e9e9f0d40bd1cd830_2];
$vars[$rootNamespace]['maplocationspoints'] = $fe_val_ecb0013a844c095e9e9f0d40bd1cd830_2;
$text .= '					';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocationspoints', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocationspoints'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_map' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'location' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '					';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_1 ) ) $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_1 = array();
$fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_1[] = compact( 'fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_i_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_key_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_val_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_max_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_1', 'fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_1' );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 );
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocationspoints', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocationspoints'] : null;
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_11 = compiledFetchAttribute( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1, 'data_map' );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 );
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_11;
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_11 = compiledFetchAttribute( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1, 'location' );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 );
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_11;
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_11 = compiledFetchAttribute( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1, 'content' );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 );
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_11;
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_11 = compiledFetchAttribute( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1, 'relation_list' );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 );
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_11;
if (! isset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 ) ) $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 = NULL;
while ( is_object( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 ) and method_exists( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1, 'templateValue' ) )
    $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1->templateValue();

$fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_1 = is_array( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 ) ? array_keys( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 ) : array();
$fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1 = count( $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_1 );
$fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_1 = 0;
$fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1 = 0;
$fe_max_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1;
$fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_1 = false;
if ( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1 < 0 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1 >= $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1 )
{
    $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1 = ( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1 < 0 ) ? 0 : $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1;
    if ( $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified. Array count: $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1");   
}
}
if ( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_1 < 0 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1 + $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_1 > $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1 )
{
    if ( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_1");
    $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1;
}
if ( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_1 )
{
    $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1 - 1 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1;
    $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_1  = 0;
}
else
{
    $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1;
    $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_1  = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1 - 1;
}
// foreach
for ( $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_1; $fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_1 < $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_1 && ( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_1 ? $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_1 >= $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_1 : $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_1 <= $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_1 ); $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_1 ? $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_1-- : $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_1++ )
{
$fe_key_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_1[$fe_i_ecb0013a844c095e9e9f0d40bd1cd830_1];
$fe_val_ecb0013a844c095e9e9f0d40bd1cd830_1 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1[$fe_key_ecb0013a844c095e9e9f0d40bd1cd830_1];
$vars[$rootNamespace]['related'] = $fe_val_ecb0013a844c095e9e9f0d40bd1cd830_1;
$text .= '						';
// def $mapnode
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'mapnode', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'mapnode' is already defined.", array (
  0 => 
  array (
    0 => 48,
    1 => 6,
    2 => 1673,
  ),
  1 => 
  array (
    0 => 48,
    1 => 84,
    2 => 1751,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'mapnode', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'mapnode', $var, $rootNamespace );
}

$text .= '						';
// def $maplocationsname
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocationspoints', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocationspoints'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'maplocationsname', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'maplocationsname' is already defined.", array (
  0 => 
  array (
    0 => 49,
    1 => 6,
    2 => 1760,
  ),
  1 => 
  array (
    0 => 49,
    1 => 76,
    2 => 1830,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'maplocationsname', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'maplocationsname', $var, $rootNamespace );
}

// def $maplocname
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocationsname', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocationsname'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
	$var1 = explode( "'", $var2 );
}
else if ( is_array( $var2 ) )
{
	$var1 = array( array_slice( $var2, 0, "'" ), array_slice( $var2, "'" ) );
}
else
{
	$var1 = null;
}
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( "", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'maplocname', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'maplocname' is already defined.", array (
  0 => 
  array (
    0 => 49,
    1 => 76,
    2 => 1832,
  ),
  1 => 
  array (
    0 => 49,
    1 => 135,
    2 => 1891,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'maplocname', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'maplocname', $var, $rootNamespace );
}

$text .= '
						';
// def $map_location_name
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'mapnode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['mapnode'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'location_name' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'map_location_name', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'map_location_name' is already defined.", array (
  0 => 
  array (
    0 => 51,
    1 => 6,
    2 => 1901,
  ),
  1 => 
  array (
    0 => 51,
    1 => 68,
    2 => 1963,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'map_location_name', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'map_location_name', $var, $rootNamespace );
}

// def $locationname
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'map_location_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['map_location_name'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
	$var1 = explode( "'", $var2 );
}
else if ( is_array( $var2 ) )
{
	$var1 = array( array_slice( $var2, 0, "'" ), array_slice( $var2, "'" ) );
}
else
{
	$var1 = null;
}
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( "", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locationname', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locationname' is already defined.", array (
  0 => 
  array (
    0 => 51,
    1 => 68,
    2 => 1965,
  ),
  1 => 
  array (
    0 => 51,
    1 => 130,
    2 => 2027,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'locationname', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locationname', $var, $rootNamespace );
}

$text .= '						
							
							newpoints[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '] = new Array(';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'mapnode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['mapnode'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'latitude' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'mapnode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['mapnode'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'longitude' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocationspoints', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocationspoints'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'bubble_color' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 2.000000;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ', \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locationname', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locationname'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\', \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'mapnode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['mapnode'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'address' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\', \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocname', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocname'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'); 
						';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'counter', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['counter'] = $var;
    unset( $var );
}
$text .= '					';
$fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_1 ) ) extract( array_pop( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_1 ) );

else
{

unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_key_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_val_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_1 );

unset( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_1 );

}

// foreach ends
$text .= '					';
}
unset( $if_cond );
// if ends

$text .= '			';
$fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_2 ) ) extract( array_pop( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_2 ) );

else
{

unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_key_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_val_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_2 );

unset( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_2 );

}

// foreach ends
$text .= '			';
unset( $vars[$currentNamespace]['counter'] );
$text .= '			
			
			
							
			for(var i = 0; i < newpoints.length; i++) {
				var point = new GLatLng(newpoints[i][0],newpoints[i][1]);
		
		 		if (choice != \'all\') {
					if (choice == newpoints[i][5] || newpoints[i][5] == \'main\') {
						var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
						map.addOverlay(oMarker);
					}
					else {
						var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
						map.removeOverlay(oMarker);
					}
				}
				else {
					var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
					map.addOverlay(oMarker);
				}
			}
		}
		
		function createMarker(point, num, toName, toAddress) {
			  
			var cicons = new Array("image_1.png","mm_20_green.png","mm_20_blue.png", "mm_20_purple.png","mm_20_brown.png","mm_20_yellow.png");
			var icon = new GIcon();
			var iconString = cicons[num-1];
			
			icon.image = "/extension/neteext/design/holidayinncapitol/images/gmap/"+iconString;
			icon.shadow = "/design/holidayinncapitol/mm_20_shadow.png"
			if(icon.image == "/extension/neteext/design/holidayinncapitol/images/gmap/image_1.png")
				icon.iconSize = new GSize(23,43);
			else
			icon.iconSize = new GSize(17,25);
			icon.iconAnchor = new GPoint(17,25);
			icon.infoWindowAnchor = new GPoint(5,1);
		
			var marker = new GMarker(point, icon);
			if (point =="(38.8859263, -77.019509)"){	
				map.addOverlay(marker)
				marker.openInfoWindowHtml("<div id=\'popup\' style=\'width:300px;Height:100px;\'><form action=\'http://maps.google.com/maps\' method=\'get\' target=\'_blank\'><input type=\'hidden\' name=\'saddr\' id=\'saddr\' value=\'\' /><input type=\'hidden\' name=\'daddr\' id=\'daddr\' value=\'" + toAddress + "\' /><strong>" + toName + "</strong><br>" + toAddress + "<br /><br /><center><input type=\'submit\' value=\'Directions\' /></center></form></div>");
			}
			GEvent.addListener(marker, "click", function() {

				if (point =="(38.8859263, -77.019509)"){	
					map.addOverlay(marker)
					marker.openInfoWindowHtml("<div id=\'popup\' style=\'width:300px;Height:100px;\'><form action=\'http://maps.google.com/maps\' method=\'get\' target=\'_blank\'><input type=\'hidden\' name=\'saddr\' id=\'saddr\' value=\'\' /><input type=\'hidden\' name=\'daddr\' id=\'daddr\' value=\'" + toAddress + "\' /><strong>" + toName + "</strong><br>" + toAddress + "<br /><br /><center><input type=\'submit\' value=\'Directions\' /></center></form></div>");
				}else{
				
					marker.openInfoWindowHtml("<div id=\'popup\' style=\'width:300px;Height:100px;\'><form action=\'http://maps.google.com/maps\' method=\'get\' target=\'_blank\'><input type=\'hidden\' name=\'saddr\' id=\'saddr\' value=\'';
unset( $var );
$var = $nod_96bef9f8beb510822e5dc8be9a2bc04b;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['hotel_address'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['hotel_address'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['hotel_address'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\' /><input type=\'hidden\' name=\'daddr\' id=\'daddr\' value=\'" + toAddress + "\' /><strong>" + toName + "</strong><br>" + toAddress + "<br /><br /><center><input type=\'submit\' value=\'Directions\' /></center></form></div>");
				}
			});
				return marker;
		}
		
		function surfto(choice) {
			map.clearOverlays();
		
			for(var i = 0; i < newpoints.length; i++) {
		 		var point = new GLatLng(newpoints[i][0],newpoints[i][1]);
				if (choice != \'all\') {
					if (choice == newpoints[i][5] || newpoints[i][5] == \'main\') {
						var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
						map.addOverlay(oMarker);
					}
					else {
						var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
						map.removeOverlay(oMarker);
					}
				}
				else {
					var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
					map.addOverlay(oMarker);
				}
			}
		}
		
		//-->
		</script>
	<style>
		div#map1{
			border:solid #75A76D 1px;
			height: 405px;
		}
		div#popup {
		/*background:#82BD7A;
		border:1px solid #A3B2C9;*/
		background:#75A76D;
		border:1px solid #75A76D;
		margin:0px;
		padding:7px;		
		font-family: verdana, Geneva, Arial, Helvetica, sans-serif;
		color:#ffffff;
		font-size: 12px;
		font-weight: normal;
		text-decoration: none;
		}
		select.map{ width:110px;}
	</style>

<div class="hd-text">';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'text_header',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 162,
    1 => 21,
    2 => 6495,
  ),
  1 => 
  array (
    0 => 162,
    1 => 83,
    2 => 6557,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</div>
<div id="map1"></div>
<div id=\'popup\'>
	Select Overlay Type
	<SELECT NAME="dest" onChange="surfto(this.value)" class="map">
		<OPTION VALUE="all">Show all</OPTION>
		<OPTION VALUE="hotel">Hotel Location</OPTION>
		';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_3 ) ) $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_3 = array();
$fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_3[] = compact( 'fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_i_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_key_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_val_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_max_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_3', 'fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_3' );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3 );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3 );
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocations'] : null;
if (! isset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3 ) ) $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3 = NULL;
while ( is_object( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3 ) and method_exists( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3, 'templateValue' ) )
    $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3->templateValue();

$fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_3 = is_array( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3 ) ? array_keys( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3 ) : array();
$fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3 = count( $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_3 );
$fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_3 = 0;
$fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3 = 0;
$fe_max_ecb0013a844c095e9e9f0d40bd1cd830_3 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3;
$fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_3 = false;
if ( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3 < 0 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3 >= $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3 )
{
    $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3 = ( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3 < 0 ) ? 0 : $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3;
    if ( $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified. Array count: $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3");   
}
}
if ( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_3 < 0 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3 + $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_3 > $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3 )
{
    if ( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_3");
    $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_3 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3;
}
if ( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_3 )
{
    $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_3 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3 - 1 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3;
    $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_3  = 0;
}
else
{
    $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_3 = $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3;
    $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_3  = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3 - 1;
}
// foreach
for ( $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_3 = $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_3; $fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_3 < $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_3 && ( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_3 ? $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_3 >= $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_3 : $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_3 <= $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_3 ); $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_3 ? $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_3-- : $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_3++ )
{
$fe_key_ecb0013a844c095e9e9f0d40bd1cd830_3 = $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_3[$fe_i_ecb0013a844c095e9e9f0d40bd1cd830_3];
$fe_val_ecb0013a844c095e9e9f0d40bd1cd830_3 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3[$fe_key_ecb0013a844c095e9e9f0d40bd1cd830_3];
$vars[$rootNamespace]['maplocationspoints'] = $fe_val_ecb0013a844c095e9e9f0d40bd1cd830_3;
$text .= '		';
// def $maplocationsname
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocationspoints', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocationspoints'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'maplocationsname', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'maplocationsname' is already defined.", array (
  0 => 
  array (
    0 => 170,
    1 => 2,
    2 => 6829,
  ),
  1 => 
  array (
    0 => 170,
    1 => 72,
    2 => 6899,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'maplocationsname', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'maplocationsname', $var, $rootNamespace );
}

// def $maplocname
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocationsname', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocationsname'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
	$var1 = explode( "'", $var2 );
}
else if ( is_array( $var2 ) )
{
	$var1 = array( array_slice( $var2, 0, "'" ), array_slice( $var2, "'" ) );
}
else
{
	$var1 = null;
}
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( "", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'maplocname', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'maplocname' is already defined.", array (
  0 => 
  array (
    0 => 170,
    1 => 72,
    2 => 6901,
  ),
  1 => 
  array (
    0 => 170,
    1 => 131,
    2 => 6960,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'maplocname', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'maplocname', $var, $rootNamespace );
}

$text .= '		<OPTION VALUE="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocname', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocname'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocname', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocname'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</OPTION>	
		';
$fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_3 ) ) extract( array_pop( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_3 ) );

else
{

unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_key_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_val_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_3 );

unset( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_3 );

}

// foreach ends
$text .= '	</SELECT><br /><br />	
	';
// def $imgArrs
if ( $tpl->hasVariable( 'imgArrs', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'imgArrs' is already defined.", array (
  0 => 
  array (
    0 => 174,
    1 => 1,
    2 => 7057,
  ),
  1 => 
  array (
    0 => 174,
    1 => 128,
    2 => 7184,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'imgArrs', array (
  0 => 'image_1.png',
  1 => 'mm_20_green.png',
  2 => 'mm_20_blue.png',
  3 => 'mm_20_purple.png',
  4 => 'mm_20_brown.png',
  5 => 'mm_20_yellow.png',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'imgArrs', array (
  0 => 'image_1.png',
  1 => 'mm_20_green.png',
  2 => 'mm_20_blue.png',
  3 => 'mm_20_purple.png',
  4 => 'mm_20_brown.png',
  5 => 'mm_20_yellow.png',
), $rootNamespace );
}

$text .= '	';
$vars[$currentNamespace]['counter'] = 1;
$text .= '		';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_4 ) ) $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_4 = array();
$fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_4[] = compact( 'fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_i_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_key_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_val_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_max_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_4', 'fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_4' );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4 );
unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4 );
$fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocations'] : null;
if (! isset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4 ) ) $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4 = NULL;
while ( is_object( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4 ) and method_exists( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4, 'templateValue' ) )
    $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4->templateValue();

$fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_4 = is_array( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4 ) ? array_keys( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4 ) : array();
$fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4 = count( $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_4 );
$fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_4 = 0;
$fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4 = 0;
$fe_max_ecb0013a844c095e9e9f0d40bd1cd830_4 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4;
$fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_4 = false;
if ( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4 < 0 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4 >= $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4 )
{
    $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4 = ( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4 < 0 ) ? 0 : $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4;
    if ( $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified. Array count: $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4");   
}
}
if ( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_4 < 0 || $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4 + $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_4 > $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4 )
{
    if ( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_4");
    $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_4 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4;
}
if ( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_4 )
{
    $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_4 = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4 - 1 - $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4;
    $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_4  = 0;
}
else
{
    $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_4 = $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4;
    $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_4  = $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4 - 1;
}
// foreach
for ( $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_4 = $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_4; $fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_4 < $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_4 && ( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_4 ? $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_4 >= $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_4 : $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_4 <= $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_4 ); $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_4 ? $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_4-- : $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_4++ )
{
$fe_key_ecb0013a844c095e9e9f0d40bd1cd830_4 = $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_4[$fe_i_ecb0013a844c095e9e9f0d40bd1cd830_4];
$fe_val_ecb0013a844c095e9e9f0d40bd1cd830_4 = $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4[$fe_key_ecb0013a844c095e9e9f0d40bd1cd830_4];
$vars[$rootNamespace]['maplocationspoints'] = $fe_val_ecb0013a844c095e9e9f0d40bd1cd830_4;
$text .= '			';
// def $mapImg
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocationspoints', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocationspoints'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'bubble_color' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1.000000;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'mapImg', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'mapImg' is already defined.", array (
  0 => 
  array (
    0 => 177,
    1 => 3,
    2 => 7256,
  ),
  1 => 
  array (
    0 => 177,
    1 => 85,
    2 => 7338,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'mapImg', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'mapImg', $var, $rootNamespace );
}

$text .= '			';
// def $imgPath
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'imgArrs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['imgArrs'] : null;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'mapImg', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['mapImg'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( 'images/gmap/' . $var2 );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'imgPath', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'imgPath' is already defined.", array (
  0 => 
  array (
    0 => 178,
    1 => 3,
    2 => 7344,
  ),
  1 => 
  array (
    0 => 178,
    1 => 59,
    2 => 7400,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'imgPath', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'imgPath', $var, $rootNamespace );
}

$text .= '			';
// def $maplocationsname
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocationspoints', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocationspoints'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'maplocationsname', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'maplocationsname' is already defined.", array (
  0 => 
  array (
    0 => 179,
    1 => 3,
    2 => 7406,
  ),
  1 => 
  array (
    0 => 179,
    1 => 73,
    2 => 7476,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'maplocationsname', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'maplocationsname', $var, $rootNamespace );
}

// def $maplocname
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocationsname', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocationsname'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
	$var1 = explode( "'", $var2 );
}
else if ( is_array( $var2 ) )
{
	$var1 = array( array_slice( $var2, 0, "'" ), array_slice( $var2, "'" ) );
}
else
{
	$var1 = null;
}
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( "", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'maplocname', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'maplocname' is already defined.", array (
  0 => 
  array (
    0 => 179,
    1 => 73,
    2 => 7478,
  ),
  1 => 
  array (
    0 => 179,
    1 => 132,
    2 => 7537,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
) );
    $tpl->setVariable( 'maplocname', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'maplocname', $var, $rootNamespace );
}

$text .= '				<img src=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'imgPath', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['imgPath'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1 = eZURLOperator::eZDesign( $tpl, $var1, "ezdesign" );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '> ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'maplocname', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['maplocname'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
			';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'counter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['counter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'counter', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['counter'] = $var;
    unset( $var );
}
$text .= '		';
$fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_4 ) ) extract( array_pop( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_4 ) );

else
{

unset( $fe_array_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_array_keys_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_n_items_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_n_items_processed_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_i_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_key_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_val_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_offset_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_max_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_reverse_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_first_val_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_last_val_ecb0013a844c095e9e9f0d40bd1cd830_4 );

unset( $fe_variable_stack_ecb0013a844c095e9e9f0d40bd1cd830_4 );

}

// foreach ends
$text .= '	';
unset( $vars[$currentNamespace]['counter'] );
$text .= '	
	<br>
</div>';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'body',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 186,
    1 => 0,
    2 => 7653,
  ),
  1 => 
  array (
    0 => 186,
    1 => 55,
    2 => 7708,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/override/templates/full/full_gmap.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );


$setArray = $oldSetArray_96bef9f8beb510822e5dc8be9a2bc04b;
$tpl->Level--;
?>

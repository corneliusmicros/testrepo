<?php
// URI:       extension/neteext/design/holidayinncapitol/templates/parts/splash.tpl
// Filename:  extension/neteext/design/holidayinncapitol/templates/parts/splash.tpl
// Timestamp: 1332330126 (Wed Mar 21 6:42:06 CDT 2012)
$oldSetArray_e8bdf16efc798975c859bd4019a46fc4 = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 2 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// def $splash_node
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => "238",
    'sort_by' => array(),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => 1,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "31" ),
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
if ( $tpl->hasVariable( 'splash_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'splash_node' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 36,
  ),
  1 => 
  array (
    0 => 5,
    1 => 48,
    2 => 226,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/parts/splash.tpl',
) );
    $tpl->setVariable( 'splash_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'splash_node', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'splash_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['splash_node'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="shadow"></div>
<div id="splash">
	<img id="splash_bg" src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'splash_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['splash_node'] : null;
$var1 = compiledFetchAttribute( $var, '0' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'image' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'original' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'full_path' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" alt="" title=""/>
	<div class="logo_bg">
    <div id="logo"></div>
  </div>
	<div id="splash_close">Close <span>X</span></div>

	<div id="banner">
		<div id="banner_title">
			';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'splash_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['splash_node'] : null;
$var1 = compiledFetchAttribute( $var, '0' );
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
		</div>
		<div id="main">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'splash_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['splash_node'] : null;
$var1 = compiledFetchAttribute( $var, '0' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'caption2' );
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

$text .= '</div>
		<a class="button" id="book-now" href=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'splash_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['splash_node'] : null;
$var1 = compiledFetchAttribute( $var, '0' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'button_link' );
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

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'splash_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['splash_node'] : null;
$var1 = compiledFetchAttribute( $var, '0' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'button_link' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_text' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>

		<div id="bottom">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'splash_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['splash_node'] : null;
$var1 = compiledFetchAttribute( $var, '0' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'caption' );
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

$text .= '</div>
	</div>

	<script language="javascript">
		$(document).ready(function() {			$(\'#splash_close\').click(function() {				$(\'#shadow, #splash\').fadeOut(\'fast\');
				return false;
			});
		});
	</script>
</div>';
}
unset( $if_cond );
// if ends

// undef $splash_node
$tpl->unsetLocalVariable( 'splash_node', $rootNamespace );

}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_e8bdf16efc798975c859bd4019a46fc4;
$tpl->Level--;
?>

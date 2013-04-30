<?php
// URI:       extension/neteext/design/holidayinncapitol/templates/includes/omniture.tpl
// Filename:  extension/neteext/design/holidayinncapitol/templates/includes/omniture.tpl
// Timestamp: 1315480051 (Thu Sep 8 6:07:31 CDT 2011)
$oldSetArray_c5c47fd3125ca8764f79b965cf4814ef = isset( $setArray ) ? $setArray : array();
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

// def $pathArray
if ( $tpl->hasVariable( 'pathArray', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pathArray' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 22,
    2 => 23,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/omniture.tpl',
) );
    $tpl->setVariable( 'pathArray', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pathArray', array (
), $rootNamespace );
}

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_0a8718b0bcccbb71dae29bcef2194bed_3 ) ) $fe_variable_stack_0a8718b0bcccbb71dae29bcef2194bed_3 = array();
$fe_variable_stack_0a8718b0bcccbb71dae29bcef2194bed_3[] = compact( 'fe_array_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_array_keys_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_n_items_processed_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_i_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_key_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_val_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_max_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_reverse_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_first_val_0a8718b0bcccbb71dae29bcef2194bed_3', 'fe_last_val_0a8718b0bcccbb71dae29bcef2194bed_3' );
unset( $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 );
unset( $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 );
$fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$fe_array_0a8718b0bcccbb71dae29bcef2194bed_31 = compiledFetchAttribute( $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3, 'path' );
unset( $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 );
$fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 = $fe_array_0a8718b0bcccbb71dae29bcef2194bed_31;
if (! isset( $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 ) ) $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 = NULL;
while ( is_object( $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 ) and method_exists( $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3, 'templateValue' ) )
    $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 = $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3->templateValue();

$fe_array_keys_0a8718b0bcccbb71dae29bcef2194bed_3 = is_array( $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 ) ? array_keys( $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 ) : array();
$fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3 = count( $fe_array_keys_0a8718b0bcccbb71dae29bcef2194bed_3 );
$fe_n_items_processed_0a8718b0bcccbb71dae29bcef2194bed_3 = 0;
$fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3 = 0;
$fe_max_0a8718b0bcccbb71dae29bcef2194bed_3 = $fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3 - $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3;
$fe_reverse_0a8718b0bcccbb71dae29bcef2194bed_3 = false;
if ( $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3 < 0 || $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3 >= $fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3 )
{
    $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3 = ( $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3 < 0 ) ? 0 : $fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3;
    if ( $fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3 || $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified. Array count: $fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3");   
}
}
if ( $fe_max_0a8718b0bcccbb71dae29bcef2194bed_3 < 0 || $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3 + $fe_max_0a8718b0bcccbb71dae29bcef2194bed_3 > $fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3 )
{
    if ( $fe_max_0a8718b0bcccbb71dae29bcef2194bed_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_0a8718b0bcccbb71dae29bcef2194bed_3");
    $fe_max_0a8718b0bcccbb71dae29bcef2194bed_3 = $fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3 - $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3;
}
if ( $fe_reverse_0a8718b0bcccbb71dae29bcef2194bed_3 )
{
    $fe_first_val_0a8718b0bcccbb71dae29bcef2194bed_3 = $fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3 - 1 - $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3;
    $fe_last_val_0a8718b0bcccbb71dae29bcef2194bed_3  = 0;
}
else
{
    $fe_first_val_0a8718b0bcccbb71dae29bcef2194bed_3 = $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3;
    $fe_last_val_0a8718b0bcccbb71dae29bcef2194bed_3  = $fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3 - 1;
}
// foreach
for ( $fe_i_0a8718b0bcccbb71dae29bcef2194bed_3 = $fe_first_val_0a8718b0bcccbb71dae29bcef2194bed_3; $fe_n_items_processed_0a8718b0bcccbb71dae29bcef2194bed_3 < $fe_max_0a8718b0bcccbb71dae29bcef2194bed_3 && ( $fe_reverse_0a8718b0bcccbb71dae29bcef2194bed_3 ? $fe_i_0a8718b0bcccbb71dae29bcef2194bed_3 >= $fe_last_val_0a8718b0bcccbb71dae29bcef2194bed_3 : $fe_i_0a8718b0bcccbb71dae29bcef2194bed_3 <= $fe_last_val_0a8718b0bcccbb71dae29bcef2194bed_3 ); $fe_reverse_0a8718b0bcccbb71dae29bcef2194bed_3 ? $fe_i_0a8718b0bcccbb71dae29bcef2194bed_3-- : $fe_i_0a8718b0bcccbb71dae29bcef2194bed_3++ )
{
$fe_key_0a8718b0bcccbb71dae29bcef2194bed_3 = $fe_array_keys_0a8718b0bcccbb71dae29bcef2194bed_3[$fe_i_0a8718b0bcccbb71dae29bcef2194bed_3];
$fe_val_0a8718b0bcccbb71dae29bcef2194bed_3 = $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3[$fe_key_0a8718b0bcccbb71dae29bcef2194bed_3];
$vars[$rootNamespace]['pathItem'] = $fe_val_0a8718b0bcccbb71dae29bcef2194bed_3;
$text .= '	';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pathItem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pathItem'] : null;
$var2 = compiledFetchAttribute( $var1, 'text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pathArray', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pathArray'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'pathArray', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['pathArray'] = $var;
    unset( $var );
}
$fe_n_items_processed_0a8718b0bcccbb71dae29bcef2194bed_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_0a8718b0bcccbb71dae29bcef2194bed_3 ) ) extract( array_pop( $fe_variable_stack_0a8718b0bcccbb71dae29bcef2194bed_3 ) );

else
{

unset( $fe_array_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_array_keys_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_n_items_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_n_items_processed_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_i_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_key_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_val_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_offset_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_max_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_reverse_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_first_val_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_last_val_0a8718b0bcccbb71dae29bcef2194bed_3 );

unset( $fe_variable_stack_0a8718b0bcccbb71dae29bcef2194bed_3 );

}

// foreach ends
$text .= '	

<script type="text/javascript" language="JavaScript">var gpgName="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pathArray', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pathArray'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " - ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '";</script>
 <script src="/extension/neteext/design/holidayinncapitol/javascript/s-code.js" type="text/javascript" language="JavaScript"></script>';
// undef all
$tpl->unsetLocalVariables();
$text .= '
<script type="text/javascript"> 
// Fix Omniture conflict 
(function() { 
   var old = s.ot; 
   s.ot = function(el) { 
       return el.tagUrn ? \'\' : old(el); 
   }; 

})(); 

</script>
';

$setArray = $oldSetArray_c5c47fd3125ca8764f79b965cf4814ef;
$tpl->Level--;
?>

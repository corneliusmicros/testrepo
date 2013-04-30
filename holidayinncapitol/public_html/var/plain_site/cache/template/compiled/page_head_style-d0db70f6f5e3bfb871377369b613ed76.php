<?php
// URI:       extension/neteext/design/holidayinncapitol/templates/page_head_style.tpl
// Filename:  extension/neteext/design/holidayinncapitol/templates/page_head_style.tpl
// Timestamp: 1315480051 (Thu Sep 8 6:07:31 CDT 2011)
$oldSetArray_169fd0eec555893857f0653719a2a817 = isset( $setArray ) ? $setArray : array();
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

$text .= '<style type="text/css">
    @import url(/design/standard/stylesheets/debug.css);
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_1 ) ) $fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_1 = array();
$fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_1[] = compact( 'fe_array_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_array_keys_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_n_items_processed_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_i_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_key_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_val_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_offset_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_max_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_reverse_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_first_val_ae5c903fbbca344f6bc9003031808f2f_1', 'fe_last_val_ae5c903fbbca344f6bc9003031808f2f_1' );
$fe_array_ae5c903fbbca344f6bc9003031808f2f_1 = array (
  0 => 'style.css',
  1 => 'fonts.css',
  2 => 'menu.css',
  3 => 'prettyPhoto.css',
  4 => 'calendar-css/jquery-ui.css',
  5 => 'form.css',
  6 => 'ezmultiupload.css',
);
$fe_array_keys_ae5c903fbbca344f6bc9003031808f2f_1 = is_array( $fe_array_ae5c903fbbca344f6bc9003031808f2f_1 ) ? array_keys( $fe_array_ae5c903fbbca344f6bc9003031808f2f_1 ) : array();
$fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1 = count( $fe_array_keys_ae5c903fbbca344f6bc9003031808f2f_1 );
$fe_n_items_processed_ae5c903fbbca344f6bc9003031808f2f_1 = 0;
$fe_offset_ae5c903fbbca344f6bc9003031808f2f_1 = 0;
$fe_max_ae5c903fbbca344f6bc9003031808f2f_1 = $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1 - $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1;
$fe_reverse_ae5c903fbbca344f6bc9003031808f2f_1 = false;
if ( $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1 < 0 || $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1 >= $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1 )
{
    $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1 = ( $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1 < 0 ) ? 0 : $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1;
    if ( $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1 || $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified. Array count: $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1");   
}
}
if ( $fe_max_ae5c903fbbca344f6bc9003031808f2f_1 < 0 || $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1 + $fe_max_ae5c903fbbca344f6bc9003031808f2f_1 > $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1 )
{
    if ( $fe_max_ae5c903fbbca344f6bc9003031808f2f_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ae5c903fbbca344f6bc9003031808f2f_1");
    $fe_max_ae5c903fbbca344f6bc9003031808f2f_1 = $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1 - $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1;
}
if ( $fe_reverse_ae5c903fbbca344f6bc9003031808f2f_1 )
{
    $fe_first_val_ae5c903fbbca344f6bc9003031808f2f_1 = $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1 - 1 - $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1;
    $fe_last_val_ae5c903fbbca344f6bc9003031808f2f_1  = 0;
}
else
{
    $fe_first_val_ae5c903fbbca344f6bc9003031808f2f_1 = $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1;
    $fe_last_val_ae5c903fbbca344f6bc9003031808f2f_1  = $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1 - 1;
}
// foreach
for ( $fe_i_ae5c903fbbca344f6bc9003031808f2f_1 = $fe_first_val_ae5c903fbbca344f6bc9003031808f2f_1; $fe_n_items_processed_ae5c903fbbca344f6bc9003031808f2f_1 < $fe_max_ae5c903fbbca344f6bc9003031808f2f_1 && ( $fe_reverse_ae5c903fbbca344f6bc9003031808f2f_1 ? $fe_i_ae5c903fbbca344f6bc9003031808f2f_1 >= $fe_last_val_ae5c903fbbca344f6bc9003031808f2f_1 : $fe_i_ae5c903fbbca344f6bc9003031808f2f_1 <= $fe_last_val_ae5c903fbbca344f6bc9003031808f2f_1 ); $fe_reverse_ae5c903fbbca344f6bc9003031808f2f_1 ? $fe_i_ae5c903fbbca344f6bc9003031808f2f_1-- : $fe_i_ae5c903fbbca344f6bc9003031808f2f_1++ )
{
$fe_key_ae5c903fbbca344f6bc9003031808f2f_1 = $fe_array_keys_ae5c903fbbca344f6bc9003031808f2f_1[$fe_i_ae5c903fbbca344f6bc9003031808f2f_1];
$fe_val_ae5c903fbbca344f6bc9003031808f2f_1 = $fe_array_ae5c903fbbca344f6bc9003031808f2f_1[$fe_key_ae5c903fbbca344f6bc9003031808f2f_1];
$vars[$rootNamespace]['css_file'] = $fe_val_ae5c903fbbca344f6bc9003031808f2f_1;
$text .= '    @import url(';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'css_file', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['css_file'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'stylesheets/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ');
    ';
$fe_n_items_processed_ae5c903fbbca344f6bc9003031808f2f_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_1 ) ) extract( array_pop( $fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_1 ) );

else
{

unset( $fe_array_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_array_keys_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_n_items_processed_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_i_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_key_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_val_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_offset_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_max_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_reverse_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_first_val_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_last_val_ae5c903fbbca344f6bc9003031808f2f_1 );

unset( $fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_1 );

}

// foreach ends
$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_2 ) ) $fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_2 = array();
$fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_2[] = compact( 'fe_array_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_array_keys_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_n_items_processed_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_i_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_key_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_val_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_offset_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_max_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_reverse_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_first_val_ae5c903fbbca344f6bc9003031808f2f_2', 'fe_last_val_ae5c903fbbca344f6bc9003031808f2f_2' );
$fe_array_ae5c903fbbca344f6bc9003031808f2f_2 = array (
);
$fe_array_keys_ae5c903fbbca344f6bc9003031808f2f_2 = is_array( $fe_array_ae5c903fbbca344f6bc9003031808f2f_2 ) ? array_keys( $fe_array_ae5c903fbbca344f6bc9003031808f2f_2 ) : array();
$fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2 = count( $fe_array_keys_ae5c903fbbca344f6bc9003031808f2f_2 );
$fe_n_items_processed_ae5c903fbbca344f6bc9003031808f2f_2 = 0;
$fe_offset_ae5c903fbbca344f6bc9003031808f2f_2 = 0;
$fe_max_ae5c903fbbca344f6bc9003031808f2f_2 = $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2 - $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2;
$fe_reverse_ae5c903fbbca344f6bc9003031808f2f_2 = false;
if ( $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2 < 0 || $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2 >= $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2 )
{
    $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2 = ( $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2 < 0 ) ? 0 : $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2;
    if ( $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2 || $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified. Array count: $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2");   
}
}
if ( $fe_max_ae5c903fbbca344f6bc9003031808f2f_2 < 0 || $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2 + $fe_max_ae5c903fbbca344f6bc9003031808f2f_2 > $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2 )
{
    if ( $fe_max_ae5c903fbbca344f6bc9003031808f2f_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ae5c903fbbca344f6bc9003031808f2f_2");
    $fe_max_ae5c903fbbca344f6bc9003031808f2f_2 = $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2 - $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2;
}
if ( $fe_reverse_ae5c903fbbca344f6bc9003031808f2f_2 )
{
    $fe_first_val_ae5c903fbbca344f6bc9003031808f2f_2 = $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2 - 1 - $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2;
    $fe_last_val_ae5c903fbbca344f6bc9003031808f2f_2  = 0;
}
else
{
    $fe_first_val_ae5c903fbbca344f6bc9003031808f2f_2 = $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2;
    $fe_last_val_ae5c903fbbca344f6bc9003031808f2f_2  = $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2 - 1;
}
// foreach
for ( $fe_i_ae5c903fbbca344f6bc9003031808f2f_2 = $fe_first_val_ae5c903fbbca344f6bc9003031808f2f_2; $fe_n_items_processed_ae5c903fbbca344f6bc9003031808f2f_2 < $fe_max_ae5c903fbbca344f6bc9003031808f2f_2 && ( $fe_reverse_ae5c903fbbca344f6bc9003031808f2f_2 ? $fe_i_ae5c903fbbca344f6bc9003031808f2f_2 >= $fe_last_val_ae5c903fbbca344f6bc9003031808f2f_2 : $fe_i_ae5c903fbbca344f6bc9003031808f2f_2 <= $fe_last_val_ae5c903fbbca344f6bc9003031808f2f_2 ); $fe_reverse_ae5c903fbbca344f6bc9003031808f2f_2 ? $fe_i_ae5c903fbbca344f6bc9003031808f2f_2-- : $fe_i_ae5c903fbbca344f6bc9003031808f2f_2++ )
{
$fe_key_ae5c903fbbca344f6bc9003031808f2f_2 = $fe_array_keys_ae5c903fbbca344f6bc9003031808f2f_2[$fe_i_ae5c903fbbca344f6bc9003031808f2f_2];
$fe_val_ae5c903fbbca344f6bc9003031808f2f_2 = $fe_array_ae5c903fbbca344f6bc9003031808f2f_2[$fe_key_ae5c903fbbca344f6bc9003031808f2f_2];
$vars[$rootNamespace]['css_file'] = $fe_val_ae5c903fbbca344f6bc9003031808f2f_2;
$text .= '    @import url(';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'css_file', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['css_file'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'stylesheets/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ');
    ';
$fe_n_items_processed_ae5c903fbbca344f6bc9003031808f2f_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_2 ) ) extract( array_pop( $fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_2 ) );

else
{

unset( $fe_array_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_array_keys_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_n_items_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_n_items_processed_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_i_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_key_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_val_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_offset_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_max_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_reverse_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_first_val_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_last_val_ae5c903fbbca344f6bc9003031808f2f_2 );

unset( $fe_variable_stack_ae5c903fbbca344f6bc9003031808f2f_2 );

}

// foreach ends
$text .= '</style>
';

$setArray = $oldSetArray_169fd0eec555893857f0653719a2a817;
$tpl->Level--;
?>

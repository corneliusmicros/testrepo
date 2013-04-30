<?php
// URI:       extension/neteext/design/holidayinncapitol/templates/includes/header_image.tpl
// Filename:  extension/neteext/design/holidayinncapitol/templates/includes/header_image.tpl
// Timestamp: 1315480051 (Thu Sep 8 6:07:31 CDT 2011)
$oldSetArray_fc5908db40f281eb9181d268583f3ea1 = isset( $setArray ) ? $setArray : array();
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
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
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
$text .= '<div id="header-img">
	';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e033c08567604a9a0363ba4a4d404a6b_2 ) ) $fe_variable_stack_e033c08567604a9a0363ba4a4d404a6b_2 = array();
$fe_variable_stack_e033c08567604a9a0363ba4a4d404a6b_2[] = compact( 'fe_array_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_array_keys_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_n_items_processed_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_i_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_key_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_val_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_offset_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_max_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_reverse_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_first_val_e033c08567604a9a0363ba4a4d404a6b_2', 'fe_last_val_e033c08567604a9a0363ba4a4d404a6b_2' );
unset( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 );
unset( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 );
$fe_array_e033c08567604a9a0363ba4a4d404a6b_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_e033c08567604a9a0363ba4a4d404a6b_21 = compiledFetchAttribute( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2, 'data_map' );
unset( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 );
$fe_array_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_array_e033c08567604a9a0363ba4a4d404a6b_21;
$fe_array_e033c08567604a9a0363ba4a4d404a6b_21 = compiledFetchAttribute( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2, 'header_image_rotation' );
unset( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 );
$fe_array_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_array_e033c08567604a9a0363ba4a4d404a6b_21;
$fe_array_e033c08567604a9a0363ba4a4d404a6b_21 = compiledFetchAttribute( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2, 'content' );
unset( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 );
$fe_array_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_array_e033c08567604a9a0363ba4a4d404a6b_21;
$fe_array_e033c08567604a9a0363ba4a4d404a6b_21 = compiledFetchAttribute( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2, 'relation_list' );
unset( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 );
$fe_array_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_array_e033c08567604a9a0363ba4a4d404a6b_21;
if (! isset( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 ) ) $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 = NULL;
while ( is_object( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 ) and method_exists( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2, 'templateValue' ) )
    $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_array_e033c08567604a9a0363ba4a4d404a6b_2->templateValue();

$fe_array_keys_e033c08567604a9a0363ba4a4d404a6b_2 = is_array( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 ) ? array_keys( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 ) : array();
$fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2 = count( $fe_array_keys_e033c08567604a9a0363ba4a4d404a6b_2 );
$fe_n_items_processed_e033c08567604a9a0363ba4a4d404a6b_2 = 0;
$fe_offset_e033c08567604a9a0363ba4a4d404a6b_2 = 0;
$fe_max_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2 - $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2;
$fe_reverse_e033c08567604a9a0363ba4a4d404a6b_2 = false;
if ( $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2 < 0 || $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2 >= $fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2 )
{
    $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2 = ( $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2 < 0 ) ? 0 : $fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2;
    if ( $fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2 || $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified. Array count: $fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2");   
}
}
if ( $fe_max_e033c08567604a9a0363ba4a4d404a6b_2 < 0 || $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2 + $fe_max_e033c08567604a9a0363ba4a4d404a6b_2 > $fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2 )
{
    if ( $fe_max_e033c08567604a9a0363ba4a4d404a6b_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e033c08567604a9a0363ba4a4d404a6b_2");
    $fe_max_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2 - $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2;
}
if ( $fe_reverse_e033c08567604a9a0363ba4a4d404a6b_2 )
{
    $fe_first_val_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2 - 1 - $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2;
    $fe_last_val_e033c08567604a9a0363ba4a4d404a6b_2  = 0;
}
else
{
    $fe_first_val_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2;
    $fe_last_val_e033c08567604a9a0363ba4a4d404a6b_2  = $fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2 - 1;
}
// foreach
for ( $fe_i_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_first_val_e033c08567604a9a0363ba4a4d404a6b_2; $fe_n_items_processed_e033c08567604a9a0363ba4a4d404a6b_2 < $fe_max_e033c08567604a9a0363ba4a4d404a6b_2 && ( $fe_reverse_e033c08567604a9a0363ba4a4d404a6b_2 ? $fe_i_e033c08567604a9a0363ba4a4d404a6b_2 >= $fe_last_val_e033c08567604a9a0363ba4a4d404a6b_2 : $fe_i_e033c08567604a9a0363ba4a4d404a6b_2 <= $fe_last_val_e033c08567604a9a0363ba4a4d404a6b_2 ); $fe_reverse_e033c08567604a9a0363ba4a4d404a6b_2 ? $fe_i_e033c08567604a9a0363ba4a4d404a6b_2-- : $fe_i_e033c08567604a9a0363ba4a4d404a6b_2++ )
{
$fe_key_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_array_keys_e033c08567604a9a0363ba4a4d404a6b_2[$fe_i_e033c08567604a9a0363ba4a4d404a6b_2];
$fe_val_e033c08567604a9a0363ba4a4d404a6b_2 = $fe_array_e033c08567604a9a0363ba4a4d404a6b_2[$fe_key_e033c08567604a9a0363ba4a4d404a6b_2];
$vars[$rootNamespace]['related'] = $fe_val_e033c08567604a9a0363ba4a4d404a6b_2;
$text .= '		';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'found', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['found'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'node_id' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if( is_string( $if_cond2 ) )
{
  $if_cond1 = ( strpos( $if_cond2, $if_cond3 ) !== false );
}
else if ( is_array( $if_cond2 ) )
{
  $if_cond1 = in_array( $if_cond3, $if_cond2 );
}
else
{
$if_cond1 = false;
}unset( $if_cond2, $if_cond3 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '			';
// def $imgnode
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
if ( $tpl->hasVariable( 'imgnode', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'imgnode' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 3,
    2 => 178,
  ),
  1 => 
  array (
    0 => 5,
    1 => 81,
    2 => 256,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/header_image.tpl',
) );
    $tpl->setVariable( 'imgnode', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'imgnode', $var, $rootNamespace );
}

$text .= '				<a href="#">';
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
        2 => 'imgnode',
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
          1 => 'data_map',
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
          1 => 'image',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'image_class' => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'home_header_image',
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 6,
    1 => 16,
    2 => 275,
  ),
  1 => 
  array (
    0 => 6,
    1 => 98,
    2 => 357,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/header_image.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</a>
			';
// undef $imgnode
$tpl->unsetLocalVariable( 'imgnode', $rootNamespace );

$text .= '		';
}
unset( $if_cond );
// if ends

$text .= '	';
$fe_n_items_processed_e033c08567604a9a0363ba4a4d404a6b_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e033c08567604a9a0363ba4a4d404a6b_2 ) ) extract( array_pop( $fe_variable_stack_e033c08567604a9a0363ba4a4d404a6b_2 ) );

else
{

unset( $fe_array_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_array_keys_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_n_items_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_n_items_processed_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_i_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_key_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_val_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_offset_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_max_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_reverse_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_first_val_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_last_val_e033c08567604a9a0363ba4a4d404a6b_2 );

unset( $fe_variable_stack_e033c08567604a9a0363ba4a4d404a6b_2 );

}

// foreach ends
$text .= '</div>';
}
else
{
$text .= '<div id="header-img-int">
	';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'header_image' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '		<a href="#">';
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
          1 => 'data_map',
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
          1 => 'header_image',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'image_class' => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'internal_header_image',
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 14,
    1 => 14,
    2 => 504,
  ),
  1 => 
  array (
    0 => 14,
    1 => 104,
    2 => 594,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/header_image.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</a>		
	';
}
else
{
$text .= '		<img src="/extension/neteext/design/holidayinncapitol/images/guest-rooms-img.jpg" width="980" height="570" title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
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

$text .= '" alt="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
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

$text .= '"  />
	';
}
unset( $if_cond );
// if ends

$text .= '</div>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_fc5908db40f281eb9181d268583f3ea1;
$tpl->Level--;
?>

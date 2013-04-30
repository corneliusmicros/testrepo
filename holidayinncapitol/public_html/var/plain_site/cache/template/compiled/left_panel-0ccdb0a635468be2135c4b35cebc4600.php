<?php
// URI:       extension/neteext/design/holidayinncapitol/templates/includes/left_panel.tpl
// Filename:  extension/neteext/design/holidayinncapitol/templates/includes/left_panel.tpl
// Timestamp: 1315480051 (Thu Sep 8 6:07:31 CDT 2011)
$oldSetArray_2847352f21160e216d165807e81e70be = isset( $setArray ) ? $setArray : array();
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
$text .= '	<div id="left-panel">
		<div id="map">
			<ul>
				<li><a href="/Directions"><img src="/extension/neteext/design/holidayinncapitol/images/map.gif" width="212" height="100" alt="Map" /></a></li>
				<li><a href="/Directions" class="map-bt" title="view map">view map</a></li>
			</ul>
		</div>
	</div>';
}
else
{
$text .= '	<div id="left-panel">
		<div id="special-promos-left">
			<ul id="promo-list-int">
				<li class="first">
					';
// def $bed_breakfast
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => 181,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'bed_breakfast', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'bed_breakfast' is already defined.", array (
  0 => 
  array (
    0 => 15,
    1 => 5,
    2 => 427,
  ),
  1 => 
  array (
    0 => 15,
    1 => 74,
    2 => 496,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/left_panel.tpl',
) );
    $tpl->setVariable( 'bed_breakfast', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'bed_breakfast', $var, $rootNamespace );
}

$text .= '					<span class="promo-heading-left">';
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
        2 => 'bed_breakfast',
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
          1 => 'promo_header',
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
    0 => 16,
    1 => 38,
    2 => 537,
  ),
  1 => 
  array (
    0 => 16,
    1 => 103,
    2 => 602,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/left_panel.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</span>
					<div id="first-promo-int" class="promo-int">
						<a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bed_breakfast', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bed_breakfast'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'link' );
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

$text .= '" title="Bed Breakfast Beyond">';
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
        2 => 'bed_breakfast',
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
          1 => 'promo_image',
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
      1 => 'left_panel_image',
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 18,
    1 => 82,
    2 => 746,
  ),
  1 => 
  array (
    0 => 18,
    1 => 175,
    2 => 839,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/left_panel.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</a>
						<p>';
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
        2 => 'bed_breakfast',
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
          1 => 'promo_description',
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
    0 => 19,
    1 => 9,
    2 => 855,
  ),
  1 => 
  array (
    0 => 19,
    1 => 79,
    2 => 925,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/left_panel.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '<a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bed_breakfast', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bed_breakfast'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'link' );
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

$text .= '" class="promo-link-int" title="Learn More">Learn More</a></p>	
					</div>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
		<div id="map">
			<ul>
				<li><a href="/Directions"><img src="/extension/neteext/design/holidayinncapitol/images/map.gif" width="212" height="100" alt="Map" /></a></li>
				<li><a href="/Directions" class="map-bt" title="view map">view map</a></li>
			</ul>
		</div>
		<div class="clear"></div>	
	</div>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_2847352f21160e216d165807e81e70be;
$tpl->Level--;
?>

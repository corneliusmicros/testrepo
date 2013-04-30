<?php
// URI:       extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl
// Filename:  extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl
// Timestamp: 1315480051 (Thu Sep 8 6:07:31 CDT 2011)
$oldSetArray_6e0bb4f85ca7b32d0ce05ecb253aa8be = isset( $setArray ) ? $setArray : array();
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
$text .= '	<div id="tower-image"></div>
	<div id="special-promos">
		<ul id="promo-list">
			<li class="first">
				';
// def $bed_breakfast
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => 95,
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
    0 => 6,
    1 => 4,
    2 => 132,
  ),
  1 => 
  array (
    0 => 6,
    1 => 72,
    2 => 200,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
) );
    $tpl->setVariable( 'bed_breakfast', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'bed_breakfast', $var, $rootNamespace );
}

$text .= '				<div class="promo_first_off" id="mink" onclick="location.href=\'javascript://;\'" style="cursor: pointer;" title="Bed Breakfast Beyond">		';
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
    0 => 7,
    1 => 140,
    2 => 343,
  ),
  1 => 
  array (
    0 => 7,
    1 => 205,
    2 => 408,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</div>
				<div class="promo_first_on">
				';
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
),
                       array (
  0 => 
  array (
    0 => 9,
    1 => 4,
    2 => 454,
  ),
  1 => 
  array (
    0 => 9,
    1 => 68,
    2 => 518,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '				 <p>';
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
    0 => 10,
    1 => 8,
    2 => 529,
  ),
  1 => 
  array (
    0 => 10,
    1 => 78,
    2 => 599,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '<br />
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

$text .= '" class="promo-link" title="Learn More">Learn More</a></p>
				</div>
			</li>
			<li class="second">
			';
// def $go_smith
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => 106,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'go_smith', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'go_smith' is already defined.", array (
  0 => 
  array (
    0 => 15,
    1 => 3,
    2 => 765,
  ),
  1 => 
  array (
    0 => 15,
    1 => 67,
    2 => 829,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
) );
    $tpl->setVariable( 'go_smith', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'go_smith', $var, $rootNamespace );
}

$text .= '				<div class="promo_second_off" id="mink1" onclick="location.href=\'javascript://;\'" style="cursor: pointer;" title="Go Smithsonian">';
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
        2 => 'go_smith',
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
    1 => 134,
    2 => 966,
  ),
  1 => 
  array (
    0 => 16,
    1 => 194,
    2 => 1026,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</div>
				<div class="promo_second_on">
					';
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
        2 => 'go_smith',
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
),
                       array (
  0 => 
  array (
    0 => 18,
    1 => 5,
    2 => 1074,
  ),
  1 => 
  array (
    0 => 18,
    1 => 64,
    2 => 1133,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '					<p>';
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
        2 => 'go_smith',
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
    1 => 8,
    2 => 1144,
  ),
  1 => 
  array (
    0 => 19,
    1 => 73,
    2 => 1209,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '<br />
						<a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'go_smith', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['go_smith'] : null;
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

$text .= '" class="promo-link" title="Learn More">Learn More</a>
					</p>							
				</div>					
			</li>
		</ul>
	</div>';
}
else
{
$text .= '	<div id="tower-image-int"></div>
	<div id="special-promos-int">
		<ul id="promo-list">
			<li class="second">
				';
// def $go_smith
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => 106,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'go_smith', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'go_smith' is already defined.", array (
  0 => 
  array (
    0 => 31,
    1 => 4,
    2 => 1501,
  ),
  1 => 
  array (
    0 => 31,
    1 => 68,
    2 => 1565,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
) );
    $tpl->setVariable( 'go_smith', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'go_smith', $var, $rootNamespace );
}

$text .= '				<div class="promo_second_off" id="mink1" onclick="location.href=\'javascript://;\'" style="cursor: pointer;" title="Go Smithsonian">';
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
        2 => 'go_smith',
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
    0 => 32,
    1 => 134,
    2 => 1702,
  ),
  1 => 
  array (
    0 => 32,
    1 => 194,
    2 => 1762,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</div>
				<div class="promo_second_on">
					';
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
        2 => 'go_smith',
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
),
                       array (
  0 => 
  array (
    0 => 34,
    1 => 5,
    2 => 1810,
  ),
  1 => 
  array (
    0 => 34,
    1 => 64,
    2 => 1869,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '					<p>';
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
        2 => 'go_smith',
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
    0 => 35,
    1 => 8,
    2 => 1880,
  ),
  1 => 
  array (
    0 => 35,
    1 => 73,
    2 => 1945,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/includes/parts/promo.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '<br />
						<a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'go_smith', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['go_smith'] : null;
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

$text .= '" class="promo-link" title="Learn More">Learn More</a>
					</p>							
				</div>						
			</li>
		</ul>
	</div>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_6e0bb4f85ca7b32d0ce05ecb253aa8be;
$tpl->Level--;
?>

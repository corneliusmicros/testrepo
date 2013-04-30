<?php
// URI:       design:error/kernel/4.tpl
// Filename:  design/standard/templates/error/kernel/4.tpl
// Timestamp: 1315480050 (Thu Sep 8 6:07:30 CDT 2011)
$oldSetArray_1e33d5426c4a96930fa3164cc642ee77 = isset( $setArray ) ? $setArray : array();
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

$text .= '
<div class="warning">
<h2>Object moved</h2>
<p>The object is no longer available at this URL.</p>
<p>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var5 );
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['parameters'] : null;
$var7 = compiledFetchAttribute( $var6, 'new_location' );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();

//include_once( 'lib/ezutils/classes/ezuri.php' );
eZURI::transformURI( $var6, false, 'relative' );
$var6 = '"' . $var6 . '"';
$var5 = $var6;
unset( $var6 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['parameters'] : null;
$var9 = compiledFetchAttribute( $var8, 'new_location' );
unset( $var8 );
$var8 = $var9;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();

//include_once( 'lib/ezutils/classes/ezuri.php' );
eZURI::transformURI( $var8, false, 'relative' );
$var8 = '"' . $var8 . '"';
$var7 = $var8;
unset( $var8 );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var3 = ( '<a href=' . $var5 . '>' . $var7 . '</a>' );
unset( $var5, $var7 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%url' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'You should automatically be redirected to the new location. If not click %url.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>
</div>

';

$setArray = $oldSetArray_1e33d5426c4a96930fa3164cc642ee77;
$tpl->Level--;
?>

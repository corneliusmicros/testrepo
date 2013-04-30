<?php
// URI:       design:error/kernel/20.tpl
// Filename:  extension/neteext/design/holidayinncapitol/templates/error/kernel/20.tpl
// Timestamp: 1315480051 (Thu Sep 8 6:07:31 CDT 2011)
$oldSetArray_4417acf3f02a6a10deb9739d8aec047a = isset( $setArray ) ? $setArray : array();
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

$text .= '<div>
	<h1>404 Error Page Not Found</h1>	
	<p>We&acute;re sorry, the page you have requested cannot be found.</p>
     <ul>
		<li><a href="/" title="Home">Home</a></li>
     	<li><a href="/site-map" title="Sitemap">Site Map</a></li>								
	</ul>
</div>';

$setArray = $oldSetArray_4417acf3f02a6a10deb9739d8aec047a;
$tpl->Level--;
?>

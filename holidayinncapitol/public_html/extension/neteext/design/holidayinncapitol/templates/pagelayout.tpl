<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
{def $basket_is_empty   = cond( $current_user.is_logged_in, fetch( shop, basket ).is_empty, 1 )
     $user_hash         = concat( $current_user.role_id_list|implode( ',' ), ',', $current_user.limited_assignment_value_list|implode( ',' ) )}
{if is_set( $extra_cache_key )|not}
    {def $extra_cache_key = ''}
{/if}
{def $node = fetch( 'content', 'node', hash('node_id', $module_result.node_id ))}
{cache-block keys=array( $module_result.uri, $basket_is_empty, $current_user.contentobject_id, $extra_cache_key )}
{*Defining Node*}
	{include uri='design:page_head.tpl'}
	{include uri='design:meta.tpl'}
	{include uri='design:page_head_style.tpl'}
	{include uri='design:page_head_script.tpl'}
{/cache-block}
</head>
<body>
	<!-- Main Container -->
	<div id="main-container">
		<!-- Header Area Starts -->
		<div id="header-area">
			<div id="top-panel">
				{include uri='design:includes/top_panel.tpl'}
				{include uri='design:includes/mid_pannel.tpl}
				{include uri='design:includes/header_image.tpl'}
			</div>
		</div>
		<!-- Header Area Ends -->

		<!-- Content Area Starts -->
		<div {if eq($node.node_id,2)}id="content-area"{else}id="content-area-int"{/if}>
			{include uri='design:includes/left_panel.tpl'}
			<div {if eq($node.node_id,2)}id="content"{else}id="content-int"{/if}>
				{include uri='design:page_mainarea.tpl'}
			</div>
		</div>
		<div class="clear"></div>
		<!-- Content Area Ends -->

		<!-- Footer Area Starts -->
		{include uri='design:includes/footer.tpl}
		<!-- Footer Area Ends -->
        </div>
	{include uri="design:parts/splash.tpl"}
	<!-- End Main Containter-->
</body>
</html>

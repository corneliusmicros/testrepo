{cache-block keys=array( $module_result.uri, $basket_is_empty, $current_user.contentobject_id, $extra_cache_key )}
{def $facebooknode = fetch( 'content', 'node', 	hash( 'node_id',  221))}
{def $twitter = fetch( 'content', 'node', 	hash( 'node_id',  222))}
<div id="footer-area">
		<div id="footer-left">				
			<ul>
				<li><h2>follow us on</h2></li>
				<li><a href="{$facebooknode.data_map.location.content}" name="{$facebooknode.data_map.omniture_name.content}" {if eq($facebooknode.data_map.open_in_new_tab.content,1)} target="_blank" {/if} class="facebook" title="Facebook">Facebook</a></li>
				<li><!-- AddThis Button BEGIN --><a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4de4b68468eef182"><img src={"images/bt-share-off.gif"|ezdesign} width="69" height="14" alt="Share This" style="margin:1px 0px 0px 6px;" onmouseover='add.src={"images/bt-share-on.gif"|ezdesign}' onmouseout='add.src={"images/bt-share-off.gif"|ezdesign}' name="add" id="add"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4de4b68468eef182"></script><!-- AddThis Button END --></li>
			</ul>
		</div>
		<div id="footer-content">
			<ul>
				<li><a href={""|ezurl} title="home">Home</a></li>
				<li>|</li>
				{def $nav = fetch('navigation', 'list', hash('navigation_group','footer_nav','main_node_only',true()))}
				{foreach $nav as $index => $item}
					{def $title_name=$item.object.data_map.name.content}
					{def $alt_title_name=$title_name|explode('&')|implode('and')}
						{if eq($item.class_name,Link)}
							<li><a href="{$item.data_map.location.content}" title="{$alt_title_name}" target="_blank" {if $item.data_map.omniture_name.has_content}name="omni_reservation_footer"{/if}>{node_view_gui content_node=$item view="text"}</a></li>
						{else}
							<li><a href={$item.url_alias|ezurl} title="{$alt_title_name}">{node_view_gui content_node=$item view="text"}</a></li>
						{/if}
						{delimiter}<li>|</li>{/delimiter}
				{/foreach}
			</ul>
			<div class="footer_line"></div>
			<div id="copyright">
				<p>&copy;{currentdate()|datetime('custom','%Y')} Holiday Inn. All rights reserved. <a href="http://www.microsecommerce.com target="_blank" title="Hotel Internet Marketing" class="copy">Hotel Internet Marketing</a> by MICROS eCommerce</p>
			</div>
		</div>		
	</div>
{include uri='design:includes/omniture.tpl'}
{/cache-block}

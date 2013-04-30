{def $nav = fetch('navigation', 'list', hash('navigation_group','utility_nav','main_node_only',true()))}
<div id="utility-panel">
	<ul id="utility-nav">
	{foreach $nav as $index => $item}
		{def $title_name=$item.object.data_map.name.content}
		{def $alt_title_name=$title_name|explode('&')|implode('and')}
        {if eq($item.class_name,Link)}
            <li><a href="{$item.data_map.location.content}" title="{$alt_title_name}" target="_blank" {if $item.data_map.omniture_name.has_content}name="omni_reservation_footer"{/if}>{node_view_gui content_node=$item view="text"}</a></li>
        {else}
			<li ><a href={$item.url_alias|ezurl} title="{$alt_title_name}">{node_view_gui content_node=$item view="text"}</a></li>
        {/if}
		{delimiter}<li class="devider">|</li>{/delimiter}
	{/foreach}		
	</ul>
</div>
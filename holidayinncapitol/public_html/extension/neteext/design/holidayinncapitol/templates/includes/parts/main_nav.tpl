{def $nav = fetch('navigation', 'list', hash('navigation_group','main_nav','main_node_only',true()))}
<div id="navigation">
	<ul id="css3menu1">
		{foreach $nav as $index => $item}
			{def $title_name=$item.object.data_map.name.content}
			{def $alt_title_name=$title_name|explode('&')|implode('and')}
			{if eq($item.class_name,Link)}
				<li><a href="{$item.data_map.location.content}" target="_blank" title='{$alt_title_name}' name="{$item.data_map.omniture_name.content}" {if $module_result.path.1.node_id|eq($item.node_id)} class="active"{/if}>{node_view_gui content_node=$item view="text"}</a>
			{else}
				<li><a href={$item.url_alias|ezurl} title="{$alt_title_name}" {if $module_result.path.1.node_id|eq($item.node_id)} class="active"{/if}>{node_view_gui content_node=$item view="text"}</a>
			{/if}
			{def $subnav = fetch('navigation', 'list', hash('parent_node_id', $item.node_id, 'navigation_group', 'main_nav'))}
			{if $subnav|count|gt(0)}
				<ul>
					{foreach $subnav as $index => $item}
						{def $sub_title_name=$item.object.data_map.name.content}
						{def $alt_sub_title_name=$sub_title_name|explode('&')|implode('and')}
						{if eq($item.class_name,File)}
							<li><a href="{$item.data_map.location.content}" target="_blank" title='{$alt_sub_title_name}' name="{$item.data_map.omniture_name.content}" {if $module_result.path.1.node_id|eq($item.node_id)} class="active"{/if}>{node_view_gui content_node=$item view="text"}</a>
						{else}
							<li><a href={$item.url_alias|ezurl} title="{$alt_sub_title_name}" {if $module_result.path.1.node_id|eq($item.node_id)} class="active"{/if}>{node_view_gui content_node=$item view="text"}</a>
						{/if}
					{/foreach}
				</ul>
			{/if}
			</li>
		{/foreach}
	</ul>
</div>

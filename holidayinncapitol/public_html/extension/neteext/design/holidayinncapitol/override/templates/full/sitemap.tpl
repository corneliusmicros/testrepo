{def $group    = array("footer","utility_nav","main_nav")
	 $nav      = fetch('navigation','list',hash( 'navigation_group' , $group ))
	 $splitter = $nav|count|div(2)|floor			 
     $left 	   = $nav|extract_left($splitter)
     $right	   = $nav|extract_right(sub($nav|count,$splitter))
     $objects_id = array()}
<div id="header">
	<h1>{attribute_view_gui attribute=$node.object.data_map.text_header}</h1>
</div>
<ul class="sitemap">
	<li><a href={""|ezurl} title="home">Home</a></li>
	{foreach $nav as $index => $item}
		{def $title_name=$item.object.data_map.name.content}
		{def $alt_title_name=$title_name|explode('&')|implode('and')}
		{if ne($item.class_name,Link)}
        	{if ne($item.name,"Site Map")}
                <li><a href="{$item.url_alias}" title='{$alt_title_name}'>{node_view_gui content_node=$item view="text"}</a>
                  {def $subnav = fetch('navigation', 'list', hash('parent_node_id', $item.node_id, 'navigation_group' , 'main_nav' ))}
                      {if $subnav|count|gt(0)}
                          <ul>
                          {foreach $subnav as $index => $item}
                              {def $sub_title_name=$item.object.data_map.name.content}
                              {def $alt_sub_title_name=$sub_title_name|explode('&')|implode('and')}
                              {if eq($item.class_name,File)}		
                                  <li><a href={$item.data_map.file.content.filepath|ezroot()} title='{$alt_sub_title_name}' target="_blank">{node_view_gui content_node=$item view="text"}</a></li>
                              {else}				
                                  <li ><a href="{$item.url_alias}" title='{$alt_sub_title_name}'>{node_view_gui content_node=$item view="text"}</a></li>
                              {/if}
                          {/foreach}
                          </ul>
                      {/if}
                  {def $subnav1 = fetch('navigation', 'list', hash('parent_node_id', $item.node_id, 'navigation_group' , 'top_nav2' ))}
                      {if $subnav1|count|gt(0)}
                       <ul>
                          {foreach $subnav1 as $index => $item}
                              {def $sub_title_name=$item.object.data_map.name.content}
                              {def $alt_sub_title_name=$sub_title_name|explode('&')|implode('and')}
                              {if eq($item.class_name,File)}		
                                  <li><a href={$item.data_map.file.content.filepath|ezroot()} title='{$alt_sub_title_name}' target="_blank">{node_view_gui content_node=$item view="text"}</a></li>
                              {else}				
                                  <li ><a href="{$item.url_alias}" title='{$alt_sub_title_name}'>{node_view_gui content_node=$item view="text"}</a></li>
                              {/if}
                          {/foreach}
                        </ul>
                    {/if}
                </li>
            {/if}
        {/if}
	{/foreach}
</ul>
{undef}
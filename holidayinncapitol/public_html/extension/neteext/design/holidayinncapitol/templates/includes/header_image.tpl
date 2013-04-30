{if eq($node.node_id,2)}
<div id="header-img">
	{foreach $node.data_map.header_image_rotation.content.relation_list as $related}
		{if $found|contains($related.node_id)|not}
			{def $imgnode = fetch( 'content', 'node', hash( 'node_id', $related.node_id ) )}
				<a href="#">{attribute_view_gui attribute=$imgnode.data_map.image image_class=home_header_image}</a>
			{undef $imgnode}
		{/if}
	{/foreach}
</div>
{else}
<div id="header-img-int">
	{if $node.data_map.header_image.has_content}
		<a href="#">{attribute_view_gui attribute=$node.data_map.header_image image_class=internal_header_image}</a>		
	{else}
		<img src={"images/guest-rooms-img.jpg"|ezdesign} width="980" height="570" title="{$node.data_map.name.content}" alt="{$node.data_map.name.content}"  />
	{/if}
</div>
{/if}
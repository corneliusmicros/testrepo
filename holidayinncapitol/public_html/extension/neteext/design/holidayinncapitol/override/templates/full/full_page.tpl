<div class="hd-text">{attribute_view_gui attribute=$node.object.data_map.text_header}</div>
{attribute_view_gui attribute=$node.object.data_map.body}
{if eq($node.node_id,2)}
	<a href="#" title="read more" class="btn_read_more">+ read more</a>
	<div id="collapse-more">
	{attribute_view_gui attribute=$node.object.data_map.hidden_copy}
	</div>
{/if}
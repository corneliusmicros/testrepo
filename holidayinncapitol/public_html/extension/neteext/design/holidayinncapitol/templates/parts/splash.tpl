{if eq($module_result.node_id, 2)}
{def $splash_node = fetch( 'content', 'list', hash( 'parent_node_id', '238', 
						    'limit', 1,
						    'class_filter_type',  'include',
						    'class_filter_array', array( '31' ) ))}
{if $splash_node}
<div id="shadow"></div>
<div id="splash">
	<img id="splash_bg" src="{$splash_node.0.data_map.image.content.original.full_path}" alt="" title=""/>
	<div class="logo_bg">
    <div id="logo"></div>
  </div>
	<div id="splash_close">Close <span>X</span></div>

	<div id="banner">
		<div id="banner_title">
			{$splash_node.0.data_map.name.content}
		</div>
		<div id="main">{$splash_node.0.data_map.caption2.content}</div>
		<a class="button" id="book-now" href={$splash_node.0.data_map.button_link.content}>{$splash_node.0.data_map.button_link.data_text}</a>

		<div id="bottom">{$splash_node.0.data_map.caption.content}</div>
	</div>

	<script language="javascript">
		$(document).ready(function() {ldelim}
			$('#splash_close').click(function() {ldelim}
				$('#shadow, #splash').fadeOut('fast');
				return false;
			{rdelim});
		{rdelim});
	</script>
</div>
{/if}
{undef $splash_node}
{/if}

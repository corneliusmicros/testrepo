{def $galleryimages = fetch('content', 'list',hash('parent_node_id', $node.node_id,'class_filter_type',  'include','class_filter_array', array('photo_gallery'),'sort_by', array( 'priority', true() )))}
<div class="hd-text-int">{attribute_view_gui attribute=$node.object.data_map.text_header}</div>
<div id="gallery_page">{let counter=1}	
{foreach $galleryimages as $galleryimage}
    <h1>{attribute_view_gui attribute=$galleryimage.data_map.section_name}</h1>
    {if is_set($galleryimage.data_map.images)}
    <ul class="gallery thumb">
    {foreach $galleryimage.data_map.images.content.relation_list as $related}
		{def $imgnodes = fetch( 'content', 'list', hash( 'parent_node_id', $related.parent_node_id ) )}
		{foreach $imgnodes as $imgnode}
        <li><a rel="prettyPhoto[gallery{$counter}]" href="{$imgnode.data_map.image.content['original'].full_path|ezroot(no)}"  title="{$imgnode.data_map.caption.content}"><img src="{$imgnode.data_map.image.content['gallery_thumb'].full_path|ezroot(no)}" width="200" height="120" title="{$imgnode.data_map.caption.content}" /></a></li>
        {/foreach}
	{break}
	{/foreach}
    </ul>
    {/if}{set counter=$counter|inc}
{/foreach}
</div>
{undef} 

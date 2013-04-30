{switch match=$classification}
{case match='view'}
    {def $n=fetch(content, node, hash(node_path, $href))}
    	<a href={$n.data_map.file.content.filepath|ezroot}{section show=$id} id="{$id}"{/section}{section show=$name} name="{$name}"{/section}{section show=$title} title="{$title}"{/section}{section show=$target} target="{$target}"{/section}{section show=ne($classification|trim,'')} class="{$classification|wash}"{/section}{if eq(true,$n.data_map.omniture_id.has_content)} name="omni_{$n.data_map.omniture_id.content}_text"{/if}>{$content}</a>
    {undef $n}
{/case}
{case match='download'}
	{def $n='' $attribute='' $url=false() $protocols=array('http', 'file', 'ftp', 'mailto', 'https')}
		{if $protocols|contains($href|explode(':')|extract_left(1))not()}
			{set $n=fetch(content, node, hash(node_path, $href))}
			{if and($n, $n.object.class_identifier|eq('file'))}
			{set $attribute=$n.data_map.file}
			{set $url=concat( '/content/download/', $attribute.contentobject_id, '/', $attribute.id,'/version/', $attribute.version , '/file/', $attribute.content.original_filename|urlencode )}
			{/if}
		{/if}
		{if $url|not()}
			{set $url=$href}
		{/if}
		<!--<a href={$url|ezurl}{section show=$id} id="{$id}"{/section}{section show=$name} name="{$name}"{/section}{section show=$title} title="{$title}"{/section}{section show=$target} target="{$target}"{/section}{section show=ne($classification|trim,'')} class="{$classification|wash}"{/section}{if eq(true,$n.data_map.omniture_id.has_content)} name="omni_{$n.data_map.omniture_id.content}_text"{/if}>{$content}</a> -->
			<a href={$n.data_map.file.content.filepath|ezroot()}{section show=$id} id="{$id}"{/section}{section show=$name} name="{$name}"{/section}{section show=$title} title="{$title}"{/section}{section show=$target} target="{$target}"{/section}{section show=ne($classification|trim,'')} class="{$classification|wash}"{/section}{if eq(true,$n.data_map.omniture_id.has_content)} name="omni_{$n.data_map.omniture_id.content}_text"{/if}>{$content}</a> <img src={"images/pdf.png"|ezdesign} width="12x" height="12px"  style="border:0px;" alt="PDF" title="PDF" />

	{undef $n $attribute $url $protocols}        
{/case} 
{case}
{def $n=fetch(content,node,hash(node_path,$href))}
	{if $n.object.class_identifier|eq('link')}	
		{if $n.data_map.open_in_new_tab.content|eq(true())}
			{def $target = "_blank"}
		{else}
			{def $target = "_self"}
		{/if}
		{def $link = $n.data_map.location.content}
	{elseif $n.object.class_identifier|eq('file')}
		{if $n.data_map.open_in_new_tab.content|eq(true())}
			{def $target = "_blank"}
		{else}
			{def $target = "_self"}
		{/if}	
		{def $link = $n.data_map.file.content.filepath|ezroot}
	{else}
		{def $link = $href|ezurl}
	{/if}			
	<a href={$link}{section show=$id} id="{$id}"{/section}{section show=$name} name="{$name}"{/section}{section show=$title} title="{$title}"{/section}{section show=$target} target="{$target}"{/section}{section show=$class} class="{$class}"{/section}{if eq(true,$n.data_map.omniture_id.has_content)} name="omni_{$n.data_map.omniture_id.content}_text"{/if}>{$content}</a>{undef $n}
{/case}
{/switch}

{section name=HTTP loop=$site.http_equiv}
<meta http-equiv="{$HTTP:key|wash}" content="{$HTTP:item|wash}" />{/section}
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<meta http-equiv="X-UA-Compatible" content="chrome=1" />

{if eq($node.data_map.page_title.has_content,true)}
	{def $title = $node.data_map.page_title.content}
{elseif eq($module_result.ui_component,'error')}
	{def $title = "Page Error"}
{else}
	{def $title = concat($node.name," - Holiday Inn Capitol DC Hotel")}
{/if}

<title>{$title}</title>
<meta name="description" content="{$node.data_map.meta_description.content}">
<meta name="keywords" content="{$node.data_map.meta_keywords.content}">
<link rel="canonical" href={$node.url_alias|ezurl('double','full')} />
<link rel="Shortcut icon" href={"favicon.ico"|ezimage} type="image/x-icon" />
{undef}


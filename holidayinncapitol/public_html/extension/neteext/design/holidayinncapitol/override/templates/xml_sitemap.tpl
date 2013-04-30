<?xml version="1.0" encoding="UTF-8"?>	 
{def $pages = fetch('content','list',hash('parent_node_id',2,'sort_by',array('priority',true),'depth',4,'class_filter_type','include','class_filter_array',array('sub_page','sub_page_container','home_page','google_mashup')))}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>{""|ezurl("no","full")}</loc>
		<priority>1.0</priority>
	</url>
{foreach $pages as $page}
{if eq($page.is_hidden,0))}
	<url>
		<loc>{if eq($page.class_identifier,'file')}{$page.data_map.file.content.filepath|ezurl("no","full")}{else}{$page.url_alias|ezurl("no","full")}{/if}</loc>
		<priority>0.5</priority>
	</url>
{/if}
{/foreach}

</urlset> 
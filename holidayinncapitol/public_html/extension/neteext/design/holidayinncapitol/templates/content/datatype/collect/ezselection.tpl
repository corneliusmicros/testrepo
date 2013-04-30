{default attribute_base=ContentObjectAttribute}
{let selected_id_array=cond( is_set( $#collection_attributes[$attribute.id] ), $#collection_attributes[$attribute.id].content, $attribute.content )}

{* Always set the .._selected_array_.. variable, this circumvents the problem when nothing is selected. *}
<input type=hidden name="{$attribute_base}_ezselect_selected_array_{$attribute.id}" value="">

{if eq($type,"checkbox-radio")}
 	{if eq($attribute.class_content.is_multiselect,true())} 	
 	<ul class="radios"> 		
 		{section var=Options loop=$attribute.class_content.options} 		
		<li class="formRadio"><label><input class="{$class}" type="checkbox" name="{$attribute_base}_ezselect_selected_array_{$attribute.id}[]" value="{$Options.item.id}">{$Options.item.name|wash( xhtml )}</label></li>	
		{/section}		
	</ul> 		
 	{else}
	<ul class="radios">
		{section var=Options loop=$attribute.class_content.options}		
		<li class="formRadio"><label><input class="{$class}" type="radio" name="{$attribute_base}_ezselect_selected_array_{$attribute.id}[]" value="{$Options.item.name|wash( xhtml )}">{$Options.item.name|wash( xhtml )}</label></li>	
		{/section}
	</ul>
 	{/if}
{else}
	<select {if $selectID} id="{$selectID}" {/if} class="{$class}" name="{$attribute_base}_ezselect_selected_array_{$attribute.id}[]" {section show=$attribute.class_content.is_multiselect}multiple{/section}>
	{section var=Options loop=$attribute.class_content.options}
	<option value="{$Options.item.name|wash( xhtml )}" {section show=$selected_id_array|contains( $Options.item.id )}selected="selected"{/section}>{$Options.item.name|wash( xhtml )}</option>
	{/section}
	</select>
{/if}

{/let}
{/default}


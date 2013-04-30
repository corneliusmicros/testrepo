{default attribute_base='ContentObjectAttribute'}
{let data_text=cond( is_set( $#collection_attributes[$attribute.id] ), $#collection_attributes[$attribute.id].data_text, $attribute.content )}
{if $type|eq("hidden")}
	{def $inputType = "hidden"}
{else}
	{def $inputType = "text"}
{/if}
<input class="{$class}" type="{$inputType}" name="{$attribute_base}_ezstring_data_text_{$attribute.id}" value="{$data_text|wash( xhtml )}" />
{/let}
{/default}
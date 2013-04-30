{default attribute_base=ContentObjectAttribute}
{let date=cond( is_set( $#collection_attributes[$attribute.id] ), $#collection_attributes[$attribute.id].content, $attribute.content )}

<select name="{$attribute_base}_date_month_{$attribute.id}">
{for 1 to 12 as $month}
	<option value="{$month}"{if eq($month,$date.month)} selected{/if}>{makedate($month,1,gettime(currentdate()).year)|datetime('custom','%M')}</option>			 
{/for}	
</select>

<select name="{$attribute_base}_date_day_{$attribute.id}">
{for 1 to 31 as $day}
	<option{if eq($day,$date.day)} selected{/if}>{$day}</option>
{/for}
</select>	

<input type="text" name="{$attribute_base}_date_year_{$attribute.id}" class="{$class}" size="5" value="{section show=$date.is_valid}{$date.year}{/section}" />

<div class="break"></div>
{/let}
{/default}
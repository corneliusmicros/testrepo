{def $item = "" $attribute = ""}

{if eq(is_set($object),false())}
	{def $object = $node}
{/if}

{include name=Validation uri='design:content/collectedinfo_validation.tpl' class='message-warning' validation=$validation collection_attributes=$collection_attributes}

<form id="contact" name="omni_contact_form" class="page_form" action={"content/action"|ezurl} method="post">
	<p>Please fill out the Form below and press the "Submit Request" button when you are done.<br>* Please fill out these fields</p>	
	
	{set $item  = $object.data_map.first_name $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}
	</fieldset>
	
	{set $item  = $object.data_map.last_name $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}
	</fieldset>
	
	{set $item  = $object.data_map.organization $attribute = $item.contentclass_attribute}		
	<fieldset class="address{if eq($attribute.is_required,true())} required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}
	</fieldset>
	
	{set $item  = $object.data_map.address $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}	
	</fieldset>
	
	{set $item  = $object.data_map.city $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}	
	</fieldset>
		
	{set $item  = $object.data_map.state $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="select-text"}
	</fieldset>
	
	{set $item  = $object.data_map.zip_postal_code $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}
	</fieldset>
	
	{set $item  = $object.data_map.country $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="select-text"}
	</fieldset>
	
	{set $item  = $object.data_map.telephone_number $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text name"}
	</fieldset>
		
	{set $item  = $object.data_map.fax $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text name"}
	</fieldset>
	
	{set $item  = $object.data_map.send_information_to $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>	
		{attribute_view_gui attribute=$item type="checkbox-radio" class="checkbox"}
	</fieldset>
	
	{set $item  = $object.data_map.message_topic $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item type="checkbox-radio" class="checkbox"}
	</fieldset>
	
	{set $item  = $object.data_map.arrival_date $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class=concat("datepicker-arrival input-text arrival ",$attribute.id)}
	</fieldset>
	
	{set $item  = $object.data_map.guests $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text small"}
	</fieldset>
	
	{set $item  = $object.data_map.guest_rooms $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text small"}
	</fieldset>
	
	{set $item  = $object.data_map.nights_per_room $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text small"}
	</fieldset>
	
	{set $item  = $object.data_map.comments_or_questions $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="textarea-text"}
	</fieldset>
	
	{set $item  = $object.data_map.email $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}				
	</fieldset>
		<br><br>
	<fieldset>		
		{if eq(is_set($node),false())}
			<input type="hidden" name="ContentObjectID" value="{$object.id}" />
		{else}
			<input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
		{/if}
		<input type="hidden" name="ContentNodeID" value="{$object.main_node_id}" />						
        <input type="hidden" name="ViewMode" value="full" />
		<input type="submit" name="ActionCollectInformation" value="Submit" title="Submit" class="submit_btn" />
		<input type="Reset" name="Reset" value="Reset" title="Reset" class="reset_btn" />		
	</fieldset>
</form>

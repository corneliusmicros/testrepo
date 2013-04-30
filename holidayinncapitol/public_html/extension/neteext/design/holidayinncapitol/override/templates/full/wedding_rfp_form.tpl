{def $item = "" $attribute = ""}

{if eq(is_set($object),false())}
	{def $object = $node}
{/if}

{include name=Validation uri='design:content/collectedinfo_validation.tpl' class='message-warning' validation=$validation collection_attributes=$collection_attributes}
<form id="wedding" name="omni_wedding_rfp_form" class="page_form" action={"content/action"|ezurl} method="post">
	<p>Please fill out the Form below and press the "Submit Request" button when you are done.<br>* Please fill out these fields</p>
		
	{set $item  = $object.data_map.date_proposal_received $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class=concat("datepicker-arrival input-text date prop_send_date",$attribute.id)}
	</fieldset>
	
	{set $item  = $object.data_map.first_name $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text name"}
	</fieldset>
	
	{set $item  = $object.data_map.last_name $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text name"}
	</fieldset>
	
	{set $item  = $object.data_map.street $attribute = $item.contentclass_attribute}		
	<fieldset class="address{if eq($attribute.is_required,true())} required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}
	</fieldset>
	
	{set $item  = $object.data_map.suite_apt $attribute = $item.contentclass_attribute}		
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
		{attribute_view_gui attribute=$item class="input-text zipcode"}
	</fieldset>
	
	{set $item  = $object.data_map.email $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}				
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
	
	<h2>Event Information</h2>
	
	{set $item  = $object.data_map.event_name $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}
	</fieldset>
	
	{set $item  = $object.data_map.event_date $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class=concat("datepicker-arrival input-text date event-start-date ",$attribute.id)}
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
	
	{set $item  = $object.data_map.wedding_services $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item type="checkbox-radio" class="checkbox"}
	</fieldset>
	
	{set $item  = $object.data_map.respond_to_you $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item type="checkbox-radio" class="checkbox"}		
	</fieldset>
	
	
	<fieldset>		
		{if eq(is_set($node),false())}
			<input type="hidden" name="ContentObjectID" value="{$object.id}" />
		{else}
			<input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
		{/if}
		<input type="hidden" name="ContentNodeID" value="{$object.main_node_id}" />						
        <input type="hidden" name="ViewMode" value="full" />		
		<input type="submit" name="ActionCollectInformation" value="Submit" title="Submit" class="submit_btn" />
		<input class="reset_btn" type="Reset" value="Reset" name="Reset" title="Reset" alt="Reset" />
	</fieldset>
</form>
{def $item = "" $attribute = ""}

{if eq(is_set($object),false())}
	{def $object = $node}
{/if}

{include name=Validation uri='design:content/collectedinfo_validation.tpl' class='message-warning' validation=$validation collection_attributes=$collection_attributes}

<form id="meeting" name="omni_meeting_rfp_form" class="page_form" action={"content/action"|ezurl} method="post">
	<p>Please fill out the Form below and press the "Submit Request" button when you are done.<br>* Please fill out these fields</p>	

	{set $item  = $object.data_map.date_must_receive $attribute = $item.contentclass_attribute}
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class=concat("datepicker_date input-text date ",$attribute.id)}
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
	<fieldset class="address{if eq($attribute.is_required,true())} required{/if}">
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
	
	{set $item  = $object.data_map.country $attribute = $item.contentclass_attribute}		
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

	{set $item  = $object.data_map.phone_number $attribute = $item.contentclass_attribute}
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text name"}
	</fieldset>

	{set $item  = $object.data_map.fax $attribute = $item.contentclass_attribute}
	<fieldset class="address{if eq($attribute.is_required,true())} required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}
	</fieldset>
	
	<br /><br />
	
	{set $item  = $object.data_map.type_of_event_meeting_function $attribute = $item.contentclass_attribute}
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="select-text"}
	</fieldset>
	
	{set $item  = $object.data_map.meeting_event_function_name $attribute = $item.contentclass_attribute}
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}
	</fieldset>
	
	{set $item  = $object.data_map.brief_description_of_meeting_event_function $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="textarea-text"}
	</fieldset>	
	
	<h2>Event Information</h2>
	
	{set $item  = $object.data_map.arrival_date $attribute = $item.contentclass_attribute}
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class=concat("datepicker_date_arrival input-text date ",$attribute.id)}
	</fieldset>
	
	{set $item  = $object.data_map.departure_date $attribute = $item.contentclass_attribute}
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class=concat("datepicker_date_departure input-text date ",$attribute.id)}
	</fieldset>	
	
	{set $item  = $object.data_map.are_these_dates_flexible $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item type="checkbox-radio" class="checkbox"}
	</fieldset>
	
	{set $item  = $object.data_map.alt_dates $attribute = $item.contentclass_attribute}
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="input-text"}
	</fieldset>	
	<br /><br />
	<table cellpadding="0" cellspacing="0" border="0">
    	<tr>
    		<td align="left" valign="top" width="175px">Meeting Rooms Block:</td>
			<td align="left" valign="top">
				<table class="employeeApp" cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td class="stdCheckbox">&nbsp;</td>
						<td class="stdLong">Date</td>
						<td class="stdSmall">Start Time</td>
						<td class="stdSmall">End Time</td>
						<td class="stdSmall">People</td>
						<td class="stdLong">Setup Type</td>
					</tr>
					<tr>
						<td class="stdCheckbox edu">1</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.meeting_room_date_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_start_time_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_end_time_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_people_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.meeting_room_setup_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
					</tr>
					<tr>
						<td class="stdCheckbox edu">2</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.meeting_room_date_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_start_time_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_end_time_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_people_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.meeting_room_setup_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
					</tr>
					<tr>
						<td class="stdCheckbox edu">3</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.meeting_room_date_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_start_time_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_end_time_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_people_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.meeting_room_setup_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
					</tr>
					<tr>
						<td class="stdCheckbox edu">4</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.meeting_room_date_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_start_time_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_end_time_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_people_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.meeting_room_setup_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
					</tr>
					<tr>
						<td class="stdCheckbox edu">5</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.meeting_room_date_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_start_time_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_end_time_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdShort edu">
							{set $item  = $object.data_map.meeting_room_people_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.meeting_room_setup_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
					</tr>
				</table>
			</td>
    	</tr>
    </table>
	<br /><br />
	{set $item  = $object.data_map.av_business_services_and_other_requirements $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="textarea-text"}
	</fieldset>
	<br /><br />
	<table cellpadding="0" cellspacing="0" border="0">
    	<tr>
    		<td align="left" valign="top" width="175px">Sleeping Rooms Required</td>
			<td align="left" valign="top">
				<table class="employeeApp" cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td class="stdCheckbox">&nbsp;</td>
						<td class="stdLong">Arrival Date</td>
						<td class="stdLong">Departure Date</td>
						<td class="stdSmall">Single</td>
						<td class="stdSmall">Double</td>
						<td class="stdSmall">Suite <br/ ></td>
						<td class="stdSmall">Total</td>
					</tr>
					<tr>
						<td class="stdCheckbox edu">1</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.sleeping_room_arrival_date_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date_arrival input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.sleeping_room_departure_date_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date_departure input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_single_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block rmOne"}
						</td>
						<td class="stdSmall edut">
							{set $item  = $object.data_map.sleeping_room_double_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block rmOne"}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_suite_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block rmOne"}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_total_one $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block sumOne"}
						</td>
					</tr>
					<tr>
						<td class="stdCheckbox edu">2</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.sleeping_room_arrival_date_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date_arrival input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.sleeping_room_departure_date_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date_departure input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_single_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edut">
							{set $item  = $object.data_map.sleeping_room_double_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_suite_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_total_two $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
					</tr>
					<tr>
						<td class="stdCheckbox edu">3</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.sleeping_room_arrival_date_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date_arrival input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.sleeping_room_departure_date_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date_departure input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_single_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edut">
							{set $item  = $object.data_map.sleeping_room_double_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_suite_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_total_three $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
					</tr>
					<tr>
						<td class="stdCheckbox edu">4</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.sleeping_room_arrival_date_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date_arrival input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.sleeping_room_departure_date_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date_departure input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_single_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edut">
							{set $item  = $object.data_map.sleeping_room_double_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_suite_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_total_four $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
					</tr>
					<tr>
						<td class="stdCheckbox edu">5</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.sleeping_room_arrival_date_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date_arrival input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdLong edu">
							{set $item  = $object.data_map.sleeping_room_departure_date_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class=concat("datepicker_date_departure input-text met_block date ",$attribute.id)}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_single_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edut">
							{set $item  = $object.data_map.sleeping_room_double_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_suite_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
						<td class="stdSmall edu">
							{set $item  = $object.data_map.sleeping_room_total_five $attribute = $item.contentclass_attribute}
							{attribute_view_gui attribute=$item class="input-text met_block"}
						</td>
					</tr>	
				</table>
			</td>
    	</tr>
    </table>
	<h2>Other Information</h2>
	{set $item  = $object.data_map.food_beverage_required $attribute = $item.contentclass_attribute}
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item type="checkbox-radio" class="checkbox"}
	</fieldset>	
	
	{set $item  = $object.data_map.hospitality_and_banquet_requirements $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="textarea-text"}
	</fieldset>	
	
	{set $item  = $object.data_map.transportation_recreation_tour_ect $attribute = $item.contentclass_attribute}		
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item class="textarea-text"}
	</fieldset>	
	
	{set $item  = $object.data_map.where_should_we_send_our_response $attribute = $item.contentclass_attribute}
	<fieldset class="{if eq($attribute.is_required,true())}required{/if}">
		<label>{$attribute.name|wash}: {if eq($attribute.is_required,true())}*{/if}</label>
		{attribute_view_gui attribute=$item type="checkbox-radio" class="checkbox"}
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
		<input class="reset_btn" type="Reset" value="Reset" name="Reset" title="Reset" alt="Reset" />
	</fieldset>
</form>
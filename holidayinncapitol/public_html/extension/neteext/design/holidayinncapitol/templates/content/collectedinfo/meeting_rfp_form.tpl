{default collection=cond( $collection_id, fetch( content, collected_info_collection, hash( collection_id, $collection_id ) ), 
                         fetch( content, collected_info_collection, hash( contentobject_id, $node.contentobject_id ) ) )}
  
{*<h2>{'Thank you for your application.'}</h2>*}
  
<h2>Thank you.</h2>
<p>We have received your request for availability at the Holiday Inn Capitol-Meetings for {$collection.data_map.arrival_date.data_text} to {$collection.data_map.departure_date.data_text}. We will contact you with our availability via

{let $varResponse =  $collection.data_map.where_should_we_send_our_response.data_text|explode('-'))}
	{let $varReply=array('Phone','Email','Fax','Mail' )}
		{foreach $varResponse as $response}		
			{if $collection.data_map.where_should_we_send_our_response.data_text|contains($response)}{$varReply[$response]}{/if}{delimiter}, {/delimiter}
		{/foreach}
	{/let}
{/let}<br>
Please print out a copy of your Request for Availability presented below:
</p>

<table cellpadding="0" cellspacing="8" border="0">
		<tr>
			{*Date Proposal *}
			<td class="" align="left"><b>{$object.data_map.date_must_receive.contentclass_attribute.name}:</b></td>
			<td class="" align="left">
				{$collection.data_map.date_must_receive.data_text}
			</td>
		</tr>
		<tr>
			<td class="" align="left"><br></td>
			<td class="" align="left"><br></td>
		</tr>
		<tr>
			{*First Name*}
			<td class="" align="left"><b>{$object.data_map.first_name.contentclass_attribute.name}:</b></td>
			<td class="" align="left">
				{$collection.data_map.first_name.data_text}
			</td>
		</tr>
		<tr>
			{*Last Name*}
			<td class="" align="left"><b>{$object.data_map.last_name.contentclass_attribute.name}:</b></td>
			<td class="" align="left">
				{$collection.data_map.last_name.data_text}
			</td>
		</tr>
		<tr>
			{*Street *}
			<td class="" align="left"><b>{$object.data_map.street.contentclass_attribute.name}:</b> </td>
			<td class="" align="left">
				{$collection.data_map.street.data_text}
			</td>
		</tr>
		<tr>
			{*Suite/Apt *}
			<td class="" align="left"><b>{$object.data_map.suite_apt.contentclass_attribute.name}:</b></td>
			<td class="" align="left">
				{$collection.data_map.suite_apt.data_text}
			</td>
		</tr>
		<tr>
			{*City *}
			<td class="" align="left"><b>{$object.data_map.city.contentclass_attribute.name}:</b> </td>
			<td class="" align="left">
				{$collection.data_map.city.data_text}	
				&nbsp;&nbsp;
				{*State *}
				<b>{$object.data_map.state.contentclass_attribute.name}:</b>  
				{$collection.data_map.state.data_text}
			</td>
		</tr>
		<tr>
			{*Zip *}
			  <td class="" align="left"><b>{$object.data_map.zip_postal_code.contentclass_attribute.name}:</b> </td>
			  <td class="" align="left">
			  	{$collection.data_map.zip_postal_code.data_text}
			  </td>
		</tr>
		<tr>
			{* E-mail *}
			  <td class="" align="left"><b>{$object.data_map.email.contentclass_attribute.name}:</b> </td>
			  <td class="" align="left">
			  	{$collection.data_map.email.data_text}
			  </td>
		</tr>
		<tr>
			{* Phone Number *}
			<td class="" align="left"><b>{$object.data_map.phone_number.contentclass_attribute.name}:</b> </td>
			<td class="">
				{$collection.data_map.phone_number.data_text}	
			</td>
		</tr>
		<tr>
			{* Fax *}
			<td class="" align="left"><b>{$object.data_map.fax.contentclass_attribute.name}:</b> </td>
			<td class="">
				{$collection.data_map.fax.data_text}
			</td>
		</tr>
		<tr>
			{* Type of Event Meeting - Function *}
			<td class="" align="left"><b>{$object.data_map.type_of_event_meeting_function.contentclass_attribute.name}:</b> </td>
			<td class="">
				{if eq( $collection.data_map.type_of_event_meeting_function.data_text, 0 )}
				    Association
				{elseif eq( $collection.data_map.type_of_event_meeting_function.data_text, 1 )}
				    Corporate
				{elseif eq( $collection.data_map.type_of_event_meeting_function.data_text, 2 )}
				    Education
				{elseif eq( $collection.data_map.type_of_event_meeting_function.data_text, 3 )}
				    Fraternal
				{elseif eq( $collection.data_map.type_of_event_meeting_function.data_text, 4 )}
				    Military
				{elseif eq( $collection.data_map.type_of_event_meeting_function.data_text, 5 )}
				    Religious
				{elseif eq( $collection.data_map.type_of_event_meeting_function.data_text, 6 )}
				    Social			
				{elseif eq( $collection.data_map.type_of_event_meeting_function.data_text, 7 )}
				    Wedding
				{else}
				    Other		
				{/if}
			</td>
		</tr>
		<tr>
			<td class="" align="left"><br></td>
			<td class="" align="left"><br></td>
		</tr>
		<tr>
			{* Meeting-Event-Function Name *}
			<td colspan="2" class=""><b>{$object.data_map.meeting_event_function_name.contentclass_attribute.name}:</b><br>
				{$collection.data_map.meeting_event_function_name.data_text}
			</td>
		</tr>
		<tr>
			{* Brief Description of Meeting-Event-Function *}
			<td colspan="2" class=""><b>{$object.data_map.brief_description_of_meeting_event_function.contentclass_attribute.name}:</b><br>
				{$collection.data_map.brief_description_of_meeting_event_function.data_text}	
			</td>
		</tr>
	</table>
	<p><strong>Event Information</strong><br></p>
	<table cellpadding="0" cellspacing="8" border="0">
          	<tr>
			{* Arrival Date *}
          		<td class="" align="left"><b>{$object.data_map.arrival_date.contentclass_attribute.name}:</b></td>
			<td class="">
				{$collection.data_map.arrival_date.data_text}
			</td>
          	</tr>
		<tr>
			{* Departure Date *}
          		<td class="" align="left"><b>{$object.data_map.departure_date.contentclass_attribute.name}:</b></td>
			<td class="">
				{$collection.data_map.departure_date.data_text}
			</td>
          	</tr>
		<tr>
			{* Are these dates flexible? *}
			<td class=""><b>{$object.data_map.are_these_dates_flexible.contentclass_attribute.name}:</b></td>
			<td class="">
				{$collection.data_map.are_these_dates_flexible.data_text}	
			</td>
		</tr>
		<tr>
			{* What are your alternate dates, if any? *}
			<td class=""><b>{$object.data_map.alt_dates.contentclass_attribute.name}:</b></td>
			<td class="">
				{$collection.data_map.alt_dates.data_text}
			</td>
		</tr>
          </table>
	<table cellpadding="0" cellspacing="8" border="0">
		<tr>
			<td colspan="5" class=""><p><b>Meeting Room Block</b></p></td>
		</tr>
		<tr>
			<td class="">&nbsp;</td>
			<td class=""><b>Date</b></td>
			<td class=""><b>Start Time</b></td>
			<td class=""><b>End Time</b></td>
			<td class=""><b>People</b></td>
			<td class=""><b>Setup Type</b></td>
		</tr>
		<tr>
			<td class="">1.</td>
			<td class="">
				{$collection.data_map.meeting_room_date_one.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_start_time_one.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_end_time_one.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_people_one.data_text}	
			</td>
			<td class="">
				{$collection.data_map.meeting_room_setup_one.data_text}	
			</td>
		</tr>
		<tr>
			<td class="">2.</td>
			<td class="">
				{$collection.data_map.meeting_room_date_two.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_start_time_two.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_end_time_two.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_people_two.data_text}	
			</td>
			<td class="">
				{$collection.data_map.meeting_room_setup_two.data_text}	
			</td>
		</tr>
		<tr>
			<td class="">3.</td>
			<td class="">
				{$collection.data_map.meeting_room_date_three.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_start_time_three.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_end_time_three.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_people_three.data_text}	
			</td>
			<td class="">
				{$collection.data_map.meeting_room_setup_three.data_text}	
			</td>
		</tr>
		<tr>
			<td class="">4.</td>
			<td class="">
				{$collection.data_map.meeting_room_date_four.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_start_time_four.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_end_time_four.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_people_four.data_text}	
			</td>
			<td class="">
				{$collection.data_map.meeting_room_setup_four.data_text}	
			</td>
		</tr>
		<tr>
			<td class="">5.</td>
			<td class="">
				{$collection.data_map.meeting_room_date_five.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_start_time_five.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_end_time_five.data_text}
			</td>
			<td class="">
				{$collection.data_map.meeting_room_people_five.data_text}	
			</td>
			<td class="">
				{$collection.data_map.meeting_room_setup_five.data_text}	
			</td>
		</tr>
          </table>
	<p><font class=""><b>{$object.data_map.av_business_services_and_other_requirements.contentclass_attribute.name}:</b></font><br></p>
	<p>{$collection.data_map.av_business_services_and_other_requirements.data_text}</p>
	<table cellpadding="0" cellspacing="8" border="0">
          	<tr>
			<td colspan="5" class=""><p><b>Sleeping Room Block</b></p></td>
		</tr>
		<tr>
			<td class="">&nbsp;</td>
			<td class=""><b>Arrival<br>Date</b></td>
			<td class=""><b>Departure<br>Date</b></td>
			<td class=""><b>Single</b></td>
			<td class=""><b>Double</b></td>
			<td class=""><b>Suite</b></td>
			<td class=""><b>Total</b></td>
		</tr>
		<tr>
			<td class="">1.</td>
			<td class="">
				{$collection.data_map.sleeping_room_arrival_date_one.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_departure_date_one.data_text}	
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_single_one.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_double_one.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_suite_one.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_total_one.data_text}
			</td>
		</tr>
		<tr>
			<td class="">2.</td>
			<td class="">
				{$collection.data_map.sleeping_room_arrival_date_two.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_departure_date_two.data_text}	
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_single_two.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_double_two.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_suite_two.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_total_two.data_text}
			</td>
		</tr>
		<tr>
			<td class="">3.</td>
			<td class="">
				{$collection.data_map.sleeping_room_arrival_date_three.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_departure_date_three.data_text}	
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_single_three.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_double_three.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_suite_three.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_total_three.data_text}
			</td>
		</tr>
		<tr>
			<td class="">4.</td>
			<td class="">
				{$collection.data_map.sleeping_room_arrival_date_four.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_departure_date_four.data_text}	
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_single_four.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_double_four.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_suite_four.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_total_four.data_text}
			</td>
		</tr>
		<tr>
			<td class="">5.</td>
			<td class="">
				{$collection.data_map.sleeping_room_arrival_date_five.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_departure_date_five.data_text}	
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_single_five.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_double_five.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_suite_five.data_text}
			</td>
			<td class="">
				{$collection.data_map.sleeping_room_total_five.data_text}
			</td>
		</tr>
          </table>
	<p><strong>Other Information</strong><br></p>
	<table cellpadding="0" cellspacing="8" border="0">
          	<tr>
			<td class=""><b>{$object.data_map.food_beverage_required.contentclass_attribute.name}:</b> </td>
			<td class="">
				{$collection.data_map.food_beverage_required.data_text}
			</td>
		</tr>
		<tr>
			<td class="" colspan="2"><b>{$object.data_map.hospitality_and_banquet_requirements.contentclass_attribute.name}:</b> </td>
		</tr>	
		<tr>
			<td class="" colspan="2">
				{$collection.data_map.hospitality_and_banquet_requirements.data_text}
			</td>
		</tr>
		<tr>
			<td class="" colspan="2"><b>{$object.data_map.transportation_recreation_tour_ect.contentclass_attribute.name}:</b> </td>
		</tr>
		<tr>	
			<td class="" colspan="2">
				{$collection.data_map.transportation_recreation_tour_ect.data_text}
			</td>
		</tr>
		<tr>
			<td class="" colspan="2"><b>{$object.data_map.where_should_we_send_our_response.contentclass_attribute.name}:</b> </td>
		</tr>
		<tr>
			<td class="" colspan="2">				
				{if $collection.data_map.where_should_we_send_our_response.data_text|contains("0")}
					Phone<br>
				{/if}
				{if $collection.data_map.where_should_we_send_our_response.data_text|contains("1")}
					Email<br>
				{/if}
				{if $collection.data_map.where_should_we_send_our_response.data_text|contains("2")}
					Fax<br>
				{/if}
				{if $collection.data_map.where_should_we_send_our_response.data_text|contains("3")}
					Mail
				{/if}
			</td>
		</tr>
 </table>
{/default}
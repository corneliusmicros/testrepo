{set-block scope=root variable=subject}{"Holiday Inn Capitol: Holiday Inn Capitol"}{/set-block}
 
{if and(is_set($object.data_map.recipient), $object.data_map.recipient.has_content)}
{set-block scope=root variable=email_receiver}
{$object.data_map.recipient.content}
{/set-block}
{*set-block scope=root variable=email_sender}noreply@test.com{/set-block*}
{set-block scope=root variable=email_sender}{$collection.data_map.email.data_text}{/set-block}

{/if}
 
<strong>Holiday Inn Capitol: Holiday Inn Capitol</strong>
 
 <table border="0">
	<tr>
		{*First Name*}
		<td class="" align="left">{$object.data_map.first_name.contentclass_attribute.name}: </td>
		<td class="" align="left">
			{$collection.data_map.first_name.data_text}
		</td>
	</tr>
	<tr>
		{*Last Name*}
		<td class="" align="left">{$object.data_map.last_name.contentclass_attribute.name}: </td>
		<td class="" align="left">
			{$collection.data_map.last_name.data_text}
		</td>
	</tr>
	<tr>
		{*Organization*}
		<td class="" align="left">{$object.data_map.organization.contentclass_attribute.name}:</td>
		<td class="" align="left">
			{$collection.data_map.organization.data_text}	
		</td>
	</tr>
	<tr>
		{*Address *}
		<td class="" align="left">{$object.data_map.address.contentclass_attribute.name}:</td>
		<td class="" align="left">
			{$collection.data_map.address.data_text}	
		</td>
	</tr>
	<tr>
		{*City *}
		<td class="" align="left">{$object.data_map.city.contentclass_attribute.name}:</td>
		<td class="" align="left">
			{$collection.data_map.city.data_text}	
		</td>
	</tr>
	<tr>
		{*City *}
		<td class="" align="left">{$object.data_map.state.contentclass_attribute.name}:</td>
		<td class="" align="left">
			{$collection.data_map.state.data_text}	
		</td>
	</tr>
	<tr>
		{*Zip/Postal Code *}
		<td class="" align="left">{$object.data_map.zip_postal_code.contentclass_attribute.name}:</td>
		<td class="" align="left">
			{$collection.data_map.zip_postal_code.data_text}	
		</td>
	</tr>
	<tr>
		{* Country *}
		  <td class="" align="left">{$object.data_map.country.contentclass_attribute.name}:</td>
		  <td class="" align="left">
		  	{$collection.data_map.country.data_text}	
		  </td>
	</tr>
	<tr>
		{* Phone *}
		<td class="" align="left">{$object.data_map.telephone_number.contentclass_attribute.name}:</td>
		<td>
			{$collection.data_map.telephone_number.data_text}	
		</td>
	</tr>
	<tr>
		{* Fax *}
		<td class="" align="left">{$object.data_map.fax.contentclass_attribute.name}:</td>
		<td>
			{$collection.data_map.fax.data_text}	
		</td>
	</tr>
	<tr>
		{* Send Information to *}
		<td class="" align="left">{$object.data_map.send_information_to.contentclass_attribute.name}: </td>
		<td>
			{if $collection.data_map.send_information_to.data_text|contains("0")}
				 E-Mail<br>
			{/if}
			{if $collection.data_map.send_information_to.data_text|contains("1")}
				Phone<br>
			{/if}
			{if $collection.data_map.send_information_to.data_text|contains("2")}
				Mail
			{/if}
		</td>
	</tr>
	<tr>
		{* Message Topic *}
		<td class="" align="left">{$object.data_map.message_topic.contentclass_attribute.name}: </td>
		<td>
			{$collection.data_map.message_topic.data_text}	
		</td>
	</tr>
	<tr>
		{* Arrival Date *}
	        		<td class="" align="left">{$object.data_map.arrival_date.contentclass_attribute.name}:</td>
		<td>
			{$collection.data_map.arrival_date.data_text}	
		</td>
	        	</tr>
	<tr>
		{* Number of guests *}
		<td class="" align="left">{$object.data_map.guests.contentclass_attribute.name}:</td>
		<td>
			{$collection.data_map.guests.data_text}	
		</td>
	</tr>
	<tr>
		{* Number of guest rooms *}
		<td class="" align="left">{$object.data_map.guest_rooms.contentclass_attribute.name}:</td>
		<td>
			{$collection.data_map.guest_rooms.data_text}		
		</td>
	</tr>
	<tr>
		{* Number of nights per room *}
		<td class="" align="left">{$object.data_map.nights_per_room.contentclass_attribute.name}:</td>
		<td>
			{$collection.data_map.nights_per_room.data_text}
		</td>
	</tr>
	<tr>
		{* Comments or Questions *}
		<td class="" align="left">{$object.data_map.comments_or_questions.contentclass_attribute.name}: </td>
		<td>
			{$collection.data_map.comments_or_questions.data_text}		
		</td>
	</tr>
	<tr>
		{* E-mail *}
		  <td class="" align="left">{$object.data_map.email.contentclass_attribute.name}: </td>
		  <td class="" align="left">
		  	{$collection.data_map.email.data_text}
		  </td>
	</tr>
 </table>
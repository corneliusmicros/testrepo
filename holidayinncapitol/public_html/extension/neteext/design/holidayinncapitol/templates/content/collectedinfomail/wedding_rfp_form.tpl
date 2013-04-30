{set-block scope=root variable=subject}{"Wedding RFP information: Holiday Inn Capitol"}{/set-block}
 
{if and(is_set($object.data_map.recipient), $object.data_map.recipient.has_content)}
{set-block scope=root variable=email_receiver}
{$object.data_map.recipient.content}
{/set-block}
{*set-block scope=root variable=email_sender}noreply@test.com{/set-block*}
{set-block scope=root variable=email_sender}{$collection.data_map.email.data_text}{/set-block}

{/if}
 
<strong>Wedding RFP information: Holiday Inn Capitol</strong>

 <table border="0">
	<tr>
		{*Date Proposal *}
		<td align="left">{$object.data_map.date_proposal_received.contentclass_attribute.name}:</td>
		<td align="left">
			{$collection.data_map.date_proposal_received.data_text}
		</td>
	</tr>
	<tr>
		<td align="left"><br></td>
		<td align="left"><br></td>
	</tr>
	<tr>
		{* First Name *}
		<td align="left">{$object.data_map.first_name.contentclass_attribute.name}:</td>
		<td align="left">
		{$collection.data_map.first_name.data_text}
		</td>
	</tr>
	<tr>
		{* Last Name *}
		<td align="left">{$object.data_map.last_name.contentclass_attribute.name}:</td>
		<td align="left">
		{$collection.data_map.last_name.data_text}
		</td>
	</tr>
	<tr>
		{* Street *}
		<td align="left">{$object.data_map.street.contentclass_attribute.name}:</td>
		<td align="left">
		{$collection.data_map.street.data_text}</td>
	</tr>
	<tr>
		{* Suite/Apt *}
		<td align="left">{$object.data_map.suite_apt.contentclass_attribute.name}:</td>
		<td align="left">
		{$collection.data_map.suite_apt.data_text}
		</td>
	</tr>
	<tr>
		{* City *}
		<td align="left">{$object.data_map.city.contentclass_attribute.name}:</td>
		<td align="left">
		{$collection.data_map.city.data_text}
		</td>
	<tr>
		{* State *}
		<td align="left">{$object.data_map.state.contentclass_attribute.name}:</td>
		<td align="left">
		{$collection.data_map.state.data_text}
		</td>
	</tr>
	<tr>
		{* Zip *}
		<td align="left">{$object.data_map.zip_postal_code.contentclass_attribute.name}:</td>
		<td align="left">
		{$collection.data_map.zip_postal_code.data_text}
		</td>
	</tr>
	<tr>
		{* E-mail *}
	  	<td align="left">{$object.data_map.email.contentclass_attribute.name}:</td>
	  	<td align="left">
		{$collection.data_map.email.data_text}
		</td>
	</tr>
	<tr>	
		{* Phone *}
		<td align="left">{$object.data_map.telephone_number.contentclass_attribute.name}:</td>
		<td>
		{$collection.data_map.telephone_number.data_text}
		</td>
	</tr>
	<tr>
		{* Fax *}
		<td align="left">{$object.data_map.fax.contentclass_attribute.name}:</td>
		<td>
		{$collection.data_map.fax.data_text}
		</td>
	</tr>
</table>
<p>
<h3>Event Information</h3><br>
</p>
<table>
	<tr>
		{* Event Name *}
		<td>{$object.data_map.event_name.contentclass_attribute.name}:</td>
		<td>
		{$collection.data_map.event_name.data_text}
		</td>
	</tr>
	<tr>
		{* Date *}
		<td>{$object.data_map.event_date.contentclass_attribute.name}:</td>
		<td>
			{$collection.data_map.event_date.data_text}
		</td>
	</tr>
	<tr>
		{* Number of guests *}
		<td>{$object.data_map.guests.contentclass_attribute.name}:</td>
		<td>
		{$collection.data_map.guests.data_text}
		</td>
	</tr>
	<tr>
		{* Number of guest rooms *}
		<td>{$object.data_map.guest_rooms.contentclass_attribute.name}:</td>
		<td>
		{$collection.data_map.guest_rooms.data_text}
		</td>
	</tr>
	<tr>
		{* Number of nights per room *}
		<td>{$object.data_map.nights_per_room.contentclass_attribute.name}:</td>
		<td>
		{$collection.data_map.nights_per_room.data_text}
		</td>
	</tr>
	
	<tr>
		{* Which wedding services are you interested in ? *} 
		<td colspan="2">
		{$object.data_map.wedding_services.contentclass_attribute.name}:</td>
	</tr>
	<tr>
		<td></td>
		<td>{if $collection.data_map.wedding_services.data_text|contains("0")}
				 Ceremony<br>
			{/if}
			{if $collection.data_map.wedding_services.data_text|contains("1")}
				Reception<br>
			{/if}
			{if $collection.data_map.wedding_services.data_text|contains("2")}
				Rehersal Dinner<br>
			{/if}
		</td>
	</tr>
	
	<tr>
		{* How should we respond to you ? *} 
		<td colspan="2">{$object.data_map.respond_to_you.contentclass_attribute.name}:</td>
	</tr>
	<tr>
		<td></td>
		<td>
		{if $collection.data_map.respond_to_you.data_text|contains("0")}
				Phone<br>
			{/if}
			{if $collection.data_map.respond_to_you.data_text|contains("1")}
				E-mail<br>
			{/if}
			{if $collection.data_map.respond_to_you.data_text|contains("2")}
				Fax<br>
			{/if}
			{if $collection.data_map.respond_to_you.data_text|contains("3")}
				Mail
			{/if}
			</td>
	</tr>
</table>
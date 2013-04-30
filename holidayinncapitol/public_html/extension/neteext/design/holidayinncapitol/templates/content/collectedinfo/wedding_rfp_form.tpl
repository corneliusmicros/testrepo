{default collection=cond( $collection_id, fetch( content, collected_info_collection, hash( collection_id, $collection_id ) ), 
		fetch( content, collected_info_collection, hash( contentobject_id, $node.contentobject_id ) ) )}
 
 <h2>{'Thank you for your application.'}</h2>

<p>Thank you!  We have received your Wedding RFP and will contact you with our response via 

{let $varResponse =  $collection.data_map.respond_to_you.data_text|explode('-'))}
	{let $varReply=array('Phone','E-mail','Fax','Mail' )}
		{foreach $varResponse as $response}		
			{if $collection.data_map.respond_to_you.data_text|contains($response)}{$varReply[$response]}{/if}{delimiter}, {/delimiter}
		{/foreach}
	{/let}
{/let}</p>
{/default}
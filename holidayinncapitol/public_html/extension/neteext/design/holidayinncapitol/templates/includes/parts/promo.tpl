{if eq($node.node_id,2)}
	<div id="tower-image"></div>
	<div id="special-promos">
		<ul id="promo-list">
			<li class="first">
				{def $bed_breakfast = fetch( 'content', 'node', hash( 'node_id', 95))}
				<div class="promo_first_off" id="mink" onclick="location.href='javascript://;'" style="cursor: pointer;" title="Bed Breakfast Beyond">		{attribute_view_gui attribute=$bed_breakfast.data_map.promo_header}</div>
				<div class="promo_first_on">
				{attribute_view_gui attribute=$bed_breakfast.data_map.promo_image}
				 <p>{attribute_view_gui attribute=$bed_breakfast.data_map.promo_description}<br />
					<a href="{$bed_breakfast.data_map.link.content}" class="promo-link" title="Learn More">Learn More</a></p>
				</div>
			</li>
			<li class="second">
			{def $go_smith = fetch( 'content', 'node', hash( 'node_id', 106))}
				<div class="promo_second_off" id="mink1" onclick="location.href='javascript://;'" style="cursor: pointer;" title="Go Smithsonian">{attribute_view_gui attribute=$go_smith.data_map.promo_header}</div>
				<div class="promo_second_on">
					{attribute_view_gui attribute=$go_smith.data_map.promo_image}
					<p>{attribute_view_gui attribute=$go_smith.data_map.promo_description}<br />
						<a href="{$go_smith.data_map.link.content}" class="promo-link" title="Learn More">Learn More</a>
					</p>							
				</div>					
			</li>
		</ul>
	</div>
{else}
	<div id="tower-image-int"></div>
	<div id="special-promos-int">
		<ul id="promo-list">
			<li class="second">
				{def $go_smith = fetch( 'content', 'node', hash( 'node_id', 106))}
				<div class="promo_second_off" id="mink1" onclick="location.href='javascript://;'" style="cursor: pointer;" title="Go Smithsonian">{attribute_view_gui attribute=$go_smith.data_map.promo_header}</div>
				<div class="promo_second_on">
					{attribute_view_gui attribute=$go_smith.data_map.promo_image}
					<p>{attribute_view_gui attribute=$go_smith.data_map.promo_description}<br />
						<a href="{$go_smith.data_map.link.content}" class="promo-link" title="Learn More">Learn More</a>
					</p>							
				</div>						
			</li>
		</ul>
	</div>
{/if}

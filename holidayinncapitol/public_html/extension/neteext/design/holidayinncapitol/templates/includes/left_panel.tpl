{if eq($node.node_id,2)}
	<div id="left-panel">
		<div id="map">
			<ul>
				<li><a href={"Directions"|ezurl}><img src={"images/map.gif"|ezdesign} width="212" height="100" alt="Map" /></a></li>
				<li><a href={"Directions"|ezurl} class="map-bt" title="view map">view map</a></li>
			</ul>
		</div>
	</div>
{else}
	<div id="left-panel">
		<div id="special-promos-left">
			<ul id="promo-list-int">
				<li class="first">
					{def $bed_breakfast = fetch( 'content', 'node', hash( 'node_id', 181))}
					<span class="promo-heading-left">{attribute_view_gui attribute=$bed_breakfast.data_map.promo_header}</span>
					<div id="first-promo-int" class="promo-int">
						<a href="{$bed_breakfast.data_map.link.content}" title="Bed Breakfast Beyond">{attribute_view_gui attribute=$bed_breakfast.data_map.promo_image image_class=left_panel_image}</a>
						<p>{attribute_view_gui attribute=$bed_breakfast.data_map.promo_description}<a href="{$bed_breakfast.data_map.link.content}" class="promo-link-int" title="Learn More">Learn More</a></p>	
					</div>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
		<div id="map">
			<ul>
				<li><a href={"Directions"|ezurl}><img src={"images/map.gif"|ezdesign} width="212" height="100" alt="Map" /></a></li>
				<li><a href={"Directions"|ezurl} class="map-bt" title="view map">view map</a></li>
			</ul>
		</div>
		<div class="clear"></div>	
	</div>
{/if}
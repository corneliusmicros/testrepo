{set-block scope=root variable=cache_ttl}0{/set-block}	
{def $maplocations = fetch('content', 'list', hash('parent_node_id', 147,'class_filter_type','include','class_filter_array', array('category')))}


<script type="text/javascript" src="http://dev.tigglobal.com/neteMapApi.js"></script> 
{literal}
	 <script type="text/javascript">
		<!--
		var map;
		var newpoints = new Array();
		
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function'){
				window.onload = func
			} else {
				window.onload = function() {
					oldonload();
					func();
				}
			}
		}
		
		addLoadEvent(loadMap);
		addLoadEvent(addPoints);
		
		function loadMap() {
			map = new GMap2(document.getElementById("map1"));
			map.addControl(new GLargeMapControl3D());
			
			//map.addControl(new GLargeMapControl());
			//map.addControl(new GMapTypeControl());
			
			map.enableScrollWheelZoom();
			map.addControl(new GMapTypeControl());
			
			map.setCenter(new GLatLng({/literal}{$node.object.data_map.latitude.content}, {$node.object.data_map.longitude.content}), {$node.object.data_map.zoom_level.content}{literal}); 
		}
		function addPoints() {
		
			choice = 'all';
			 	{/literal}																		 
			newpoints[0] = new Array({$node.object.data_map.latitude.content}, {$node.object.data_map.longitude.content}, 1, '{$node.object.data_map.hotel_name.content}', '{$node.object.data_map.hotel_address.content}', 'main'); 
			{let counter=1}
			{foreach $maplocations as $maplocationspoints}
					{if is_set($maplocationspoints.data_map.location)}
					{foreach $maplocationspoints.data_map.location.content.relation_list as $related}
						{def $mapnode = fetch( 'content', 'node', hash( 'node_id', $related.node_id ) )}
						{def $maplocationsname=$maplocationspoints.object.data_map.name.content}{def $maplocname=$maplocationsname|explode('\'')|implode('')}

						{def $map_location_name=$mapnode.data_map.location_name.content}{def $locationname=$map_location_name|explode('\'')|implode('')}
						
							
							newpoints[{$counter}] = new Array({$mapnode.data_map.latitude.content}, {$mapnode.data_map.longitude.content},{sum( $maplocationspoints.object.data_map.bubble_color.data_text, 2 )}, '{$locationname}', '{$mapnode.data_map.address.content}', '{$maplocname}'); 
						{set counter=$counter|inc}
					{/foreach}
					{/if}
			{/foreach}
			{/let}
			{literal}
			
			
							
			for(var i = 0; i < newpoints.length; i++) {
				var point = new GLatLng(newpoints[i][0],newpoints[i][1]);
		
		 		if (choice != 'all') {
					if (choice == newpoints[i][5] || newpoints[i][5] == 'main') {
						var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
						map.addOverlay(oMarker);
					}
					else {
						var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
						map.removeOverlay(oMarker);
					}
				}
				else {
					var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
					map.addOverlay(oMarker);
				}
			}
		}
		
		function createMarker(point, num, toName, toAddress) {
			  
			var cicons = new Array("image_1.png","mm_20_green.png","mm_20_blue.png", "mm_20_purple.png","mm_20_brown.png","mm_20_yellow.png");
			var icon = new GIcon();
			var iconString = cicons[num-1];
			
			icon.image = {/literal}{"images/gmap/"|ezdesign}+iconString;
			icon.shadow = {"mm_20_shadow.png"|ezdesign}
			if(icon.image == {"images/gmap/image_1.png"|ezdesign}){literal}
				icon.iconSize = new GSize(23,43);
			else
			icon.iconSize = new GSize(17,25);
			icon.iconAnchor = new GPoint(17,25);
			icon.infoWindowAnchor = new GPoint(5,1);
		
			var marker = new GMarker(point, icon);
			if (point =="(38.8859263, -77.019509)"){	
				map.addOverlay(marker)
				marker.openInfoWindowHtml("<div id='popup' style='width:300px;Height:100px;'><form action='http://maps.google.com/maps' method='get' target='_blank'><input type='hidden' name='saddr' id='saddr' value={/literal}''{literal} /><input type='hidden' name='daddr' id='daddr' value='" + toAddress + "' /><strong>" + toName + "</strong><br>" + toAddress + "<br /><br /><center><input type='submit' value='Directions' /></center></form></div>");
			}
			GEvent.addListener(marker, "click", function() {

				if (point =="(38.8859263, -77.019509)"){	
					map.addOverlay(marker)
					marker.openInfoWindowHtml("<div id='popup' style='width:300px;Height:100px;'><form action='http://maps.google.com/maps' method='get' target='_blank'><input type='hidden' name='saddr' id='saddr' value={/literal}''{literal} /><input type='hidden' name='daddr' id='daddr' value='" + toAddress + "' /><strong>" + toName + "</strong><br>" + toAddress + "<br /><br /><center><input type='submit' value='Directions' /></center></form></div>");
				}else{
				
					marker.openInfoWindowHtml("<div id='popup' style='width:300px;Height:100px;'><form action='http://maps.google.com/maps' method='get' target='_blank'><input type='hidden' name='saddr' id='saddr' value={/literal}'{$node.object.data_map.hotel_address.content}'{literal} /><input type='hidden' name='daddr' id='daddr' value='" + toAddress + "' /><strong>" + toName + "</strong><br>" + toAddress + "<br /><br /><center><input type='submit' value='Directions' /></center></form></div>");
				}
			});
				return marker;
		}
		
		function surfto(choice) {
			map.clearOverlays();
		
			for(var i = 0; i < newpoints.length; i++) {
		 		var point = new GLatLng(newpoints[i][0],newpoints[i][1]);
				if (choice != 'all') {
					if (choice == newpoints[i][5] || newpoints[i][5] == 'main') {
						var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
						map.addOverlay(oMarker);
					}
					else {
						var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
						map.removeOverlay(oMarker);
					}
				}
				else {
					var oMarker = createMarker(point, newpoints[i][2], newpoints[i][3], newpoints[i][4]);
					map.addOverlay(oMarker);
				}
			}
		}
		
		//-->
		</script>
	<style>
		div#map1{
			border:solid #75A76D 1px;
			height: 405px;
		}
		div#popup {
		/*background:#82BD7A;
		border:1px solid #A3B2C9;*/
		background:#75A76D;
		border:1px solid #75A76D;
		margin:0px;
		padding:7px;		
		font-family: verdana, Geneva, Arial, Helvetica, sans-serif;
		color:#ffffff;
		font-size: 12px;
		font-weight: normal;
		text-decoration: none;
		}
		select.map{ width:110px;}
	</style>
{/literal}
<div class="hd-text">{attribute_view_gui attribute=$node.object.data_map.text_header}</div>
<div id="map1"></div>
<div id='popup'>
	Select Overlay Type
	<SELECT NAME="dest" onChange="surfto(this.value)" class="map">
		<OPTION VALUE="all">Show all</OPTION>
		<OPTION VALUE="hotel">Hotel Location</OPTION>
		{foreach $maplocations as $maplocationspoints}
		{def $maplocationsname=$maplocationspoints.object.data_map.name.content}{def $maplocname=$maplocationsname|explode('\'')|implode('')}
		<OPTION VALUE="{$maplocname}">{$maplocname}</OPTION>	
		{/foreach}
	</SELECT><br /><br />	
	{def $imgArrs = array("image_1.png","mm_20_green.png","mm_20_blue.png", "mm_20_purple.png","mm_20_brown.png","mm_20_yellow.png")}
	{let counter=1}
		{foreach $maplocations as $maplocationspoints}
			{def $mapImg = sum( $maplocationspoints.object.data_map.bubble_color.data_text, 1 )}
			{def $imgPath = concat("images/gmap/", $imgArrs[$mapImg])}
			{def $maplocationsname=$maplocationspoints.object.data_map.name.content}{def $maplocname=$maplocationsname|explode('\'')|implode('')}
				<img src={$imgPath|ezdesign}> {$maplocname}
			{set counter=$counter|inc}
		{/foreach}
	{/let}	
	<br>
</div>
{attribute_view_gui attribute=$node.object.data_map.body}
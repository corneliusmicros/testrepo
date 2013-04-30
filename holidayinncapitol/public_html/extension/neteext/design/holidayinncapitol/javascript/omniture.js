$(function(){
	var omniSuiteID = 'thayhicapital';
	
	$("form[name='omni_email_form']").submit(function(){		var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar2,events'; s.events='event3'; s.prop1='Email Sign Up'; s.eVar2='Email Sign Up'; s.tl(this,'o','Email Sign Up'); });
	$("form[name='omni_reservation_form']").submit(function(){	var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar1,events'; s.events='event1'; s.prop1='Reservation Widget'; s.eVar1='Reservation Widget'; s.tl(this,'o','Reservation Widget'); });
	$("form[name='omni_contact_form']").submit(function(){		var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar2,events'; s.events='event9'; s.prop1='Contact Us Submission'; s.eVar2='Contact Us Submission'; s.tl(this,'o','Contact Us Submission');});
	$("form[name='omni_meeting_rfp_form']").submit(function(){	var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar2,events'; s.events='event4'; s.prop1='Meeting RFP Submission'; s.eVar2='Meeting RFP Submission'; s.tl(this,'o','Meeting RFP Submission');});		
	$("form[name='omni_wedding_rfp_form']").submit(function(){	var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar2,events'; s.events='event4'; s.prop1='Wedding RFP Submission'; s.eVar2='Wedding RFP Submission'; s.tl(this,'o','Wedding RFP Submission');});
	$("a[name='omni_reservation_text']").click(function(){ 		var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar1,events'; s.events='event1'; s.prop1='Reservation Text Link'; s.eVar1='Reservation Text Link'; s.tl(this,'o','Reservation Text Link'); });
	$("a[name='omni_reservation_nav']").click(function(){ 		var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar1,events'; s.events='event1'; s.prop1='Reservation Nav'; s.eVar1='Reservation Nav'; s.tl(this,'o','Reservation Nav'); });
	$("a[name='omni_reservation_footer']").click(function(){	var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar1,events'; s.events='event1'; s.prop1='Reservation Footer'; s.eVar1='Reservation Footer'; s.tl(this,'o','Reservation Footer'); });
	$("a[name='omni_location_nav'],a[name='omni_location_footer']").click(function(){	var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar2,events'; s.events='event8'; s.prop1='Location and Map'; s.eVar2='Location and Map'; s.tl(this,'o','Location and Map'); });
	$("a[name='omni_contact_nav'], a[name='omni_contact_footer']").click(function(){	var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar2,events'; s.events='event9'; s.prop1='Contact Us'; s.eVar2='Contact Us'; s.tl(this,'o','Contact Us'); });
	$("a[name='omni_gallery_nav'],a[name='omni_gallery_footer']").click(function(){		var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar2,events'; s.events='event6'; s.prop1='Photo Tour'; s.eVar2='Photo Tour'; s.tl(this,'o','Photo Tour'); });
	
	$("a[name*='omni_specials']").click(function()
	{	
		var name_attr_arr = $(this).attr("name").split("_");
		var package_name  = name_attr_arr[2].replace(/\-/g," "); 
		var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar1,events'; s.events='event2'; s.prop1=package_name; s.eVar1=package_name; s.tl(this,'o',package_name);;
	});

	$("a[name*='omni_reservation_banner']").click(function()
	{	
		var name_attr_arr = $(this).attr("name").split("_");
		var banner_name  = name_attr_arr[2].replace(/\-/g," "); 
		var s=s_gi(omniSuiteID); s.linkTrackVars='prop1,eVar1,events'; s.events='event1'; s.prop1=banner_name; s.eVar1=banner_name; s.tl(this,'o',banner_name);;
	});
		
});
$(function(){

	$('#header-img').cycle({
			fx: 'fade',
			speed: 3000,
			timeout: 6000
		});

		$(".promo_first_on").hide();		
		$(".promo_second_on").hide();
		$("#mink").click(function(){
		$(".promo_first_on").slideToggle("500");
		$(".promo_first_off").toggleClass("cngbg");
		});
		$("#mink1").click(function(){
			$(".promo_second_on").slideToggle("500");
			$(".promo_second_off").toggleClass("cngbg_second");
		});

	// cufon script
	//Cufon.replace('#content .btn_recreation',{ fontFamily:'Myriad Pro' , fontWeight: '400'});
	Cufon.replace('#reservation h2', { fontFamily: 'Myriad Pro', fontWeight: '400'});
	Cufon.replace('#reservation-int h2', { fontFamily: 'Myriad Pro', fontWeight: '400'});
	//Cufon.replace('#nav li a',{hover: true, fontFamily: 'Myriad Pro', fontWeight: '400'});
	Cufon.replace('#reservation a.btncheckrate', { fontFamily: 'Myriad Pro', fontWeight: '700'});
	Cufon.replace('#reservation-int a.btncheckrate', { fontFamily: 'Myriad Pro', fontWeight: '700'});
	Cufon.replace('#email-exclusive h2', { fontFamily: 'Myriad Pro', fontWeight: '300'});
	Cufon.replace('#content-int #gallery_page h1', { fontFamily: 'Myriad Pro', fontWeight: '300'});
	Cufon.replace('#footer-left h2', { fontFamily: 'Myriad Pro', fontWeight: '300'});	
	Cufon.replace('.hd-text', { fontFamily: 'Myriad Pro', fontWeight: '300'});
	Cufon.replace('.hd-text-int', { fontFamily: 'Myriad Pro', fontWeight: '300'});
	Cufon.replace('#map a.map-bt', { fontFamily: 'TradeGothic', fontWeight: '700'});
	Cufon.replace('a.submit-bt', { fontFamily: 'TradeGothic', fontWeight: '700'});
	
	// Main Menu Dropdown
	$(".acb").hover(function(){
		//alert($(this).parent().html());
		var mlv = $(this).parent().width();
		$(this).parent().width(mlv);
		$(this).parent().addClass("lhover");
	}, function()
	{
		$(this).parent().removeClass("lhover");

	});	
	$(".ullihover").hover(function(){
		//alert($(this).parent().html());
		var mlv = $(this).parent().parent().width();
		$(this).width(mlv);
		$(this).parent().parent().addClass("lhover");
	}, function()
	{
		$(this).parent().parent().removeClass("lhover");

	});	
	$("ul#nav li.active ul").addClass("hold");
	$("ul#nav li:not(ul#nav ul li)").hover(function()
	{
		if(!$(this).parent().hasClass("hold"))
			$(".hold").hide();
		$(this).addClass("active2");
		$("ul", $(this)).show();
	}, function()
	{
		$(this).removeClass("active2");
		$("ul", $(this)).hide();
		
		if($(this).parent().attr("id")=="nav")
			$(".hold").show();

	});	
	
	//	photo gallery
	if ($('.gallery').length != 0){
		$(".gallery a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:10000});
	}
	
	//collapse more
	$("#collapse-more").append("<a href='#' class='btn_read_more_close' title='read less'>- read less</a>").hide();
		$(".btn_read_more").click(function(){
			if ( $(this).next().is(":hidden") ) {
				$(this).next().slideDown("fast");
				$(this).hide();
			} else {
			$(".btn_read_more").next().hide();
				$(this).next().slideDown("fast");
				$(this).show();
			}
		return false;
		})
		$(".btn_read_more_close").click(function(){
			var btnReadMore = $(this).parent().prev()
				$(this).parent().slideUp("fast", function(){
				$(btnReadMore).fadeIn("fast")
		});
		return false;
		})
		
		//reservation widget
		$("form[name=omni_reservation_form] .btncheckrate").click( function(){
		  
		  var rangeMaxIn = ( $('.indate').datepicker("getDate").getMonth() ).toString() + ( $('.indate').datepicker("getDate").getFullYear() ).toString();
		  $("input[name=checkInMonthYear]").val( rangeMaxIn );
		  $("input[name=checkInDate]").val(( $('.indate').datepicker("getDate").getDate() ).toString());
		  
		  var rangeMaxIn = ( $('.outdate').datepicker("getDate").getMonth() ).toString() + ( $('.outdate').datepicker("getDate").getFullYear() ).toString();
		  $("input[name=checkOutMonthYear]").val( rangeMaxIn );
		  $("input[name=checkOutDate]").val(( $('.outdate').datepicker("getDate").getDate() ).toString());
		  
		  $("form[name=omni_reservation_form]").submit();
		  });
		
		$( ".indate" ).datepicker({
			showOn: 'both',
			buttonImageOnly: true,
			buttonImage: sitepath+'images/calender.gif',
			buttonText: 'Calendar',
			dateFormat:'mm/dd/yy',
			minDate: 0,
			maxDate: '+1Y'
		});
		$( ".outdate" ).datepicker({
			showOn: 'both',
			buttonImageOnly: true,
			buttonImage: sitepath+'images/calender.gif',
			buttonText: 'Calendar',
			beforeShow: ResminRange,
			dateFormat:'mm/dd/yy',
			minDate: 1,
			maxDate: '+1Y'
		});
		$(".indate").change(function(){
			var ci = $(this).datepicker("getDate");
			ci.setDate(ci.getDate()+1);
			$('.outdate').datepicker("setDate",ci);
		});
		
		$('.indate').datepicker('setDate', '+0');
		$('.outdate').datepicker('setDate', '+1');
		
		 function ResminRange(input) {
	           return {//('.reswidget').find('.aslideshow');
	               minDate: (jQuery(($('.reswidget').find('.indate'))).datepicker("getDate") != null ? jQuery(($('.reswidget').find('.indate'))).datepicker("getDate") : 1)
	           };
	       }
		   
		//form calendar
	$( ".datepicker-arrival").datepicker({
		showOn: "button",
		buttonImage: sitepath+"images/calender.gif",
		buttonImageOnly: true,
		buttonText: 'Calendar',
		minDate:'0'
		});
	
	if ($('.datepicker_date_arrival').length != 0){
		$('.datepicker_date_arrival,.datepicker_date')
			.datepicker({
			showOn: 'button',
			minDate:'0',
			buttonImage: sitepath+'images/calender.gif',
			buttonText: 'Calendar',
			buttonImageOnly: true
		})
		//$('.datepicker_date_arrival').datepicker('setDate', '+0');
		//$('.datepicker_date_departure').datepicker('setDate', '+1');
		
		$(".datepicker_date_arrival").change(function(){
			var ci = $(this).datepicker("getDate");
			ci.setDate(ci.getDate()+1);			
				$($(this).parent().next().children('.datepicker_date_departure')).datepicker("setDate",ci);
			});
		}
	
		
		$('.datepicker_date_departure')
			.datepicker({
			showOn: 'button',
			beforeShow: minRange,
	        defaultDate: +0,
			buttonImage: sitepath+'images/calender.gif',
			buttonText: 'Calendar',
			buttonImageOnly: true
			});
		
		 function minRange(input) {
	           return {
	               minDate: (jQuery(($(this).parent().prev().children('.datepicker_date_arrival'))).datepicker("getDate") != null ? jQuery(($(this).parent().prev().children('.datepicker_date_arrival'))).datepicker("getDate") : 1)
	           };
	       }
		
		
});	
	
	//Custume style select box

	(function($){
			$.fn.extend({
			customStyle : function(options) {
			  if(!$.browser.msie || ($.browser.msie&&$.browser.version>6)){
			  return this.each(function() {	  
					var currentSelected = $(this).find(':selected');
					$(this).after('<span class="customStyleSelectBox"><span class="customStyleSelectBoxInner">'+currentSelected.text()+'</span></span>').css({position:'absolute', opacity:0,fontSize:$(this).next().css('font-size')});
					var selectBoxSpan = $(this).next();
					var selectBoxWidth = parseInt($(this).width()) - parseInt(selectBoxSpan.css('padding-left')) -parseInt(selectBoxSpan.css('padding-right'));			
					var selectBoxSpanInner = selectBoxSpan.find(':first-child');
					selectBoxSpan.css({display:'inline-block'});
					selectBoxSpanInner.css({width:selectBoxWidth, display:'inline-block'});
					var selectBoxHeight = parseInt(selectBoxSpan.height()) + parseInt(selectBoxSpan.css('padding-top')) + parseInt(selectBoxSpan.css('padding-bottom'));
					$(this).height(selectBoxHeight).change(function(){				
					selectBoxSpanInner.text($(this).find(':selected').text()).parent().addClass('changed');			
				});			
			  });
			  }
			}
		 });
		})(jQuery);
		$(function(){
			$('.styled').customStyle();
		});

$(document).ready(function(){ 
	// PNG FIX
	$('img').pngFix();
	
	// MENU
	$(".menu ul").supersubs({ 
		minWidth:    12,
		maxWidth:    30	
	})
	.superfish({ 
		autoArrows:  false,
		dropShadows: false 
	}); 
	
	// SOME STYLE USER BOX
	$("ul.user li:first-child").css("padding", "0 0 12px").css("margin", "-3px 0 0");
	$("ul.user li:last-child").css("padding", "12px 0 0").css("background-image", "none");
	$("ul.user li:last-child").css("margin", "0 0 -5px")
	
	// SOME STYLE PAGE TABLE
	$(".pages table td:first-child").css("padding", "0 8px 0 6px").css("width", "13px");
	$(".pages table td:last-child").css("border-right", "none").css("text-align", "center").css("padding", "4px 20px 0");
	$(".pages table tr:odd").css("background-color", "#f8f8f8");
	
	// CHECK ALL PAGES
	$('.pages .checkall').click(function () {
		$(this).parents('.pages table').find(':checkbox').attr('checked', this.checked);
	});
	
	// HIDE BOXES
	$('.toggle').click( function() {
		$(this).parent().next('.content').fadeToggle(400);
	});
	
	// SYSTEM MESSAGES
	$("div.message img").click(function () {
      $(this).parent().closest('div.message').fadeOut();
    });
	
	// TABS
	$('.tabs').tabs({ fx: { opacity: 'toggle' } });
	$(".tabs table tr td:first-child").css('border-left','none').css('padding-left','0');
	
	// THUMB HOVER
	$(function() {
		$("div.thumb").hover(
			function() {
				$(this).children("img").fadeTo(200, 0.85).end().children("div").show();
			},
			function() {
				$(this).children("img").fadeTo(200, 1).end().children("div").hide();
			});
	});
	

	// STYLE FILE BUTTON
	$("input[type=file]").filestyle({
	   imageheight : 24,
	   imagewidth : 89,
	   width : 250
	});
	
	// STYLE SELECT BOXES
	$('.row select, .actionbox select').sbCustomSelect();
	
	$('input.datepicker').datePicker({clickInput:true});
	

});
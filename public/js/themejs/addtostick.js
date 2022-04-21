/* -------------------------------------------------------------------------------- /
	
Magentech jQuery
Created by Magentech
v1.0 - 20.9.2016
All rights reserved.

/ -------------------------------------------------------------------------------- */

$(window).scroll(function() {   
	var target = $( '.tour-single' );
	var sticky_nav_offset = $(".tour-single").offset();
	if( sticky_nav_offset != null ){
		var sticky_nav_mobile_offset_top = sticky_nav_offset.top;
		var scroll_top = $(window).scrollTop();
		if ( scroll_top > sticky_nav_mobile_offset_top ) {
			$(".tour-single").addClass('sticky');
		}else{
			$(".tour-single").removeClass('sticky');
		}
	}
});

$('#nav').onePageNav();
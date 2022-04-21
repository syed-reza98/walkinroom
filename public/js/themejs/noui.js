/* Tabs Block */
$(document).ready(function($) {
	var tabs = $('ul.nav-tabs');
	$(".tab-content .clearfix").each(function() {
		if($(this).index() != 0) {
			$(this).css({visibility: 'hidden',display:'block' })
		}
	});
	tabs.each(function(i) {
		var tab = $(this).find('> li > a');
		var litab = $(this).find('li');
		var ua = navigator.userAgent,
		event = (ua.match(/iPad/i)) ? "touchstart" : "click";
		tab.bind(event, function(e) {
			var contentLocation = $(this).attr('href');
			if(contentLocation.charAt(0)=="#") {
				e.preventDefault();
				tab.removeClass('active');
				litab.removeClass('active');
				$(this).addClass('active');
				$(contentLocation).css({ visibility: 'visible'}).addClass('active').siblings().css({ visibility: 'hidden'}).removeClass('active');
			}
		});
		litab.bind(event, function(e) {
				litab.removeClass('active');
				$(this).addClass('active');
		});
	});
});


//<![CDATA[
$(window).load(function($){
	$ = typeof($ !== 'funtion') ? jQuery : $;
	
	var obj_class 			= $('#content .row').find('.product-layout').parent(),
		product_arr_all 	= $(".so_filter_wrap .modcontent ul").attr("data-product_id"),
		opt_value_id		= "",
		att_value_id		= "",
		manu_value_id		= "",
		subcate_value_id	= "",
		$minPrice			= 74,
		$maxPrice 			= 1202,
		$minPrice_new 		= 74,
		$maxPrice_new 		= 1202,
		url 				= '#';	
		text_search			= "";
	
	obj_class.addClass('so-filter-gird');
	$load_gif = $('.so-filter-gird');
	$(".so-filter-heading").on("click",function(){
		if($(this).find(".fa").hasClass("fa-chevron-down")){
			$(this).find(".fa-chevron-down").addClass('fa-chevron-right','slow').removeClass('fa-chevron-down','slow');
		}else{
			$(this).find(".fa-chevron-right").addClass('fa-chevron-down','slow').removeClass('fa-chevron-right','slow');
		}
		$(this).parent().children(".so-filter-content-opts").slideToggle("slow");
	});

	
	$.arrayIntersect = function(a, b)
	{
		return $.grep(a, function(i)
		{
			return $.inArray(i, b) > -1;
		});
	};

	function getCountProduct(){
		var product_tmp = $(".so_filter_wrap .modcontent ul").attr("data-product_id");
		
		product_arr = product_tmp.split(',');
		if(product_arr == ''){
			$('.so-filter-option').each(function(){
				$(this).find('.option-count span').html(0);
			});
		}else{
			$('.so-filter-option.opt-select').each(function(){
				var product = $(this).attr('data-list_product');
				if(product != ''){
					var product_array = product.split(',');
					var length = product_array.length;
					var dem = 0 , a =[];
					var _general = $.arrayIntersect(product_arr, product_array);
					var count = _general.length;
					// for (var i = 0; i < length;i++){
						// if(product_arr.indexOf(product_array[i]) > -1){
							// count = count + 1;
							// dem = product_array.length - product_arr.split(',').length;
						// }
					// }
					if(count == 0){
						$(this).removeClass("opt_enable").addClass("opt_disable");
						$(this).attr("disabled", "disabled");

					}else{
						$(this).removeClass("opt_enable").removeClass("opt_disable").addClass("opt_enable");
						$(this).removeAttr("disabled");
					}
					var type = $(this).attr("data-type");
					if(count > 0 && ((att_value_id != "" && type == "attribute") || (opt_value_id != "" && type == "option"))){
						$(this).find('.option-count span').html(count);
					}else{
						$(this).find('.option-count span').html(count);
					}
				}
			});
		}
	}

			var range = document.getElementById('slider-range');
		noUiSlider.create(range, {
			start: [$minPrice_new, $maxPrice_new],
			step: 1,
			connect: true,
			range: {
				'min': $minPrice,
				'max': $maxPrice
			},
			slide: function(event, ui) {
	            if ($minPrice == $maxPrice) {
	                return false;
	            }
	        }
		});
		var valueMin = $('.content_min_max .input_min'),
			valueMax = $('.content_min_max .input_max');

		range.noUiSlider.on('change', function( values, handle ) {
			if ( handle ) {

				valueMax.val(values[handle]);
				$maxPrice_new = values[handle];
				
			} else {
				valueMin.val(values[handle]);
				$minPrice_new = values[handle];
				
			}
			

		});
	
	
		

	
			

			$('#btn_resetAll').on("click",function(){
			opt_value_id 		= "";
			att_value_id 		= "";
			manu_value_id 		= "";
			$minPrice_new		= "",
			$maxPrice_new 		= "",
			text_search 		= "";
			subcate_value_id	= "";
			url = url.replace(/(&opt_id=)[^\&]+/,'');
			url = url.replace(/(&att_id=)[^\&]+/,'');
			url = url.replace(/(&manu_id=)[^\&]+/,'');
			url = url.replace(/(&minPrice=)[^\&]+/,'');
			url = url.replace(/(&maxPrice=)[^\&]+/,'');
			url = url.replace(/(&search=)[^\&]+/,'');
			url = url.replace(/(&subcate_id=)[^\&]+/,'');
			$('.content_min_max .input_min').val($minPrice);
			$('.content_min_max .input_max').val($maxPrice);
			if(($minPrice != 0 || $maxPrice != 0) && ($minPrice != $maxPrice)){
				range.noUiSlider.set([$minPrice, $maxPrice]);
			}
			
			$(".so-filter-option").removeClass("opt_active");
			$(".so-filter-option").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
			$(".so-filter-option").find(".option-count").removeClass("opt_close");

			$(".so-filter-option-sub").removeClass("opt_active");
			$(".so-filter-option-sub").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
			$(".so-filter-option-sub").find(".option-count").removeClass("opt_close");

			$("#text_search").val('');
			location.href= url;
		});
		
	

});

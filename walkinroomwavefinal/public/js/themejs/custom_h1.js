$(function() {
	var austDay = new Date(2019, 12-1, 10);
	$('.Countdown-1').countdown(austDay, function(event) {
		var $this = $(this).html(event.strftime(''
     + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">D: </div></div>'
     + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">H: </div></div>'
     + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">M: </div></div>'
     + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">S </div></div>'));
	});

});
$(function () {
	var austDay = new Date(2020, 08-1 , 30);
  $('.countdown_inner').countdown(austDay, function(event) {
   var $this = $(this).html(event.strftime(''
    + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">D </div></div>'
    + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">H</div></div>'
    + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">M </div></div>'
    + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">S</div></div>'));
 });
});
var hasTooltip = $('[data-toggle=\'tooltip\']').tooltip({container: 'body'});     

$('[data-toggle=\'tooltip\']').hover(

  function() {},

  function(e) {$('[data-toggle=\'tooltip\']').tooltip('hide');}

  );

$(document).ready(function(){
	// Messenger posmotion
	$( "#so_popup_countdown .list-cates .customer a.login" ).click(function() {
		$('body').toggleClass('hidden-popup-countdown');
	});

	$( ".header-form .button-header" ).click(function() {
		$('.toogle_content').slideToggle(200);
		$(this).toggleClass('active');
	});
	// Fix hover on IOS
	$('body').bind('touchstart', function() {}); 


  /*
  ** Search on click
  */
  $(".search-top .icon-search").on('click', function(){
    $(".search-top #sw_search").fadeToggle();
    $('.search-top .icon-search').toggleClass("closex");
  });

	//Video h1

  $('.ytvideo[data-video]').one('click', function() {

    var $this = $(this);
    var width = $this.attr("width");
    var height = $this.attr("height");

    $this.html('<iframe src="https://www.youtube.com/embed/' + $this.data("video") + '?autoplay=1"></iframe>');
  });

	//Smooth scrolling and smart navigation

  $(window).scroll(function() {   
      var target = $( '#header' );
      var sticky_nav_offset = $("#header").offset();
      if( sticky_nav_offset != null ){
        var sticky_nav_mobile_offset_top = sticky_nav_offset.top;
        var scroll_top = $(window).scrollTop();
        if ( scroll_top > sticky_nav_mobile_offset_top ) {
          $("#header").addClass('sticky');
        }else{
          $("#header").removeClass('sticky');
        }
      }
  });


  $(document).ready(function(){
    $(".topbar-close").click(function(){
      $(".coupon-code").slideToggle();
    });
    $(".button").on('click',function(){
      if($('.button').hasClass('active')){
        $('.button').removeClass('active');
      }else{
        $('.button').removeClass('active');
        $('.button').addClass('active');
      }
    });
  });



  $(document).ready(function($) {
    if($(window).width() < 1199){
      $(function(){
        $('.bonus-menu ul').addClass('test');
        $('.test').owlCarousel2({
          pagination: false,
          center: false,
          nav: false,
          dots: false,
          loop: true,
          margin: 0,
          navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
          slideBy: 1,
          autoplay: true,
          autoplayTimeout: 2500,
          autoplayHoverPause: true,
          autoplaySpeed: 800,
          startPosition: 0, 
          responsive:{
            0:{
              items:1
            },
            481:{
              items:2
            },
            992:{
              items:3
            }
          }
        });

      });
    }
  });


});
$(document).ready(function(){
	$('#input-option224 ').on('click', 'span', function () {
   $('#input-option224  span').removeClass("active");
   $(this).toggleClass("active");
 });
});

// Resonsive Sidebar aside
$(document).ready(function(){
	$(".open-sidebar").click(function(e){
    e.preventDefault();
    $(".sidebar-overlay").toggleClass("show");
    $(".sidebar-offcanvas").toggleClass("active");
  });

  $(".sidebar-overlay").click(function(e){
    e.preventDefault();
    $(".sidebar-overlay").toggleClass("show");
    $(".sidebar-offcanvas").toggleClass("active");
  });
  $('#close-sidebar').click(function() {
    $('.sidebar-overlay').removeClass('show');
    $('.sidebar-offcanvas').removeClass('active');

  }); 

});
$(document).ready(function(){
  var total_item = 4 ;
  $(".sohomeslider-inner-1").owlCarousel2({
    rtl: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    autoplay: true,
    autoplayTimeout: 5000,
    autoplaySpeed:  1000,
    smartSpeed: 500,
    autoplayHoverPause: true,
    startPosition: 0,
    mouseDrag:  true,
    touchDrag: true,
    dots: true,
    autoWidth: false,
    dotClass: "owl2-dot",
    dotsClass: "owl2-dots",
    loop: true,
    navText: ["Next", "Prev"],
    navClass: ["owl2-prev", "owl2-next"],

    responsive: {
      0:{ items: 1,
        nav: total_item <= 1 ? false : ((true ) ? true: false),
      },
      480:{ items: 1,
        nav: total_item <= 1 ? false : ((true ) ? true: false),
      },
      768:{ items: 1,
        nav: total_item <= 1 ? false : ((true ) ? true: false),
      },
      992:{ items: 1,
        nav: total_item <= 1 ? false : ((true ) ? true: false),
      },
      1200:{ items: 1,
        nav: total_item <= 1 ? false : ((true ) ? true: false),
      }
    },
  });
});

$(document).ready(function ($) {
  (function(element) {
    var $element = $(element),
    $tab = $('.ltabs-tab', $element),
    $tab_label = $('.ltabs-tab-label', $tab),
    $tabs = $('.ltabs-tabs', $element),
    ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
    effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),
    delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),
    duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),
    type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
    $margin = $tabs.parents('.ltabs-tabs-container').attr('data-margin'),
    
    $col_lg = $tabs.parents('.ltabs-tabs-container').attr('data-lg'),
    $col_md = $tabs.parents('.ltabs-tabs-container').attr('data-md'),
    $col_sm = $tabs.parents('.ltabs-tabs-container').attr('data-sm'),
    $col_xs = $tabs.parents('.ltabs-tabs-container').attr('data-xs'),
    
    
    $items_content = $('.ltabs-items', $element),
    $items_inner = $('.ltabs-items-inner', $items_content),
    $items_first_active = $('.ltabs-items-selected', $element),
    $select_box = $('.ltabs-selectbox', $element),
    $tab_label_select = $('.ltabs-tab-selected', $element),
    setting = '2',
    type_show = 'slider';
    enableSelectBoxes();
    
    /* First Ajax Listing tabs*/
    var el = $('.tab-sel',$element).attr('data-active-content'),
    el_active = $(el,$element);
    listing_tab_ajax(el_active);
    
    function enableSelectBoxes() {
      $tab_wrap = $('.ltabs-tabs-wrap', $element),
      $tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());
      if ($(window).innerWidth() <= 479) {
        $tab_wrap.addClass('ltabs-selectbox');
      } else {
        $tab_wrap.removeClass('ltabs-selectbox');
      }
    }

    $('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function() {
      if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {
        $('.ltabs-tabs', $element).removeClass('ltabs-open');
      } else {
        $('.ltabs-tabs', $element).addClass('ltabs-open');
      }
    });

    $(window).resize(function() {
      if ($(window).innerWidth() <= 479) {
        $('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');
      } else {
        $('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');
      }
    });

    function showAnimateItems(el) {
      var $_items = $('.new-ltabs-item', el), nub = 0;
      $('.ltabs-loadmore-btn', el).fadeOut('fast');
      $_items.each(function (i) {
        nub++;
        switch(effect) {
          case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
          default: animatesItems($(this),nub*delay,i,el);
        }
        if (i == $_items.length - 1) {
          $('.ltabs-loadmore-btn', el).fadeIn(3000);
        }
        $(this).removeClass('new-ltabs-item');
      });
    }

    function animatesItems($this,fdelay,i,el) {
      var $_items = $('.ltabs-item', el);
      $this.stop(true, true).attr("style",
        "-webkit-animation:" + effect +" "+ duration +"ms;"
        + "-moz-animation:" + effect +" "+ duration +"ms;"
        + "-o-animation:" + effect +" "+ duration +"ms;"
        + "-moz-animation-delay:" + fdelay + "ms;"
        + "-webkit-animation-delay:" + fdelay + "ms;"
        + "-o-animation-delay:" + fdelay + "ms;"
        + "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
          opacity: 1,
          filter: 'alpha(opacity = 100)'
        }, {
          delay: 1000
        });
        if (i == ($_items.length - 1)) {
          $(".ltabs-items-inner").addClass("play");
        }
      }


      function updateStatus($el) {
        $('.ltabs-loadmore-btn', $el).removeClass('loading');
        var countitem = $('.ltabs-item', $el).length;
        $('.ltabs-image-loading', $el).css({display: 'none'});
        $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
        var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
        var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
        var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');

        if (countitem >= rl_total) {
          $('.ltabs-loadmore-btn', $el).addClass('loaded');
          $('.ltabs-image-loading', $el).css({display: 'none'});
          $('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
          $('.ltabs-loadmore-btn', $el).removeClass('loading');
        }
      }

      function listing_tab_ajax(category_id ) { 
        var parent_active = $(category_id),
        total_product = parent_active.data('total'),
        tab_active = $('.ltabs-items-inner', parent_active),
        nb_column0 = $col_lg,
        nb_column1 = $col_md,
        nb_column2 = $col_sm,
        nb_column3 = $col_xs
        nb_column4 = 1;
        nb_margin = parseInt($margin);
        tab_active.owlCarousel2({
          nav: false,
          dots: true,
          dotClass: "owl2-dot",
          dotsClass: "owl2-dots",
          loop: true,
          autoplay: false,
          lazyLoad: true,
          autoplayHoverPause: true,
          autoplayTimeout: 5000,
          autoplaySpeed: 5000,
          navRewind: true,
          navText: ['', ''],
          margin: nb_margin ,
          responsive: {
            0: {
              items: nb_column4,
              nav: total_product <= nb_column4 ? false : ((true) ? true : false),
            },  
            479: {
              items: nb_column3,
              nav: total_product <= nb_column3 ? false : ((true) ? true : false),
            },
            767: {
              items: nb_column2,
              nav: total_product <= nb_column2 ? false : ((true) ? true : false),
            },
            991: {
              items: nb_column1,
              nav: total_product <= nb_column1 ? false : ((true) ? true : false),
            },
            1199: {
              items: nb_column0,
              nav: total_product <= nb_column0 ? false : ((true) ? true : false),
            },
          }
        });


      }

      $tab.on('click.ltabs-tab', function () {

        var $this = $(this);
        if ($this.hasClass('tab-sel')) return false;
        if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
          $this.parents('.ltabs-tabs').removeClass('ltabs-open');
        }
        $tab.removeClass('tab-sel');
        $this.addClass('tab-sel');
        var items_active = $this.attr('data-active-content');
        var _items_active = $(items_active,$element);
        $items_content.removeClass('ltabs-items-selected');
        _items_active.addClass('ltabs-items-selected');
        $tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());
        var $loading = $('.ltabs-loading', _items_active);
        var loaded = _items_active.hasClass('ltabs-items-loaded');


        type_show =$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
        if (!loaded && !_items_active.hasClass('ltabs-process')) {
          _items_active.addClass('ltabs-process');
          var category_id     = $this.attr('data-category-id'),
          path_url  = 'ajax/listingtab_',
          ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl')+path_url+category_id+ '.html';

          $loading.show();
          $.ajax({
            type: 'POST',
            url: ajax_url,
        //dataType: 'json',// when on gave connection errors
        data: {
          is_ajax_listing_tabs: 1,
          ajax_reslisting_start: 1,
          categoryid: category_id,
          setting: setting,
          lbmoduleid: 1,
        },
        success: function (data) {

          if (data != '') {

            $('.ltabs-loading', _items_active).replaceWith(data);
            _items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
            $loading.remove();
            if (type_show != 'slider') {
              showAnimateItems(_items_active);
            }
            updateStatus(_items_active);
            listing_tab_ajax(_items_active);
          }
          if(typeof(_SoQuickView) != 'undefined'){
            _SoQuickView();
          }

        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
        
      });

        } else {
          if (type_show == 'loadmore') {
            $('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');
            showAnimateItems(_items_active);
          }else{
            var $tag_id = $element;
            var owl = $('.owl2-carousel' , _items_active);
            var $navpage = $(".wap-listing-tabs", $tag_id);
            $navpage.siblings(".owl2-controls").addClass('hidden');

            owl = owl.data('owlCarousel2');

            if (typeof owl !== 'undefined') {
              owl.onResize();
            }
          }
        }
      });

    })('#so_listing_tabs_142');
  });

$(document).ready(function ($) {
  "use strict";
  // Content slider
  $('.yt-content-slider-2').each(function () {
    var $slider = $(this),
    $panels = $slider.children('div'),
    data = $slider.data();
    // Remove unwanted br's
    //$slider.children(':not(.yt-content-slide)').remove();
    // Apply Owl Carousel
    
    $slider.owlCarousel2({
      responsiveClass: true,
      mouseDrag: true,
      video:true,
      lazyLoad: (data.lazyload == 'yes') ? true : false,
      autoplay: (data.autoplay == 'yes') ? true : false,
      autoHeight: (data.autoheight == 'yes') ? true : false,
      autoplayTimeout: data.delay * 1000,
      smartSpeed: data.speed * 1000,
      autoplayHoverPause: (data.hoverpause == 'yes') ? true : false,
      center: (data.center == 'yes') ? true : false,
      loop: (data.loop == 'yes') ? true : false,
      dots: (data.pagination == 'yes') ? true : false,
      nav: (data.arrows == 'yes') ? true : false,
      dotClass: "owl2-dot",
      dotsClass: "owl2-dots",
      margin: data.margin,
      navText:  ['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>'],
      
      responsive: {
        0: {
          items: data.items_column4 
        },
        480: {
          items: data.items_column3
        },
        768: {
          items: data.items_column2
        },
        992: { 
          items: data.items_column1
        },
        1200: {
          items: data.items_column0 
        }
      }
    });
    
  });

});
$(document).ready(function ($) {
  (function (element) {
    var $element = $(element),
    $extraslider = $(".instagram-items-inner", $element),
    _delay = 500 ,
    _duration = 800 ,
    _effect = 'none ';

    this_item = $extraslider.find('div.media');
    this_item.find('div.item:eq(0)').addClass('head-button');
    this_item.find('div.item:eq(0) .media-heading').addClass('head-item');
    this_item.find('div.item:eq(0) .media-left').addClass('so-block');
    this_item.find('div.item:eq(0) .media-content').addClass('so-block');
    $extraslider.on("initialized.owl.carousel2", function () {
      var $item_active = $(".owl2-item.active", $element);
      if ($item_active.length > 1 && _effect != "none") {
        _getAnimate($item_active);
      }
      else {
        var $item = $(".owl2-item", $element);
        $item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
      }



      $(".owl2-nav", $element).insertBefore($extraslider);
      $(".owl2-controls", $element).insertAfter($extraslider);

    });

    $extraslider.owlCarousel2({
      rtl: false,
      margin: 15,
      slideBy: 1,
      autoplay: 0,
      autoplayHoverPause: 0,
      autoplayTimeout: 5000 ,
      autoplaySpeed: 1000 ,

      startPosition: 0 ,
      mouseDrag: 1,
      touchDrag: 1 ,
      autoWidth: false,
      responsive: {
        0:  { items: 1 } ,
        480: { items: 2 },
        768: { items: 2 },
        992: { items: 3 },
        1200: {items: 3}
      },
      dotClass: "owl2-dot",
      dotsClass: "owl2-dots",
      dots: false ,
      dotsSpeed:500 ,
      nav: false ,
      loop: 0 ,
      navSpeed: 500 ,
      navText: ["&#139 ", "&#155 "],
      navClass: ["owl2-prev", "owl2-next"]

    });

    $extraslider.on("translate.owl.carousel2", function (e) {


      var $item_active = $(".owl2-item.active", $element);
      _UngetAnimate($item_active);
      _getAnimate($item_active);
    });

    $extraslider.on("translated.owl.carousel2", function (e) {



      var $item_active = $(".owl2-item.active", $element);
      var $item = $(".owl2-item", $element);

      _UngetAnimate($item);

      if ($item_active.length > 1 && _effect != "none") {
        _getAnimate($item_active);
      } else {
        $item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
      }
    });

    function _getAnimate($el) {
      if (_effect == "none") return;
      //if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
      $extraslider.removeClass("extra-animate");
      $el.each(function (i) {
        var $_el = $(this);
        $(this).css({
          "-webkit-animation": _effect + " " + _duration + "ms ease both",
          "-moz-animation": _effect + " " + _duration + "ms ease both",
          "-o-animation": _effect + " " + _duration + "ms ease both",
          "animation": _effect + " " + _duration + "ms ease both",
          "-webkit-animation-delay": +i * _delay + "ms",
          "-moz-animation-delay": +i * _delay + "ms",
          "-o-animation-delay": +i * _delay + "ms",
          "animation-delay": +i * _delay + "ms",
          "opacity": 1
        }).animate({
          opacity: 1
        });

        if (i == $el.size() - 1) {
          $extraslider.addClass("extra-animate");
        }
      });
    }

    function _UngetAnimate($el) {
      $el.each(function (i) {
        $(this).css({
          "animation": "",
          "-webkit-animation": "",
          "-moz-animation": "",
          "-o-animation": "",
          "opacity": 1
        });
      });
    }

  })("#instagram7370271191545898483");
});
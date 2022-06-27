$(document).ready(function() {
  
  $("#thumb-slider-vertical .owl2-item").each(function() {
    $(this).find("[data-index='0']").addClass('active');
  });
  
  
  $(".thumb-vertical-outer .next-thumb").click(function () {
    $( ".thumb-vertical-outer .lSNext" ).trigger( "click" );
  });

  $(".thumb-vertical-outer .prev-thumb").click(function () {
    $( ".thumb-vertical-outer .lSPrev" ).trigger( "click" );
  });

  $(".thumb-vertical-outer .thumb-vertical").lightSlider({
    item: 3,
    autoWidth: false,
    vertical:true,
    slideMargin: 15,
    verticalHeight:340,
          pager: false,
    controls: true,
          prevHtml: '<i class="fa fa-angle-up"></i>',
          nextHtml: '<i class="fa fa-angle-down"></i>',
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          verticalHeight: 330,
          item: 3,
        }
      },
      {
        breakpoint: 1024,
        settings: {
          verticalHeight: 235,
          item: 2,
          slideMargin: 5,
        }
      },
      {
        breakpoint: 768,
        settings: {
          verticalHeight: 340,
          item: 3,
        }
      }
      ,
      {
        breakpoint: 480,
        settings: {
          verticalHeight: 100,
          item: 1,
        }
      }

    ]
    
      });

  
  
  // Product detial reviews button
  $(".reviews_button,.write_review_button").click(function (){
    var tabTop = $(".producttab").offset().top;
    $("html, body").animate({ scrollTop:tabTop }, 1000);
  });
});
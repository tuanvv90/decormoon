/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
 
/* --------------------------- Onthemes JS ------------------------------ */

/*------------------------------------ Start Page-loader------------------------------------------------ */
	$(window).load(function() 
	{ 
		$(".loadingdiv").fadeOut("slow");
	})
/*------------------------------------ End Page-loader------------------------------------------------- */
	

 $(document).ready(function(){
				   
/*------------------------------------- Go to Top JS START------------------------------------------------- */
		if ($('#goToTop').length) {
			var scrollTrigger = 100, // px
				backToTop = function () {
					var scrollTop = $(window).scrollTop();
					if (scrollTop > scrollTrigger) {
						$('#goToTop').addClass('show');
					} else {
						$('#goToTop').removeClass('show');
					}
				};
			backToTop();
			$(window).on('scroll', function () {
				backToTop();
			});
			$('#goToTop').on('click', function (e) {
				e.preventDefault();
				$('html,body').animate({
					scrollTop: 0
				}, 700);
			});
		}
/*------------------------------------ Go to Top JS END----------------------------------------------- */
	
/*------------------------------------start Flex slider load----------------------------------------------*/
	$(window).load(function() {
		if($('.flexslider').length > 0){ 
			$('.flexslider').flexslider({	
				slideshowSpeed: $('.flexslider').data('interval'),
				pauseOnHover: $('.flexslider').data('pause'),
				animation: "fade"
			});
		}
	});
	
/*------------------------------------End Flex slider load----------------------------------------------*/

/*----------------------------------- Start Onthemes Search--------------------------------------------- */

		$(".position-static.top-menu .otsearch_button ").click(function() {

		$('.position-static.top-menu .otsearchtoggle').parent().toggleClass('active');
		$(".user-info").css('display','none');
		$("#otuserheading").removeClass("active");
		$('.position-static.top-menu .otsearchtoggle').toggle('fast', function() {
		});
		$('#search_query_top').attr('autofocus', 'autofocus').focus();
		});
		
/*------------------------------------ End Onthemes Search---------------------------------------------- */
	
/*------------------------------------ Start Onthemes user info----------------------------------------- */

		$('.otuserheading').click(function(event){
			$(this).toggleClass('active');
			event.stopPropagation();
			$(".otsearchtoggle").css('display','none');
			$("#search_widget").removeClass("active");
			$(".user-info").slideToggle("fast");
		});
		$(".user-info").on("click", function (event) {
			event.stopPropagation();
		});
		
/*----------------------------------- End Onthemes user info-------------------------------------------- */
	
/*----------------------------------- Start menu js --------------------------------------------*/		
		$("#menu-icon").click(function() {
		$(".user-info").css('display','none');
		$(".otuserheading").removeClass("active");
		});
/*-------------------------------------- End menu js ----------------------------------------*/


/*-------------------------------------- Start Ontheme Homepage Tab ----------------------------------*/

	$("#onhometab").prepend("<div class='tabs'><ul class='nav nav-tabs'></ul></div>");
	$("#onhometab .otfeatured-products .tab-title").wrap("<li class='nav-item'><a class='nav-link' data-toggle='tab' href='#otfeatured-content'></a></li>");
	$("#onhometab .otbestseller-products .tab-title").wrap("<li class='nav-item'><a class='nav-link' data-toggle='tab' href='#otbestseller-content'></a></li>");
	$("#onhometab .otnew-products .tab-title").wrap("<li class='nav-item'><a class='nav-link' data-toggle='tab' href='#otnew-content'></a></li>");
	$("#onhometab .tabs ul.nav-tabs").append($("#onhometab > section li.nav-item"));

	$("#onhometab > section.otfeatured-products").wrap("<div class='tab-pane row fade' id='otfeatured-content'>");
	$("#onhometab > section.otbestseller-products").wrap("<div class='tab-pane row fade' id='otbestseller-content'>");
	$("#onhometab > section.otnew-products").wrap("<div class='tab-pane row fade' id='otnew-content'>");
	$("#onhometab > .tab-pane").wrapAll("<div class='home-tab-content' id='home-tab-content' />");
	$("#onhometab").append($("#onhometab > .home-tab-content"));
	
	$('#onhometab .tabs ul.nav-tabs > li:first-child a').addClass('active');
	$('#onhometab #home-tab-content .tab-pane:first-child').addClass('in active');

/*--------------------------------------- End Ontheme Homepage Tab ----------------------------------- */
	
	
/*--------------------------------------- Start Add Product Bootsrap class JS---------------------------*/
	
	colsCarousel = $('#right-column, #left-column').length;
	if (colsCarousel == 2) {
		ci=2;
	} else if (colsCarousel == 1) {
		ci=3;
	} else {
		ci=4;
	}

	
		var cols_count = $('#right-column, #left-column').length;
		if (cols_count == 2) {
			$('#content .products .product-miniature, #content-wrapper .products .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
		} else if (cols_count == 1) {
			$('#content .products .product-miniature, #content-wrapper .products .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		} else {
			$('#content .products .product-miniature, #content-wrapper .products .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
		}
		
/*----------------------------------- End Add Product Bootsrap class JS ----------------------------*/

	
/*------------------------------------start featured product custom navigation js------------------*/

	var otfeature = $(".otfeatured-products .products");
      otfeature.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1200,4], 
     	 itemsDesktopSmall : [991,3], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });

      // Custom Navigation Events
      $(".otfeature_next").click(function(){
        otfeature.trigger('owl.next');
      })

      $(".otfeature_prev").click(function(){
        otfeature.trigger('owl.prev');
      })

/*----------------------------------End featured product custom navigation js-----------------------*/

/*----------------------------------start bestseller product custom navigation js-------------------*/

	var otbestseller = $(".otbestseller-products .products");
      otbestseller.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1200,4], 
     	 itemsDesktopSmall : [991,3], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });

      // Custom Navigation Events
      $(".otbestseller_next").click(function(){
        otbestseller.trigger('owl.next');
      })

      $(".otbestseller_prev").click(function(){
        otbestseller.trigger('owl.prev');
      })

/*----------------------------------End bestseller product custom navigation js-----------------------*/

/*----------------------------------start New product custom navigation js----------------------------*/

	var otnew = $(".otnew-products .products");
      otnew.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1200,4], 
     	 itemsDesktopSmall : [991,3], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });

      // Custom Navigation Events
      $(".otnew_next").click(function(){
        otnew.trigger('owl.next');
      })

      $(".otnew_prev").click(function(){
        otnew.trigger('owl.prev');
      })

/*----------------------------------End New product custom navigation js-----------------------------*/

/*----------------------------------start special product custom navigation js-----------------------*/

	var otspecials = $(".otspecial-products .products");
      otspecials.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1200,4], 
     	 itemsDesktopSmall : [991,3], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });


      // Custom Navigation Events
      $(".otspecial_next").click(function(){
        otspecials.trigger('owl.next');
      })

      $(".otspecial_prev").click(function(){
        otspecials.trigger('owl.prev');
      })

/*--------------------------------End special product custom navigation js---------------------------*/

/*--------------------------------start category product custom navigation js------------------------*/

	var otcategoryprd = $(".category-products .products");
      otcategoryprd.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1200,4], 
     	 itemsDesktopSmall : [991,3], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });

      // Custom Navigation Events
      $(".otcategoryprd_next").click(function(){
        otcategoryprd.trigger('owl.next');
      })

      $(".otcategoryprd_prev").click(function(){
        otcategoryprd.trigger('owl.prev');
      })

/*-----------------------------	End category product custom navigation js-----------------------------*/

/*-----------------------------	start View product custom navigation js-------------------------------*/

	var otviewprd = $(".view-product .products");
      otviewprd.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1200,4], 
     	 itemsDesktopSmall : [991,3], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });

      // Custom Navigation Events
      $(".otview_next").click(function(){
        otviewprd.trigger('owl.next');
      })

      $(".otview_prev").click(function(){
        otviewprd.trigger('owl.prev');
      })

/*---------------------------End View product custom navigation js-------------------------------------*/

		
/*-------------------------	start Accessories product custom navigation js-----------------------------*/

	var otaccesories = $(".product-accessories .products");
      otaccesories.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1200,4], 
     	 itemsDesktopSmall : [991,3], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });

      // Custom Navigation Events
      $(".otaccesories_next").click(function(){
        otaccesories.trigger('owl.next');
      })

      $(".otaccesories_prev").click(function(){
        otaccesories.trigger('owl.prev');
      })

/*-----------------------------	End Accessories product custom navigation js---------------------------*/


/*-----------------------------	start Crossselling product custom navigation js-----------------------*/

	var otcrossselling = $(".crossselling-products .products");
      otcrossselling.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1200,4], 
     	 itemsDesktopSmall : [991,3], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });

      // Custom Navigation Events
      $(".otcrossselling_next").click(function(){
        otcrossselling.trigger('owl.next');
      })

      $(".otcrossselling_prev").click(function(){
        otcrossselling.trigger('owl.prev');
      })

/*-------------------------	End Crossselling product custom navigation js-----------------------------*/


	  
/*------------------------- Start Carousel For Productpage Thumbs------------------------------------ */
	
		$("#otproduct-thumbs").owlCarousel({
		navigation:true,
		navigationText: [
			"<i class='material-icons'>&#xE5CB;</i>",
			"<i class='material-icons'>&#xE5CC;</i>"],
		items: 4, //10 items above 1000px browser width
		itemsDesktop : [1200,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,1] 
	});
	
/*------------------------ End Carousel Productpage Thumbs----------------------------------------- */
	
/*------------------------ Start carousel For OT- brand logo--------------------------------------- */
	 var otbrandlogo = $("#otbrandlogo-carousel");
		  otbrandlogo.owlCarousel({
			navigation:true,
			navigationText: [
					"<i class='material-icons'>&#xE5CB;</i>",
					"<i class='material-icons'>&#xE5CC;</i>"],
		  autoPlay : true,
			 items :5, //10 items above 1000px browser width
			 itemsDesktop : [1200,5], 
			 itemsDesktopSmall : [991,4], 
			 itemsTablet: [767,3], 
			 itemsMobile : [480,2] 
		  });
	
/*-------------------------- End carousel For OT brand logo----------------------------------------- */
	
	
/*----------------------------- Start carousel For OT- cms Testimonial-------------------------------- */
	 var ottestimonial = $("#ottestimonial-carousel");
      ottestimonial.owlCarousel({
		autoPlay : true,
     	 items : 1, //10 items above 1000px browser width
     	 itemsDesktop : [1200,1], 
     	 itemsDesktopSmall : [991,1], 
     	 itemsTablet: [767,1], 
     	 itemsMobile : [480,1] 
      });
/*--------------------------- End carousel For OT- cms Testimonial-------------------------------------- */

/*--------------------------start CategoryFeatured custom navigation js-----------------------------------*/

	var otcategoryfeature=$("#ot_cat_featured").owlCarousel({
		autoPlay : true,															
		items:3, //10 items above 1000px browser width
		itemsDesktop : [1200,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,3], 
		itemsMobile : [543,2] 
		});

/*-------------------------	End CategoryFeatured custom navigation js------------------------------------*/

/* --------------------------Start carousel For OT- featured Product(cartpage) ---------------------------- */
	var Featuredproducts = $(".featured-products .products");
      Featuredproducts.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1200,4], 
     	 itemsDesktopSmall : [991,3], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });

      // Custom Navigation Events
      $(".featuredproduct_prev").click(function(){
        Featuredproducts.trigger('owl.next');
      })

      $(".featuredproduct_next").click(function(){
        Featuredproducts.trigger('owl.prev');
      })
	  
/* --------------------------End carousel For OT- featured Product(cartpage) ---------------------------- */

	    var smartblog = $("#smartblog-carousel");
    smartblog.owlCarousel({
        autoPlay: true,
        items: 3, //10 items above 1000px browser width
        itemsDesktop: [1200, 3],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [480, 1]
    });

    // Custom Navigation Events
    $(".otblog_next").click(function() {
        smartblog.trigger('owl.next');
    })

    $(".otblog_prev").click(function() {
        smartblog.trigger('owl.prev');
    })


    var Featuredproducts = $(".featured-products .products");
    Featuredproducts.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1200, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [480, 1]
    });

    // Custom Navigation Events
    $(".featuredproduct_prev").click(function() {
        Featuredproducts.trigger('owl.next');
    })

    $(".featuredproduct_next").click(function() {
        Featuredproducts.trigger('owl.prev');
    })

/*---------------------------- Start js for left-column ----------------------------------------------*/
	function responsivecolumn()
	{
		if ($(document).width() <= 991) 
		{
			$('.container  #left-column').insertAfter('#content-wrapper');
		}
		else if($(document).width() >= 992)
		{
			$('.container  #left-column').insertBefore('#content-wrapper');
		}
	}
	$(document).ready(function(){responsivecolumn();});
	$(window).resize(function(){responsivecolumn();});

/*-------------------------- End js for left-column ------------------------------------------------*/
	
	
/*------------------------------- Start js for footer ---------------------------------------------*/

$('#footer .footer-container #otcmspaymentlogo').appendTo('.bottom-footer .container .row');

/*------------------------------- End js for footer -------------------------------------------------*/


/*------------------------------ Start Onthemes AddToCart Button -----------------------------------------*/
 
$( ".ot-button-container .add-to-cart" ).mousedown(function() {
  var form_className = $(this).parent().attr('class');
  $(this).parent().attr('id',form_className);

  var hidden_page_className = $(this).parent().find('.product-quantity .product_page_product_id').attr('class');
  $(this).parent().find('.product-quantity .product_page_product_id').attr('id',hidden_page_className);

  var customization_className = $(this).parent().find('.product-quantity .product_customization_id').attr('class');
  $(this).parent().find('.product-quantity .product_customization_id').attr('id',customization_className);

  var quantity_className = $(this).parent().find('.product-quantity .quantity_wanted').attr('class');
  $(this).parent().find('.product-quantity .quantity_wanted').attr('id',quantity_className);
});

$( ".ot-button-container .add-to-cart" ).mouseup(function() {
  $(this).parent().removeAttr('id');
  $(this).parent().find('.product-quantity > input').removeAttr('id');
});

/*------------------------------ End Onthemes AddToCart Button ------------------------------------------*/
productadditional("#main #ot-jqzoom");	  

});	 
 
 
 function productadditional(productId){
 var otadditional = $(productId);
      otadditional.owlCarousel({
		navigation:true,
		navigationText: [
		"<i class='material-icons'>&#xE5CB;</i>",
		"<i class='material-icons'>&#xE5CC;</i>"],
     	 items : 3, //10 items above 1000px browser width
     	 itemsDesktop : [1200,3], 
     	 itemsDesktopSmall : [991,2], 
     	 itemsTablet: [767,3], 
     	 itemsMobile : [543,2] 
      });
}
/*------------------------------- Start Homepage header JS----------------------------------------------- */

function header() {	
 if (jQuery(window).width() > 1200){
     if (jQuery(this).scrollTop() > 195)
        {    
            jQuery('.position-static.top-menu').addClass("fixed");
 
    	}else{
      	 jQuery('.position-static.top-menu').removeClass("fixed");
      	}
    } else {
      jQuery('.position-static.top-menu').removeClass("fixed");
      }
}
 
$(document).ready(function(){header();});
jQuery(window).resize(function() {header();});
jQuery(window).scroll(function() {header();});

/*--------------------------------- End Homepage header JS ----------------------------------------------*/

/* ----------------------------- start Carousel For Topcategories ------------------------------------- */


		var max_link =3;
		var items = $('.position-static.top-menu ul#top-menu > li');
		var surplus = items.slice(max_link, items.length);
		surplus.wrapAll('<li class="more_menu main-menu"><ul class="main-menu clearfix">');
		$('.more_menu').prepend('<a href="#" class="dropdown-item">More</a>');
		$('.more_menu').mouseover(function(){
		$(this).children('ul').addClass('shown-link');
		})
		$('.more_menu').mouseout(function(){
		$(this).children('ul').removeClass('shown-link');
		});
		
		
		function accordionMenu(status)
		{
		if ($(document).width() <= 991)
		{
		$('.position-static.top-menu ul.top-menu li.ottoplink').appendTo('#mobile_top_menu_wrapper ul.top-menu[data-depth="0"]');
		}
		else if($(document).width() >= 992)	
		{	
		$('#wrapper #_desktop_top_menu ul.block_content li.ottoplink').appendTo('.position-static.top-menu ul.top-menu li.ottoplink');	
		}
		}
		
		$(document).ready(function(){accordionMenu();});
		$(window).resize(function(){accordionMenu();});

		
/* -------------------------------- End Carousel For Topcategories ------------------------------ */

function bindGrid()
{
	var view = localStorage.getItem('display');
	if (view == 'list')
		display(view);
	else
		$('.display').find('#otgrid').addClass('active');
	//Grid	
	$(document).on('click', '#otgrid', function(e){
		e.preventDefault();
		display('grid');
	});
	//List
	$(document).on('click', '#otlist', function(e){
		e.preventDefault();
		display('list');		
	});	
}

$("#products .product-list .thumbnail-container .otproduct-image .hook-reviews").each(function(){
	$(this).insertAfter($(this).parent().parent().parent().find(".otproduct-desc .product-title"));
});
$("#products .product-grid .thumbnail-container .otproduct-desc .hook-reviews").each(function(){
	$(this).appendTo($(this).parent().parent().parent().find(".otproduct-image"));
});
$("#products .product-list .thumbnail-container .otproduct-image .otproducthover").each(function(){
    $(this).appendTo($(this).parent().parent().find(".otproduct-desc"));
});
$("#products .product-grid .thumbnail-container .otproduct-desc .otproducthover").each(function(){
    $(this).appendTo($(this).parent().parent().parent().find(".otproduct-image"));
});

function display(view)
{
	if (view == 'list')
	{
		$('#otgrid').removeClass('active');
		$('#otlist').addClass('active');
		$('#content-wrapper .products.product-thumbs .product-miniature').attr('class', 'product-miniature js-product-miniature product-list col-xs-12');
		$('#content-wrapper .products.product-thumbs .product-miniature .otproduct-image').attr('class', 'otproduct-image col-xs-5 col-sm-5 col-md-4');
		$('#content-wrapper .products.product-thumbs .product-miniature .otproduct-desc').attr('class', 'otproduct-desc col-xs-7 col-sm-7 col-md-8');
		$("#products .product-list .thumbnail-container .otproduct-image .otproducthover").each(function(){
			$(this).appendTo($(this).parent().parent().find(".otproduct-desc"));
		});
		$("#products .product-list .thumbnail-container .otproduct-image .hook-reviews").each(function(){
			$(this).insertAfter($(this).parent().parent().parent().find(".otproduct-desc .product-title"));
		});
		$('#otlist').addClass('active');
		$('.grid-list').find('#otlist').addClass('selected');
		$('.grid-list').find('#otgrid').removeAttr('class');
		localStorage.setItem('display', 'list');
	}
	else
	{
		$('#otlist').removeClass('active');
		$('#otgrid').addClass('active');

		var cols_count = $('#right-column, #left-column').length;
		if (cols_count == 2) {
			$('#js-product-list .products.product-thumbs .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
		} else if (cols_count == 1) {
			$('#js-product-list .products.product-thumbs .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		} else {
			$('#js-product-list .products.product-thumbs .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
		}
		$("#products .product-grid .thumbnail-container .otproduct-desc .otproducthover").each(function(){
			$(this).appendTo($(this).parent().parent().parent().find(".otproduct-image"));
		});
		$("#products .product-grid .thumbnail-container .otproduct-desc .hook-reviews").each(function(){
			$(this).appendTo($(this).parent().parent().parent().find(".otproduct-image"));
		});

		$('#content-wrapper .products.product-thumbs .product-miniature .otproduct-image').attr('class', 'otproduct-image');
		$('#content-wrapper .products.product-thumbs .product-miniature .otproduct-desc').attr('class', 'otproduct-desc');
		
		$('.grid-list').find('#otgrid').addClass('selected');
		$('.grid-list').find('#otlist').removeAttr('class');
		localStorage.setItem('display', 'grid');
	}
}
$(document).ready(function(){
	bindGrid();
});


/* --------------------------------------------- End Grid List JS ---------------------------------------------- */


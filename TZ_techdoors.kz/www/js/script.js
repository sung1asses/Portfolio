
jQuery(function($) {
	
	/* Mega Menus Script */
	$(function() {
        window.prettyPrint && prettyPrint()
        $(document).on('click', '.yamm .dropdown-menu', function(e) {
          e.stopPropagation()
        })
      })	  
	

    $(document).ready(function() {
      $(".final-sale-slider").owlCarousel({
          navigation :true,
          slideSpeed :300,
          paginationSpeed :400,
          singleItem:true,
		  autoPlay:5000,
		  transitionStyle : "fade"
      });
    });


	
	/* Sidr Slide Menus */
	if ( $('#search-menu').length) {
		$('#search-menu').sidr({
		  name: 'sidr-remote-content-2',
		  side: 'right',
		  source: '#search-list'
		});
	}
		
	if ( $('#cart-menu').length) {	
		$('#cart-menu').sidr({
		  name: 'sidr-remote-content-1',
		  side: 'right',
		  source: '#cart-list'
		});
	}
	if ( $('#links-menu').length) {
		$('#links-menu').sidr({
		  name: 'sidr-remote-content',
		  side: 'right',
		  source: '#link-list'
		});
	}
	
	if ( $('.accordion').length) {
		$('.accordion').collapse();
	
		$('.panel-collapse').on('show.bs.collapse',function(){
			$(this).prev('.panel-heading').find('.panel-title').addClass("active-heading");
		});
		$('.panel-collapse').on('hide.bs.collapse',function(){
			$(this).prev('.panel-heading').find('.panel-title').removeClass("active-heading");
		});
	}
	  
	//Elements Animationif ( $('.our-client').length) {
	if ( $('.animated').length){
		var $ = jQuery;
	
		$('.animated').appear(function(){
			var element = $(this);
			var animation = element.data('animation');
			var animationDelay = element.data('delay');
		if (animationDelay) {
			setTimeout(function(){
			element.addClass( animation + " in" );
			element.removeClass('out');
		  }, animationDelay);
		}
		else {
			element.addClass( animation + " in" );
			element.removeClass('out');
		}    
		
		},{accY: -150});
	}
	
	/* Animate Progess bar 
	=========================== */
	if ( $('.animated').length){
		$('.progress').each(function () {
	
			var progress = $(this);
	
			progress.appear(function () {
	
				var progressBar = $(this),
	
				percent = progressBar.find('.progress-bar').attr('aria-valuenow'),
				centVal = percent + '%';
				progressBar.find('span.current-val').text(centVal);
				
				progressBar.find('.progress-bar').animate({
					width: percent + '%'
				}, 800);
	
			});
		});
	}
});

/* Owl Carousel Script */
jQuery(function($) {
	if ( $('.top-product-slider').length) {
		var owl = $(".top-product-slider");
		 
		  owl.owlCarousel({
			  items : 5, //10 items above 1000px browser width
			  itemsDesktop : [1000,5], //5 items between 1000px and 901px
			  itemsDesktopSmall : [900,3], // betweem 900px and 601px
			  itemsTablet: [600,1], //2 items between 600 and 0
			  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
		  });
		 
		  // Custom Navigation Events
		  $(".next").click(function(){
			owl.trigger('owl.next');
		  })
		  $(".prev").click(function(){
			owl.trigger('owl.prev');
		  })
		  $(".play").click(function(){
			owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
		  })
		  $(".stop").click(function(){
			owl.trigger('owl.stop');
		  })
	}
	
	if ( $('.our-client').length) {
		var owl = $('.our-client');
		owl.owlCarousel({
			items:6,
			loop:true,
			margin:10,
			autoplay:true,
			autoplayTimeout:10,
			autoplayHoverPause:false
		});
	}
	
	if ( $('.client-testimonial').length) {
		var owl = $(".client-testimonial");
	 
		  owl.owlCarousel({
			navigation : true,
			singleItem : true,
			transitionStyle : "fadeUp"
		  });
	  
	}
});

if ( $('#category-lite-accordion').length) {
	$("#category-lite-accordion").liteAccordion({
		theme: "os-tpl",
		containerWidth: 820,
		containerHeight: 276,
		headerWidth: 48,
		firstSlide: 1,
		activateOn: "click",
		autoPlay: false,
		pauseOnHover: true,
		rounded: false,
		enumerateSlides: true,
		slideSpeed: 800,
		cycleSpeed: 6000,
	});
}
				
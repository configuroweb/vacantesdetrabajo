 "use strict";
/*-----------------------------------
 Quick Mobile Detection
 -----------------------------------*/

 var isMobile = {
    Android: function() {
     
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
    
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
     
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
     
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
     
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
     
      return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

/*-- Page preloader --*/
			
	$(window).load(function(){
		$('.preloader').delay(2000).fadeOut(1000);
	});

 /*-----------------------------------
 REVOLUTION Slider + Shop tabs +
 -----------------------------------*/
	$(document).ready(function() {
            $('.revolution-slider').revolution(
            {
                dottedOverlay:"none",
                delay:6000,
                startwidth:1170,
                //startheight:windowsHeight,
				startheight:740,
                onHoverStop:"on",
                hideThumbs:0,
                fullWidth:"on",
				fullScreen: 'off',
                forceFullWidth:"off",
                navigationType:"none",
                shadow:0,
                spinner:"spinner4",
                hideTimerBar:"on"
				
            });
			
			/*-- listing detail page tabs --*/

			$('.tabs .tab-link').on('click', function(){
				var tab_id = $(this).attr('data-tab');
				var map;
				$('.tabs .tab-link').removeClass('current');
				$('.tab-content').removeClass('current');

				$(this).addClass('current');
				$("#"+tab_id).addClass('current');
				if(tab_id === 'tab-2'){
					
					init();
				}
			});
			
			/*-- onepage active menu --*/
			
			$('ul.menu li a').on('click', function() {
				var $this = $(this);
				$this.parent().siblings().removeClass('active').end().addClass('active');
    
			});
			
			$('.view-switcher ul li').on('click',function(e) {
				if ($(this).hasClass('listview')) {
					$('.listing-main').removeClass('gridview').addClass('listview');
				}
				else if($(this).hasClass('gridview')) {
					$('.listing-main').removeClass('listview').addClass('gridview');
				}
			});
			$('.view-switcher ul li').on('click',function(e) {
					if ($(this).hasClass('listview')) {
					$('.view-switcher ul li.gridview').removeClass('active');
					$('.view-switcher ul li.listview').addClass('active');
				}
				else if($(this).hasClass('gridview')) {
					$('.view-switcher ul li.listview').removeClass('active');
					$('.view-switcher ul li.gridview').addClass('active');
				}
			});
			
			$( "#slider-range-min" ).slider({
				  range: "min",
				  value: 700,
				  min: 1,
				  max: 1000,
				  slide: function( event, ui ) {
					$( "#amount" ).val( "$" + ui.value );
				  }
			});
			$( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
			
			/*-----------------------------------
			FUNFACTSs
			-----------------------------------*/
				$('.count').waypoint(function() {  
					// start all the timers
					$('.count').each(count);
				  
						function count(options) {
				  
						var $this = $(this);
						options = $.extend({}, options || {}, $this.data('countToOptions') || {});
						$this.countTo(options);
						}
				},
				{
					offset: '70%',  // middle of the page
					triggerOnce: true	
				});
			
    });

$(document).ready(function() {	
		"use strict";
		
  $(".feature-slider").owlCarousel({
	stagePadding: 0,
	margin:0,
	rewindNav:false,
	pagination : false,
	autoplay:true, //Set AutoPlay to 3 seconds
	autoplaySpeed : 1000,
	stopOnHover : true,
	responsiveClass:true,
	dots: false,
	loop:true,
    responsive:{
        0:{
            items:1,
        },
        700:{
            items:2,
        },
		960:{
            items:3,
			
        },
        1024:{
            items:3,
			
        },
		1025:{
            items:4,
			
        },
		1281:{
            items:5,
			
        }
    }

  });
  
  $(".social-slider").owlCarousel({
	stagePadding: 0,
	margin:0,
	rewindNav:false,
	pagination : false,
	autoplay:true, //Set AutoPlay to 3 seconds
	autoplaySpeed : 1000,
	stopOnHover : true,
	responsiveClass:true,
	dots: false,
	loop:true,
    responsive:{
        0:{
            items:1,
        },
        700:{
            items:3,
        },
		960:{
            items:4,
			
        },
        1024:{
            items:4,
			
        },
		1025:{
            items:5,
			
        },
		1281:{
            items:6,
			
        }
    }

  });
  
 }); 
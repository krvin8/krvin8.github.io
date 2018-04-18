/*!
 * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

(function($) {
	"use strict"; // Start of use strict

	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$('a.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: ($($anchor.attr('href')).offset().top - 50)
		}, 1250, 'easeInOutExpo');
		event.preventDefault();
	});

	// Highlight the top nav as scrolling occurs
	$('body').scrollspy({
		target: '.navbar-fixed-top',
		offset: 51
	})

	// Closes the Responsive Menu on Menu Item Click
	// $('.navbar-collapse ul li a').click(function() {
	//     $('.navbar-toggle:visible').click();
	//     console.log("1");
	// });

	// $(".navbar-nav li a").click(function(event) {
	//     $(".navbar-collapse").collapse('hide');
	//     console.log("2");
	//   });

	// Offset for Main Navigation
	$('#mainNav').affix({
		offset: {
			top: 100
		}
	})

	// Initialize WOW.js Scrolling Animations
	new WOW().init();
	

})(jQuery); // End of use strict

$(".open").click(function() {
  var container = $(this).parents(".topic");
  var answer = container.find(".answer");
  var trigger = container.find(".faq-t");

  answer.slideToggle(200);

  if (trigger.hasClass("faq-o")) {
	trigger.removeClass("faq-o");
  } else {
	trigger.addClass("faq-o");
  }

  if (container.hasClass("expanded")) {
	container.removeClass("expanded");
  } else {
	container.addClass("expanded");
  }
});

jQuery(document).ready(function($) {
  $('.question').each(function() {
		$(this).attr('data-search-term', $(this).text().toLowerCase() + $(this).find("ptag").text().toLowerCase());
  });

  $('.live-search-box').on('keyup', function() {
		var searchTerm = $(this).val().toLowerCase();
		$('.question').each(function() {
		  if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
			$(this).parent().parent().show();
		  } else {
			$(this).parent().parent().hide();
		  }
		});
  });

	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).fadeIn(200);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).fadeOut(200);
	});

	$(".showTable").click(function(){
		$("#pricing-table").show();
	});
	// DIRTY Responsive pricing table JS
	$( ".tablenav" ).on( "click", ".tablenavli", function() {
		var pos = $(this).index()+2;
		$("tr").find('td:not(:eq(0))').hide();
		$('td:nth-child('+pos+')').css('display','table-cell');
		$("tr").find('th:not(:eq(0))').hide();
		$('li').removeClass('active');
		$(this).addClass('active');
		console.log("hello");
	});

	// Initialize the media query
	var mediaQuery = window.matchMedia('(min-width: 640px)');
	  
	// Add a listen event
	mediaQuery.addListener(doSomething);
	  
	// Function to do something with the media query
	function doSomething(mediaQuery) {    
		if (mediaQuery.matches) {
			$('.sep').attr('colspan',5);
		} else {
			$('.sep').attr('colspan',2);
		}
	}
	// On load
	doSomething(mediaQuery);

});

function initMap() {
  var hq = {lat: 3.1182869, lng: 101.6754526};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: hq,
    styles: [
      {
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f5f5f5"
          }
        ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#f5f5f5"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#bdbdbd"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dadada"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#c9c9c9"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      }
    ]
  });
  var marker = new google.maps.Marker({
    position: hq,
    map: map
  });
}
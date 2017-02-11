(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		 $('.slider-container').slick({
		  		infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  swipeToSlide: true,
  dots: false,
  prevArrow: '<a class="ion-chevron-left"></a>',
  nextArrow: '<a class="ion-chevron-right"></a>',
  responsive: [
      {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1
      }
    }
    ]
		  });

		//----modals-----

		$("a[rel*=leanModal]").leanModal({
			top : 40, 
			overlay : 0.9, 
			closeButton: ".modal_close" 
		});
		
		//----project cards-----

		$('.g-menu-heading').click(function(){
			$(this).siblings('.g-menu-list').fadeToggle();
		})

		//----Partner Settings - Your Contact Information - Address autocomplete/map -----

		function initialize() {

			var input = document.getElementById('input_1_3');
			var autocomplete = new google.maps.places.Autocomplete(input);

			var map = new google.maps.Map(document.getElementById('map'), {
				disableDefaultUI: true,
				zoomControl: false,
				mapTypeControl: false,
				scaleControl: false,
				streetViewControl: false,
				rotateControl: false,
				fullscreenControl: false,
				zoom: 12
			});

			autocomplete.bindTo('bounds', map);
			var marker = new google.maps.Marker({
				map: map,
				anchorPoint: new google.maps.Point(0, -29)
			});

		   	autocomplete.addListener('place_changed', function() {
          		marker.setVisible(false);
          		var place = autocomplete.getPlace();

				// If the place has a geometry, then present it on a map.
				if (place.geometry.viewport) {
					map.fitBounds(place.geometry.viewport);
					map.setZoom(15);  
				} else {
					map.setCenter(place.geometry.location);
					map.setZoom(15);  
				}

				marker.setPosition(place.geometry.location);
				marker.setVisible(true);
	      	})

	   		//if we already have a location on load
	      	if(input.value){
				var geocoder = new google.maps.Geocoder();
				var address = input.value;
				geocoder.geocode( { 'address': address}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						var marker = new google.maps.Marker({
							map: map,
							position: results[0].geometry.location,
						});
						map.setCenter(results[0].geometry.location);
					}else{
						map.setCenter({lat: 42.984923, lng: -81.245277});
					}
				});
	      	}else{
      			map.setCenter({lat: 42.984923, lng: -81.245277});
	      	}

		}

		if($('#map').length !== 0){
			google.maps.event.addDomListener(window, 'load', initialize);
		}

	});
	
})(jQuery, this);

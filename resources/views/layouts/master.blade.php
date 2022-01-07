<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Winkelen in Aalst</title>	

		<meta name="keywords" content="Winkelen in Aalst" />
		<meta name="description" content="De website over het winkelkerngebied van Aalst">
		<meta name="author" content="Xinu">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('frontend/img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('frontend/img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/animate/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/theme-shop.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('frontend/vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/rs-plugin/css/navigation.css')}}">
		

		<link rel="stylesheet" href="{{asset('frontend/css/stylesheet.css')}}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('frontend/skins/skin-stylesheet.css')}}"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('frontend/vendor/modernizr/modernizr.min.js')}}"></script>

	</head>
	<body data-spy="scroll" data-target=".wrapper-spy" data-offset="100">
        <div class="body">
		
			@include('body.header')
            
            @include('layouts.index')
            
            @include('body.footer')

		<!-- Vendor -->
		<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/common/common.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/vivus/vivus.min.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('frontend/js/one.js')}}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{asset('frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('frontend/views/view.contact.js')}}"></script>

		<!-- Demo -->
		<script src="{{asset('frontend/js/theme.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('frontend/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('frontend/js/theme.init.js')}}"></script>


		{{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script> --}}
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "Aalst",
				html: "<strong>District A</strong><br>Aalst",
				icon: {
					image: "{{asset('frontend/img/pin.png')}}",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 50.937481;
			var initLongitude = -4.041030;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			var mapRef = $('#googlemaps').data('gMap.reference');

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

			// Change text-center Position
			if( $(window).width() > 767 ) {
				if( $('html[dir="rtl"]').get(0) ) {
					mapRef.panBy(250,0);
				} else {
					mapRef.panBy(-250,0);
				}
			}

		</script>


		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>

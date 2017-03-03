<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/footer/lviv_silhouette.svg); " class="footer">
    <div id="footer-align-fix" class="row white-text footer-info-block " >
        <div class="col l3 m12 s12">
            <span>
                <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/phone-call.svg" alt="bus">
            </span>
            <span class="footer-info-text">+380734650413</span>

        </div>
        <div class="col l3 m12 s12">
            <span>
                <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/mail-black-envelope-symbol.svg" alt="bus">
            </span>
            <span class="footer-info-text">romaniv.yura95@gmail.com</span>

        </div>
        <div class="col l3 m12 s12">
            <span>
                <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/marker.svg" alt="bus">
            </span>
            <span class="footer-info-text">м. Львів, вул. Зелена, 82</span>

        </div>
        <div class="col l3 m12 s12 fot-tab-cen center">
            <span>
                <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/fb.svg" alt="bus">
            </span>
            <span>
                <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/vk.svg" alt="bus">
            </span>
        </div>
    </div>
</div>


<!--НИЩЕ ВСЯКА ХЄРНЯ!-->
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jssor.slider-22.2.8.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOlbn3nbFpK7G2GQqlg55ZIsixt57zo0o&extension=.js"></script> 
<script src="https://cdn.mapkit.io/v1/infobox.js"></script> 
<script>
	var beepOne = $("#beep-one")[0];
	$("#button")
	.mouseenter(function() {
		beepOne.play();
	});</script>

	<script type="text/javascript">
		jssor_1_slider_init = function() {
			var jssor_1_options = {
				$AutoPlay: true,
				$Idle: 0,
				$AutoPlaySteps: 4,
				$SlideDuration: 2500,
				$SlideEasing: $Jease$.$Linear,
				$PauseOnHover: 4,
				$SlideWidth: 280,
				$SlideHeight: 300,
				$Cols: 7
			};

			var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

			/*responsive code begin*/
			/*you can remove responsive code if you don't want the slider scales while window resizing*/
			function ScaleSlider() {
				var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
				if (refSize) {
					refSize = Math.min(refSize, 809);
					jssor_1_slider.$ScaleWidth(refSize);
				}
				else {
					window.setTimeout(ScaleSlider, 30);
				}
			}
			ScaleSlider();
			$Jssor$.$AddEvent(window, "load", ScaleSlider);
			$Jssor$.$AddEvent(window, "resize", ScaleSlider);
			$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
			/*responsive code end*/
		};
	</script>
	<script type="text/javascript">jssor_1_slider_init();</script>
	<script> 
		google.maps.event.addDomListener(window, 'load', init);
		var map, markersArray = [];

		function bindInfoWindow(marker, map, location) {
			google.maps.event.addListener(marker, 'click', function() {
				function close(location) {
					location.ib.close();
					location.infoWindowVisible = false;
					location.ib = null;
				}

				if (location.infoWindowVisible === true) {
					close(location);
				} else {
					markersArray.forEach(function(loc, index){
						if (loc.ib && loc.ib !== null) {
							close(loc);
						}
					});

					var boxText = document.createElement('div');
					boxText.style.cssText = 'background: #fff;';
					boxText.classList.add('md-whiteframe-2dp');

					function buildPieces(location, el, part, icon) {
						if (location[part] === '') {
							return '';
						} else if (location.iw[part]) {
							switch(el){
								case 'photo':
								if (location.photo){
									return '<div class="iw-photo" style="background-image: url(' + location.photo + ');"></div>';
								} else {
									return '';
								}
								break;
								case 'iw-toolbar':
								return '<div class="iw-toolbar"><h3 class="md-subhead">' + location.title + '</h3></div>';
								break;
								case 'div':
								switch(part){
									case 'email':
									return '<div class="iw-details"><i class="material-icons" style="color:#4285f4;"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><span><a href="mailto:' + location.email + '" target="_blank">' + location.email + '</a></span></div>';
									break;
									case 'web':
									return '<div class="iw-details"><i class="material-icons" style="color:#4285f4;"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><span><a href="' + location.web + '" target="_blank">' + location.web_formatted + '</a></span></div>';
									break;
									case 'desc':
									return '<label class="iw-desc" for="cb_details"><input type="checkbox" id="cb_details"/><h3 class="iw-x-details">Details</h3><i class="material-icons toggle-open-details"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><p class="iw-x-details">' + location.desc + '</p></label>';
									break;
									default:
									return '<div class="iw-details"><i class="material-icons"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><span>' + location[part] + '</span></div>';
									break;
								}
								break;
								case 'open_hours':
								var items = '';
								for (var i = 0; i < location.open_hours.length; ++i) {
									if (i !== 0){
										items += '<li><strong>' + location.open_hours[i].day + '</strong><strong>' + location.open_hours[i].hours +'</strong></li>';
									}
									var first = '<li><label for="cb_hours"><input type="checkbox" id="cb_hours"/><strong>' + location.open_hours[0].day + '</strong><strong>' + location.open_hours[0].hours +'</strong><i class="material-icons toggle-open-hours"><img src="//cdn.mapkit.io/v1/icons/keyboard_arrow_down.svg"/></i><ul>' + items + '</ul></label></li>';
								}
								return '<div class="iw-list"><i class="material-icons first-material-icons" style="color:#4285f4;"><img src="//cdn.mapkit.io/v1/icons/' + icon + '.svg"/></i><ul>' + first + '</ul></div>';
								break;
							}
						} else {
							return '';
						}
					}

					boxText.innerHTML = 
					buildPieces(location, 'photo', 'photo', '') +
					buildPieces(location, 'iw-toolbar', 'title', '') +
					buildPieces(location, 'div', 'address', 'location_on') +
					buildPieces(location, 'div', 'web', 'public') +
					buildPieces(location, 'div', 'email', 'email') +
					buildPieces(location, 'div', 'tel', 'phone') +
					buildPieces(location, 'div', 'int_tel', 'phone') +
					buildPieces(location, 'open_hours', 'open_hours', 'access_time') +
					buildPieces(location, 'div', 'desc', 'keyboard_arrow_down');

					var myOptions = {
						alignBottom: true,
						content: boxText,
						disableAutoPan: true,
						maxWidth: 0,
						pixelOffset: new google.maps.Size(-140, -40),
						zIndex: null,
						boxStyle: {
							opacity: 1,
							width: '280px'
						},
						closeBoxMargin: '0px 0px 0px 0px',
						infoBoxClearance: new google.maps.Size(1, 1),
						isHidden: false,
						pane: 'floatPane',
						enableEventPropagation: false
					};

					location.ib = new InfoBox(myOptions);
					location.ib.open(map, marker);
					location.infoWindowVisible = true;
				}
			});
}

function init() {
	var mapOptions = {
		center: new google.maps.LatLng(49.82195437989913,24.0536059401245),
		zoom: 14,
		gestureHandling: 'auto',
		fullscreenControl: true,
		zoomControl: true,
		disableDoubleClickZoom: true,
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
		},
		scaleControl: true,
		scrollwheel: false,
		streetViewControl: true,
		draggable : true,
		clickableIcons: false,
		fullscreenControlOptions: {
			position: google.maps.ControlPosition.RIGHT_BOTTOM
		},
		mapTypeControlOptions: {
			position: google.maps.ControlPosition.TOP_LEFT
		},
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: [{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},{"stylers":[{"saturation":-17},{"gamma":0.36}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#3f518c"}]}]
	}
	var mapElement = document.getElementById('mapkit-9997');
	var map = new google.maps.Map(mapElement, mapOptions);
	var locations = [
	{"title":"вулиця Зелена, 82","address":"вулиця Зелена, 82, Львів, Львівська область, Україна","desc":"","tel":"","int_tel":"","email":"","web":"","web_formatted":"","open":"","time":"","lat":49.82129219999999,"lng":24.05541979999998,"vicinity":"Галицький район","open_hours":"","marker":{"url":"https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png","scaledSize":{"width":25,"height":42,"j":"px","f":"px"},"origin":{"x":0,"y":0},"anchor":{"x":12,"y":42}},"iw":{"address":true,"desc":true,"email":true,"enable":true,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":true,"title":true,"web":true}}
	];

	var layer = new google.maps.TrafficLayer();
	layer.setMap(map);

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			icon: locations[i].marker,
			position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
			map: map,
			title: locations[i].title,
			address: locations[i].address,
			desc: locations[i].desc,
			tel: locations[i].tel,
			int_tel: locations[i].int_tel,
			vicinity: locations[i].vicinity,
			open: locations[i].open,
			open_hours: locations[i].open_hours,
			photo: locations[i].photo,
			time: locations[i].time,
			email: locations[i].email,
			web: locations[i].web,
			iw: locations[i].iw
		});
		markersArray.push(marker);
		if (locations[i].iw.enable === true) {
			bindInfoWindow(marker, map, locations[i]);
		}
	}
}
</script>

<script>
	// Initialize collapse button
	$(".button-collapse").sideNav();
	// Initialize collapsible (uncomment the line below if you use the dropdown variation)
	//$('.collapsible').collapsible();
</script>

<script>
	$('#thumbs').delegate('img','click', function(){
		$('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
		$('#description').html($(this).attr('alt'));
	});
</script>

<?php wp_footer(); ?>
</body>
</html>
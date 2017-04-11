<div style=" background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg/fifth-bg.jpg);" class="fifth-block">

	<?php
//our-partners
	get_template_part('/template-parts/our', 'partners');
	?>
</div>
<div class="six-content">
	<div class="sign-line white-text center contact-sign">КОНТАКТИ</div>
	<div class="line-main">
		<div class="block-line-white "></div>
	</div>
	<div style="margin-bottom: 0;" class="footer-text-block row center">
	<div class="white-text col l3 m4 s12">
			<span><img style="max-width: 25px;" class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/phone-call.svg" alt="bus"></span>
			<span class="footer-info-text">+380734650413</span>
		</div>
		<div class="white-text col l3 m4 s12">
			<span>
				<img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/mail-black-envelope-symbol.svg" alt="bus">
			</span>
			<span class="footer-info-text">lvivin@gmail.com</span>
		</div>
		<div class="white-text col l3 m4 s12">
			<span>
				<img style="max-width: 25px;" class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/marker.svg" alt="bus"></span>
				<span class="footer-info-text">м. Львів, вул. Зелена, 82</span>
			</div>
			<div class="white-text col l3 m12 s12">
				<img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/vk.svg" alt="bus">
				<img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/fb.svg" alt="bus">

			</div>
		</div>
	</div>

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.768117163543!2d24.04318401570891!3d49.828023279394294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473add5bac6b8bcb%3A0xeaf0431de222a617!2z0LLRg9C70LjRhtGPINCX0LXQu9C10L3QsCwgODIsINCb0YzQstGW0LIsINCb0YzQstGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1491902081602" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	<div class="footer">
		<img src="<?php echo get_template_directory_uri(); ?>/img/footer/lviv_silhouette.svg" alt="footer" class="hide-on-med-and-down footer-img"/>
		<img src="<?php echo get_template_directory_uri(); ?>/img/footer/lviv_silhouette2.svg" alt="footer" class="hide-on-small-only hide-on-large-only footer-img"/>
		<img src="<?php echo get_template_directory_uri(); ?>/img/footer/lviv_silhouette3.svg" alt="footer" class="hide-on-med-and-up footer-img"/>
	</div>

	<a id="menu" class="pulse waves-light btn btn-floating visa-button" onclick="$('.tap-target').tapTarget('open')"><p><span>Візова</span> підтримка</p><img class="visa-icon" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon/visa.svg" alt="visa"></a>

	  <div class="tap-target" data-activates="menu">
    <div class="tap-target-content">
    <div>
      <p><a href="http://www.leotour.com.ua/files/Documents_Croatia.pdf" target="_blank" rel="nofollow">ХОРВАТІЯ</a></p>
      <p><a href="http://www.leotour.com.ua/files/Documents_Hungary.pdf" target="_blank" rel="nofollow">УГОРЩИНА</a></p>
      <p><a href="http://www.leotour.com.ua/files/Documents_Slovenia.pdf" target="_blank" rel="nofollow">СЛОВЕНІЯ</a></p>
      <p><a href="http://www.leotour.com.ua/files/Documents_Slovakia.pdf" target="_blank" rel="nofollow">СЛОВАЧЧИНА</a></p>
     </div>
    </div>
  </div>


	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jssor.slider-22.2.8.min.js" type="text/javascript"></script>
 
<script>
		$('.tapTarget').tapTarget('open');
	</script>

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

<script type="text/javascript">
	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>

<?php wp_footer(); ?>
</body>
</html>
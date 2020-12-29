<?php
<div class="lv_footer_wrapper">
	<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;"><span></span></a>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="lv_footer_section">
					<div class="footer_logo_wrapper">
						<img src="images/header/footer_logo.png" alt="Logo">
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="footer_social_wrapper">
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer_botton_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="copy_right_wrapper">
					<div class="copy_right">
						<p>© 2017 Event. All rights reserved.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="footer2_social_wrapper">
					<div class="footer2_social">
						<ul>
							<li><a href="#">CONTACT US</a></li>
							<li><a href="#">PRIVACY POLICY</a></li>
							<li><a href="#">SITEMAP</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer Wrapper End -->
<!--main js file start--> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script src='../../../../../api.mapbox.com/mapbox-gl-js/v0.37.0/mapbox-gl.js'></script>
<script>$(function() { $.scrollIt(); });</script> 
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiYWtzaGF5aGFuZGdlIiwiYSI6InI2bzhEcUUifQ.8r-lNnjAuIZUk8pjhtxlFw';
var map = new mapboxgl.Map({
  container: 'map',
  center: [144.965065, -37.817917],
  zoom: 11,
  style: 'mapbox://styles/mapbox/basic-v9',
  hash: false,
});
var marker = new mapboxgl.Marker()
  .setLngLat([30.5, 50.5])
  .addTo(map);
map.scrollZoom.disable();
map.dragPan.disable();
</script>
?>
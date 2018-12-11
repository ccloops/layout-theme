<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div><!-- #content -->


	<div class="sign-up-bar fixed" style="display: none;">
		<div class="sign-up-console">
			<div class="newsletter-prompt">
				Sign up for our newsletter:
			</div>
			<form action="https://uniontherapy.us19.list-manage.com/subscribe/post-json?u=6ceb192c15e1591eda584fff6&amp;id=58aea1617b&amp;c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="your email here" required="" data-keeper-lock-id="k-xnpssh6r4v">
				<input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="mc-button">
					<div id="subscribe-result"></div>
									<keeper-lock id="k-xnpssh6r4v" style="filter: grayscale(100%); top: 24.5px; left: 186px; z-index: 1; visibility: hidden; height: 16px !important;"></keeper-lock></form>
				</div>
		</div>



	<footer id="colophon" class="site-footer text-center bg-white mt-4 text-muted">

		<div class="sign-up-bar">
			<div class="sign-up-console">
				<div class="newsletter-prompt">
					Sign up for our newsletter:
				</div>
				<form action="https://uniontherapy.us19.list-manage.com/subscribe/post-json?u=6ceb192c15e1591eda584fff6&amp;id=58aea1617b&amp;c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
		      <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="your email here" required="" data-keeper-lock-id="k-xnpssh6r4v">
		      <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="mc-button">
		        <div id="subscribe-result"></div>
				            <keeper-lock id="k-xnpssh6r4v" style="filter: grayscale(100%); top: 24.5px; left: 186px; z-index: 1; visibility: hidden; height: 16px !important;"></keeper-lock></form>
					</div>
			</div>



<ul id="footer-menu">
	<li><a href="http://localhost:8888/get-involved/">Get Involved</a></li>
	<li><a href="http://localhost:8888/accelerator/">Accelerator</a></li>
	<li><a href="http://localhost:8888/accelerator/">Events</a></li>
	<li><a href="http://localhost:8888/accelerator/">About Us</a></li>
	<li><a href="http://localhost:8888/accelerator/">Blog</a></li>
	<li><a href="http://localhost:8888/accelerator/">Press Kit</a></li>
	<li><a href="http://localhost:8888/accelerator/">Jobs</a></li>
	<li><a href="http://localhost:8888/accelerator/">Testimonials</a></li>
</ul>


<div class="footer-info">
	inquiries@femalefounders.org<br>
	500 5th Ave N, Seattle, WA 98109<br>
	(206) 709-3100
</div>


			<div class="copyright">
				&copy; <?php echo date("Y"); ?> FFA
			</div><!-- .site-info -->
		<!-- /.container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/wp-content/themes/wp-bootstrap-4/assets/js/owl.carousel.min.js"></script>
<script>
	$('.ffa-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			responsive:{
					0:{
							items:1
					}
			}
	})
</script>

<script>
	$('.ffa-carousel-two').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			responsive:{
					0:{
							items:1
					}
			}
	})
</script>



  <script src="https://embed.typeform.com/embed.js" type="text/javascript"></script>
  <script type="text/javascript">
    window.addEventListener("DOMContentLoaded", function() {
      var el = document.getElementById("my-embedded-typeform");
      
      // When instantiating a widget embed, you must provide the DOM element
      // that will contain your typeform, the URL of your typeform, and your
      // desired embed settings
      window.typeformEmbed.makeWidget(el, "https://leslie136.typeform.com/to/GNrZ1o", {
        hideFooter: true,
        hideHeaders: true,
        opacity: 0
      });
    });
  </script>

</body>
</html>

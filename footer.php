<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div id="scroll-up">
		<i class="fa fa-2x fa-chevron-up" aria-hidden="true"></i>
	</div>

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row align-center">

			<div class="col-md-9 auto-align">

				<footer class="site-footer" id="colophon">

					<div class="site-info align-center">
						<!-- UNDERSTRAP FOOTER
							<a href="<?php  echo esc_url( __( 'http://wordpress.org/','understrap' ) ); ?>"><?php printf( 
							/* translators:*/
							esc_html__( 'Proudly powered by %s', 'understrap' ),'WordPress' ); ?></a>
								<span class="sep"> | </span>
					
							<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Theme: %1$s by %2$s.', 'understrap' ), $the_theme->get( 'Name' ),  '<a href="'.esc_url( __('http://understrap.com', 'understrap')).'">understrap.com</a>' ); ?> 
				
							(<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Version: %1$s', 'understrap' ), $the_theme->get( 'Version' ) ); ?>)
					</div> -->
					<!-- .site-info -->

					<div class="left-footer">
						© Copyright: Vanité 2017 - Diseño: <a class="iv-link" href="https://www.identidadvisual.com/"><strong>Identidad Visual</strong></a>
						</div>
						<div class="right-footer">
							<a href="">
								<i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
							</a>
							<a href="">
								<i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
							</a>
						</div>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script defer>
 $(document).ready(function(){
   $('.scroll-button').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this)).offset().top}, 500, 'linear');
  });
$('#scroll-up').hide();
$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#scroll-up').fadeIn();
			} else {
				$('#scroll-up').fadeOut();
			}
});
$('#scroll-up').on('click', function() {
    $('html, body').animate({ scrollTop: 0}, 800, 'linear');
    return false;
  });
  });
</script>

</body>

</html>


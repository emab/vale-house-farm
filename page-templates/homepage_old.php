<?php
/**
 * Template Name: Homepage
 *
 * Homepage Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<main class="site-main" id="main" role="main">
	<div class="container-fluid" id="content">
		<div class="row">

			<div class="col-md-12">


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- End content col for pagebuilder -->
			
		</div><!-- End row for pagebuilder -->
	</div>

	<!-- Start custom HTML for Homepage -->
	<div class="container-fluid bg-light">
		<div class="row pt-3">
			<div class="col text-center">
			  	<h1>What we do</h1>
			</div>
		</div>
		<div class="row">
			<div class="col text-center">
				<p class="lead"><?php echo get_post_meta( get_the_ID(), 'homepage-whatwedo', true ); ?></p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row pt-3">
	  		<div class="col md-4">
	  			<p class="lead text-center">Genetics</p>
	  			<p>Genetics are carefully selected from a mix of genetic bloodlines to produce large and 	traditional red deer. Genetics from classic English and Scottish lines and the larger bodied 	Eastern European and New Zealand deer is reflected in the size and quality of our calves for 	both breeding and finishing.</p>
	  		</div>
	  		<div class="col-md-4">
	  		  	<p class="lead text-center">Temperament</p>
	  		  	<p>Safety and minimizing stress is paramount when handling deer. We ensure all our deer	are calm when and easy to handle around humans.</p>
	  		</div>
	  		<div class="col-md-4">
	  		  	<p class="lead text-center">Durability</p>
	  		  	<p>At 1300ft the deer can be exposed to wild weather at anytime of the year! We pick our deer 	to handle these conditions whilst still thriving.</p>
	  		</div>
		</div>
	</div>
	<div class="container-fluid bg-light">
		<div class="row pt-3">
			<div class="col-md-4 offset-md-1">
			  	<h1 class="text-center">The Farm</h1>
				<p>Vale House Farm is a red deer farm situated on the border of Country Durham and the Yorkshire Dales. At 1300 feet, we are one of the highest Deer farms in England! The landscape is a mixture of lush grassland, woodland and hill ground. The land is well managed to ensure the deer are able to graze on nutritious grassland and forage all year round.</p>
				<h1 class="text-center">The Herd</h1>
				<p>We have approximately 200 breeding hinds and 6 stags, in turn producing around 180 calves a year. If you are interested in any of our yearling stock, visit <a href="">for sale</a> or <a href="">contact us</a> for more info!</p>
			</div>
			<div class="col-md-5 offset-md-1">
				<img src="<?php bloginfo('template_url'); ?>/src/img/DSC05043.JPG" class="img-fluid rounded" alt="Responsive image">
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php get_footer(); ?>


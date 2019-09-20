<?php
/**
 * Template Name: Homepage
 *
 * Homepage Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function include_page_contentid($path) {
  $post = get_page_by_path($path);
  $content = apply_filters('the_content', $post->post_content);
  echo $content;
}

get_header(); ?>

<main class="site-main" id="main" role="main">
	<div class="container-fluid" id="content">
		<div class="row">

			<div class="col">


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- End content col for pagebuilder -->

		</div><!-- End row for pagebuilder -->
	</div>

	<!-- Start custom HTML for Homepage -->
	<div class="container-fluid bg-light">
		<div class="row pt-3 pb-3">
			<div class="col-md-10 offset-md-1 lead">
		  		<?php include_page_contentid('intro') ?>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<a id="about"></a>
		<div class="row pt-3 pb-3">
			<div class="col-12">
			  	<h1 class="text-center">About Us</h1>
			</div>
		</div>
		<div class="row pt-3 pb-3">
			<div class="col-md-10 offset-md-1">
			  	<?php include_page_contentid('about-us') ?>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row pt-3 pb-3">
			<div class="col-md-10 offset-md-1">
			  <?php include_page_contentid('sustainability') ?>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-light">
		<div class="row pt-3 pb-3">
			<div class="col-12">
					<a id="forsale"></a>
			  	<h1 class="text-center">For Sale</h1>
			</div>
		</div>
		<div class="row pt-3 pb-3">
			<div class="col-md-10 offset-md-1">
			  	<?php include_page_contentid('for-sale') ?>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row pt-3 pb-3">
			<div class="col-12">
					<a id="contact"></a>
			  	<h1 class="text-center">Contact Us</h1>
			</div>
		</div>
		<div class="row pt-3 pb-3">
			<div class="col-md-10 offset-md-1">
				<?php include_page_contentid('contact-us') ?>
			</div>
		</div>
	</div>

</main><!-- #main -->

<?php get_footer(); ?>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed">
	<a class="js-scroll-trigger d-block text-center rounded text-white" href="#main">
	<p>	<i class="fa fa-chevron-up"></i></p>
	</a>
</div>

<?php
/**
 * Template Name: For Sale Page Template
 *
 * Template for displaying the for sale page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>
	<main class="site-main" id="main" role="main">
		<div class="container mt-lg-4">
			<div class="row pt-5">
				<div class="col-md-6 offset-md-3 bg-light">
				  	<h1>For Sale</h1>
				  	<p>Please call or email for more information or to arrange a viewing:</p>
				  	<p class="lead"><a href="tel:07920843775">07920 843775</a></p>
				  	<p class="lead"><a href="mailto:info@valehousefarm.co.uk">info@valehousefarm.co.uk</a></p>
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-md-10 offset-md-2">
				  	<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'blank' ); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
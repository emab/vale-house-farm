<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<footer>
	<div class="container-fluid">
		<div class="row bg-inverse pt-md-3 pb-1">
			<div class="col">
			  	<p class="text-center">&copy; Vale House Farm 2019</p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
<script type="text/javascript">
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</html>


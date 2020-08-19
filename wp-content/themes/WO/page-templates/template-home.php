<?php
/**
 * Template Name: template-home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="content-wrap container-fluid">
	<div class="row">
		<div class="home-call-to-action col"></div>
		<div class="home-company-marketing col">
			<div class="magento-intro">
				<h1>Magento Development</h1>
				<p class="intro-breifing">
					You will work with some of the best magento developers in Melbourne when working with 
					us as our devlopers are seasoned and experiencedwith all versions of Magento including 
					1.xand 2.x. Our Magento deployments runmulti-million dollar business and are driven by 
					measurable results and continuous, sustainable growth over time.
				</p>
			</div>
			<div class="">
				<h2></h2>
			</div>
			<?php
				get_footer();
			?>
		</div>
	</div> 
</div>



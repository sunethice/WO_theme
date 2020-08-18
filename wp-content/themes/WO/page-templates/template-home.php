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
			<?php
				get_footer();
			?>
		</div>
	</div> 
</div>



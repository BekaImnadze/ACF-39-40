<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Website-ACF
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<h1 class="project-hero-title"><?php echo get_the_title(); ?></h1>
			<div class="single-project-content">
				<?php the_content();?>
			</div>
		</div>

	</main><!-- #main -->

<?php

get_footer();

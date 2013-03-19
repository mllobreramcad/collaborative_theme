<?php
/*
Template Name: Artist Page
*/
?>


<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package collaborative_theme
 * @since collaborative_theme 1.0
 */

get_header(); ?>
		
	<body id="artists">
		<div id="primary" class="content-area">
		<div id="content" class="site-content artist-page" role="main">
			
				<div id="artist-page-text">
					<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
				
				<div id="artist-page-masthead">
				</div>
					
					<div id="artist-bio">
						<?php the_field('artist_bio'); ?>
					</div>
					
					<div id="portfolio-header">
						<h1><?php the_field('portfolio_header'); ?></h1>
					</div>
					
					<div>
						<img id="image1" src="<?php the_field('content_image_1'); ?>" />
						<img id="image2" src="<?php the_field('content_image_2'); ?>" />
						<img id="image3" src="<?php the_field('content_image_3'); ?>" />
						<img id="image4" src="<?php the_field('content_image_4'); ?>" />
						<div id="content1"><p><?php the_field('content_blurb_1'); ?></p></div>
						<div id="content2"><p><?php the_field('content_blurb_2'); ?></p></div>
						<div id="content3"><p><?php the_field('content_blurb_3'); ?></p></div>
						<div id="content4"><p><?php the_field('content_blurb_4'); ?></p></div>
					</div>
					
					<div>
						<img id="artist-photo" src="<?php the_field('artist_photo'); ?>" />
						<div id="artist-statement"><?php the_field('artist_statement'); ?></div>
					</div>
						
					<div id="artist-visit">
						<?php the_field('visit_us'); ?>
					</div>
					<div id="artist-hours">
						<?php the_field('hours'); ?>
					</div>
					<div id="artist-social">
						<a href="http://www.facebook.com"><img id="facebook" src="<?php bloginfo( 'stylesheet_directory' );?>/images/facebook-10x21px.png" alt="Facebook Profile" /></a>
						<a href="https://plus.google.com/"><img id="google+" src="<?php bloginfo( 'stylesheet_directory' );?>/images/googlePlus-21x21px.png" alt="Google + Profile" /></a>
						<a href="http://www.twitter.com"><img id="twitter" src="<?php bloginfo( 'stylesheet_directory' );?>/images/twitter-26x21px.png" alt="Twitter" /></a>
					</div>
					<div id="content-footer">
						<?php the_field('content_footer'); ?>
					</div>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
	</body>

<?php get_footer(); ?>
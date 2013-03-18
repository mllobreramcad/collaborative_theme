<?php
/*
Template Name: Homepage
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
* @package Collaborative Project
* @since Collaborative Project 1.0
*/

get_header(); ?>

<body id="homepage">
	<div id="primary" class="content-area-homepage">
		<div id="content" class="site-content" role="main">
		
			<div id="hero">
			<img src="<?php the_field('hero_image'); ?>" alt="MMT Building" />
			</div>
		<div id="main_content">
			<?php the_field('top_paragraph'); ?>
			<div class="left">
			<?php the_field('column_1_content'); ?>
			</div>
			<div class="right">
			<?php the_field('column_2_content'); ?>
			</div>
		</div>
		<div id="visit">
			<?php the_field('visit_us'); ?>
		</div>
		<div id="hours">
			<?php the_field('hours'); ?>
		</div>
		<div id="social">
			<ul>
			<li><a href="http://www.facebook.com"><img id="facebook" src="<?php bloginfo( 'stylesheet_directory' );?>/images/facebook-10x21px.png" alt="Facebook" /></a></li>
			<li><a href="https://plus.google.com/"><img id="google+" src="<?php bloginfo( 'stylesheet_directory' );?>/images/googlePlus-21x21px.png" alt="Google+" /></a></li>
			<li><a href="http://www.twitter.com"><img id="twitter" src="<?php bloginfo( 'stylesheet_directory' );?>/images/twitter-26x21px.png" alt="Twitter" /></a></li>
			</ul>
		</div>

	<div id="homepage-text">
		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div>

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->
</body>
<?php get_footer(); ?>
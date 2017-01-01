<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="aboutpage">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section>
<section class="about-page_outer">
	<div class="blurb">
		<h2>OUR SERVICES</h2>
		<h5>We take pride in our clients and the content we create for them. <br>Here's a brief overview of our offered services.</h5>
	</div>
	<div class="site-content">
	<?php query_posts('post_type=our_services'); ?>
		<?php while ( have_posts() ) : the_post();
			$image_1 = get_field("image_1");
			$size ="full";
		?>
	</div>
<div class="about-page">
		<figure class="about-page-images">
						<?php echo wp_get_attachment_image($image_1, $size); ?>
		</figure>

					<div class="about-text-block">
						<h1><?php the_title(); ?></h1>
			  		<h5><?php the_excerpt(); ?></h5>
					</div>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
</div>
</section>

<?php get_footer(); ?>

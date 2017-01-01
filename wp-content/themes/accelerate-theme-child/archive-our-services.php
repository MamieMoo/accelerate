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
<div class="about-pic-left"><img src="../img/arrow.jpg">
<h2>Content Strategy</h2>
Pooka lopsa banger moona poosaslooejkdpsidns kjlsda;djg;awe jkasl;djh skjdfnjw
aksdld;fn;aw
</div>
<?php get_footer(); ?>

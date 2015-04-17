<?php get_header(); ?>
 
	<main id="content">
	<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>

	<?php endwhile; ?>
	<!-- post navigation -->


	<?php else: ?>
	<!-- no posts found -->
	<h2>Sorry, no posts found</h2>
	:(


	<?php endif; ?> 
 
	</main><!-- end #content -->


 
<!-- 	<aside id="sidebar"> 

	</aside> end #sidebar -->
 

<?php get_footer(); ?>

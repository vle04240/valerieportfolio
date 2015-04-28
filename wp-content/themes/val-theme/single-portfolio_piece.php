<?php get_header(); ?>
 
	<main id="content">
	<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<!-- post -->
	<div class="post">

	<?php the_post_thumbnail( 'medium' ); ?>

	<h3><?php the_title(); ?></h3>
	
	<?php the_content(); ?>
	
	</div>



	<?php endwhile; ?>
	<!-- post navigation -->




	<?php else: ?>
	<!-- no posts found -->
	<h2>Sorry, no posts found</h2>
	


	<?php endif; ?> 
 
	</main><!-- end #content -->


 
<!-- 	<aside id="sidebar"> 

	</aside> end #sidebar -->
 

<?php get_footer(); ?>

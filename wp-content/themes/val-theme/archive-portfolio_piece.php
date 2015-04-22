<?php get_header(); ?>
 
<main id="content">
 <?php
//get all the terms in the category taxonomy
// A term is an item of a taxonomy (e.g. "Apple" could be a term for the taxonomy "brand")
$terms = get_terms('work_type');
foreach( $terms as $term ):
?>
  <section class="type-<?php echo $term->name ?>">
    <h3 class="postmeta"> <?php echo $term->name;?></h3>
    <p class="description"><?php echo $term->description ?></p>
    
      <?php
      //select posts in this category (term), and of a specified content type (post type) 
      $post_query = new WP_Query(array(
        'post_type' => 'portfolio_piece',
        'taxonomy' => $term->taxonomy,
        'term' => $term->slug,
        'nopaging' => true, // to show all posts in this category
      ));    
      //begin THE LOOP
      if( $post_query->have_posts() ): ?>
      	<?php while( $post_query->have_posts() ): $post_query->the_post(); ?>
      		       
      	<div id="post-<?php the_ID(); ?>" class="post">
      		<h4 class="entry-title"> 
      			<a href="<?php the_permalink(); ?>"> 
      				<?php the_title(); ?> 
      			</a>
      		</h4>
      		<a href="<?php the_permalink(); ?>"> 
      			<?php the_post_thumbnail('thumbnail', array( 'class' => 'thumb' )); //featured image (activate in functions.php) ?>
      		</a>	

        </div>
        <?php endwhile; ?>
      <?php endif;  //end THE LOOP(posts) ?>
      

  </section>
<?php endforeach; //term ?>
</main>


 
<!-- 	<aside id="sidebar"> 

	</aside> end #sidebar -->
 

<?php get_footer(); ?>

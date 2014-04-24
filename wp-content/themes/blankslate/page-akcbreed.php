<?php 
/*
			Template Name: AKC Page
*/
/*
Change the name of this template above, and save a copy of this file in   wp-content/themes/blankslate
You want to save a copy so you dont lose this one :)
*/
?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic,800' rel='stylesheet' type='text/css'>


<?php get_header(); ?>


	<section class="container page-single" role="main">

	AKC Breed Page
	
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article>
				
				<header>
					<h2 class="pageTitle"><?php the_title(); ?></h2>
				</header>
				
				<section class="entry-content">
						
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } /* The Featured Image */?> 
						
						<?php the_content(); /* The Content or Excerpt */?>

						<?php 
								/* Put Other Page Custom Field Calls Here. 

								Ex. <?php the_field('my-field-name'); ?> */ 

						?>

				</section>
			
			</article>
		<?php endwhile; endif; ?>
	
	</section>

	<div class="container">


	<?php 

		/************ BEGIN CUSTOM FIELDS FOR THIS POST TYPE *****************/

		// Define some options when looking for fields
		

		// Which Post Type? Find the names of your post types at http://localhost:8888/wpstarter/wp-admin/admin.php?page=cpt_sub_manage_cpt
		
		$post_type = 'akc_breeds'; // Put Post Type Name Here



		// How to Return the Results
		$args = array(
			'post_type' => $post_type,
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => ASC
		);



		// Begin a new trip to the Database to get the fields


		// DONT TOUCH THESE LINES
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts()) : 
			while ( $the_query->have_posts()) : 
				$the_query->the_post();
		// DONT TOUCH THESE LINES
		?>







		<?php /********** CALL IN YOUR FIELDS HERE to Output to the Page, add class="" to the Div's *************/ ?>
			

			<div class="col-md-3">


					<a href="<?php the_permalink(); ?>">
						<img src="<?php the_field('featured_photo'); ?>" class="img-responsive" />
					</a>

					<h3>
						<a href="<?php the_permalink(); ?>"><?php the_title(); // Gets Signle Post Type Item ?> </a>
					</h3>

				
					<?php the_field(''); // Put Field Name Between Quotes ?>
				

				
					<?php the_field(''); // Put Field Name Between Quotes ?>
			</div>



		<?php /********** Finish It All Up! *************/ ?>

		<?php
		    endwhile;
			endif;
		?>


	
	</div> <!-- End of Container -->


	<aside class="container" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>


<?php get_footer(); ?>
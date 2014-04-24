<?php 
/*
			Template Name: Home Page
*/
/*
Change the name of this template above, and save a copy of this file in   wp-content/themes/blankslate
You want to save a copy so you dont lose this one :)
*/
?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic,800' rel='stylesheet' type='text/css'>


<?php get_header(); ?>


	<section class="col-md-12 page-single" role="main">

	Home Page


	
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			
			<article>
				
				<header>
					<h2 class="pageTitle"><?php the_title(); ?></h2>
				</header>

				<iframe src="//player.vimeo.com/video/66488974"
						width="80%" height="80%" frameborder="0"
						webkitallowfullscreen mozallowfullscreen
						allowfullscreen></iframe> <p><a
						href="http://vimeo.com/66488974">Jarrett Moore -
						Doggin' It</a> from <a
						<href="http://vimeo.com/chromag">Chromag</a> on <a
						<href="https://vimeo.com">Vimeo</a>.</p>

				
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


<?php get_footer(); ?>
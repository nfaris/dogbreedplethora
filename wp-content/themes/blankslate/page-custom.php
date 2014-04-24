<?php 
/*
			Template Name: Contact Page Template
*/
/*
Change the name of this template above, and save a copy of this file in   wp-content/themes/blankslate
You want to save a copy so you dont lose this one :)
*/
?>


<?php get_header(); ?>

<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>

	<section class="col-md-8 page-single" role="main">

		Contact Page Template
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article>
				
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				
				<section class="entry-content">
						
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } /* The Featured Image */?> 
						
						<?php the_content(); /* The Content or Excerpt */?>

					<iframe src="//player.vimeo.com/video/66488974"
					<width="100%" height="281" frameborder="0"
					<webkitallowfullscreen mozallowfullscreen
					<allowfullscreen></iframe> <p><a
					<href="http://vimeo.com/66488974">Jarrett Moore - Doggin'
					<It</a> from <a
					<href="http://vimeo.com/chromag">Chromag</a> on <a
					<href="https://vimeo.com">Vimeo</a>.</p>

						<?php 
								/* Put Other Page Custom Field Calls Here. 

								Ex. <?php the_field('my-field-name'); ?> */ 

						?>

				</section>
			
			</article>
		<?php endwhile; endif; ?>
	
	</section>


	


<?php get_footer(); ?>
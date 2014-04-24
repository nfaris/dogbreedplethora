
<?php get_header(); ?>

single akc breed
	<section class="col-md-8 page-single" role="main">

	
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article>
				
				<header>
					<h2 class="pageTitle"><?php the_title(); ?></h2>
				</header>

				<link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic,800' rel='stylesheet' type='text/css'>
				
				<section class="entry-content">
						
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } /* The Featured Image */?> 
						
						

						<?php 
								/* Put Other Page Custom Field Calls Here. 

								Ex. <?php the_field('my-field-name'); ?> */ 

						?>

						<a href="<?php the_permalink(); ?>">
						
						<img src="<?php the_field('animated_dog_info'); ?>" class="img-responsive" />
					</a>

				</section>

			</article>


		<?php endwhile; endif; ?>
	
	</section>

	<section div class="col-md-12">

		<div class="col-md-8">

						<h4><strong>Biography</strong></h4>

						<?php the_content(); /* The Content or Excerpt */?>

		</div>


		<div class="col-md-4">

						<h4><strong>Statistics</strong></h4>

						<div class="statistics">


							<div class="akc-ranking"><strong>AKC Ranking:</strong>
								<?php the_field('akc_ranking'); // Put Field Name Between Quotes ?>
							</div>

							<div class=""><strong>Group:</strong>
								<?php the_field('group'); // Put Field Name Between Quotes ?>
							</div>

							<div class=""><strong>Area of Origin:</strong>
								<?php the_field('area_of_origin'); // Put Field Name Between Quotes ?>
							</div>

							<div class=""><strong>Date of Origin:</strong>
								<?php the_field('date_of_origin'); // Put Field Name Between Quotes ?>
							</div>

							<div class=""><strong>Function:</strong>
								<?php the_field('function'); // Put Field Name Between Quotes ?>
							</div>

							<div class=""><strong>AKA:</strong>
								<?php the_field('aka'); // Put Field Name Between Quotes ?>
							</div>

							<div class=""><strong>Weight:</strong>
								<?php the_field('weight'); // Put Field Name Between Quotes ?>
							</div>

							<div class=""><strong>Height:</strong>
								<?php the_field('height'); // Put Field Name Between Quotes ?>
							</div>

							<div class=""><strong>Life Span:</strong>
								<?php the_field('life_span'); // Put Field Name Between Quotes ?>
							</div>

						</h4>

					</div>


	

	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>

	</div>


<?php get_footer(); ?>
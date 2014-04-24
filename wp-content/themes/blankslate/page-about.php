<?php 
/*
			Template Name: About Page
*/
/*
Change the name of this template above, and save a copy of this file in   wp-content/themes/blankslate
You want to save a copy so you dont lose this one :)
*/
?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic,800' rel='stylesheet' type='text/css'>

<?php get_header(); ?>


	<section class="col-md-10 page-single" role="main">

	About Page
	
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article>
				
				<header>
					<h2 class="pageTitle"><?php the_title(); ?></h2>
				</header>

				<div class="purpose">

                    <h5>"The purpose of this site is to provide an insight to
						the variety of dog breeds and how you can identify the different
						characteristics of each breed."</h5>                 
				</div>

				<div class="history">

					<h4>History of Dog Breeding</h4>

					<p>Dog breeding is the practice of mating selected dogs
						with the intent to maintain or produce specific qualities
						and characteristics. When dogs reproduce without such
						human intervention, their offsprings' characteristics are
						determined by natural selection, while "dog breeding"
						refers specifically to the artificial selection of dogs,
						in which dogs are intentionally bred by their owners. A person who
						intentionally mates dogs to produce puppies is referred to as a dog breeder.
						Breeding relies on the science of genetics, so the breeder with a knowledge of
						canine genetics, health, and the intended use for the dogs attempts to breed
						suitable dogs.</p>

					<p>Humans have maintained populations of useful animals around their places of
						habitat since pre-historic times. They have intentionally fed dogs
						considered useful, while neglecting or killing others, thereby establishing a
						relationship between humans and certain types of dog over thousands of years.
						Over these millennia, domesticated dogs have developed into distinct types,
						or groups, such as livestock guardian dogs, hunting dogs, and sighthounds.
						Artificial selection in dog breeding has influenced behavior, shape, and size
						of dogs for the past 14,000 years.</p>

					<p>To maintain these distinctions, humans have intentionally mated dogs with
						certain characteristics to encourage those characteristics in the offspring.
						Through this process, hundreds of dog breeds have been developed. Initially,
						the ownership of working and, later, purebred dogs, was a privilege of the
						wealthy. Nowadays, many people can afford to buy a dog. Some breeders chose to
						breed purebred dogs, while some prefer the birth of a litter of puppies to a
						dog registry, such as kennel club to record it in stud books such as those
						kept by the AKC (American Kennel Club). Such registries maintain records of
						dogs’ lineage and are usually affiliated with kennel clubs.[4] Maintaining
						correct data is important for purebred dog breeding. Access to records allows
						a breeder to analyze the pedigrees and anticipate traits and behaviors.
						Requirements for the breeding of registered purebreds vary between breeds,
						countries, kennel clubs and registries.</p>

					<p>Breeders have to abide by the rules of the specific organization to
						participate in its breed maintenance and development programs. The rules may
						apply to the health of the dogs, such as joint x-rays, hip certifications, and
						eye examinations; to working qualities, such as passing a special test or
						achieving at a trial; to general conformation, such as evaluation of a dog by
						a breed expert. However, many registries, particularly those in North America,
						are not policing agencies that exclude dogs of poor quality or health. Their
						main function is simply to register puppies born of parents who are themselves
						registered.</p>

				</div>
				
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


	<aside class="col-md-4" role="complementary">
		
		<?php get_sidebar(); ?>
	
	</aside>


<?php get_footer(); ?>
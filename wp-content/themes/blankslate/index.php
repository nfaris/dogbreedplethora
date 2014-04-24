<?php get_header(); ?>

<link href='http://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic,800' rel='stylesheet' type='text/css'>


<section class="col-md-10 main-content-blog" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php comments_template(); ?>
	<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>

<aside class="col-md-2" role="complementary">
		
	<?php get_sidebar(); ?>
	
</aside>

<?php get_footer(); ?>
<?php /* Template Name: Response to COVID-19 */ ?>

<?php get_header(); ?>

<main id="content">
<section id="covid-response-page">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="covid-response-page-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>

</article>
<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php /* Template Name: General Page Template (Long Title) */ ?>

<?php get_header(); ?>

<main id="content">
<section id="general-page-template">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>
</article>
<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
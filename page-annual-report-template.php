<?php /* Template Name: Annual Report Page Template */ ?>
<?php get_header(); ?>

<main id="content">
<section id="annual-report-page-template">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<div class="annual-report-page-container">
    <div class="container-pdf">
        <div class="content-wrapper">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>
</div>
</article>
</div>
<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
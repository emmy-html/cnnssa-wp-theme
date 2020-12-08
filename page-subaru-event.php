<?php /* Template Name: Subaru Event Page */ ?>
<?php get_header(); ?>

<main id="content">
<section id="subaru-event-page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="subaru-event-page-hero">
                <?php if( get_field('header_image') ): ?>
                    <img src="<?php the_field('header_image'); ?>" />
                <?php endif; ?>
                <?php if( get_field('header_caption') ): ?>
                    <div class="content-wrapper">
                        <p><?php the_field('header_caption'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="subaru-event-page-stats">
                <?php if( get_field('image_1') ): ?>
                    <img src="<?php the_field('image_1'); ?>" class="subaru-event-stat-photo-one" />
                <?php endif; ?>
                <?php if( get_field('subaru_retailer_link') ): ?>
                    <a href="<?php the_field('subaru_retailer_link'); ?>" target="_blank">  
                        <?php if( get_field('image_2') ): ?>
                        <img src="<?php the_field('image_2'); ?>" class="subaru-event-stat-photo-two" />
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="subaru-event-page-desc">
                <div class="content-wrapper">
                    <?php if( get_field('infographic_caption') ): ?>
                        <?php the_field('infographic_caption'); ?>
                    <?php endif; ?>
                </div>
                <?php if( get_field('subaru_logo') ): ?>
                    <img src="<?php the_field('subaru_logo'); ?>" />
                <?php endif; ?>
            </div>
            <div class="button-container">
                <?php if( get_field('learn_more') ): ?>
                    <a href="<?php the_field('learn_more'); ?>" target="_blank" class="rounded-blue-button">Learn More &#8250;</a>
                <?php endif; ?>
            </div>
            <p><br></p>
<?php the_content(); ?>

</article>
<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
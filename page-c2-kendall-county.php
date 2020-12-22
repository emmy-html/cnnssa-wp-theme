<?php /* Template Name: C2 Kendall County Page */ ?>

<?php get_header(); ?>

<main id="content">
    <section id="gk-county-page-template">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="gk-county-page-content">
            <div class="gk-county-page-content-container">
                <article class="gk-county-page-application">
                    <h2>Apply For Meals on Wheels 
                        <span>In <?php the_field('county_name'); ?> County</span>
                    </h2>
                    <div class="ccu-info">
                        <aside>
                            <?php if( get_field('ccu_logo') ): ?>
                            <img src="<?php the_field('ccu_logo'); ?>" alt="<?php the_field('ccu_name'); ?>" /></h3>
                            <?php endif; ?>
                        </aside>
                        <aside>
                            <?php if( get_field('ccu_name') ): ?>
                            <h3><?php the_field('ccu_name'); ?></h3>
                            <?php endif; ?>
                            <?php if( get_field('ccu_address') ): ?>
                            <p><?php the_field('ccu_address'); ?></p>
                            <?php endif; ?>
                            <?php if( get_field('ccu_number') ): ?>
                            <p><?php the_field('ccu_number'); ?></p>
                            <?php endif; ?>
                        </aside>
                    </div>
                    <div class="button-container">
                        <?php if( get_field('ccu_website') ): ?>
                        <a href="<?php the_field('ccu_website'); ?>" target="_blank" class="rounded-green-button">Visit
                            Their
                            Website &#8250;</a>
                        <?php endif; ?>
                    </div>
                </article>
                <article class="map-locations">
                    <div class="map-locations-container">

                        <?php 
                    $args = array( 'post_type' => 'c2-locations', 'tag' => 'c2-kendall-county', 'posts_per_page' => 1, 'orderby' => 'title',
                    'order'   => 'ASC' );
                    $the_query = new WP_Query( $args ); 
                    ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php the_content(); ?>
                        <aside>
                            <div class="content-wrapper">
                                <div>
                                    <?php if( get_field('location_name') ): ?>
                                    <h3><?php the_field('location_name'); ?></h3>
                                    <?php endif; ?>
                                    <?php if( get_field('location_address') ): ?>
                                    <p><?php the_field('location_address'); ?></p>
                                    <?php endif; ?>
                                    <p class="location-more-info">
                                        <?php if( get_field('location_route') ): ?>
                                        <a href="<?php the_field('location_route'); ?>">Route &#8250;</a>
                                        <?php endif; ?>
                                    </p>
                                </div>
                                <div>
                                    <?php if( get_field('location_type') ): ?>
                                    <h3 class="pick-up-time"><?php the_field('location_type'); ?>
                                        <?php endif; ?>
                                        <?php if( get_field('location_times') ): ?>
                                        <span><?php the_field('location_times'); ?></span>
                                        <?php endif; ?>
                                        <?php if( get_field('location_days') ): ?>
                                        <span><?php the_field('location_days'); ?></span>
                                        <?php endif; ?>
                                    </h3>
                                </div>
                                <div>
                                    <h3>Manager:
                                        <?php if( get_field('location_manager') ): ?>
                                        <span><?php the_field('location_manager'); ?></span>
                                        <?php endif; ?>
                                        <?php if( get_field('phone_number') ): ?>
                                        <span><?php the_field('phone_number'); ?></span>
                                        <?php endif; ?>
                                    </h3>
                                </div>
                            </div>
                        </aside>
                        <?php wp_reset_postdata(); ?>
                        <?php endwhile;  ?>
                        <?php endif; ?>
                    </div>
                </article>
            </div>
            <article class="map">
                <?php if( get_field('map') ): ?>
                <?php the_field('map'); ?>
                <?php endif; ?>
            </article>
        </div>
        <h1 class="more-about-mow">More About Our Program</h1>
        <article class="about-mow-page-programs">
            <div class="about-mow-page-programs-span">
                <i class="fas fa-carrot fa-3x"></i>
                <h2>Our Commitment</h2>
                <p>Nutritional health is an important factor for remaining independent as we age. Meals on Wheels
                    provides in-home delivery of hot meals five days a week. With support for good nutrition and
                    healthy living, many older adults in our area are able to live safely and independently in their
                    own homes.</p>
            </div>
            <div class="about-mow-page-programs-span">
                <i class="fas fa-utensils fa-3x"></i>
                <h2>How much do
                    <span>the meals cost?</span>
                </h2>
                <p>There is no cost to participants. We do ask that all participants for a voluntary contribution.
                    No one is ever denied service if they are unable or unwilling to contribute.</p>
            </div>
        </article>
        </div>
    </section>
    <?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
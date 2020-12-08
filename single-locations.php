<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
        <?php if( get_field('location_details') ): ?>
            <a href="<?php the_field('location_details'); ?>">Details &#8250;</a>
        <?php endif; ?>
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
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>

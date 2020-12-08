<?php /* Template Name: C1 Individual Location Template */ ?>
<?php get_header(); ?>

<main id="content">
<section id="single-mow-location-page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title()?></h1>
    <div class="single-mow-location-page-content">
        <article class="single-mow-location-page-map">
        <?php if( get_field('map') ): ?>
            <?php the_field('map'); ?>
        <?php endif; ?>
        </article>
        <aside class="single-mow-location-page-meal-pickup">
            <?php if( get_field('location_type') ): ?>
                <h2><?php the_field('location_type'); ?></h2>
            <?php endif; ?> 
            <?php if( get_field('location_name') ): ?>
                <h3><?php the_field('location_name'); ?></h3>
            <?php endif; ?> 
            <?php if( get_field('location_address') ): ?>
                <p><?php the_field('location_address'); ?></p>
            <?php endif; ?>
            <?php if( get_field('time_type') ): ?>
                <h3><?php the_field('time_type'); ?></h3>
            <?php endif; ?> 
            <?php if( get_field('time_range') ): ?>
                <p><?php the_field('time_range'); ?></p>
            <?php endif; ?> 
            <?php if( get_field('service_days') ): ?>
                <p><?php the_field('service_days'); ?></p>
            <?php endif; ?> 
            <?php if( get_field('manager_select') ): ?>
                <h3>
                    <?php the_field('manager_select'); ?>
                </h3>
            <?php endif; ?>
            <?php if( get_field('manager_name') ): ?>
                <p><?php the_field('manager_name'); ?></p>
            <?php endif; ?> 
            <?php if( get_field('phone_number') ): ?>
                <p><?php the_field('phone_number'); ?></p>
            <?php endif; ?> 
        </aside>
    </div>
</section>
<section id="single-mow-location-page-additional-info">
      <div class="single-mow-location-page-additional-info-container">
        <article>
          <h2>Application</h2>
          <div class="content-wrapper">
            <i class="fas fa-copy fa-3x"></i>
            <p>To receive meals at our cafés, you must register first.</p>
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
            <?php if( get_field('ccu_application') ): ?>
                <a href="<?php the_field('ccu_application'); ?>" target="_blank" class="rounded-green-button">Download Application</a>
            <?php endif; ?>
            </div>
          </div>
        </article>
        <article>
          <h2>Menu</h2>
          <div class="content-wrapper">
              <i class="fas fa-utensils fa-3x"></i>
              <p>Each meal comes with protein, vegetables, fruit, grain, and milk. The menus have been approved by a Registered Dietitian to meet 1/3 of your daily recommended intake of nutrients.</p>
            <div class="button-container">
              <a href="<?php the_field('menu'); ?>" target="_blank" class="rounded-blue-button">View Our Menu</a>
            </div>
          </div>
        </article>
      </div>
    </section>

<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
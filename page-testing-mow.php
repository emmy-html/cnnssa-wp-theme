<?php /* Template Name: (Test) About Meals On Wheels Page */ ?>

<?php get_header(); ?>

<main id="content">
<section id="about-mow-page-hero">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
</section>
<section id="about-mow-page-locations">
            <div class="about-mow-page-locations-content">
                <article class="map">
                [google_map_easy id="1"]
                </article>
                <article class="map-locations">
                    <div class="content-wrapper">
                      <p>For the general safety of all café participants and the community, the Illinois department on aging has mandated that we close our café dining rooms. To go and delivered meal options are being made available to café participants during this time. To take part in either of these, contact the locations below to sign up and confirm your pickup meals. Pickup days and times listed below are only for clients who have already confirmed with staff.</p>
                    </div>
                    <div class="map-locations-container">
                    <?php
    $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'location-details',
        'posts_per_page' => 5,
        'paged' => $paged,
    );
    $arr_posts = new WP_Query( $args );
 
    if ( $arr_posts->have_posts() ) :
 
        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail();
                endif;
                ?>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </article>
            <?php
        endwhile;
        wp_pagenavi(
            array(
                'query' => $arr_posts,
            )
        );
    endif;
    ?>
                      <aside>
                        <div class="content-wrapper">
                          <div>
                            <h3>Lockport Township</h3>
                            <p>1463 S. Farrell Rd<br>
                              Lockport, IL 60441</p>
                              <p class="location-more-info">
                                <a href="../mow/lockport_township.html">Details <i class="fas fa-angle-right"></i>                                </a>
                                <a href="#">Route <i class="fas fa-location-arrow"></i></a>
                              </p>
                          </div>
                          <div>
                            <h3 class="pick-up-time">Pick-Up Times:
                              <span>8AM-1PM</span>
                              <span>Monday - Friday</span>
                            </h3>
                          </div>
                          <div>
                            <h3>Manager:
                              <span>Vicki Gelfo</span>
                              <span>815-351-9108</span>
                            </h3>
                          </div>
                        </div>
                      </aside>
                    </div>
                </article>
                <article class="about-mow-page-programs">
                  <h1>More About Our Program</h1>
                    <div class="about-mow-page-programs-span">
                      <i class="fas fa-carrot fa-3x"></i>
                      <h2>Our Commitment</h2>
                      <p>Nutritional health is an important factor for remaining independent as we age. Meals on Wheels provides in-home delivery of hot meals five days a week. With support for good nutrition and healthy living, many older adults in our area are able to live safely and independently in their own homes.</p>
                    </div>
                    <div class="about-mow-page-programs-span">
                      <i class="fas fa-utensils fa-3x"></i>
                      <h2>How much do 
                        <span>the meals cost?</span></h2>
                      <p>There is no cost to participants. We do ask that all participants for a voluntary contribution. No one is ever denied service if they are unable or unwilling to contribute.</p>              
                    </div>
                    <div class="about-mow-page-programs-span">
                      <i class="fas fa-car fa-3x"></i>
                      <h2>How to get 
                        <span>Meals on Wheels</span></h2>
                      <p>If you or a loved one is in need of Meals on Wheels, you will need to first contact a case coordinator. Using the locator on this page, enter your zip code to find the nearest Meals on Wheels distribution location. Once you find a location click on its name to be taken to that locations home page. Here you will find contact information the case coordinator for that area as well as the manager of that location. If you have any questions about the proces for getting meals on wheels, our staff will be there to assist you. If you have any other questions, please feel free to contact our main office at (312) 207-5290.</p>
                    </div>
              </article>
            </div>
        </section>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
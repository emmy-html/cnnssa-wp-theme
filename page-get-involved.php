<?php /* Template Name: Get Involved Page */ ?>

<?php get_header(); ?>

<main id="content">
<section id="general-page-template">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><?php the_title() ?></h1>
    </section>
    <section id="get-involved-page-cta">
        <div class="get-involved-cta-container">
                <article>
                <a href="/volunteer"><h2>I want to</h2>
                <h3>Volunteer</h3></a>
                </article>
                <article>
                <a href="/donate">
                    <h2>I want to</h2>
                    <h3>Donate</h3>
                </a>
                </article>
            </div>
            </div>
      </section>
      <section id="get-involved-page-other-ways">
        <h2>Other Ways To Get Involved</h2>
        <aside class="other-ways-tabs">
          <div class="tab-button-container">
            <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'option-one')" id="defaultTab">Supper Club</button>
              <button class="tablinks" onclick="openCity(event, 'option-two')">Fundraising</button>
              <button class="tablinks" onclick="openCity(event, 'option-three')">Matching Gifts</button>
              <button class="tablinks" onclick="openCity(event, 'option-four')">In Kind Giving</button>
              <button class="tablinks" onclick="openCity(event, 'option-five')">In Memoriam</button>
            </div>
          </div>
          <div class="tab-content-container">
            <div id="option-one" class="tabcontent">
              <div class="content-wrapper">
                <i class="fas fa-utensils fa-3x"></i>
                <h3>Supper Club</h3>
                <p>Please check back soon for more information about our Supper Club!</p>
              </div>
            </div>
            
            <div id="option-two" class="tabcontent">
              <div class="content-wrapper">
                <i class="fas fa-funnel-dollar fa-3x"></i>
                <h3>Fundraising</h3>
                <p>Please check back soon for more information about fundraising!</p>
              </div>
            </div>
            
            <div id="option-three" class="tabcontent">
              <div class="content-wrapper">
                <i class="fas fa-gift fa-3x"></i>
                <h3>Matching Gifts</h3>
                    <p>Many companies have a Corporate Matching Gift Program and will match your monetary and/or volunteer contribution with a corporate gift. Check with your employer to find out if they offer this great way to increase the value of your giving.</p>
                </div>
            </div>

            <div id="option-four" class="tabcontent">
              <div class="content-wrapper">
                <i class="fas fa-hourglass-half fa-3x"></i>
                <h3>In Kind Giving</h3>
                    <p>Please check back soon for more information about In Kind Giving!</p>
                </div>
            </div>

            <div id="option-five" class="tabcontent">
              <div class="content-wrapper">
                <i class="fas fa-monument fa-3x"></i>
                <h3>In Memoriam</h3>
                    <p>In Memoriam or In Honor Giving provides you, the donor, with the opportunity to remember special individuals with a tribute gift. Gifts may be made In Memory of an individual to commemorate a loved one’s life, or In Honor of an individual who is special in your life. Gifts may also be made in honor of special occasions, such as birthdays, graduation, and anniversaries. At your request, Meals on Wheels Foundation will send a hand-written card to the individual whom you designate to notify them of your gift. The amount will not be disclosed.</p>
                </div>
            </div>
          </div>
        </aside>
        <div class="button-container">
          <a href="/about/other-ways-to-get-involved" class="rounded-blue-button">Learn More &#8250;</a>
        </div> 
      </section>  
<?php the_content(); ?>
</article>
<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
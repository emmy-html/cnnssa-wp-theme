<?php get_header('home'); ?>
<main id="front-page">
<section id="smart-slide-hero">
<?php
echo do_shortcode('[smartslider3 slider="3"]');
?>
</section>
<section id="our-impact">
      <div class="content-wrapper">
        <h1>Our
          <span>Impact</span>
        </h1>
      </div>
        <div class="impact-content">
          <article>
            <h2>
              7,300
              <span>Older Americans <span>Served</span></span>
            </h2>
          </article>
          <article>
            <h2>
              73,000
              <span>Hours Volunteered</span>
            </h2>
          </article>
          <article>
            <h2>
              86,000
              <span>Emergency Meals Delivered</span>
            </h2>
          </article>
        </div>
    </section>
<section id="cta">
      <h1>COVID-19 <span>Relief</span></h1>
      <div class="content-wrapper">
        <p>During this national emergency, we are delivering additional meals to our most vulnerable communities, and we need your help!</p>
        <div class="options-container">
          <div class="button-container">
            <a href="/volunteer" class="rounded-blue-button">Volunteer</a>
          </div>
          <div class="button-container">
            <a href="/donate" class="rounded-green-button">Donate</a>
          </div>
        </div>
      </div>
    </section>
    <section id="meals">
      <div class="content-wrapper">
        <h1>Home Delivered 
          <span>Meals</span>
        </h1>
      </div>
        <div class="meals-content-container">
          <article>
          <i class="fas fa-utensils fa-3x"></i>
            <h4>
              Meal Pick Up
            </h4>
            <p>Due to the COVID-19 pandemic, we are now offering meal pick up instead of in-person dining. Pick up times vary by location.</p>
            <div class="button-container">
              <a href="cafes/find-a-cafe/" class="rounded-blue-button">Find A Pick-Up Location &#8250;</a>
            </div>
          </article>
          <article>
          <i class="fas fa-car fa-3x"></i>
            <h4>
            Meal Delivery
            </h4>
            <p>Each meal comes with protein, vegetables, fruit, grain, and milk. The menus have been approved by a Registered Dietitian to meet 1/3 of your daily recommended intake of nutrients.</p>
            <div class="button-container">
              <a href="/meals-on-wheels/" class="rounded-green-button">Find A Delivery Location &#8250;</a>
            </div>
          </article>
          </div>
        </div>
      </section>
    <section id="involvement-cta">
      <div class="content-wrapper">
        <h1>Make A
          <span>Change</span>
        </h1>
      </div>
      <div class="involvement-cta-content">
        <div class="content-wrapper">
          <article>
          <i class="fas fa-hand-holding-usd fa-3x"></i>
          <h3>Become A
              <span>Monthly Donor</span>
            </h3>
            <p>Generous donors who are able to give monthly provide a steady and reliable source of contributions. Thank you to all of our donors, monthly or one-time, who help ensure that No Older Adult Goes Hungry.</p>
          </article>
          <article>
          <i class="fas fa-hands-helping fa-3x"></i>
          <h3>Volunteer <span>
              With Us</span></h3>
            <p>Volunteering for Meals on Wheels is a great way to make a huge impact in a short amount of time. Sign up today and find out how easy and rewarding it is to bring nutrition and independence to your neighbors!</p>
          </article>
        </div>
      </div>
    </section>
    <section id="newsletter">
      <div class="newsletter-container">
        <div class="content-wrapper">
          <aside>
            <h2>Our Newsletter</h2>
            <h3>Keep Up With Us</h3>
          </aside>
          <!-- Begin Constant Contact Inline Form Code -->
<div class="ctct-inline-form" data-form-id="1e6ecffd-7142-450c-9257-86254f972906"></div>
<!-- End Constant Contact Inline Form Code -->
        </div>
      </div>
    </div>
  </section>
  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
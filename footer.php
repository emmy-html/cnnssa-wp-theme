</div>
<footer id="footer">
<article class="text-logo">
        <h5>The Meals On Wheels Foundation
          <span>of Northern Illinois</span></h5>
      </article>
      <div class="content-wrapper">
      <article>
        <h6>Address</h6>
          <p>7222 Cermak Road<br>
          North Riverside, IL 60546</p>
        <h6>Phone</h6>
          <p>1 (312) 967-4666</p>
        <h6>Fax</h6>
          <p>1(312) 441-0641</p>
        <h6>Find Us Here</h6>
          <p class="social-media">
            <a href="https://www.facebook.com/mowf/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="https://twitter.com/MealsonWheelsNI" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
            <a href="https://www.instagram.com/mealsonwheels_ni/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://www.linkedin.com/company/meals-on-wheels-foundation-of-northern-illinois" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
          </p>
        </article>
        <article class="navigation">
          <h6>Navigation</h6>
          <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
          
        </article>
        <article class="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?>
        </article>
        <article class="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-3' ) ); ?>
        </article>
        <article class="image-footer-logo">
          <div class="content-wrapper">
            <img src="<?php bloginfo('template_url'); ?>/img/MOW_america_member.png" alt="Meals On Wheels America Member 2020" />
          </div>
        </article>
      </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
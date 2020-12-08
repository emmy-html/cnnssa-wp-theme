</div>
<footer id="footer">
<article class="text-logo">
        <h5>Community Nutrition Network
          <span>& Senior Services Association</span></h5>
          <p>Has been providing meals to older adults for more than 35 years. This experience is what allows us to adapt to the ever changing landscape.</p>
      </article>
      <div class="content-wrapper">
      <article>
        <h6>Address</h6>
          <p><b>Administrative Office</b><br>
          Community Nutrition Network<br>
          and Senior Services Association</p>
          <p>7222 Cermak Road<br>
            Suite 302<br>
            North Riverside, IL 60546</p>
            <h6>Email</h6>
            <p><a href="mailto:information@cnnssa.org">information@cnnssa.org</a></p>
        <h6>Phone</h6>
          <p>1 (312) 207-5290</p>
        <h6>Fax</h6>
          <p>1 (312) 441-0641</p>
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
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/footer-logo-lime.png" alt="Community Nutrition Network Logo in Lime Green" />
          </div>
        </article>
      </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
<?php get_header(); ?>
    <!-- Start hero Section -->
    
    <div class="hero" style = "background-image: url('<?php the_post_thumbnail_url(); ?>')">
 
      <div class="hero__text">
        <div class="container">
          <h2 class="hero-heading heading-primary">Free Diagnostics For Cars!</h2>
          <p class="hero-p">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices  posuere cubilia <br> urae ellentesque habitant morbi tristique senectusv</p>
          <button class="button-primary">Read more</button>
        </div>
      </div>
      <div class="hero__cta">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="cta--text">You Have To Fix The Problem. Let’s Us Help You!</div>
            </div>
            <div class="col-md-6 col-sm-6">
              <button class="button-primary cta--button">Make an Appointment</button>
            </div>
          </div>
        </div>  
      </div>
    </div>
    <!-- End hero Section -->

<?php get_footer(); ?>
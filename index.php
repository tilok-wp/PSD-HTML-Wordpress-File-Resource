<?php get_header(); ?>

    <!-- Start hero Section -->
    <div class="hero hero-image">
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

   <!-- Start About Section -->
   <section class="about section-padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="about__details">
                  <h3 class="heading-secondary about__details-title">Welcome To Auservice</h3>
                  <p class="p-text-1">In sed elit et diam eleifend accumsan. Vestibulum finibus condimentum eros, at auctor massa tincidunt sit amet. Nulla imperdiet commodo nisl in pretium. Quisque dolor sit amet est commodo, quis aliquet velit congue.</p>
                  <p class="progress--title">Service Quality</p>
                  <div class="progress">
                     <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                        <div class="progress-status">90%</div>
                     </div>
                  </div>
                  <p class="progress--title">Support quality</p>
                  <div class="progress">
                     <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                        <div class="progress-status">95%</div>
                     </div>
                  </div>
                  <p class="progress--title">Long-Term Warranty</p>
                  <div class="progress">
                     <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                        <div class="progress-status">85%</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-12">
               <div class="about__image">
               </div>
            </div>
         </div>
      </div>
   </section>
    <!-- End About Section -->
    <!-- Start Service Section -->
    <section class="service section-padding">
      <div class="container">
        <div class="service__heading section-heading text-center">
          <h2 class="heading-secondary">Our Services</h2>
        </div>
        <div class="service__box">
          <div class="service--carousel owl-carousel">
          <?php 
                $auservice_post = null;
                $prefix = '_au_service';
                $auservice_post = new WP_Query(array(
                    'post_type' => 'services',
                    'posts_per_page'=> -1,
                ));

                if( $auservice_post->have_posts() ){
                    while( $auservice_post -> have_posts() ){
                        $auservice_post -> the_post(); 
                        $item_text = get_post_meta( get_the_ID(), $prefix.'item_text', true );
                        $item_icon = get_post_meta( get_the_ID(), $prefix.'item_icon', true );
                        $button_text = get_post_meta( get_the_ID(), $prefix.'button_text', true );                        
                        ?>
                        <!-- Begin Single service item -->
                        <div class="service__box-item">
                          <div class="item-icon">
                            <i class="<?php echo $item_icon; ?>"></i>
                          </div>
                          <div class="item-title">
                            <h3 class="heading-tertiary"><?php the_title(); ?></h3>
                          </div>
                          <p class="item-text"><?php echo $item_text; ?></p>
                          <button class="button-simple style-1"><?php echo $button_text; ?></button>
                        </div>
                        <!-- End Single service item -->
                           
                    <?php }

                    }else{
                        echo 'No post';
                    }
                    wp_reset_postdata();
                ?>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service Section -->
    <!-- Strat Gallery Section -->
    <section class="gallery section-padding">
      <div class="container">
        <div class="row">
          <div class="service__heading section-heading text-center">
            <h2 class="heading-secondary">Gallery</h2>
          </div>
          <?php 
                $auservice_post = null;
                $auservice_post = new WP_Query(array(
                    'post_type' => 'galerrys',
                    'posts_per_page'=> -1,                    
                    'order' => 'ASC'
                ));

                if( $auservice_post->have_posts() ){
                    while( $auservice_post -> have_posts() ){
                        $auservice_post -> the_post();                         
                        ?>
                        <div class="col-md-3 col-sm-6">
                          <div class="gallery__box">
                            <div class="gallery__box-content">
                              <img src="<?php the_post_thumbnail_url('post-thum'); ?>" alt="Image 1" class="gallery--image">
                              <div class="box-text">
                                <a href="<?php the_permalink(); ?>">
                                  <h3 class="heading-quaternary"><?php the_title(); ?></h3>
                                </a> 
                                <i class="icofont-eye"></i>
                              </div>
                            </div>
                          </div>
                        </div>                         
                    <?php }

                    }else{
                        echo 'No post Found';
                    }
                    wp_reset_postdata();
                ?>
        </div>
      </div>
    </section>
    <!-- End Gallery Section -->
    <!-- Start counter section -->
    <section class="counterup">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="counter__box">
              <h5 class="heading-primary">15+</h5>
              <h3 class="heading-quaternary">Years Of Experience</h3>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="counter__box">
              <h5 class="heading-primary">400+</h5>
              <h3 class="heading-quaternary">Project complete</h3>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="counter__box">
              <h5 class="heading-primary">1500+</h5>
              <h3 class="heading-quaternary">Happy claients</h3>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="counter__box">
              <h5 class="heading-primary">10+</h5>
              <h3 class="heading-quaternary">Award wining</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End counter section -->
    <!-- Start testimonial section -->
    <section class="testimonial section-padding">
      <div class="container">
        <div class="service__heading section-heading text-center">
          <h2 class="heading-secondary">What Our Client Say?</h2>
        </div>
        <div class="testimonial__box owl-carousel">
        <?php 
                $auservice_post = null;
                $auservice_post = new WP_Query(array(
                    'post_type' => 'testimonial',
                    'posts_per_page'=> -1,
                    'order'   => 'ASC'
                ));

                if( $auservice_post->have_posts() ){
                    while( $auservice_post -> have_posts() ){
                        $auservice_post -> the_post(); 
                        $author_post = get_post_meta( get_the_ID(), 'author_post', true );                       
                        $testimonial_text = get_post_meta( get_the_ID(), 'testimonial_text', true );                       
                        ?>
                        <!-- Begin Single Testimonial item -->
                        <div class="testimonial-single">
                          <p class="text-1"><i class="fa fa-quote-left"></i><?php echo $testimonial_text; ?></p>
                          <div class="author-detail">
                          <div class="author--image" style = "background-image: url('<?php the_post_thumbnail_url(); ?>')" ></div>
                          <h3 class="author-name heading-tertiary"><?php the_title(); ?><span class="author-position"><?php echo $author_post; ?> </span></h3>
                          </div>
                        </div>                        
                        <!-- End Single Testimonial item -->
                           
                    <?php }

                    }else{
                        echo 'No post';
                    }
                    wp_reset_postdata();
                ?>

        </div>
      </div>
    </section>
    <!-- End testimonial section -->
    <!-- Start Claient section  -->
    <section class="claient section-padding">
      <div class="container">
        <div class="service__heading section-heading text-center">
          <h2 class="heading-secondary">Our Partner </h2>
        </div>
        <div class="claient__box owl-carousel">
        <?php 
                $auservice_post = null;
                $auservice_post = new WP_Query(array(
                    'post_type' => 'claient-logo',
                    'posts_per_page'=> -1,                    
                    'order' => 'ASC'
                ));

                if( $auservice_post->have_posts() ){
                    while( $auservice_post -> have_posts() ){
                        $auservice_post -> the_post();                         
                        ?>
                        <div class="single--item">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('client-thum'); ?>
                          </a>
                        </div>                        
                    <?php }

                    }else{
                        echo 'No post Found';
                    }
                    wp_reset_postdata();
                ?>
        </div>
      </div>
    </section>
    <!-- End Claient section  -->
<?php get_footer(); ?>


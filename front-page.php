    <?php get_header(); $prefix = '_au_service_'; ?>

    <!-- Start hero Section -->

         <!-- <?php          
                // $hero_image = get_post_meta( get_the_ID(), $prefix.'hero_image', true );                
                // $hero_heading_text = get_post_meta( get_the_ID(), $prefix.'hero_heading_text', true );                
                // $hero_content = get_post_meta( get_the_ID(), $prefix.'hero_content', true );                
                // $hero_btn_text = get_post_meta( get_the_ID(), $prefix.'hero_button', true );                
                // $cta__text = get_post_meta( get_the_ID(), $prefix.'hero_text_cta', true );                
                // $cta_btn_text = get_post_meta( get_the_ID(), $prefix.'hero_text_cta_btn', true );                
                ?> -->
                <!-- Begin Single service item -->
                <div class="hero" style = "background-image: url('<?php echo get_post_meta( get_the_ID(), $prefix.'hero_image', true ); ?>')" >
                  <div class="hero__text">
                    <div class="container">
                      <h2 class="hero-heading heading-primary"><?php echo get_post_meta( get_the_ID(), $prefix.'hero_heading_text', true ); ?></h2>
                      <p class="hero-p"><?php echo get_post_meta( get_the_ID(), $prefix.'hero_content', true ); ?></p>
                      <button class="button-primary"><?php echo get_post_meta( get_the_ID(), $prefix.'hero_button', true ); ?></button>
                    </div>
                  </div>
                  <div class="hero__cta">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="cta--text"><?php echo get_post_meta( get_the_ID(), $prefix.'hero_text_cta', true ); ?></div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <button class="button-primary cta--button"><?php echo get_post_meta( get_the_ID(), $prefix.'hero_text_cta_btn', true ); ?></button>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
                <!-- End Single service item -->

    <!-- End hero Section -->

   <!-- Start About Section -->
   <section class="about section-padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="about__details">
                  <h3 class="heading-secondary about__details-title"><?php echo get_post_meta( get_the_ID(), $prefix.'about_headding', true ); ?></h3>
                  <p class="p-text-1"><?php echo get_post_meta( get_the_ID(), $prefix.'about_content', true ); ?></p>

                  <?php  
                  $entries = get_post_meta( get_the_ID(), $prefix . 'progress_sections', true );

                  foreach($entries as $singlevalue) { ?>
                  
                  <p class="progress--title"><?php echo $singlevalue[$prefix . 'progress_title']; ?></p>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $singlevalue[$prefix . 'progress_value']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $singlevalue[$prefix . 'progress_value']; ?>%;">
                                      <div class="progress-status"><?php echo $singlevalue[$prefix . 'progress_value']; ?>%</div>
                                  </div>
                                </div>
                <?php } 
                ?>

               </div>
            </div>
            <div class="col-md-6 col-sm-12">
               <div class="about__image" style = "background-image: url('<?php echo get_post_meta( get_the_ID(), $prefix.'about_image', true ); ?>')" >
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
          <h2 class="heading-secondary"><?php echo get_post_meta( get_the_ID(), $prefix.'sevice_headding', true ); ?></h2>
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
            <h2 class="heading-secondary"><?php echo get_post_meta( get_the_ID(), $prefix.'gallery_headding', true ); ?></h2>
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

        <?php  
                  $count_entries = get_post_meta( get_the_ID(), $prefix . 'progress_sections', true );
                  print_r($count_entries);

          
                    ?>

                  <!-- <div class="col-md-3 col-sm-6">
                    <div class="counter__box">
                      <h5 class="heading-primary"><?php echo $singlcounter[$prefix . 'Counter_title']; ?></h5>
                      <h3 class="heading-quaternary"><?php echo $singlcounter[$prefix . 'Counter_value']; ?></h3>
                    </div>
                  </div>                -->
              <?php 
                ?>



        </div>
      </div>
    </section>
    <!-- End counter section -->
    <!-- Start testimonial section -->
    <section class="testimonial section-padding">
      <div class="container">
        <div class="service__heading section-heading text-center">
          <h2 class="heading-secondary"><?php echo get_post_meta( get_the_ID(), $prefix.'testimonial_headding', true ); ?></h2>
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
          <h2 class="heading-secondary"><?php echo get_post_meta( get_the_ID(), $prefix.'clainet_headding', true ); ?></h2>
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


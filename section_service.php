    
    <?php 
    $prefix = '_au_service_';
    $sevice_headding = get_post_meta( get_the_ID(), $prefix.'sevice_headding', true ); //Service Section Variable
    ?>
    <!-- Start Service Section -->
    <section class="service section-padding">
      <div class="container">
        <div class="service__heading section-heading text-center">
          <h2 class="heading-secondary"><?php echo $sevice_headding; ?></h2>
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
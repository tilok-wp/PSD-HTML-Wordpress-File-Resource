<?php $prefix = '_au_service_';     

    $clainet_headding = get_post_meta( get_the_ID(), $prefix.'clainet_headding', true ); //clainet Section Variable
    
  ?>
    <!-- Start Claient section  -->
    <section class="claient section-padding">
      <div class="container">
        <div class="service__heading section-heading text-center">
          <h2 class="heading-secondary"><?php echo $clainet_headding; ?></h2>
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

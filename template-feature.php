<?php
/*
Template Name: Feature Page
*/
    get_header(); ?>
            
    <section class="gallery section-padding page-padding">
      <div class="container">
        <div class="row">
        <?php 
          if($gallery_headding != ''){ ?>
          <div class="service__heading section-heading text-center">
            <h2 class="heading-secondary"><?php echo $gallery_headding; ?></h2>
          </div>
          <?php }
        ?>

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
    <!-- Footer -->
    <?php get_footer(); ?>

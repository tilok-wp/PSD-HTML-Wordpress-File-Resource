<?php get_header(); ?>
    <!-- Start hero Section -->
      <section class="blog section-padding page-padding">
        <div class="container">
          <div class="row"> 
          <?php 


                if( have_posts() ){
                    while( have_posts() ){
                       the_post(); 
                       
                        ?>
              <div class="col-md-4 col-sm-4">
                  <div class="blog__single">
                    <div class="blog__single-image">
                      <img src="<?php the_post_thumbnail_url('post-thum'); ?>" alt="" class="image-thumb">
                    </div>
                    <div class="blog__single-details">
                      <div class="blog__author">
                        <div class="author--image"></div>
                        <a href="<?php echo the_permalink(); ?>"><h3 class=".heading-quaternary author--name"><?php echo the_title(); ?></h3></a>
                        <span class="published--date">25th dec 2018 </span>
                      </div>
                      <div class="blog__text">
                        <p class="content-text"><?php echo cExcerpt(10, 'Learn More'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                           
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




<?php get_footer(); ?>
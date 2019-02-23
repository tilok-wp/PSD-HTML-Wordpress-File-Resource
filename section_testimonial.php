<?php $prefix = '_au_service_';     

  $testimonial_headding = get_post_meta( get_the_ID(), $prefix.'testimonial_headding', true );//testimonial Section Variable
    
  ?>
  <!-- Start testimonial section -->
  <section class="testimonial section-padding">
    <div class="container">
      <div class="service__heading section-heading text-center">
        <h2 class="heading-secondary"><?php echo $testimonial_headding; ?></h2>
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

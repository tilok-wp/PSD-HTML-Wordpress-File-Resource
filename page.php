<?php get_header(); ?>
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


<?php get_footer(); ?>
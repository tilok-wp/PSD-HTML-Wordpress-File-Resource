<?php $prefix = '_au_service_';   

    //Start About Section Variable
    $about_headding = get_post_meta( get_the_ID(), $prefix.'about_headding', true );
    $about_content = get_post_meta( get_the_ID(), $prefix.'about_content', true );
    $entries = get_post_meta( get_the_ID(), $prefix . 'progress_sections', true );
    $about_image = get_post_meta( get_the_ID(), $prefix . 'about_image', true );
    //End About Section Variable     
      
  ?>
    <!-- Start About Section -->
    <section class="about section-padding">
        <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="about__details">
                    <h3 class="heading-secondary about__details-title"><?php echo $about_headding; ?></h3>
                    <p class="p-text-1"><?php echo $about_content; ?></p>
                    <?php 
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
                <div class="about__image" style = "background-image: url('<?php echo $about_image; ?>')" >
                </div>
              </div>
          </div>
        </div>
    </section>
    <!-- End About Section -->

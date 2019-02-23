
<?php 
      $prefix = '_au_service_';
      //Start Hero Section Variable   
      $hero_image = get_post_meta( get_the_ID(), $prefix.'hero_image', true );                
      $hero_heading_text = get_post_meta( get_the_ID(), $prefix.'hero_heading_text', true );                
      $hero_content = get_post_meta( get_the_ID(), $prefix.'hero_content', true );                
      $hero_btn_text = get_post_meta( get_the_ID(), $prefix.'hero_button', true );                
      $cta__text = get_post_meta( get_the_ID(), $prefix.'hero_text_cta', true );                
      $cta_btn_text = get_post_meta( get_the_ID(), $prefix.'hero_text_cta_btn', true );
      //End Hero Section Variable
?>
    <!-- Start hero Section -->    
    <div class="hero" style = "background-image: url('<?php echo $hero_image; ?>')" >
      <div class="hero__text">
        <div class="container">
          <h2 class="hero-heading heading-primary"><?php echo $hero_heading_text ?></h2>
          <p class="hero-p"><?php echo $hero_content; ?></p>
          <button class="button-primary"><?php echo $hero_btn_text; ?></button>
        </div>
      </div>
      <div class="hero__cta">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="cta--text"><?php echo $cta__text; ?></div>
            </div>
            <div class="col-md-6 col-sm-6">
              <button class="button-primary cta--button"><?php echo $cta_btn_text; ?></button>
            </div>
          </div>
        </div>  
      </div>
    </div>
    <!-- End hero Section -->
<?php $prefix = '_au_service_';     

    $counter_sections = get_post_meta( get_the_ID(), $prefix.'counter_sections', true );//CounterUP Section Variable
     
  ?>
<!-- Start counter section -->
<section class="counterup">
    <div class="container">
    <div class="row">
        <?php 
        foreach($counter_sections as $single_count){?> 
        <div class="col-md-3 col-sm-6">
            <div class="counter__box">
            <h5 class="heading-primary"><?php echo $single_count['_au_service_counter_value']; ?></h5>
            <h3 class="heading-quaternary"><?php echo $single_count['_au_service_counter_title']; ?></h3>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
</section>
<!-- End counter section -->

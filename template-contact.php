<?php
/*
Template Name: For Contact Page
*/
    get_header();
    $prefix = '_au_service_';
    $office_inf = get_post_meta( get_the_ID(), $prefix . 'office_info', true );    
    ?>        
            
    <section class="contact section-padding ">
        <div class="container">
            <?php the_content(); ?>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="contact__form">
                            <h3 class="heading-tertiary contact--heading">Let's Contact With us.</h3>
                            <?php echo do_shortcode('[contact-form-7 id="262" title="Form 1"]'); ?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="contact__office">
                            <!-- Office Tab -->
                            <ul class="nav nav-pills contact__office-name">

                                <?php 
                                $i = 0;
                                    foreach($office_inf as $single_office){ $i++?>

                                <li class="<?php if($i <= 1 ){ echo 'active';} ?>">
                                <a href="#office-<?php echo $i; ?>" data-toggle="tab" aria-expanded="true"><?php echo $single_office[$prefix .'office_name'] ?></a>
                                </li>

                                <?php }
                                ?>
                            </ul>
                            <!-- Office tab content Details -->
                            <div class="tab-content"> <?php 
                                $i = 0;
                                foreach($office_inf as $single_office) { $i++ ?>
                                <div class="tab-pane fade in <?php if($i <= 1 ){ echo 'active';} ?>" id="office-<?php echo $i; ?>">
                                    <div class="office-information">            
                                        <img src="assets/images/office-1.jpg" alt="" class="office-image">
                                        <?php
                                        if($single_office[$prefix .'office_address'] != '') { ?>
                                            <div class="office--text">
                                            <div class="icon--box">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="text--box">
                                                <h4 class="text--title">OUR LOCATION</h4>
                                                <h5 class="detail-text"><?php echo $single_office[$prefix .'office_address'] ?></h5>
                                            </div>
                                            </div>
                                    <?php }

                                        if($single_office[$prefix .'office_email'] != ''){ ?>
                                            <div class="office--text">
                                            <div class="icon--box">
                                                <i class="fa fa-paper-plane"></i>
                                            </div>
                                            <div class="text--box">
                                                <h4 class="text--title">Email us</h4>
                                                <h5 class="detail-text"><a href="mailto:YourName@YourSite.com?Subject=Test%20mail" target="_top"><?php echo $single_office[$prefix .'office_email'] ?></a></h5>
                                            </div>
                                            </div>
                                    <?php }

                                        if($single_office[$prefix .'office_phone'] != ''){ ?>
                                            <div class="office--text">
                                            <div class="icon--box">
                                                <i class="fa fa-mobile fs-change"></i>
                                            </div>
                                            <div class="text--box">
                                                <h4 class="text--title">Call Us</h4>
                                                <h5 class="detail-text"><?php echo $single_office[$prefix .'office_phone'] ?></h5>
                                            </div>
                                            </div>
                                    <?php }
                                        ?>
                                    </div>
                                </div>
                                <?php }
                            ?>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Footer -->
    <?php get_footer(); ?>

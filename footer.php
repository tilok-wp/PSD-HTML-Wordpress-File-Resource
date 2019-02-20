    <?php global $au_service; ?>    
    
    <footer class="footer section-padding">
        <div class="footer__top">
        <div class="container">
            <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer--box">
                <div class="footer--logo">
                    <img src="<?php echo $au_service['footer_logo_sub']['url'] ?>" alt="Footer logo">
                </div>
                <p class="text-1"><?php echo $au_service['footer_logo_text'] ?></p>
                <ul class="social-icon">
                <?php 
                    if( is_array($au_service['footer_logo_social']) ){
                        foreach( $au_service['footer_logo_social'] as $singleValue ){?>
                            <li><a href="<?php echo $singleValue['url'] ?>"><i class="<?php echo $singleValue['title'] ?>"></i></a></li>                            
                       <?php }
                    }
                    ?>
                </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer--box">
                <h3 class="heading-quaternary">Best Services</h3>
                <ul class="footer-link">
                    <li><a href="#"><span>&#8250;</span> Clean Service </a></li>
                    <li><a href="#"><span>&#8250;</span> Repair Parts </a></li>
                    <li><a href="#"><span>&#8250;</span> Engine Repair </a></li>
                    <li><a href="#"><span>&#8250;</span> Change Tires Service </a></li>
                    <li><a href="#"><span>&#8250;</span> Painting Services </a></li>
                    <li><a href="#"><span>&#8250;</span> Car Battery Services </a></li>
                </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer--box">
                <h3 class="heading-quaternary">Important Tags</h3>
                <?php 
                    if( dynamic_sidebar ('footer-menu-list') ) {
                        echo 'There have no Widgets here';
                    }
                ?>
                <ul class="footer-link tag-link">
                    <li><a href="#">Mechanics</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Painting Service</a></li>
                    <li><a href="#">Tuning</a></li>
                    <li><a href="#">Diagnostic</a></li>
                    <li><a href="#">wheels</a></li>
                </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer--box">
                <h3 class="heading-quaternary">Contact Us</h3>
                <ul class="footer-link">
                    <li> <span> <i class="icofont-home"></i></span>1380 Pear Ave, Mountain View, CA 94043 </li>
                    <li> <span> <i class="icofont-phone"></i></span> Phone: +1 23 526 8679 </li>
                    <li> <span> <i class="icofont-fax"></i></span> Fax: +1 23 526 8679 </li>
                    <li> <span> <i class="icofont-email"></i></span> Email: info@example.com </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="footer__buttom text-center">
        <div class="container">
        <small> &copy; 2019 Copyright <b>AuTheme. </b> All right reserved. </small>
        </div>
        </div> 
    </footer>
    <!-- Start preloader-area -->
    <div class="preloader-area">
    <div class='preloader'>
        <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        </div>
    </div>
    </div>
    <!-- End preloader-area -->
<?php wp_footer(); ?>
    </body>
</html>
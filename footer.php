   
    
    <footer class="footer section-padding">
        <div class="footer__top">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar( 'footer_widget' ); ?>
            </div>
        </div>
        </div>
        <div class="footer__buttom text-center">
        <div class="container">
        <small> <?php global $au_service; echo  $au_service['copywrigt_text']?> </small>
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
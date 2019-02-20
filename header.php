<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <?php wp_head(); ?>
    </head>
  <body>
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="top--massage">Best services quality for customers.</div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
              <ul class="social-link">
                <li class="link-title">Follow Us: </li>
                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                <li><a href="#"><i class="icofont-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header__menu">
        <nav class="navbar">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo site_url(); ?> ">     
                <img src="<?php global $au_service; echo $au_service['site_logo']['url'] ?>" alt="Au Service Logo" class="logo--image">
                <!-- <h1 class="logo--text"></h1> -->
              </a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!-- <?php wp_nav_menu(array(
                  'theme_loaction' => 'primary_menu',
                  'fallback_cb' => 'autheme_falback_menu',
                  'container' => '',
                  'menu_class' => 'nav navbar-nav navbar-right'

              ));  ?>
               -->
              <!-- <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Feature 1</a></li>
                    <li><a href="#">Feature 2</a></li>
                    <li><a href="#">Feature 3</a></li>
                  </ul>
                </li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                  </ul>
                </li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Blog 1</a></li>
                    <li><a href="#">Blog 2</a></li>
                    <li><a href="#">Blog 3</a></li>
                  </ul>
                </li>
                <li class=""><a href="#">Contact</a></li>
                <li><a href="#"><i class="icofont-ui-search"></i></a></li>
              </ul> -->
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </header>
      
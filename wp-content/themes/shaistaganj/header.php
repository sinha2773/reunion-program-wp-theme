<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/smart_wizard.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/smart_wizard_theme_dots.css">
        <script src="<?php echo get_template_directory_uri();?>/js/vendor/modernizr-2.8.3.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
      <div class="hotline_header">
        <div class="container">
          <div class="main_hotline_header">
            <div class="hotline_information">
              <div class="hotline_left_information">
                <ul>
                   <li><i class="fa fa-phone" aria-hidden="true"></i>Hotline : +8801772269941, +8801772269946, +8801770515151</li>
                   <li><i class="fa fa-globe" aria-hidden="true"></i><a href="http://www.shaistaganjhighschool.edu.bd/" target="_blank">School Website</a></li>
                </ul>
              </div>
              <div class="hotline_right_information">
                <ul>
                  <li><a href="<?php echo get_option('facebook_url');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo get_option('twitter_url');?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo get_option('google_plus_url');?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo get_option('dribbble_url');?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo get_option('linkedin_url');?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  
                  <li><span><?php date_default_timezone_set("Asia/Dhaka"); echo date('F d, Y h:s A'); ?></span></li>
                </ul>
               
              </div>
            </div>
          </div>
        </div>
      </div>
        <header class="header_section">
            <div class="container">
                <div class="row">
                        <div class="col_thr col-xs-6 col-sm-2 col-md-2">
                            <div class="logo_image">

                               <a href="<?php echo home_url();?>">
                                <?php 
                                  $header_logo = get_option('logo');
                                  if( empty($header_logo) ){
                                ?>
                                  <img src="<?php echo get_template_directory_uri();?>/images/logo_.png">
                                <?php } else { ?>
                                  <img src="<?php echo $header_logo; ?>">
                                <?php } ?>
                               </a>
                            </div>
                        </div>
                        <div class="bg_col col-xs-12 col-sm-10 col-md-10 both_paddint">
                           <div class="heaer_images">
                              <img src="<?php echo get_template_directory_uri();?>/images/head2.png">
                            </div>
                            <nav class="navbar navbar-default">
                              <div class="container_ful">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed faul" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <?php 
                                  
                                  wp_nav_menu( array(
                                        'menu'              => 'main_manu',
                                        'theme_location'    => 'main_manu',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav nvaber_margin_top',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker())
                                    );
                                  ?>
                                 
                                </div><!-- /.navbar-collapse -->
                              </div><!-- /.container-fluid -->
                            </nav>
                            <nav class="navbar navbar-default bottom_navber">
                              <div class="container_ful">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed faul" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                  <?php 
                                  
                                  wp_nav_menu( array(
                                        'menu'              => 'main_manu_bottom',
                                        'theme_location'    => 'main_manu_bottom',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav bottom_navber_margin_top',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker())
                                    );
                                  ?>

                                </div><!-- /.navbar-collapse -->
                              </div><!-- /.container-fluid -->
                            </nav>
                            <div class="beta_text">
                              <h2><marquee> পরীক্ষামূলক সম্প্রচার</marquee></h2>
                            </div>
                        </div>
                    </div>
            </div>
        </header>
<!doctype html>
<html <?php language_attributes(); ?>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>>
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
		<?php $base_url = "http://localhost/reunion-program-wp-theme/index.php"; ?> 
      <div class="hotline_header">
        <div class="container">
          <div class="main_hotline_header">
            <div class="hotline_information">
              <div class="hotline_left_information">
                <ul>
                   <li><i class="fa fa-phone" aria-hidden="true"></i>Hotline : +8801770515151</li>
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
                                  <!-- <ul class="nav navbar-nav nvaber_margin_top">
                                    
									                   <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
									                   <li class="dropdown">
                                      <a href="<?php echo get_permalink('4');?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">একনজরে শায়েস্তাগঞ্জ উচ্চ বিদ্যালয়<span class="caret"></span></a>
                                      <ul class="dropdown-menu dropdown_menu_background_color">                
                                        <li class="dropdown-submenu">
                                          <a href="<?php echo $base_url; ?>#about_school">সংক্ষিপ্ত  ইতিহাস</a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="<?php echo get_permalink('45');?>">বর্তমান স্কুল ব্যবস্থাপনা কমিটি </a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="<?php echo get_permalink('86');?>">প্রধান শিক্ষকবৃন্দ ক্রমানুযায়ী </a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="<?php echo get_permalink('120');?>">বর্তমান শিক্ষকমন্ডলী  </a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="past_teacher.php">সাবেক শিক্ষকবৃন্দ </a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="<?php echo get_permalink('113');?>">শিক্ষক যাদের হারিয়েছি </a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="<?php echo get_permalink('78');?>">স্কুলের মেধাবী ছাত্র-ছাত্রীরা </a>
                                        </li>
                                      </ul>
                                    </li>
                                    
									                     <li class="dropdown">
                                      <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  শতবর্ষের  নানা আয়োজন<span class="caret"></span></a>
                                      <ul class="dropdown-menu dropdown_menu_background_color">                
                                        <li class="dropdown-submenu">
                                          <a href="preparation.php">প্রস্তুতিসভা </a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="<?php echo get_permalink('130');?>">সাবেক ছাত্র-ছাত্রীদের স্মৃতিকথা</a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="<?php echo get_permalink('150');?>">স্মারক গ্রন্থ প্রকাশনা উপকমিটির তৎপরতা</a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="finalsial_committre.php">অর্থ উপকমিটির তৎপরতা</a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="donation_committre.php">ডোনেশন উপকমিটির  তৎপরতা</a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="promote_committre.php">প্রচার উপকমিটির   তৎপরতা</a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="honour_committre.php">সম্মাননা উপকমিটির কার্যক্রম</a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="information_search_committre.php">তথ্য অনুসন্ধান উপকমিটির তৎপরতা</a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="forener_communication_committre.php">বৈদেশিক যোগাযোগ উপকমিটির কার্যক্রম</a>
                                        </li>
										                    <li class="dropdown-submenu">
                                          <a href="office_committre.php">অফিস ব্যবস্থাপনা উপকমিটির কার্যক্রম</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><a class="scrollto" href="<?php echo $base_url; ?>#school_proud">শতবর্ষ স্মারক গ্রন্থ </a></li>
                                  </ul> -->
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

                                  <ul class="nav navbar-nav bottom_navber_margin_top">
									                   
                                     
									                  <!--  <li><a class="scrollto" href="<?php echo $base_url; ?>#event_committee">শতবর্ষ উদযাপন কমিটি ও উপকমিটি</a></li>
                                    <li><a class="scrollto" href="<?php echo get_permalink('64');?>">স্কুলের গর্ব যারা</a></li>
                  									<li><a href="blog.php">স্মরণিকার জন্য আপনার লেখা পোষ্ট করুন</a></li>
                  									
                  									<li><a class="" href="hotline.php">জরুরি নোটিশ</a></li>
                  									<li><a class="" href="contact.php">যোগাযোগ</a></li> -->
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                              </div><!-- /.container-fluid -->
                            </nav>
                        </div>
                    </div>
            </div>
        </header>
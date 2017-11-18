<?php

/*
Template Name: Home Page Template
*/
    get_header();
 ?>
        <section class="banner_section">
            <div class="container">
                <div class="banner_section_information">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="banner_section_banner">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                  <!-- Indicators -->
                                  <?php 
                                        $slider_add = new WP_Query(array(
                                            'post_type' => 'banner_slider',
                                            'posts_per_page' => -1
                                        ));
                                    ?>
                                    
                                  <ol class="carousel-indicators">
                                    <?php
                                        $i=1;
                                        if($slider_add->have_posts()): 
                                        while($slider_add->have_posts()): 
                                        $slider_add->the_post();
                                    ?>
                                    <li data-target="#myCarousel" data-slide-to="<?php echo $i-1; ?>" class="<?php echo $i==1 ? 'active' : '';?>"></li>
                                    <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                    <?php $i++; endwhile;endif; wp_reset_query(); ?>
                                  </ol>

                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner">
                                    
                                    <?php
                                        $i=1;
                                        if($slider_add->have_posts()): 
                                        while($slider_add->have_posts()): 
                                        $slider_add->the_post(); 
                                    ?>
                                    <div class="item <?php echo $i==1 ? 'active' : '';?>">
                                      <?php the_post_thumbnail('slider-image') ; ?>
                                      <div class="carousel-caption">
                                        
                                      </div>
                                    </div>
                                    <?php $i++; endwhile;endif; wp_reset_query(); ?>
                                    
                                    
                                  </div>

                                  <!-- Left and right controls -->
                                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span id="slider_arrow" class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span  id="slider_arrow_next" class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="nibondhon_button nibondhon_margin_bottom">
                                <h2>
                                    <a href="<?php echo get_permalink('162');?>">
                                    নিবন্ধন করতে এখানে ক্লিক করুন
                                    </a>
                                </h2>
                            </div>
                            <div class="nibondhon_button nibondhon_button_bottom">
                                <h2 class="nibondhon_button_link">
                                    <a href="<?php echo the_permalink('227'); ?>">যারা নিবন্ধন করেছেন</a>
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <?php 
                                $school_video = new WP_Query(array(
                                    'post_type' => 'banner_video',
                                    'posts_per_page' => 1
                                ));
                            ?>
                            <div class="banner_sidebar_header">
                                <h2>শায়েস্তাগঞ্জ উচ্চ বিদ্যালয় ১৯১৮-২০১৮</h2>
                            </div>
                            <?php
                                
                                if($school_video->have_posts()): 
                                while($school_video->have_posts()):
                                 $school_video->the_post(); 
                            ?>
                            <div id="BannerVideo" class="banner_sidebar">
                                <video width="500" height="240" controls autoplay>
                                   <source src="<?php echo get_post_meta(get_the_ID(),'video1',true) ?>" type="video/mp4">
                                  
                                </video>
                                <ul class="video_list">
                                    <li src="<?php echo get_post_meta(get_the_ID(),'video1',true) ?>">V1</li>
                                    <li src="<?php echo get_post_meta(get_the_ID(),'video2',true) ?>">V2</li>
                                    <li src="<?php echo get_post_meta(get_the_ID(),'video3',true) ?>">V3</li>
                                    <li src="<?php echo get_post_meta(get_the_ID(),'video4',true) ?>">V4</li>
                                    <li src="<?php echo get_post_meta(get_the_ID(),'video5',true) ?>">V5</li>
                                </ul>
                                
                            </div>
                            <?php endwhile; endif; ?>
                            
                        </div>
                    </div>
                </div>                
            </div>
        </section>
        <section class="hundred_years_section">
            <div class="container">
                <div class="main_hundred_years">
                    
                    <div class="row">
                        <div class="col-md-4">
                            <?php 
                                $p = new WP_Query(array(
                                    'post_type' => 'page',
                                    'posts_per_page' => 1,
                                    'page_id' =>4
                                ));
                            ?>
                            <?php 
                                if($p->have_posts()): 
                                while($p->have_posts()): 
                                $p->the_post();  
                            ?>
                            <div class="hundred_years_content">
                                <div class="hundred_years_content_title">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="hundred_years_content_images">
                                    <?php echo the_post_thumbnail( 'ak_nojora_image'); ?>
                                </div>
                                
                                <div class="hundred_years_another_content">
                                    <div class="hundred_years_another_content_text hundred_years_top">
                                        <p><?php echo get_trim_content(55,true); ?></p>
                                    </div>
                                   
                                </div>
                            </div>
                            <?php endwhile; endif; ?>
                            <div class="school_proud_button">
                                <a href="<?php echo get_permalink('4');?>">
                                   <button>আরও দেখতে</button>
                                </a>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <?php 
                                $q = new WP_Query(array(
                                    'post_type' => 'our_program',
                                    'posts_per_page' => 1,
                                    'program_type'=>'sotoborsho-udjapon-committee-totporota'
                                ));
                           ?>
                            <?php 
                                if($q->have_posts()): 
                                while($q->have_posts()): 
                                $q->the_post(); 
                            ?>
                            <div class="hundred_years_content">
                                <div class="hundred_years_content_title">
                                    <h3>শতবর্ষ উদযাপন কমিটির তৎপরতা</h3>
                                </div>
                                <div class="hundred_years_content_images">
                                    <?php echo the_post_thumbnail( 'ak_nojora_image'); ?>
                                </div>
                                <div class="hundred_years_content_images_text">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="hundred_years_another_content">
                                    <div class="hundred_years_another_content_text hundred_years_top">
                                        <p> <?php echo get_trim_content(40,true); ?> </p>
                                    </div>
                                  
                                </div>
                                
                            </div>
                            <div class="school_proud_button">
                              <a href="<?php echo get_permalink('146');?>">
                                <button>আরও দেখতে</button>
                                </a>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                        <div class="col-md-4">
                            <?php 
                                $book = new WP_Query(array(
                                    'post_type' => 'our_program',
                                    'posts_per_page' => 1,
                                    'program_type'=>'sotoborsho-sarok-grontho'
                                ));
                           ?>
                           <?php 
                                if($book->have_posts()): 
                                while($book->have_posts()):
                                $book->the_post(); 
                            ?>
                            <div class="hundred_years_content">
                                <div class="hundred_years_content_title">
                                    <h3>শতবর্ষ স্মারক গ্রন্থ</h3>
                                </div>
                                <div class="hundred_years_content_images">
                                    <?php echo the_post_thumbnail( 'ak_nojora_image'); ?>
                                </div>
                                <div class="hundred_years_content_images_text">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="hundred_years_another_content">
                                    <div class="hundred_years_another_content_text hundred_years_top">
                                        <p><?php echo get_trim_content(40,true); ?></p>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php endwhile; endif; ?>
                            <div class="school_proud_button">
                               <a href="<?php echo get_permalink('150');?>">
                                   <button>আরও দেখতে</button>
                                </a>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="school_management_comitee_section">
            <div class="container">
                <div class="main_school_management_comitee">
                    <div class="row">
                        <div class="col-md-4">
                            <?php 
                                $school_committee = new WP_Query(array(
                                    'post_type' => 'page',
                                    'posts_per_page' => 1,
                                    'page_id' =>45
                                ));
                            ?>
                            <?php 
                                if($school_committee->have_posts()): 
                                while($school_committee->have_posts()):
                                $school_committee->the_post();  
                            ?>
                            <div class="area_practice_top_title school_proud_header">
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="sotoborso_udjapon_comity_content_all">
                                <div class="sotoborso_udjapon_comity_content_image">
                                    <?php echo the_post_thumbnail('school_management_image'); ?>
                                </div>
                              
                                <?php 
                                    $d = new WP_Query(array(
                                        'post_type' => 'our_committee',
                                        'posts_per_page' => 6,
                                        'committee_type' =>'school_management_committee'
                                        
                                    ));
                               ?>
                               <?php 
                                    if($d->have_posts()): 
                                    while ($d->have_posts()):
                                    $d->the_post(); 
                                ?>
                                <div class="school_proud_sidebar_content">
                                    
                                    <div class="school_proud_sidebar_content_image">
                                        <?php echo the_post_thumbnail('school_management_person_image'); ?>
                                    </div>
                                    <div class="school_proud_sidebar_content_image_text">
                                        <h4><?php the_title(); ?></h4>
                                        <p>নাম : <?php echo get_post_meta(get_the_ID(),'committee_name',true) ?></p>
                                        <p>মোবাইল:  <?php echo get_post_meta(get_the_ID(),'mobile_no',true) ?></p>
                                    </div>
                                    
                                </div>
                                <?php endwhile; endif; ?>
                                
                                
                            </div>
                            <?php endwhile; endif; ?> 
                            <div class="school_proud_button">
                               <a href="<?php echo get_permalink('45');?>">
                                   <button>আরও দেখতে</button>
                                </a>
                            </div>
                             
                        </div>
                        <div class="col-md-4">
                             <?php 
                                $sotoborsho_committee = new WP_Query(array(
                                    'post_type' => 'page',
                                    'posts_per_page' => 1,
                                    'page_id' =>47
                                ));
                            ?>
                            <?php 
                                if($sotoborsho_committee->have_posts()): 
                                while($sotoborsho_committee->have_posts()): 
                                $sotoborsho_committee->the_post();  
                            ?>
                            <div class="area_practice_top_title school_proud_header">
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="sotoborso_udjapon_comity_content_all">
                                <div class="sotoborso_udjapon_comity_content_image">
                                    <?php echo the_post_thumbnail('school_management_image'); ?>
                                </div>
                                
                                <?php 
                                    $dol = new WP_Query(array(
                                        'post_type' => 'our_committee',
                                        'posts_per_page' => 6,
                                        'committee_type' => 'sotoborsho_udjapon_committee'
                                    ));
                                ?>
                                <?php 
                                    if($dol ->have_posts()): 
                                    while($dol->have_posts()) : 
                                    $dol->the_post(); 
                                ?>
                                <div class="school_proud_sidebar_content">
                                    <div class="school_proud_sidebar_content_image">
                                        <?php echo the_post_thumbnail('school_management_person_image'); ?>
                                    </div>
                                    <div class="school_proud_sidebar_content_image_text">
                                        <h4><?php the_title(); ?></h4>
                                        <p>নাম : <?php echo get_post_meta(get_the_ID(),'committee_name',true) ?></p>
                                        <p>মোবাইল: <?php echo get_post_meta(get_the_ID(),'mobile_no',true) ?></p>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                               
                                
                            </div>
                            <?php endwhile; endif; ?>
                            <div class="school_proud_button">
                               <a href="<?php echo get_permalink('47')?>">
                                   <button>আরও দেখতে</button>
                                </a>
                            </div>
                        
                        </div>
                        <div class="col-md-4">
                            <?php 
                                    $past_teacher_memmorys = new WP_Query(array(
                                        'post_type' => 'our_committee',
                                        'posts_per_page' => 3,
                                        'committee_type' => 'sotoborsho-purti-udsob-upodesta-mondoli'
                                    ));
                                ?>
                            <div class="area_practice_top_title school_proud_header">
                                    <h3>শতবর্ষ পূর্তি উৎসব উপদেষ্টা মন্ডলী</h3>
                            </div>
                            <div class="school_proud_sidebar teacher_list_sidebar">
                                <?php 
                                    if($past_teacher_memmorys ->have_posts()): 
                                    while($past_teacher_memmorys->have_posts()) :
                                     $past_teacher_memmorys->the_post(); 
                                ?>
                                <div class="school_proud_sidebar_content">
                                    <div class="school_proud_sidebar_content_image teacher_images upodesta_image">
                                        <?php the_post_thumbnail('past_students_teachers_image'); ?>
                                    </div>
                                    <div class="school_proud_sidebar_content_image_text">
                                       <h4><?php the_title(); ?></h4>
                                        <p>নাম : <?php echo get_post_meta(get_the_ID(),'committee_name',true) ?></p>
                                        <p>মোবাইল: <?php echo get_post_meta(get_the_ID(),'mobile_no',true) ?></p>
                                        
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                            </div>
                            <div class="school_proud_button sriticharon_button">
                                <a href="<?php echo get_permalink('256'); ?>">
                                    <button>আরও দেখতে</button>
                                </a>
                            </div>

                            <?php 
                                    $past_teacher_memmorys = new WP_Query(array(
                                        'post_type' => 'our_teacher',
                                        'posts_per_page' => 3,
                                        'teacher_type' => 'past_teachers_memmory'
                                    ));
                                ?>
                            <div class="area_practice_top_title school_proud_header">
                                    <h3>সাবেক ছাত্র-শিক্ষকদের স্মৃতিচারণ</h3>
                            </div>
                            <div class="school_proud_sidebar teacher_list_sidebar past_teacher_list">
                                <?php 
                                    if($past_teacher_memmorys ->have_posts()): 
                                    while($past_teacher_memmorys->have_posts()) :
                                     $past_teacher_memmorys->the_post(); 
                                ?>
                                <div class="school_proud_sidebar_content">
                                    <div class="school_proud_sidebar_content_image teacher_images past_teacher_pro">
                                        <?php the_post_thumbnail('past_students_teachers_image'); ?>
                                    </div>
                                    <div class="school_proud_sidebar_content_image_text">
                                        <h4><?php the_title(); ?></h4>
                                        <p>Designation : <?php echo get_post_meta(get_the_ID(),'designation',true) ?></p> 
                                        <p>বিষয় : <?php echo get_post_meta(get_the_ID(),'subject',true) ?></p> 
                                        <a href="<?php the_permalink(); ?>" class="details">[  বিস্তারিত ] </a>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                            </div>
                            <div class="school_proud_button sriticharon_button">
                                <a href="<?php echo get_permalink('130'); ?>">
                                    <button>আরও দেখতে</button>
                                </a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="comettree_totporota_section">
            <div class="container">
                <div class="main_comettree">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="area_practice_top_title school_proud_header">
                                <h3>শতবর্ষের নানা আয়োজন</h3>
                            </div>
                            <div class="sotoborso_udjapon_comity">
                                <div class="row">
                                    <?php 
                                        $nana_ayojon = new WP_Query(array(
                                            'post_type' => 'our_program',
                                            'posts_per_page' =>6,
                                            'program_type' =>'sotoborsho_nana_ayojon'
                                        ));
                                    ?>
                                    

                                    <div class="col-md-4">
                                        <div class="sotoborso_udjapon_comity_content_all">
                                        
                                            <?php $i=1; 

                                            if($nana_ayojon->have_posts()) :

                                            while($nana_ayojon->have_posts()) : $nana_ayojon->the_post(); ?>

                                            <?php if ($i<3){ ?>
                                            
                                                <div class="sotoborso_udjapon_comity_content_all_information margin_bottom">
                                                    <div class="sotoborso_udjapon_comity_content_image school_management_committee_image">
                                                        <?php echo the_post_thumbnail('nana_ayojon_image'); ?>
                                                    </div>
                                                    <div class="sotoborso_udjapon_comity_content margin_bottom">
                                                        <h2><?php the_title(); ?></h2>
                                                        
                                                        <p><?php the_excerpt(); ?></p>
                                                        
                                                         <a href="<?php the_permalink(); ?>" class="details">[  বিস্তারিত ] </a>
                                                        
                                                    </div>
                                                </div>
                                                <?php } ?>

                                            <?php $i++; endwhile; endif;?>

                                        </div>
                                       
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sotoborso_udjapon_comity_content_all ">
                                            
                                            <?php $i=1; 

                                            if($nana_ayojon->have_posts()) :

                                            while($nana_ayojon->have_posts()) : $nana_ayojon->the_post(); ?>

                                            <?php if ($i>2 && $i<5){ ?>
                                            
                                                <div class="sotoborso_udjapon_comity_content_all_information margin_bottom">
                                                    <div class="sotoborso_udjapon_comity_content_image school_management_committee_image">
                                                        <?php echo the_post_thumbnail('nana_ayojon_image'); ?>
                                                    </div>
                                                    <div class="sotoborso_udjapon_comity_content margin_bottom">
                                                        <h2><?php the_title(); ?></h2>
                                                        
                                                        <p><?php the_excerpt(); ?></p>
                                                        
                                                         <a href="<?php the_permalink(); ?>" class="details">[  বিস্তারিত ] </a>
                                                        
                                                    </div>
                                                </div>
                                                <?php } ?>

                                            <?php $i++; endwhile; endif;?>

                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sotoborso_udjapon_comity_content_all">
                                            
                                            <?php $i=1; 

                                                if($nana_ayojon->have_posts()) :

                                                while($nana_ayojon->have_posts()) : $nana_ayojon->the_post(); 
                                            ?>

                                            <?php if ($i>4){ ?>
                                            
                                                <div class="sotoborso_udjapon_comity_content_all_information margin_bottom">
                                                    <div class="sotoborso_udjapon_comity_content_image school_management_committee_image">
                                                        <?php echo the_post_thumbnail('nana_ayojon_image'); ?>
                                                    </div>
                                                    <div class="sotoborso_udjapon_comity_content margin_bottom">
                                                        <h2><?php the_title(); ?></h2>
                                                        
                                                        <p><?php the_excerpt(); ?></p>
                                                        
                                                         <a href="<?php the_permalink(); ?>" class="details">[  বিস্তারিত ] </a>
                                                        
                                                    </div>
                                                </div>
                                                <?php } ?>

                                            <?php $i++; endwhile; endif;?>

                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="school_proud_button">
                               <a href="<?php echo get_permalink('62'); ?>">
                                   <button>আরও দেখতে</button>
                                </a>
                            </div>                       
                        </div>
                        <div class="col-md-4">
                            <?php 
                                $school_sdudent_proud = new WP_Query(array(
                                    'post_type' => 'our_student',
                                    'posts_per_page' =>6,
                                    'student_type' =>'school_proud_student'
                                ));
                            ?>
                                <div class="area_practice_top_title school_proud_header">
                                        <h3>স্কুলের গর্ব যারা</h3>
                                </div>
                                <div class="school_proud_sidebar">
                                    <?php 

                                        if($school_sdudent_proud->have_posts()) :

                                        while($school_sdudent_proud->have_posts()) : $school_sdudent_proud->the_post(); 
                                    ?>
                                    <div class="school_proud_sidebar_content">
                                        <div class="school_proud_sidebar_content_image">
                                            <?php echo the_post_thumbnail('school_proud_stu_image'); ?>
                                        </div>
                                        <div class="school_proud_sidebar_content_image_text">
                                            <h4><?php the_title(); ?></h4>
                                            <p>Designation :<?php echo get_post_meta(get_the_ID(),'designation',true) ?></p> 
											<a href="<?php the_permalink(); ?>" class="details">[  বিস্তারিত ]</a>
                                        </div>
                                       
                                    </div>
                                    <?php endwhile; endif; ?>
                                    
                                </div>
                                <div class="school_proud_button">
                                   <a href="<?php echo get_permalink('64'); ?>">
                                       <button>আরও দেখতে</button>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
         <section id="about_school" class="about_section">
            <div class="container">
              <div class="main_about">
                
                <div class="row">
                   <div class="col-md-4">
                        <?php 
                            $school_telent_student = new WP_Query(array(
                                'post_type' => 'our_student',
                                'posts_per_page' =>5,
                                'student_type' =>'telented_student'
                            ));
                        ?>
                            <div class="area_practice_top_title school_proud_header">
                                    <h3>স্কুলের মেধাবী ছাত্র-ছাত্রীরা</h3>
                            </div>
                            <div class="school_proud_sidebar school_good_student">
                                <?php
                                    if($school_telent_student->have_posts()) :
                                    while($school_telent_student->have_posts()) : 
                                        $school_telent_student->the_post(); 
                                ?>
                                <div class="school_proud_sidebar_content">
                                    <div class="school_proud_sidebar_content_image">
                                        <?php the_post_thumbnail('school_telent_student_image'); ?>
                                    </div>
                                    <div class="school_proud_sidebar_content_image_text">
                                        <h4><?php the_title(); ?></h4>
                                        <p>পাশের সাল : <?php echo get_post_meta(get_the_ID(),'passing_year',true) ?></p>
                                        <p>বর্তমান অবস্থান : <?php echo get_post_meta(get_the_ID(),'state',true) ?></p>
                                        
                                        
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                                
                            </div>
                            <div class="school_proud_button">
                                <a href="<?php echo get_permalink('78'); ?>">
                                    <button>আরও দেখতে</button>
                                </a>    
                            </div>
                        </div> 
                        <div class="col-md-8">
                            <div class="school_proud_left_content">
                                <div class="area_practice_top_title school_proud_header">
                                    <h3>স্কুলের  সাবেক প্রধান শিক্ষকবৃন্দ</h3>
                                </div>
                                <div class="row">
                                    <?php 
                                        $past_head_teacher = new WP_Query(array(
                                            'post_type' => 'our_teacher',
                                            'posts_per_page' =>8,
                                            'teacher_type' =>'past_head_teacher'
                                        ));
                                    ?>
                                    <div class="col-md-3">
                                        <?php
                                            $i=1;
                                            if($past_head_teacher->have_posts()) :
                                            while($past_head_teacher->have_posts()) : 
                                                $past_head_teacher->the_post(); 
                                        ?>
                                        <?php if($i<3) { ?>
                                        <div class="image_hover_effect image_hover_effect_margin_bottom">
                                            

                                            <div class="area_practice_top">
                                                <div class="area_practice_image">
                                                    <?php the_post_thumbnail('past_head_teacher_image'); ?>
                                                </div>
                                                <div class="area_practice_image_text">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p>মেয়াদকাল : <?php echo get_post_meta(get_the_ID(),'duration',true) ?></p>
                                                </div>
                                            </div>
                                            <div class="project-content-wrap">
                                                <div class="project-title"><?php the_title(); ?></div>
                                                <div class="project-content"><?php echo get_post_meta(get_the_ID(),'head_teacher_details',true) ?></div>
                                                <!-- <div class="project-link-wrap">
                                                    <a class="project-link" href="<?php the_permalink(); ?>">Details</a>
                                                </div> -->
                                            </div>
                                            
                                        </div>
                                        <?php } ?>
                                        <?php $i++; endwhile; endif; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php
                                            $i=1;
                                            if($past_head_teacher->have_posts()) :
                                            while($past_head_teacher->have_posts()) : 
                                                $past_head_teacher->the_post(); 
                                        ?>
                                        <?php if($i>2 && $i<5) { ?>
                                        <div class="image_hover_effect image_hover_effect_margin_bottom">
                                            <div class="area_practice_top">
                                                <div class="area_practice_image">
                                                    <?php the_post_thumbnail('past_head_teacher_image'); ?>
                                                </div>
                                                <div class="area_practice_image_text">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p>মেয়াদকাল : <?php echo get_post_meta(get_the_ID(),'duration',true) ?></p>
                                                </div>
                                            </div>
                                            <div class="project-content-wrap">
                                                <div class="project-title"><?php the_title(); ?></div>
                                                <div class="project-content"><?php echo get_post_meta(get_the_ID(),'head_teacher_details',true) ?></div>
                                                <!-- <div class="project-link-wrap">
                                                    
                                                    <a class="project-link" href="<?php the_permalink(); ?>">Details</a>
                                                </div> -->
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php $i++; endwhile; endif; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php
                                            $i=1;
                                            if($past_head_teacher->have_posts()) :
                                            while($past_head_teacher->have_posts()) : 
                                                $past_head_teacher->the_post(); 
                                        ?>
                                        <?php if($i>4 && $i<7) { ?>
                                        <div class="image_hover_effect image_hover_effect_margin_bottom">
                                            <div class="area_practice_top">
                                                <div class="area_practice_image">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/head_teacher.jpg">
                                                </div>
                                                <div class="area_practice_image_text">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p>মেয়াদকাল : <?php echo get_post_meta(get_the_ID(),'duration',true) ?></p>
                                                </div>
                                            </div>
                                            <div class="project-content-wrap">
                                                <div class="project-title"><?php the_title(); ?></div>
                                               <div class="project-content"><?php echo get_post_meta(get_the_ID(),'head_teacher_details',true) ?></div>
                                                <!-- <div class="project-link-wrap">
                                                    
                                                    <a class="project-link" href="<?php the_permalink(); ?>">Details</a>
                                                </div> -->
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php $i++; endwhile; endif; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php
                                            $i=1;
                                            if($past_head_teacher->have_posts()) :
                                            while($past_head_teacher->have_posts()) : 
                                                $past_head_teacher->the_post(); 
                                        ?>
                                        <?php if($i>6) { ?>
                                        <div class="image_hover_effect image_hover_effect_margin_bottom">
                                            <div class="area_practice_top">
                                                <div class="area_practice_image">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/head_teacher.jpg">
                                                </div>
                                                <div class="area_practice_image_text">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p>মেয়াদকাল : <?php echo get_post_meta(get_the_ID(),'duration',true) ?></p>
                                                </div>
                                            </div>
                                            <div class="project-content-wrap">
                                                <div class="project-title"><?php the_title(); ?></div>
                                                <div class="project-content"><?php echo get_post_meta(get_the_ID(),'head_teacher_details',true) ?></div>
                                                <!-- <div class="project-link-wrap">
                                                    
                                                    <a class="project-link" href="<?php the_permalink(); ?>">Details</a>
                                                </div> -->
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php $i++; endwhile; endif; ?>
                                    </div>
                                    
                                </div>
                                <div class="school_proud_button past_teacher_button">
                                    <a href="<?php echo get_permalink('86'); ?>">
                                        <button>আরও দেখতে</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
              </div>
            </div>
        </section>
        <section id="died_teacher" class="blog_section late_teacher_section">
          <div class="rgba_color">
          <div class="container">
            <div class="all_blog_div">
              
              <div class="row">
                 <div class="col-md-3">
                    <div class="area_practice_top_title school_proud_header teacher_list_header past_teacher_header">
                            <h3>Empty Text</h3>
                    </div>
                    <div class="school_proud_sidebar teacher_list_sidebar empty_div">

                    </div>
                    <div class="school_proud_button">
                        <a href="<?php echo get_permalink(get_page_by_path('')); ?>">
                            <button>আরও দেখতে</button>
                        </a>
                    </div>
                </div> 
                
                <div class="col-md-3">
                    <?php 
                        $lost_teachers = new WP_Query(array(
                            'post_type' => 'our_teacher',
                            'posts_per_page' =>4,
                            'teacher_type' =>'lost_teachers'
                        ));
                    ?>
                    <div class="area_practice_top_title school_proud_header teacher_list_header">
                            <h3>শিক্ষক ও ছাত্র-ছাত্রী যাদের হারিয়েছি</h3>
                    </div>
                    <div class="school_proud_sidebar teacher_list_sidebar">
                        <?php
                        
                            if($lost_teachers->have_posts()) :
                            while($lost_teachers->have_posts()) : 
                                $lost_teachers->the_post(); 
                        ?>
                        <div class="school_proud_sidebar_content">
                            <div class="school_proud_sidebar_content_image teacher_images past_teacher_pro">
                                <?php the_post_thumbnail('lost_teachers_image'); ?>
                            </div>
                            <div class="school_proud_sidebar_content_image_text">
                                <h4><?php the_title(); ?></h4>
                                <p><b>জন্ম : <?php echo get_post_meta(get_the_ID(),'date_of_birth',true) ?></b></p>
                                <p><b>মৃত্যু : <?php echo get_post_meta(get_the_ID(),'date_of_death',true) ?></b></p>
                                <a href="<?php the_permalink(); ?>" class="details">[  বিস্তারিত ] </a>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                       
                    </div>
                    <div class="school_proud_button">
                        <a href="<?php echo get_permalink('113'); ?>">
                            <button>আরও দেখতে</button>
                        </a>
                    </div>
                </div> 
                  <div class="col-md-3">
                    <?php 
                        $another_past_teacher = new WP_Query(array(
                            'post_type' => 'our_teacher',
                            'posts_per_page' =>4,
                            'teacher_type' =>'another_past_teachers'
                        ));
                    ?>
                    <div class="area_practice_top_title school_proud_header teacher_list_header past_teacher_header">
                            <h3>অন্যান্য সাবেক শিক্ষকবৃন্দ </h3>
                    </div>
                    
                    <div class="school_proud_sidebar teacher_list_sidebar">
                        <?php                        
                            if($another_past_teacher->have_posts()) :
                            while($another_past_teacher->have_posts()) : 
                                $another_past_teacher->the_post(); 
                        ?>
                        <div class="school_proud_sidebar_content">
                            <div class="school_proud_sidebar_content_image teacher_images past_teacher_pro">
                                <?php the_post_thumbnail('another_past_teacher_image'); ?>
                            </div>
                            <div class="school_proud_sidebar_content_image_text">
                                <h4><?php the_title(); ?></h4>
                                <p>বিষয় : <?php echo get_post_meta(get_the_ID(),'subject',true) ?></p>
                                <p><b><?php echo get_post_meta(get_the_ID(),'duration',true) ?></b></p>
                                
                                
                                <a href="<?php the_permalink(); ?>" class="details">[  বিস্তারিত ] </a>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                        
                    </div>
                    <div class="school_proud_button">
                        <a href="<?php echo get_permalink('98'); ?>">
                            <button>আরও দেখতে</button>
                        </a>
                        </div>
                </div> 
                <div class="col-md-3">
                    <?php 
                        $school_present_teachers = new WP_Query(array(
                            'post_type' => 'our_teacher',
                            'posts_per_page' =>5,
                            'teacher_type' =>'school_present_teachers'
                        ));
                    ?>
                    <div class="area_practice_top_title school_proud_header teacher_list_header">
                            <h3>স্কুলের বর্তমান শিক্ষক ও অন্য স্টাফবৃন্দ </h3>
                    </div>
                    <div class="school_proud_sidebar teacher_list_sidebar">
                        <?php
                        
                            if($school_present_teachers->have_posts()) :
                            while($school_present_teachers->have_posts()) : 
                                $school_present_teachers->the_post(); 
                        ?>
                        <div class="school_proud_sidebar_content">
                            <div class="school_proud_sidebar_content_image teacher_images">
                                <?php the_post_thumbnail('school_present_teachers_image'); ?>
                            </div>
                            <div class="school_proud_sidebar_content_image_text">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo get_post_meta(get_the_ID(),'designation',true) ?></p>
                                <p>বিষয় : <?php echo get_post_meta(get_the_ID(),'subject',true) ?></p>
                                
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                    <div class="school_proud_button">
                        <a href="<?php echo get_permalink('120'); ?>">
                            <button>আরও দেখতে</button>
                        </a>
                    </div>
                </div> 
              </div>
            </div>
          </div>
          </div>
        </section>
        <section class="school_information_section">
            <div class="container">
                <div class="main_school_information">
                    <div class="row">
                         <div class="col-md-4">
                             <div class="area_practice_top_title school_proud_header teacher_list_header">
                                    <h3>জরুরি যোগাযোগ ও লিংক</h3>
                            </div>
                            <div class="communication_link_box">
                                <?php dynamic_sidebar('emergency_communicate'); ?>
                               
                                
                            </div>
                         </div>
                        <div class="col-md-4">
                            <?php 
                                $hundred_years_student = new WP_Query(array(
                                    'post_type' => 'our_student',
                                    'posts_per_page' =>4,
                                    'student_type' =>'hundread_years_student'
                                ));
                            ?>
                            <div class="area_practice_top_title school_proud_header teacher_list_header">
                                    <h3>স্কুলের শত বর্ষের ছাত্র-ছাত্রী</h3>
                            </div>
                            <div class="school_proud_sidebar teacher_list_sidebar">
                                <?php
                        
                                    if($hundred_years_student->have_posts()) :
                                    while($hundred_years_student->have_posts()) : 
                                        $hundred_years_student->the_post(); 
                                ?>
                                <div class="school_proud_sidebar_content">
                                    <div class="school_proud_sidebar_content_image teachers_images present_student">
                                        <?php the_post_thumbnail('hundred_years_student_image'); ?>
                                    </div>
                                    <div class="school_proud_sidebar_content_image_text sotoborso_student">
                                        <h4><?php the_title(); ?></h4>
                                        <p><b>ব্যচ :<?php echo get_post_meta(get_the_ID(),'batch',true) ?></b></p>
                                        <p><?php the_excerpt(); ?></p>
                                        
                                        
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                                
                            </div>
                            <div class="school_proud_button">
                                <a href="<?php echo get_permalink('105'); ?>">
                                    <button>আরও দেখতে</button>
                                </a>
                            </div>
                        </div> 
                        <div class="col-md-4">
                            <?php 
                                $inportant_link = new WP_Query(array(
                                    'post_type' => 'page',
                                    'page_id' =>135
                                ));
                            ?>
                            <div class="area_practice_top_title school_proud_header teacher_list_header">
                                    <h3>গুরুত্বপূর্ন লিঙ্ক সমুহ</h3>
                            </div>
                            <div class="school_proud_sidebar link_list_sidebar">
                                <div class="important_links">
                                    <?php 
                                        if($inportant_link->have_posts()): 
                                            while($inportant_link->have_posts()):
                                             $inportant_link->the_post();  
                                    ?>
                                    <ul>
                                        <?php the_content(); ?>
                                    </ul>
                                    <?php endwhile; endif; ?>
                                </div>                              
                            </div>
                            <!-- <div class="school_proud_button">
                                <button>আরও দেখতে</button>
                            </div> -->
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        
    <?php 
        get_footer();
    ?>
<?php 
	//Template Name: Schooler Muktijoddha Students
 ?>
<?php get_header(); ?>

        <div class="default-page-container all_page_content">
            <div class="container">
            	<div class="main_all_page_container">
	                <div class="row">
	                	<div class="col-md-12">
	                		<div class="all_page_content_title">
	                			<h2><?php the_title(); ?></h2>
	                		</div>
	                	</div>
	                    <div class="col-md-12">
	                        <div class="all_page_content_information">
	                            <div class="row">
	                            	<?php 
	                            		$paged = get_query_var('paged') ? get_query_var('paged') : 1; 
				                        $school_present_teachers = new WP_Query(array(
				                            'post_type' => 'our_student',
				                            "paged" => $paged,
				                            'posts_per_page' =>28,
				                            'student_type' =>'schooler_muktijoddha_students'
				                        ));
				                    ?>
				                    <?php
                        
			                            if($school_present_teachers->have_posts()) :
			                            while($school_present_teachers->have_posts()) : 
			                                $school_present_teachers->the_post(); 
			                        ?>
                            
	                            	<div class="col-sm-4 col-md-3">
	                            		<div class="school_proud_sidebar teacher_list_sidebar min_height_unset school_committee_height">
		                            		<div class="school_proud_sidebar_content">
					                            <div class="school_proud_sidebar_content_image teacher_images">
					                                <?php the_post_thumbnail('common_image_size'); ?>
					                            </div>
					                            <div class="school_proud_sidebar_content_image_text">
					                                <h4><?php the_title(); ?></h4>
					                                <p>পরিচয় :<?php echo get_post_meta(get_the_ID(),'porichoy',true) ?></p>
                                					<p>ব্যাচ : <?php echo get_post_meta(get_the_ID(),'batch',true) ?></p>
					                                
					                            </div>
					                        </div>
					                    </div>
	                            	</div>
	                            	<?php endwhile; endif; ?>
	                            	<div class="col-md-12">
	                                    <div class="main-pagination pull-right">
	                                        <?php 
	                                        if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $school_present_teachers )); }  
	                                         
	                                        ?>
	                                    </div>
                                	</div>
	                            </div>
	                        </div>

	                    </div>

	                </div>
                </div>
            </div>
        </div>

 

<?php get_footer(); ?>
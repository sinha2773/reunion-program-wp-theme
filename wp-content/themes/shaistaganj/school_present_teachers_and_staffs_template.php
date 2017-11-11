<?php 
	//Template Name: School Present Teachers and Staffs
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
				                            'post_type' => 'our_teacher',
				                            "paged" => $paged,
				                            'posts_per_page' =>16,
				                            'teacher_type' =>'school_present_teachers'
				                        ));
				                    ?>
				                    <?php
                        
			                            if($school_present_teachers->have_posts()) :
			                            while($school_present_teachers->have_posts()) : 
			                                $school_present_teachers->the_post(); 
			                        ?>
                            
	                            	<div class="col-sm-4 col-md-3">
	                            		<div class="school_proud_sidebar teacher_list_sidebar min_height_unset">
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
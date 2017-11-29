<?php 
	//Template Name: School Hundred 
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
	                                $hundred_years_student = new WP_Query(array(
	                                    'post_type' => 'our_student',
	                                    "paged" => $paged,
	                                    'posts_per_page' =>24,
	                                    'student_type' =>'hundread_years_student'
	                                ));
	                            ?>
                           		<?php
                        
                                    if($hundred_years_student->have_posts()) :
                                    while($hundred_years_student->have_posts()) : 
                                        $hundred_years_student->the_post(); 
                                ?>
	                            	<div class="col-sm-4 col-md-4">
	                            		<div class="school_proud_sidebar teacher_list_sidebar min_height_unset school_committee_height">
		                            		<div class="school_proud_sidebar_content">
			                                    <div class="school_proud_sidebar_content_image teachers_images present_student">
			                                        <?php the_post_thumbnail('common_image_size'); ?>
			                                    </div>
			                                    <div class="school_proud_sidebar_content_image_text sotoborso_student">
			                                        <h4><?php the_title(); ?></h4>
			                                        <p><b>ব্যচ :<?php echo get_post_meta(get_the_ID(),'batch',true) ?></b></p>
			                                        <p><?php the_excerpt(); ?></p>
			                                        
			                                        
			                                    </div>
			                                </div>
		                            	</div>
	                            	</div>
	                            	<?php endwhile; endif; ?>
	                            	<div class="col-md-12">
	                                    <div class="main-pagination pull-right">
	                                        <?php 
	                                        if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $hundred_years_student )); }  
	                                         
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
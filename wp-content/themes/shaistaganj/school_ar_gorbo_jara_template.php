<?php 
	//Template Name: School ar Gorbo jara
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
		                                $school_sdudent_proud = new WP_Query(array(
		                                    'post_type' => 'our_student',
		                                    "paged" => $paged,
		                                    'posts_per_page' =>18,
		                                    'student_type' =>'school_proud_student'
		                                ));
		                            ?>
		                            <?php
                                        if($school_sdudent_proud->have_posts()) :
                                        while($school_sdudent_proud->have_posts()) : 
                                        $school_sdudent_proud->the_post(); 
                                    ?>
                            
	                            	<div class="col-sm-4 col-md-4">
	                            		<div class="school_proud_sidebar min_height_unset">
		                                    
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
		                                </div>
	                            	</div>
	                            	<?php endwhile; endif; ?>
	                            	<div class="col-md-12">
	                                    <div class="main-pagination pull-right">
	                                        <?php 
	                                        if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $school_sdudent_proud )); }  
	                                         
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
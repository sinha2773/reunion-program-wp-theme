<?php 
	//Template Name: Teacher Student Died 
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
			                        $lost_teachers = new WP_Query(array(
			                            'post_type' => 'our_teacher',
			                            "paged" => $paged,
			                            'posts_per_page' =>9,
			                            'teacher_type' =>'lost_teachers'
			                        ));
			                    ?>			                    
		                        <?php
		                        
		                            if($lost_teachers->have_posts()) :
		                            while($lost_teachers->have_posts()) : 
		                                $lost_teachers->the_post(); 
		                            
		                        ?>                           
	                            	<div class="col-sm-4 col-md-3">
	                            		<div class="school_proud_sidebar teacher_list_sidebar min_height_unset teacher_student_died_height">
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
					                    </div>
	                            	</div>
	                            	<?php endwhile; endif; ?>
	                            	<div class="col-md-12">
	                                    <div class="main-pagination pull-right">
	                                        <?php 
	                                        if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $lost_teachers )); }  
	                                         
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
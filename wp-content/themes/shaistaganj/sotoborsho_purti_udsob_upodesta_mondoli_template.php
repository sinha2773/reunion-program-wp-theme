<?php 
	//Template Name: sotoborsho purti udsob upodesta mondoli
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
	                                    $past_teacher_memmorys = new WP_Query(array(
	                                        'post_type' => 'our_committee',
	                                        "paged" => $paged,
	                                        'posts_per_page' => 12,
	                                        'committee_type' => 'sotoborsho-purti-udsob-upodesta-mondoli'
	                                    ));
	                                ?>
                        			<?php 
	                                    if($past_teacher_memmorys ->have_posts()): 
	                                    while($past_teacher_memmorys->have_posts()) :
	                                     $past_teacher_memmorys->the_post(); 
	                                ?>
	                            	<div class="col-sm-4 col-md-4">
	                            		
			                            <div class="school_proud_sidebar teacher_list_sidebar min_height_unset">
			                                
			                                <div class="school_proud_sidebar_content">
			                                    <div class="school_proud_sidebar_content_image teacher_images past_teacher_pro">
			                                        <?php the_post_thumbnail('common_image_size'); ?>
			                                    </div>
			                                    <div class="school_proud_sidebar_content_image_text">
			                                        <h4><?php the_title(); ?></h4>
			                                        <p>পদবি : <?php echo get_post_meta(get_the_ID(),'designation',true) ?></p>
                                        			<p>কমিটি :  <?php echo get_post_meta(get_the_ID(),'committee_name',true) ?></p>
			                                    </div>
			                                </div>
			                                
		                            	</div>
		                            	
		                            </div>
	                            <?php endwhile; endif; ?>
	                            <div class="col-md-12">
                                    <div class="main-pagination pull-right">
                                        <?php 
                                        if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $past_teacher_memmorys )); }  
                                         
                                        ?>
                                    </div>
                                </div>
	                        </div>

	                    </div>

	                </div>
                </div>
            </div>
        </div>

 

<?php get_footer(); ?>
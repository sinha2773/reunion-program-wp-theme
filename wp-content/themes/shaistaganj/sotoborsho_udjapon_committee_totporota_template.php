<?php 
	//Template Name: Sotoborsho Udjapon committee Totporota
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
		                                $q = new WP_Query(array(
		                                    'post_type' => 'our_program',
		                                    "paged" => $paged,
		                                    'posts_per_page' => 9,
		                                    'program_type'=>'sotoborsho-udjapon-committee-totporota'
		                                ));
		                           ?>
		                            <?php if($q->have_posts()): while($q->have_posts()): $q->the_post(); ?>
                            
	                            	<div class="col-sm-4 col-md-4">
	                            		<div class="hundred_years_content">			                                
			                                <div class="hundred_years_content_images">
			                                    <?php echo the_post_thumbnail( 'ak_nojora_image'); ?>
			                                </div>
			                                <div class="hundred_years_content_images_text">
			                                    <h3><?php the_title(); ?></h3>
			                                </div>
			                                <div class="hundred_years_another_content">
			                                    <div class="hundred_years_another_content_text hundred_years_top">
			                                        <p> <?php echo get_trim_content(); ?> </p>
			                                    </div>			                                  
			                                </div>			                                
			                            </div>
	                            	</div>
	                            	<?php endwhile; endif; ?>
	                            	<div class="col-md-12">
                                        <div class="main-pagination pull-right">
                                            <?php 
                                            if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $q )); }  
                                             
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
<?php 
	//Template Name: Jara Anudan diyacen
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
			                            $jara_anudan = new WP_Query(array(
			                                'post_type' => 'our_committee',
			                                "paged" => $paged,
			                                'posts_per_page' =>18,
			                                'committee_type' =>'jara_anudan_diyacen'
			                            ));
			                        ?>
	                           		<?php
			                                    if($jara_anudan->have_posts()) :
			                                    while($jara_anudan->have_posts()) : 
			                                        $jara_anudan->the_post(); 
			                                ?>
                            
	                            	<div class="col-sm-4 col-md-4">
	                            		<div class="school_proud_sidebar school_good_student2">
			                                
			                                <div class="school_proud_sidebar_content">
			                                    <div class="school_proud_sidebar_content_image">
			                                        <?php the_post_thumbnail('common_image_size'); ?>
			                                    </div>
			                                    <div class="school_proud_sidebar_content_image_text">
			                                        <h4><?php the_title(); ?></h4>
			                                        <p>পরিচয় :<?php echo get_post_meta(get_the_ID(),'proffession',true) ?></p>
			                                        <!-- <p>মোবাইল : <?php //echo get_post_meta(get_the_ID(),'mobile_no',true) ?></p> -->
			                                        <p>টাকার পরিমান : <?php echo get_post_meta(get_the_ID(),'total_taka',true) ?></p>
			                                    </div>
			                                </div>
			                            </div>
	                            	</div>
	                            	<?php endwhile; endif; ?>
	                            	<div class="col-md-12">
	                                    <div class="main-pagination pull-right">
	                                        <?php 
	                                        if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $jara_anudan )); }  
	                                         
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
<?php 
	//Template Name: Ak nojora seyastagonj uccho biddaloy 
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

                                $p = new WP_Query(array(
                                    'post_type' => 'page',
                                    "paged" => $paged,
                                    'posts_per_page' =>9,
                                    'page_id' =>4
                                ));
                            ?>
                            <?php 
                                if($p->have_posts()): 
                                while($p->have_posts()): 
                                $p->the_post();  
                            ?>
                            <div class="col-sm-4 col-md-4">
	                            		<div class="hundred_years_content">
			                                
			                                <div class="hundred_years_content_images">
			                                    <?php echo the_post_thumbnail( 'ak_nojora_image'); ?>
			                                </div>
			                                
			                                <div class="hundred_years_another_content">
			                                    <div class="hundred_years_another_content_text hundred_years_top">
			                                        <p><?php echo get_trim_content(); ?></p>
			                                    </div>
			                                   
			                                </div>
			                            </div>
	                            	</div>
	                            	<?php endwhile; endif; ?>

	                            	<div class="col-md-12">
                                        <div class="main-pagination pull-right">
                                            <?php 
                                            if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $p )); }  
                                            // if(function_exists('wp_pagenavi')) { wp_pagenavi(); }  
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
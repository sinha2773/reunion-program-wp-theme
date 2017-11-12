<?php 
get_header(); 
?>
<div class="default-page-container all_page_content">
    <div class="container">
    	<div class="main_all_page_container">
            <div class="row">
            	<div class="col-md-12">
            		<div class="all_page_content_title">
            			<h2>Category / <?php echo single_cat_title(); ?></h2>
            		</div>
            	</div>
                <div class="col-md-12">
                    <div class="row">
                    	
                    	<div class="col-md-8 col-sm-8">
                    		<div class="all_category_content">
	                    		<div class="row">
	                                <?php if (have_posts()): while (have_posts()): the_post(); ?>
	                                <div class="col-md-4">
	                                    <div class="blog_post_item">
	                                       <div class="blog_post_item_images">
	                                         <?php the_post_thumbnail('all_post_image'); ?>
	                                       </div>
	                                       <div class="blog_post_item_images_text">
	                                         <div class="blog_post_item_images_text_title">
	                                           <h3><?php the_title(); ?></h3>
	                                         </div>
	                                         <div class="blog_post_item_images_text_body">
	                                           <p><?php echo get_trim_content(25,true); ?></p>
	                                           
	                                         </div>
	                                         <div class="blog_post_item_images_text_body_details">
	                                           <a class="blog_post_a_tag" href="<?php the_permalink(); ?>">Details</a>
	                                         </div>
	                                         <div class="blog_post_item_images_text_date_time">
	                                           <span><?php echo get_the_date(); ?></span>
	                                           <span class="blog_post_date"><?php echo get_the_time(); ?></span>
	                                         </div>
	                                       </div>
	                                     </div>
	                                </div> 
	                                <?php endwhile; endif; wp_reset_query(); ?> 
                                </div>    
                            </div>
                    	</div>
                    	
                    	<div class="col-md-4">
			               <div class="blog_right_sidebar">					                 
			                 <div class="blog_right_sidebar_content">
			                   <?php dynamic_sidebar('blog_right_sidebar'); ?>
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
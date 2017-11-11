<?php get_header(); ?>

<?php if (have_posts()): the_post(); ?>	

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
	                        <div class="all_page_content_information single_page_content">
	                        	<div class="single_page_content_image img">
	                        		<?php the_post_thumbnail(); ?>
	                        	</div>
	                        	<div class="single_page_content_image_text">
	                        		<p>Designation : <?php echo get_post_meta(get_the_ID(),'designation',true) ?></p> 
	                        		
	                        	</div>
	                            
	                        </div>

	                    </div>

	                </div>
                </div>
            </div>
        </div>

    <?php
endif;
wp_reset_query(); ?>


<?php get_footer(); ?>
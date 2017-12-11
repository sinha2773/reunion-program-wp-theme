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
	                		<?php 
	                			$terms = wp_get_post_terms(get_the_ID(), 'student_type', array("fields" => "all"));
								$diff_slag = $terms[0]->slug;
	                		 ?>
	                	</div>
	                    <div class="col-md-12">
	                        <div class="all_page_content_information single_page_content">
	                        	<div class="single_page_content_image img">
	                        		<?php the_post_thumbnail(); ?>
	                        	</div>
	                        	<div class="single_page_content_image_text">
	                        	                        		
	                        		<?php if ($diff_slag == 'schooler_muktijoddha_students') : ?>
	                        			<h4><?php the_title(); ?></h4>
		                               	<p>পরিচয় :<?php echo get_post_meta(get_the_ID(),'porichoy',true) ?></p>
                    					<p>ব্যাচ : <?php echo get_post_meta(get_the_ID(),'batch',true) ?></p>
	                        			
	                        		<?php endif; ?>
	                        		<?php the_content(); ?>
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
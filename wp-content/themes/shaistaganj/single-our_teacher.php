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
	                			$terms = wp_get_post_terms(get_the_ID(), 'teacher_type', array("fields" => "all"));
								$diff_slag = $terms[0]->slug;
	                		 ?>
	                	</div>
	                    <div class="col-md-12">
	                        <div class="all_page_content_information single_page_content">
	                        	<div class="single_page_content_image img">
	                        		<?php the_post_thumbnail(); ?>
	                        	</div>
	                        	<div class="single_page_content_image_text">
	                        		<?php  
	                        			if($diff_slag == 'past_teachers_memmory') :
	                        		?>
	                        		<?php the_content(); ?>
	                        		<?php endif; ?>

	                        		<?php if ($diff_slag == 'lost_teachers') : ?>
	                        			<p><b>জন্ম : <?php echo get_post_meta(get_the_ID(),'date_of_birth',true) ?></b></p>
	                        			<p><b>মৃত্যু : <?php echo get_post_meta(get_the_ID(),'date_of_death',true)?></b></p>
	                        			<?php the_content(); ?>
	                        		<?php endif; ?>

	                        		<?php if ($diff_slag == 'another_past_teachers') : ?>
	                        		<p>বিষয় : <?php echo get_post_meta(get_the_ID(),'subject',true) ?></p>
					                <p><b>Duration: <?php echo get_post_meta(get_the_ID(),'duration',true) ?></b></p>
					                <?php endif; ?>
					                <?php if ($diff_slag == 'past_head_teacher') : ?>
					                <?php echo the_content(); ?>
					                <?php endif; ?>
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
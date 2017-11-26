<?php 
	//Template Name: School EX Head Teachers 
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

                                        $past_head_teacher = new WP_Query(array(
                                            'post_type' => 'our_teacher',
                                            "paged" => $paged,
                                            'posts_per_page' =>12,
                                            'teacher_type' =>'past_head_teacher'
                                        ));
                                    ?>
                                    <?php
                                        if($past_head_teacher->have_posts()) :
                                        while($past_head_teacher->have_posts()) : 
                                            $past_head_teacher->the_post(); 
                                    ?>
	                            	<div class="col-md-3">
                                        
                                        <div class="image_hover_effect image_hover_effect_margin_bottom">
                                            

                                            <div class="area_practice_top">
                                                <div class="area_practice_image">
                                                    <?php the_post_thumbnail('past_head_teacher_image'); ?>
                                                </div>
                                                <div class="area_practice_image_text">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p>মেয়াদকাল : <?php echo get_post_meta(get_the_ID(),'duration',true) ?></p>
                                                </div>
                                            </div>
                                            <div class="project-content-wrap">
                                                <div class="project-title"><?php the_title(); ?></div>
                                                <div class="project-content"><?php echo get_trim_content(16,true); ?></div>
                                                <div class="project-link-wrap">
                                                    
                                                    <a class="project-link" href="<?php the_permalink(); ?>">Details</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <?php $i++; endwhile; endif; ?>
                                    <div class="col-md-12">
                                        <div class="main-pagination pull-right">
                                            <?php 
                                            if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $past_head_teacher )); }  
                                             
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
<?php 
	//Template Name: School Hundred Years Students
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
	                                $hundred_years_student = new WP_Query(array(
	                                    'post_type' => 'hundred_years',
	                                    "paged" => $paged,
	                                    'posts_per_page' =>-1
	                                    
	                                ));
	                            ?>
                           		<?php
                        
                                    if($hundred_years_student->have_posts()) :
                                    while($hundred_years_student->have_posts()) : 
                                        $hundred_years_student->the_post(); 
                                ?>
	                            	<div class="customer_box">
	                            		<div class="hundred_years_student_list">
	                            			<div class="hundred_years_student_button">
	                            				<a href="<?php echo get_post_meta(get_the_ID(),'student_list_pdf',true) ?>" target="_blank"><?php the_title(); ?></a>
	                            			</div>
	                            		</div>
	                            	</div>
	                            	<?php endwhile; endif; ?>
	                            	<div class="col-md-12">
	                                    <div class="main-pagination pull-right">
	                                        <?php 
	                                        if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $hundred_years_student )); }  
	                                         
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
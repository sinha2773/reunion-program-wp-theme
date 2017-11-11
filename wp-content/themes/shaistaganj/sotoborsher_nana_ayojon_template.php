<?php 
	//Template Name: Sotoborsher Nana Ayojon
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
	                            <div class="sotoborso_udjapon_comity">
                                    <?php 
                                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                        $nana_ayojon = new WP_Query(array(
                                            'post_type' => 'our_program',
                                            "paged" => $paged,
                                            'posts_per_page' =>9,
                                            'program_type' =>'sotoborsho_nana_ayojon'
                                        ));
                                    ?>
                                    
                                <div class="row">
                                    
                                    <?php
                                        if($nana_ayojon->have_posts()) :

                                        while($nana_ayojon->have_posts()) : 
                                        $nana_ayojon->the_post(); 
                                    ?>
                                    <div class="col-md-3">
                                        <div class="sotoborso_udjapon_comity_content_all">
                                                <div class="sotoborso_udjapon_comity_content_all_information margin_bottom">
                                                    <div class="sotoborso_udjapon_comity_content_image school_management_committee_image">
                                                        <?php echo the_post_thumbnail('nana_ayojon_image'); ?>
                                                    </div>
                                                    <div class="sotoborso_udjapon_comity_content margin_bottom">
                                                        <h2><?php the_title(); ?></h2>
                                                        
                                                        <p><?php the_excerpt(); ?></p>
                                                        
                                                         <a href="<?php the_permalink(); ?>" class="details">[  বিস্তারিত ] </a>
                                                        
                                                    </div>
                                                </div>
                                        </div>
                                       
                                    </div>
                                    <?php $i++; endwhile; endif;?>
                                    <div class="col-md-12">
                                        <div class="main-pagination pull-right">
                                            <?php 
                                            if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $nana_ayojon )); }  
                                            
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
        </div>

 

<?php get_footer(); ?>
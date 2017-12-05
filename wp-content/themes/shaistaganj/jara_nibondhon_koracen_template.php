<?php 
	//Template Name: Jara Nibondhon Koracen
 ?>
<?php 
	get_header(); 
	$sign = empty(get_option('permalink_structure')) ? '&' : '?';
?>
<?php 
								
	$member_type= isset($_GET['member_type']) ? $_GET['member_type'] : '';

	$p_year= isset($_GET['p_year']) ? $_GET['p_year'] : ''; 
?>

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
	                        <div class="all_page_content_information nibondhon_content">
	                            <div class="row">	                       
	                            	<div class="col-sm-4 col-md-4">
	                            		<div class="student_registration_online <?php echo $member_type=='bkash_or_rocket' ? 'active_box' : ''; ?>" id="student_hover">
		                                    <a href="<?php echo get_permalink('227'); ?><?php echo $sign;?>member_type=bkash_or_rocket">
		                                        <h2>বিকাশ এবং রকেটে যারা নিবন্ধন করেছেন</h2>
		                                    </a>
		                                </div>
	                            	</div>
	                            	<div class="col-sm-4 col-md-4">
	                            		<div class="student_registration_online <?php echo $member_type=='bank' ? 'active_box' : ''; ?>" id="student_hover">
		                                    <a href="<?php echo get_permalink('227'); ?><?php echo $sign;?>member_type=bank">
		                                        <h2>ব্যাংকে এবং অনলাইনে যারা নিবন্ধন করেছেন</h2>
		                                    </a>
		                                </div>
	                            	</div>
	                            	<div class="col-sm-4 col-md-4">
	                            		<div class="student_registration_online <?php echo $member_type=='direct' ? 'active_box' : ''; ?>" id="student_hover">
		                                    <a href="<?php echo get_permalink('227'); ?><?php echo $sign;?>member_type=direct">
		                                        <h2>সরাসরি যারা নিবন্ধন করেছেন</h2>
		                                    </a>
		                                </div>
	                            	</div>
	                            	
	                            </div>	    
								
								
								<?php if ( !empty($member_type) ) : ?>
                        		<div class="nibondhon_year">
                        			<?php 
									
									for( $I=1918; $I<=2023; $I++ ) { ?>
                            		<a href="<?php echo get_permalink('227') ?><?php echo $sign;?>member_type=<?php echo $member_type;?>&p_year=<?php echo $I;?>" class="btn btn-info <?php echo $p_year==$I ? 'active_box' : ''; ?>"><?php echo $I; ?></a>
                            		<?php } ?>
                        		</div>	                  
								<?php endif;?>
	                        </div>
	                    </div>
	                    <div class="col-md-12">
	                        <div class="all_page_content_information sorry_message">
	                            <div class="row">
	                        <?php
								

								$paged = get_query_var('paged') ? get_query_var('paged') : 1; 
								$args = array(
								  'post_type' => 'our_member',
								  "paged" => $paged,
								  'posts_per_page' => 18
								);
								if ( !empty($member_type) ){
								 $args['member_type'] = $member_type;
								 if ( $member_type=='bkash_or_rocket')
								 $args['member_type'] = array('bkash','rocket');

								}
								
								
								if ( !empty($p_year) ){
									$args['meta_query'] = array(
										array(
											'key'     => 'year_of_ssc',
											'value'   => array( $p_year ),
											'compare' => 'IN'
										),
									);
								}
								
								if ( empty($member_type) || empty($p_year) )  {
									// nothing
								}else {
								$book = new WP_Query($args);
							?>
                           	<?php 
                           		if($book->have_posts()):
                            	while($book->have_posts()):
                             	$book->the_post(); 
                            ?>
	                            	<div class="col-sm-4 col-md-2">
	                            		<div class="hundred_years_content">
			                                <div class="registraion_page_content">
			                                	<div class="registraion_page_content_image">
			                                		<?php the_post_thumbnail(); ?>
			                                	</div>
			                                	<div class="registraion_page_content_text">
			                                		<h3><?php the_title(); ?></h3>
			                                		<p>পেশা : <?php echo get_post_meta(get_the_ID(),'profession',true) ?></p>
			                                		<p> ব্যাচ / এস এস সি : <?php echo get_post_meta(get_the_ID(),'year_of_ssc',true) ?></p>
			                                		<a href="<?php  the_permalink(); ?>" class="details">
			                                			বিস্তারিত
			                                		</a>
			                                	</div>
			                                </div>			                                
			                            </div>
	                            	</div>
	                            	<?php endwhile;

									else: 
									echo "<h2>"."Sorry no any member"."</h2>";
									
									endif; ?>
	                            	<div class="col-md-12">
                                        <div class="main-pagination pull-right">
                                            <?php 
                                            if(function_exists('wp_pagenavi')) { 
                                            	wp_pagenavi( array( 'query' => $book )); 
                                            }  
                                             
                                            ?>
                                        </div>
                                    </div>
									<?php } ?>
	                            </div>
	                        </div>

	                    </div>

	                </div>
                </div>
            </div>
        </div>

 

<?php get_footer(); ?>
<?php get_header(); ?>
<style type="text/css">
	@media print {
   	.header_section{
   		display: none;
   	}
   	.hotline_header{
   		display: none;
   	}
   	.print_button{
   		display: none;
   	}
   	.footer_bottom_section{
   		display: none;
   	}
   	.sideber_contact_form_icon {
   		display: none;
   	}
   	.scrolltoup{
   		display: none;
   	}

	}
</style>

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
	                	<?php 
	                		$post_type = get_post_type(get_the_ID());
	                	?>
	                    <div class="col-md-12">
	                        <div class="all_page_content_information single_page_content">
	                        	<div class="single_page_content_image">
	                        		<?php the_post_thumbnail(); ?>
	                        	</div>
	                        	<?php if($post_type == 'post') { ?> 
	                        	<?php 
	                        		$name = get_post_meta(get_the_ID(),'your_name',true);
	                        		$email = get_post_meta(get_the_ID(),'email',true);
	                        		$mobile_no = get_post_meta(get_the_ID(),'mobile_no',true);	                        		

	                        		echo "Name: ".$name."<br>" ;
	                        		echo "Email: ".$email."<br>" ;
	                        		echo "Mobile No: ".$mobile_no."<br>";
	                        	?>
	                        	<div class="print_button blog_print">
                    				<a href="javascript::void();" class="btn btn-info" onclick="window.print();">Print</a>
                    			</div>
	                        	<?php } ?>

	                        	<?php the_content(); ?>
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
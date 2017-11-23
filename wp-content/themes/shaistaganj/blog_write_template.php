<?php 
get_header(); 

 // Template Name: Blog Write
// print_r($_POST);
  $msg = '';
if( isset($_POST['post_registration']) ){
// First check the nonce, if it fails the function will break
    //check_ajax_referer( 'ajax-register-nonce', 'security' );

      // Create post object
  $my_post = array(
    'post_title'    => wp_strip_all_tags( $_POST['post_title'] ),
    'post_content'  => $_POST['description'],
    'post_type'  => "post",
    'post_status'   => 'draft',
    'post_author'   => 1,
  );
   

  // Insert the post into the database
        
  if($post_id = wp_insert_post( $my_post )){
    //add_post_meta($post_id, $meta_key, $meta_value, $unique);
  
    
  	add_post_meta($post_id, 'your_name', wp_strip_all_tags($_POST['your_name']));
    add_post_meta($post_id, 'email', wp_strip_all_tags($_POST['email']));

    add_post_meta($post_id, 'mobile_no', wp_strip_all_tags($_POST['mobile_no']));

     add_post_meta($post_id, 'description', wp_strip_all_tags($_POST['description'])); 


    // wp_set_object_terms( $post_id, $_POST['payment_method'], 'post', false);

    if(!empty($_FILES)){
      require_once( ABSPATH . 'wp-admin/includes/post.php' );
      require_once( ABSPATH . 'wp-admin/includes/image.php' );
      require_once( ABSPATH . 'wp-admin/includes/file.php' );
      require_once( ABSPATH . 'wp-admin/includes/media.php' );

       $attachment_id = media_handle_upload( 'feature_image', $post_id );
      set_post_thumbnail( $post_id, $attachment_id );
    }

    $msg = "<div style='margin:5px 0; color:green;' class='alert alert-success'>Your post has been submitted </div>";
  }else{
    $msg = "<div style='margin:5px 0; color:red;' class='alert alert-danger'>Post not submitted</div>";
  }

}
?>



        <div class="default-page-container all_page_content">
            <div class="container">
            	<?php if( $msg!= '' ){
			        echo "<div class='alert alert-$msg_type'>$msg</div>";
			    }?>
            	<div class="main_all_page_container">
	                <div class="row">
	                	<div class="col-md-12">
	                		<div class="all_page_content_title">
	                			<h2>সঠিক তথ্য দিয়ে আপনার লেখাটি পোষ্ট করুন</h2>
	                		</div>
	                	</div>
	                    <div class="col-md-12">
	                        <div class="blog_write_all_content">
	                        	<div class="blog_write_content_info">
	                        		<form class="form-horizontal" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
					    				<div class="form-group registration_form_payment registration_payment_method ">
					    				  <label for="name" class="label_bottom control-label">Name</label>
					    				  <div class="">
					    					   <input type="text" name="your_name" class="form-control" id="name" placeholder="">
					    				  </div>				  
					    				</div>
					    				<div class="form-group registration_form_payment registration_payment_method ">
					    				  <label for="email" class="label_bottom control-label">Email</label>
					    				  <div class="">
					    					   <input type="text" name="email" class="form-control" id="email" placeholder="">
					    				  </div>				  
					    				</div>
					    				<div class="form-group registration_form_payment registration_payment_method ">
					    				  <label for="mobile_no" class="label_bottom control-label">Mobile</label>
					    				  <div class="">
					    					   <input type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="">
					    				  </div>				  
					    				</div>
					    				<div class="form-group registration_form_payment registration_payment_method ">
					    				  <label for="post_title" class="label_bottom control-label">Post Title</label>
					    				  <div class="">
					    					   <input type="text" name="post_title" class="form-control" id="post_title" placeholder="">
					    				  </div>				  
					    				</div>
					    				<div class="form-group registration_form_payment registration_payment_method ">
					    				  <label for="description" class="label_bottom control-label">Description</label>
					    				  <div class="">
					    				  	
					    					  <textarea class="form-control" name="description" id="description" rows="5"></textarea>
					    				  </div>				  
					    				</div>
					    				<div class="form-group registration_form_payment registration_payment_method ">
					    				  <label for="description" class="label_bottom control-label">Your Image</label>
					    				  <div class="">
					    				  	
					    					  <input type="file" name="feature_image">
					    				  </div>				  
					    				</div>
						            	<div class="form-group police_report_div scan_button">	
							                <div class="">
							                  <button type="submit" name="post_registration" class="">Submit</button>
							                </div>
						              </div>
						           </form>
	                        	</div>
	                        </div>
	                    </div>

	                </div>
                </div>
            </div>
        </div>

 


<?php get_footer(); ?>
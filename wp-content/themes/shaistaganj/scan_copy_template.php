<?php 
get_header();
  // Template Name: Registration Scan copy
  $msg = '';
if( isset($_POST['registration']) ){
// First check the nonce, if it fails the function will break
    //check_ajax_referer( 'ajax-register-nonce', 'security' );

      // Create post object
  $my_post = array(
    'post_title'    => 'scan form',
    'post_content'  => '',
    'post_type'  => "form_send",
    'post_status'   => 'draft',
    'post_author'   => 1,
  );
        
 
  // Insert the post into the database
        
  if($post_id = wp_insert_post( $my_post )){
   
  
            
    
    if(!empty($_FILES)){
      require_once( ABSPATH . 'wp-admin/includes/post.php' );
      require_once( ABSPATH . 'wp-admin/includes/image.php' );
      require_once( ABSPATH . 'wp-admin/includes/file.php' );
      require_once( ABSPATH . 'wp-admin/includes/media.php' );

      $attachment_id = media_handle_upload( 'feature_image', $post_id );
      set_post_thumbnail( $post_id, $attachment_id );
    }

    $msg = "<div style='margin:5px 0; color:green;' class='alert alert-success'>Registration successfully</div>";
  }else{
    $msg = "<div style='margin:5px 0; color:red;' class='alert alert-danger'>Registration failed</div>";
  }

}
?>
 <section class="all_section_upper">
   
 </section>
 <section class="registration_from_page">
   <div class="container">
     <div class="main_registration_page">
      <div class="registration_page_all_information">
         <div class="registration_page_header_information">
           <h1>শতবর্ষ পূর্তি উৎসব</h1>
           <h3>( ১৯১৮-২০১৮ )</h3>
           <h2>শায়েস্তাগঞ্জ উচ্চ বিদ্যালয়</h2>
           <p>ডাক ও থানা : শায়েস্তাগঞ্জ-৩৩০১, উপজেলা: হবিগঞ্জ সদর, জেলা : হবিগঞ্জ</p>
           <p>মোবাইল : ০১৭১১-১৭৬৫৬৩, ই-মেইল : shaistaganjhs100@gmail.com</p>
           <div class="download_or_scan">
             <div class="download_form">
                <a href="document/registration.pdf" target="_blank">
                 <button class="btn-sm">ডাউনলোড রেজিষ্ট্রেশন ফরম</button>
                </a>
              </div>
              <div class="scan_form">
                <a href="<?php echo get_permalink('162'); ?>">
                 <button class="btn-sm">রেজিষ্ট্রেশন করতে এখানে ক্লিক করুন</button>
                </a>
              </div>
            </div>
         </div>
         <div class="registration_form_button">
           <div class="registration_text">
          
           <h2>রেজিষ্ট্রেশন ফরম</h2>
          </div>
         </div>
         
         <div class="person_all_information">
           <form class="" action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    				<div class="form-group registration_form_payment registration_payment_method ">
    				  <label for="reg_scan_copy" class="label_bottom control-label">রেজিষ্ট্রেশনের স্কেন কপি <span class="red">*</span></label>
    				  <div class="">
    					   <input type="file" name="feature_image" class="form-control" id="reg_scan_copy" placeholder="">
    				  </div>				  
    				</div>
            <div class="form-group police_report_div scan_button">
              
                <div class="">
                  <button type="submit" name="registration" class="">Submit</button>
                </div>
              
              </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </section>


<?php 
get_footer();
 ?>
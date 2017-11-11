<?php 

// Template Name: Registration Template

  get_header();
  $msg = '';
if( isset($_POST['registration']) ){
// First check the nonce, if it fails the function will break
    //check_ajax_referer( 'ajax-register-nonce', 'security' );

      // Create post object
  $my_post = array(
    'post_title'    => wp_strip_all_tags( $_POST['applicant_name'] ),
    'post_content'  => '',
    'post_type'  => "our_member",
    'post_status'   => 'draft',
    'post_author'   => 1,
  );
        
 
  // Insert the post into the database
        
  if($post_id = wp_insert_post( $my_post )){
    //add_post_meta($post_id, $meta_key, $meta_value, $unique);
  
    add_post_meta($post_id, 'bkash_or_rocket', wp_strip_all_tags($_POST['bkash_or_rocket']));

    add_post_meta($post_id, 'bank_name', wp_strip_all_tags($_POST['bank_name']));

    add_post_meta($post_id, 'branch_name', wp_strip_all_tags($_POST['branch_name']));

    add_post_meta($post_id, 'account_name', wp_strip_all_tags($_POST['account_name']));

    add_post_meta($post_id, 'account_number', wp_strip_all_tags($_POST['account_number']));

    add_post_meta($post_id, 'submission_date', wp_strip_all_tags($_POST['submission_date']));

    add_post_meta($post_id, 'total_amount_of_money', wp_strip_all_tags($_POST['total_amount_of_money']));

    add_post_meta($post_id, 'click_spouse', wp_strip_all_tags($_POST['click_spouse']));

    add_post_meta($post_id, 'no_of_child', wp_strip_all_tags($_POST['no_of_child']));

    add_post_meta($post_id, 'click_driver', wp_strip_all_tags($_POST['click_driver']));

    add_post_meta($post_id, 'total_number_of_participant', wp_strip_all_tags($_POST['total_number_of_participant']));

    // add_post_meta($post_id, 'applicant_name', wp_strip_all_tags($_POST['applicant_name']));

    add_post_meta($post_id, 'applicant_name_eng', wp_strip_all_tags($_POST['applicant_name_eng']));

    add_post_meta($post_id, 'father_name', wp_strip_all_tags($_POST['father_name']));

    add_post_meta($post_id, 'mother_name', wp_strip_all_tags($_POST['mother_name']));

    add_post_meta($post_id, 'hasband_or_wife_name', wp_strip_all_tags($_POST['h_or_w_name']));

    add_post_meta($post_id, 'no_of_kids', wp_strip_all_tags($_POST['no_of_kids']));

    add_post_meta($post_id, 'profession', wp_strip_all_tags($_POST['profession']));

    add_post_meta($post_id, 'admission_year', wp_strip_all_tags($_POST['admission_year']));

    add_post_meta($post_id, 'class_name', wp_strip_all_tags($_POST['class_name']));

    add_post_meta($post_id, 'year_of_ssc', wp_strip_all_tags($_POST['year_of_ssc']));

    add_post_meta($post_id, 'parmanent_address', wp_strip_all_tags($_POST['parmanent_address']));

    add_post_meta($post_id, 'post_office', wp_strip_all_tags($_POST['post_office']));

    add_post_meta($post_id, 'thana', wp_strip_all_tags($_POST['thana']));

    add_post_meta($post_id, 'district', wp_strip_all_tags($_POST['district']));

    add_post_meta($post_id, 'present_address', wp_strip_all_tags($_POST['present_address']));

    add_post_meta($post_id, 'address1', wp_strip_all_tags($_POST['address1']));

    add_post_meta($post_id, 'address2', wp_strip_all_tags($_POST['address2']));

    add_post_meta($post_id, 'date_of_birth', wp_strip_all_tags($_POST['date_of_birth']));

    add_post_meta($post_id, 'blood_group', wp_strip_all_tags($_POST['blood_group']));

    add_post_meta($post_id, 'mobile_no', wp_strip_all_tags($_POST['mobile_no']));

    add_post_meta($post_id, 'email_no', wp_strip_all_tags($_POST['email_no']));

    add_post_meta($post_id, 'total_amount', wp_strip_all_tags($_POST['total_amount']));

    


                
    wp_set_object_terms( $post_id, $_POST['payment_method'], 'member_type', false);
            
    
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
    <?php if( $msg!= '' ){
        echo "<div class='alert alert-$msg_type'>$msg</div>";
      }?>
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
                
			  <div class="dropdown dowload_dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">রেজিষ্ট্রেশন ফরম ডাউনলোড করুন
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
          <?php 
              $pdf_file_source = new WP_Query(array(
                  'post_type' => 'page',
                  
                  'page_id' =>162
              ));
          ?>
          <?php 
              if($pdf_file_source->have_posts()): 
              while($pdf_file_source->have_posts()): 
              $pdf_file_source->the_post();  
          ?>
				  <li><a href="<?php echo get_post_meta(get_the_ID(),'pdf_file',true) ?>" target="_blank">ডাউনলোড PDF ফাইল</a></li>
				  <li><a href="#">ডাউনলোড DOC ফাইল</a></li>
				  <li><a href="<?php echo get_post_meta(get_the_ID(),'jpg_file',true) ?>" target="_blank">ডাউনলোড JPG ফাইল</a></li>
          <?php endwhile; endif; ?>
				</ul>
			  </div>
                 
               
              </div>
              <div class="scan_form">
                <a href="<?php echo get_permalink('171'); ?>">
                 <button class="btn-sm">রেজিষ্ট্রেশনের স্কেন কপি পাঠাতে</button>
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
           <form class="form-horizontal" action="" id="RegistrationForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            
            <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>
            <div id="smartwizard" class="sw-main sw-theme-dots">
              <ul class="nav nav-tabs step-anchor registrarion_step">
                  <li><a href="#step-1">Step 1<br /><small>PAYMENT INFORMATION</small></a></li>
                  <li><a href="#step-2">Step 2<br /><small>PERSONAL INFORMATION</small></a></li>
                  
              </ul>
              
            <div class="row">

              <div id="step-1">
                <div id="form-step-0" role="form" data-toggle="validator" class="first_step">
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="" class="label_bottom control-label">Registration Fee payment method <span class="red">*</span></label>
          				  <div class="label_bottom">
          					<input type="radio" name="payment_method" checked class="radio_button_class" id="" value="bkash">bKash<br/>
          					<input type="radio" name="payment_method" class="radio_button_class" id="payment_method" value="rocket">Rocket<br>
                    <input type="radio" name="payment_method" class="radio_button_class" id="payment_method" value="bank">Online / Bank
          				  </div>				  
          				</div>
                  <div class="mobile_information">
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="" class="label_bottom control-label">bKash Number : +8801552322282 / Rocket Number : +8801770515151</label>
                                
                    </div>
            				<div class="form-group registration_form_payment registration_payment_method">
            				  <label for="bkah_or_rocket" class="label_bottom control-label">In which bKash/Rocket number you have sent your Registration Fee (include Transaction ID within brackets)<span class="red">*</span></label>
            				  <div class="">
            					<input type="text" class="form-control" name="bkash_or_rocket" id="bkah_or_rocket" placeholder="">
            				  </div>				  
            				</div>
                  </div>
                  <div class="bank_information" style="display: none;">
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="bank_name" class="label_bottom control-label">Bank Name<span class="red">*</span></label>
                      <div class="">
                      <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="">
                      </div>          
                    </div>
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="branch_name" class="label_bottom control-label">Branch Name<span class="red">*</span></label>
                      <div class="">
                      <input type="text" class="form-control" name="branch_name" id="branch_name" placeholder="">
                      </div>          
                    </div>
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="account_name" class="label_bottom control-label">Account Name<span class="red">*</span></label>
                      <div class="">
                      <input type="text" class="form-control" name="account_name" id="account_name" placeholder="">
                      </div>          
                    </div>
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="account_number" class="label_bottom control-label">Account Number<span class="red">*</span></label>
                      <div class="">
                      <input type="text" class="form-control" name="account_number" id="account_number" placeholder="">
                      </div>          
                    </div>
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="submission_date" class="label_bottom control-label">Submission Date<span class="red">*</span></label>
                      <div class="">
                      <input type="text" class="form-control" name="submission_date" id="submission_date" placeholder="">
                      </div>          
                    </div>
                  </div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="total_amount_of_money" class="label_bottom control-label">Total Amount of Taka (numeric)<span class="red">*</span></label>
          				  <div class="">
          					<input type="text" class="form-control" name="total_amount_of_money" id="total_amount_of_money" placeholder="">
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="click_spouse" class="label_bottom control-label">Spouse<span class="red">*</span></label>
          				  <div class="label_bottom">
          					<input type="radio" name="wife" name="click_spouse" checked class="radio_button_class" id="click_spouse" value="1">Yes<br/>
          					<input type="radio" name="wife" name="click_spouse" class="radio_button_class" id="click_spouse" value="2">No
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="" class="label_bottom control-label">Child (please mention the number of child)<span class="red">*</span></label>
          				   <div class="label_bottom">
          					<select class="form-control" name="no_of_child">
          					  <option>Choose</option>
          					  <option value="0">0</option>
          					  <option value="1">1</option>
          					  <option value="2">2</option>
          					  <option value="3">3</option>
          					</select>
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="click_driver" class="label_bottom control-label">Driver (will be accompanied or not)<span class="red">*</span></label>
          				  <div class="label_bottom">
          					<input type="radio" name="driving" name="click_driver" checked class="radio_button_class" id="click_driver" value="1">Yes<br/>
          					<input type="radio" name="driving" name="click_driver" class="radio_button_class" id="click_driver" value="2">No
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="total_number_of_participant" class="label_bottom control-label">Total Number of Participants (including You)<span class="red">*</span></label>
          				  <div class="">
          					<input type="text" class="form-control" name="total_number_of_participant" id="total_number_of_participant" placeholder="">
          				  </div>				  
          				</div>
                </div>
              </div>
          <div id="step-2">
            <div id="form-step-1" role="form" data-toggle="validator">
              <div class="form-group inpur_tag_margin_bottom form_margin_top">
                <label for="applicant_name" class="col-md-4 control-label">শিক্ষার্থীর নাম ( বাংলায় )<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="applicant_name" id="applicant_name" placeholder="" required>
                  </div>
              </div>
              <div class="form-group inpur_tag_margin_bottom">
                <label for="applicant_name_eng" class="col-md-4 control-label">( ইংরেজি )</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="applicant_name_eng" id="applicant_name_eng" placeholder="" required>
                  </div>
              </div>
              <div class="form-group inpur_tag_margin_bottom">
                <label for="father_name" class="col-md-4 control-label">পিতার নাম</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="father_name" id="father_name" placeholder="" required>
                  </div>
              </div>
              <div class="form-group inpur_tag_margin_bottom">
                <label for="mother_name" class="col-md-4 control-label">মাতার নাম</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="h_or_w_name" class="col-md-4 control-label">স্বামী / স্ত্রীর নাম</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="h_or_w_name" id="h/h_or_w_name" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="no_of_kids" class="col-md-4 control-label">সন্তানের সংখ্যা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="no_of_kids" id="no_of_kids" placeholder="" required>
                  </div>
              </div>
              
              <div class="form-group inpur_tag_margin_bottom">
                <label for="profession" class="col-md-4 control-label">বর্তমান পেশা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="profession" id="profession" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="admission_year" class="col-md-4 control-label">ভর্তির সন<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="admission_year" id="admission_year" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="class_name" class="col-md-4 control-label">শ্রেণি<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="class_name" id="class_name" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="year_of_ssc" class="col-md-4 control-label">এস এস সি পাশের সন (  প্রযোজ্য ক্ষেত্রে )<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="year_of_ssc" id="year_of_ssc" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="parmanent_address" class="col-md-4 control-label">স্থায়ী ঠিকানা ( গ্রাম  )</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="parmanent_address" id="parmanent_address" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="post_office" class="col-md-4 control-label">ডাক</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="post_office" id="post_office" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="thana" class="col-md-4 control-label">উপজেলা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="thana" id="thana" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="district" class="col-md-4 control-label">জেলা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="district" id="district" placeholder="" required>
                  </div>
              </div>
			  
			        <div class="form-group inpur_tag_margin_bottom">
                <label for="present_address" class="col-md-4 control-label">বর্তমান যোগাযোগ ঠিকানা<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="present_address" id="present_address" placeholder="" required>
                  </div>
              </div>
			        <div class="form-group inpur_tag_margin_bottom">
                <label for="address" class="col-md-4 control-label"></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="address1" id="address" placeholder="" required>
                  </div>
              </div>
			       <div class="form-group inpur_tag_margin_bottom">
                <label for="address" class="col-md-4 control-label"></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="address2" id="address" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="date_of_birth" class="col-md-4 control-label">জন্ম তারিখ</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="blood_group" class="col-md-4 control-label">রক্তের গ্রুপ যদি থাকে</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="blood_group" id="blood_group" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="mobile_no" class="col-md-4 control-label">মোবাইল নম্বর <span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="mobile_no" id="mobile_no" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="email_no" class="col-md-4 control-label">ই-মেইল<span class="red">*</span> </label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="email_no" id="email_no" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="profile_picture" class="col-md-4 control-label">তোমার ছবি<span class="red">*</span> </label>
                  <div class="col-md-8">
                    <input type="file" name="feature_image" class="form-control" id="profile_picture" placeholder="" required>
                  </div>
              </div>
			      
			       <div class="form-group inpur_tag_margin_bottom">
                <label for="" class="col-md-4 control-label">রেজিষ্ট্রেশন ফি (  শিক্ষার্থী )</label>
                  <div class="col-md-8">
                    <strong>২00/- দুইশত টাকা মাত্র।, <p class="bishes_drostobo">(  বি:দ্র: পরিবারের অন্যান্য সদস্যদের অংশগ্রহনের ক্ষেতে জন প্রতি ফি ১০০০/- )  </p></strong>
                  </div>
              </div>
			        <div class="form-group inpur_tag_margin_bottom">
                <label for="total_amount" class="col-md-4 control-label">মোট টাকা</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" name="total_amount" id="total_amount" placeholder="" required>
                  </div>
              </div>
            </div>
             <div class="form-group police_report_div inpur_tag_margin_bottom">
              
                <div class="">
                  <button type="submit" name="registration" class="">Submit</button>
                </div>
              
              </div>
            
          </div>
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
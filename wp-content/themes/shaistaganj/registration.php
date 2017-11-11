<?php 
include 'inc/header.php';
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
                
			  <div class="dropdown dowload_dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">রেজিষ্ট্রেশন ফরম ডাউনলোড করুন
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
				  <li><a href="document/registration.pdf" target="_blank">ডাউনলোড PDF ফাইল</a></li>
				  <li><a href="#">ডাউনলোড DOC ফাইল</a></li>
				  <li><a href="document/Registration_Form_Final.jpg" target="_blank">ডাউনলোড JPG ফাইল</a></li>
				</ul>
			  </div>
                 
               
              </div>
              <div class="scan_form">
                <a href="scan_copy.php">
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
           <form class="form-horizontal" action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
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
          					<input type="radio" name="money" checked class="radio_button_class" id="" value="1">bKash<br/>
          					<input type="radio" name="money" class="radio_button_class" id="payment_method" value="2">Rocket<br>
                    <input type="radio" name="money" class="radio_button_class" id="payment_method" value="3">Online / Bank
          				  </div>				  
          				</div>
                  <div class="mobile_information">
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="" class="label_bottom control-label">bKash Number : +8801552322282 / Rocket Number : +8801770515151</label>
                                
                    </div>
            				<div class="form-group registration_form_payment registration_payment_method">
            				  <label for="bkah_or_rocket" class="label_bottom control-label">In which bKash/Rocket number you have sent your Registration Fee (include Transaction ID within brackets)<span class="red">*</span></label>
            				  <div class="">
            					<input type="text" class="form-control" id="bkah_or_rocket" placeholder="">
            				  </div>				  
            				</div>
                  </div>
                  <div class="bank_information" style="display: none;">
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="bkah_or_rocket" class="label_bottom control-label">Bank Name<span class="red">*</span></label>
                      <div class="">
                      <input type="text" class="form-control" id="bkah_or_rocket" placeholder="">
                      </div>          
                    </div>
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="bkah_or_rocket" class="label_bottom control-label">Branch Name<span class="red">*</span></label>
                      <div class="">
                      <input type="text" class="form-control" id="bkah_or_rocket" placeholder="">
                      </div>          
                    </div>
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="bkah_or_rocket" class="label_bottom control-label">Account Name<span class="red">*</span></label>
                      <div class="">
                      <input type="text" class="form-control" id="bkah_or_rocket" placeholder="">
                      </div>          
                    </div>
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="bkah_or_rocket" class="label_bottom control-label">Account Number<span class="red">*</span></label>
                      <div class="">
                      <input type="text" class="form-control" id="bkah_or_rocket" placeholder="">
                      </div>          
                    </div>
                    <div class="form-group registration_form_payment registration_payment_method">
                      <label for="bkah_or_rocket" class="label_bottom control-label">Submission Date<span class="red">*</span></label>
                      <div class="">
                      <input type="text" class="form-control" id="bkah_or_rocket" placeholder="">
                      </div>          
                    </div>
                  </div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="total_amount_of_money" class="label_bottom control-label">Total Amount of Taka (numeric)<span class="red">*</span></label>
          				  <div class="">
          					<input type="text" class="form-control" id="total_amount_of_money" placeholder="">
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="" class="label_bottom control-label">Spouse<span class="red">*</span></label>
          				  <div class="label_bottom">
          					<input type="radio" name="wife" checked class="radio_button_class" id="" value="1">Yes<br/>
          					<input type="radio" name="wife" class="radio_button_class" id="payment_method" value="2">No
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="" class="label_bottom control-label">Child (please mention the number of child)<span class="red">*</span></label>
          				   <div class="label_bottom">
          					<select class="form-control">
          					  <option>Choose</option>
          					  <option value="0">0</option>
          					  <option value="1">1</option>
          					  <option value="2">2</option>
          					  <option value="3">3</option>
          					</select>
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="" class="label_bottom control-label">Driver (will be accompanied or not)<span class="red">*</span></label>
          				  <div class="label_bottom">
          					<input type="radio" name="driving" checked class="radio_button_class" id="" value="1">Yes<br/>
          					<input type="radio" name="driving" class="radio_button_class" id="payment_method" value="2">No
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="total_number" class="label_bottom control-label">Total Number of Participants (including You)<span class="red">*</span></label>
          				  <div class="">
          					<input type="text" class="form-control" id="total_number" placeholder="">
          				  </div>				  
          				</div>
                </div>
              </div>
          <div id="step-2">
            <div id="form-step-1" role="form" data-toggle="validator">
              <div class="form-group inpur_tag_margin_bottom form_margin_top">
                <label for="applicant_name" class="col-md-4 control-label">শিক্ষার্থীর নাম ( বাংলায় )<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="applicant_name" placeholder="" required>
                  </div>
              </div>
              <div class="form-group inpur_tag_margin_bottom">
                <label for="applicant_name_eng" class="col-md-4 control-label">( ইংরেজি )</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="applicant_name_eng" placeholder="" required>
                  </div>
              </div>
              <div class="form-group inpur_tag_margin_bottom">
                <label for="f_name" class="col-md-4 control-label">পিতার নাম</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="f_name" placeholder="" required>
                  </div>
              </div>
              <div class="form-group inpur_tag_margin_bottom">
                <label for="m_name" class="col-md-4 control-label">মাতার নাম</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="m_name" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="h/w_name" class="col-md-4 control-label">স্বামী / স্ত্রীর নাম</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="h/w_name" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="no_of_kids" class="col-md-4 control-label">সন্তানের সংখ্যা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="no_of_kids" placeholder="" required>
                  </div>
              </div>
              
              <div class="form-group inpur_tag_margin_bottom">
                <label for="profession" class="col-md-4 control-label">বর্তমান পেশা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="profession" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="admission_year" class="col-md-4 control-label">ভর্তির সন<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="admission_year" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="class" class="col-md-4 control-label">শ্রেণি<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="class" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="year_of_ssc" class="col-md-4 control-label">এস এস সি পাশের সন (  প্রযোজ্য ক্ষেত্রে )<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="year_of_ssc" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="parmanent_address" class="col-md-4 control-label">স্থায়ী ঠিকানা ( গ্রাম  )</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="parmanent_address" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="post_office" class="col-md-4 control-label">ডাক</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="post_office" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="thana" class="col-md-4 control-label">উপজেলা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="thana" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="district" class="col-md-4 control-label">জেলা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="district" placeholder="" required>
                  </div>
              </div>
			  
			        <div class="form-group inpur_tag_margin_bottom">
                <label for="present_address" class="col-md-4 control-label">বর্তমান যোগাযোগ ঠিকানা<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="present_address" placeholder="" required>
                  </div>
              </div>
			        <div class="form-group inpur_tag_margin_bottom">
                <label for="address" class="col-md-4 control-label"></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="address" placeholder="" required>
                  </div>
              </div>
			       <div class="form-group inpur_tag_margin_bottom">
                <label for="address" class="col-md-4 control-label"></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="address" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="date_of_birth" class="col-md-4 control-label">জন্ম তারিখ</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="date_of_birth" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="blood_group" class="col-md-4 control-label">রক্তের গ্রুপ যদি থাকে</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="blood_group" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="mobile_no" class="col-md-4 control-label">মোবাইল নম্বর <span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="mobile_no" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="email_no" class="col-md-4 control-label">ই-মেইল<span class="red">*</span> </label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="email_no" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="profile_picture" class="col-md-4 control-label">তোমার ছবি<span class="red">*</span> </label>
                  <div class="col-md-8">
                    <input type="file" class="form-control" id="profile_picture" placeholder="" required>
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
                    <input type="text" class="form-control" id="total_amount" placeholder="" required>
                  </div>
              </div>
            </div>
             <div class="form-group police_report_div inpur_tag_margin_bottom">
              
                <div class="">
                  <button type="submit" class="">Submit</button>
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
include 'inc/footer.php';
 ?>
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
           <div class="download_form">
              <a href="document/registration.pdf" target="_blank">
               <button class="btn-sm">ডাউনলোড রেজিষ্ট্রেশন ফরম</button>
              </a>
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
          				  <label for="inputEmail3" class="label_bottom control-label">Registration Fee payment method <span class="red">*</span></label>
          				  <div class="label_bottom">
          					<input type="radio" name="money" checked class="radio_button_class" id="" value="1">bKash<br/>
          					<input type="radio" name="money" class="radio_button_class" id="payment_method" value="2">Rocket
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="inputEmail3" class="label_bottom control-label">In which bKash/Rocket number you have sent your Registration Fee (include Transaction ID within brackets)<span class="red">*</span></label>
          				  <div class="">
          					<input type="text" class="form-control" id="inputEmail3" placeholder="">
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="inputEmail3" class="label_bottom control-label">Total Amount of Taka (numeric)<span class="red">*</span></label>
          				  <div class="">
          					<input type="text" class="form-control" id="inputEmail3" placeholder="">
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="inputEmail3" class="label_bottom control-label">Spouse<span class="red">*</span></label>
          				  <div class="label_bottom">
          					<input type="radio" name="wife" checked class="radio_button_class" id="" value="1">Yes<br/>
          					<input type="radio" name="wife" class="radio_button_class" id="payment_method" value="2">No
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="inputEmail3" class="label_bottom control-label">Child (please mention the number of child)<span class="red">*</span></label>
          				   <div class="label_bottom">
          					<select class="form-control">
          					  <option>Choose</option>
          					  <option>0</option>
          					  <option>1</option>
          					  <option>2</option>
          					  <option>3</option>
          					</select>
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="inputEmail3" class="label_bottom control-label">Driver (will be accompanied or not)<span class="red">*</span></label>
          				  <div class="label_bottom">
          					<input type="radio" name="driving" checked class="radio_button_class" id="" value="1">Yes<br/>
          					<input type="radio" name="driving" class="radio_button_class" id="payment_method" value="2">No
          				  </div>				  
          				</div>
          				<div class="form-group registration_form_payment registration_payment_method">
          				  <label for="inputEmail3" class="label_bottom control-label">Total Number of Participants (including You)<span class="red">*</span></label>
          				  <div class="">
          					<input type="text" class="form-control" id="inputEmail3" placeholder="">
          				  </div>				  
          				</div>
                </div>
              </div>
          <div id="step-2">
            <div id="form-step-1" role="form" data-toggle="validator">
              <div class="form-group inpur_tag_margin_bottom form_margin_top">
                <label for="inputEmail3" class="col-md-4 control-label">শিক্ষার্থীর নাম ( বাংলায় )<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
              <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">( ইংরেজি )</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
              <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">পিতার নাম</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
              <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">মাতার নাম</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">স্বামী / স্ত্রীর নাম</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">সন্তানের সংখ্যা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
              
              <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">বর্তমান পেশা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">ভর্তির সন<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">শ্রেণি<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">এস এস সি পাশের সন (  প্রযোজ্য ক্ষেত্রে )<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">স্থায়ী ঠিকানা ( গ্রাম  )</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">ডাক</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">উপজেলা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">জেলা</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  
			        <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">বর্তমান যোগাযোগ ঠিকানা<span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			        <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label"></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			       <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label"></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">জন্ম তারিখ</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">রক্তের গ্রুপ যদি থাকে</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">মোবাইল নম্বর <span class="red">*</span></label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">ই-মেইল<span class="red">*</span> </label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			  <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">তোমার ছবি<span class="red">*</span> </label>
                  <div class="col-md-8">
                    <input type="file" class="form-control" id="inputEmail3" placeholder="" required>
                  </div>
              </div>
			      
			       <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">রেজিষ্ট্রেশন ফি (  শিক্ষার্থী )</label>
                  <div class="col-md-8">
                    <strong>২00/- দুইশত টাকা মাত্র।, <p class="bishes_drostobo">(  বি:দ্র: পরিবারের অন্যান্য সদস্যদের অংশগ্রহনের ক্ষেতে জন প্রতি ফি ১০০০/- )  </p></strong>
                  </div>
              </div>
			        <div class="form-group inpur_tag_margin_bottom">
                <label for="inputEmail3" class="col-md-4 control-label">মোট টাকা</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
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
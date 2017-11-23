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
	                    <div class="col-md-12">
	                        <div class="registration_single_information">
	                        	<div class="registration_all_data">
	                        		<table class="registraion_table">
	                        			<div class="registration_information_image">
	                        				<?php the_post_thumbnail(); ?>
	                        			</div>
	                        			<div class="print_button">
	                        				<a href="javascript::void();" class="btn btn-info" onclick="window.print();">Print</a>
	                        			</div>
	                        			<tr class="registration_odd">
	                        				<td>Applicant Name (Bangla):</td>
	                        				<td><?php the_title();
	                        				//echo get_post_meta(get_the_ID(),'applicant_name',true) 
	                        				?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Applicant Name (English)</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'applicant_name_eng',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Father Name</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'father_name',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Mother Name</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'mother_name',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Hasband/Wife Name</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'hasband_or_wife_name',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Number of Kids</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'no_of_kids',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Present Profession</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'profession',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Admission Year</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'admission_year',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Class</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'class_name',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>SSC Passing Year</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'year_of_ssc',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Permanent Address (Village)</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'parmanent_address',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Post Office</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'post_office',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Thana</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'thana',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>District</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'district',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Present Address</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'present_address',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Address1</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'address1',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Address2</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'address2',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Date of Birth</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'date_of_birth',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Blood Group</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'blood_group',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Mobile No</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'mobile_no',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>E-mail No</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'email_no',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Total Taka</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'total_amount',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>bKash or Rocket No</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'bkash_or_rocket',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Please mention your name as Bkash reference</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'bkash_or_rocket',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Transection Id</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'transection_id',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Total Amount of taka</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'total_amount_of_money',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Bank Name</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'bank_name',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Account Name</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'account_name',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Branch Name</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'branch_name',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>Submission Date </td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'submission_date',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Account Number</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'account_number',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_even">
	                        				<td>No of Child</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'no_of_child',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Spouse</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'click_spouse',true) ?></td>
	                        			</tr>
	                        			
	                        			<tr class="registration_even">
	                        				<td>Driver</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'click_driver',true) ?></td>
	                        			</tr>
	                        			<tr class="registration_odd">
	                        				<td>Total Number of Participant</td>
	                        				<td><?php echo get_post_meta(get_the_ID(),'total_number_of_participant',true) ?></td>
	                        			</tr>
	                        		</table>
	                        		
	                        	</div>
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
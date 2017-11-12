
        <footer class="footer_bottom_section">
            <div class="container">
                <?php dynamic_sidebar('footer_w_id'); ?>
               
                <div class="copyright">
                    <span class="all_reserved">শায়েস্তাগঞ্জ উচ্চ বিদ্যালয় © 2017 সর্বস্বত্ব সংরক্ষিত</span>
					
                </div>
            </div>
        </footer>
        <div class="sideber_contact_form quote_form">
          <div class="sideber_contact_form_information">
            <div class="sideber_contact_form_title common_title_color">
                <h3>Quick Enquiry Form</h3>
            </div>
            <div class="sideber_contact_form_body">
              <form>
                <p class="text_center">Free Enquiry, no obligation</p>
                <h3 class="text_center">+8801XXXXXXXXX</h3>
                <input type="text" class="form-control" name="" placeholder="Name">
                <input type="email" class="form-control" name="" placeholder="E-mail">
                <input type="text" class="form-control" name="" placeholder="Phone">
                <textarea class="form-control" rows="4" placeholder="Details"></textarea>
                <div class="sideber_submit_button">
                    <button type="submit" class="">Submit</button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
        <div class="sideber_contact_form_icon quote_form_button">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </div>  
        <div class="scrolltoup" style="">
          <i class="fa fa-level-up" aria-hidden="true"></i>
        </div>
		
		

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/scrolling-nav.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/validate.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/validator.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.smartWizard.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <? php wp_footer(); ?>
    </body>
</html>

<?php
function theme_settings_page(){
	?>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
	    <form method="post" action="options.php" enctype="multipart/form-data">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php	
}

function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");


// Display
function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_google_plus_element()
{
	?>
    	<input type="text" name="google_plus_url" id="google_plus_url" value="<?php echo get_option('google_plus_url'); ?>" />
    <?php
}

function display_linkedin_element()
{
	?>
    	<input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" />
    <?php
}

function display_dribbble_element()
{
	?>
    	<input type="text" name="dribbble_url" id="dribbble_url" value="<?php echo get_option('dribbble_url'); ?>" />
    <?php
}

function display_phone_element()
{
	?>
    	<input type="text" name="theme_phone" id="theme_phone" value="<?php echo get_option('theme_phone'); ?>" />
    <?php
}

function display_email_element()
{
	?>
    	<input type="text" name="theme_email" id="theme_email" value="<?php echo get_option('theme_email'); ?>" />
    <?php
}



function logo_display()
{
	?>
        <input type="file" name="logo" /> 
        <?php echo get_option('logo') == "" ? "" : "<img style='position:absolute; width:60px;' src='".get_option('logo')."' alt='Logo' />"; ?>
   <?php
}

function handle_logo_upload()
{
	if(!empty($_FILES["logo"]["tmp_name"]))
	{
		$urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}
	  
	return get_option('logo');
}

function display_copyright_element()
{
	?>
    	<input style="width:100%;" type="text" name="copyright" id="copyright" value="<?php echo get_option('copyright'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
	add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
	add_settings_field("google_plus_url", "Google Plus Profile Url", "display_google_plus_element", "theme-options", "section");
	add_settings_field("linkedin_url", "Linkedin Profile Url", "display_linkedin_element", "theme-options", "section");
	add_settings_field("dribbble_url", "Dribbble Profile Url", "display_dribbble_element", "theme-options", "section");
    add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");  
	add_settings_field("theme_email", "Email", "display_email_element", "theme-options", "section");
	add_settings_field("theme_phone", "Phone", "display_phone_element", "theme-options", "section");
	add_settings_field("copyright", "Copyright Text", "display_copyright_element", "theme-options", "section");

    register_setting("section", "facebook_url");
    register_setting("section", "twitter_url");
    register_setting("section", "google_plus_url");
    register_setting("section", "linkedin_url");
    register_setting("section", "dribbble_url");
    register_setting("section", "logo", "handle_logo_upload");
    register_setting("section", "theme_email");
    register_setting("section", "theme_phone");
    register_setting("section", "copyright");
}

add_action("admin_init", "display_theme_panel_fields");

?>
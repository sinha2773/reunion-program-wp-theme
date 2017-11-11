<?php 
		function gp_theme_files(){
		
		wp_register_style('bootsrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'3.1.1','all');


		wp_enqueue_style('bootsrap');


	}

add_action('wp_enqueue_scripts','gp_theme_files');


 ?>
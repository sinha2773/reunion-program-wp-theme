<?php 
	// include_once('inc/custom-files.php');

	include_once('inc/custom-menus.php');

	// include_once('inc/default-menu.php');

	include_once('inc/custom-post.php');
	
	include_once('inc/all-image-size.php');

	include_once('inc/theme-wedgets.php');

	include_once('inc/theme-wedgets.php');

	include_once('inc/wp_bootstrap_navwalker.php');

	include_once('inc/theme_options.php');

	add_theme_support( 'title-tag' );

	function get_trim_content($num_words = 30,$is_text_only=false)
    {
    	if($is_text_only)
        return wp_trim_words( get_the_content(), $num_words, '' );
    	else
        return wp_trim_words( get_the_content(), $num_words, ' <a href="'.get_permalink().'">বিস্তারিত</a>' );
    }
    add_filter( 'postmeta_form_limit', 'meta_limit_increase' );
		function meta_limit_increase( $limit ) {
		    return 50;
	}
	

?>
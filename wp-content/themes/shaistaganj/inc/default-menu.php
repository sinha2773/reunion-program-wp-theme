<?php
function medicle_theme_default_menu(){
		echo '<ul class="nav navbar-nav">';
		if('page' !=get_option('show_on_front')){
			echo '<li <a href=""'.home_url().'/"></a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
		
		
	}

	?>
<?php
	function medicle_theme_mane(){
		register_nav_menus(array(
				'main_manu' => 'Main Menu',
				'main_manu_bottom' => 'Main Menu Bottom',
				'footer_manu' => "Footer Manu"
			)

			);
	}
	add_action('init','medicle_theme_mane');

?>
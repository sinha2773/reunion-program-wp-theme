<?php 
	function create_custom_wedgets(){
		register_sidebar(array(
				'name'          => 'Footer widget',
				'description'   => 'Use this widgets  for your site footer content',
				'id'            => 'footer_w_id',
				
				'before_widget' => '<div class="footer_text">',
				'after_widget'  => '</div>',
				'before_title'  => '<p>',
				'after_title'   => '</p>',

			));
		register_sidebar(array(
				'name'          => 'Emmergency Communicate',
				'description'   => 'Use this widgets  for your site footer content',
				'id'            => 'emergency_communicate',
				
				'before_widget' => '<div class="communication_bos margin_bottom">',
				'after_widget'  => '</div>',
				'before_title'  => '<p>',
				'after_title'   => '</p>',

			));
	}
	add_action('widgets_init','create_custom_wedgets');

 ?>
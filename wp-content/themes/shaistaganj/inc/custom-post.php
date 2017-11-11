<?php 
	function create_custom_post() {
		register_post_type( 'banner_slider',array(
	  		'label'   => 'Banner Slider',
	  		'labels'  => array(
	  				'name' => 'Banner Slider',
	  				'singular_name' => 'banner',
	  				'add_new' => 'New slider'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );
		register_post_type( 'banner_video',array(
	  		'label'   => 'Banner Videos',
	  		'labels'  => array(
	  				'name' => 'Banner Videos',
	  				'singular_name' => 'video',
	  				'add_new' => 'New Video'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );
		register_post_type( 'our_program',array(
	  		'label'   => 'Our Program',
	  		'labels'  => array(
	  				'name' => 'Our Program',
	  				'singular_name' => 'program',
	  				'add_new' => 'New program'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );
		register_post_type( 'our_committee',array(
	  		'label'   => 'Our Committee',
	  		'labels'  => array(
	  				'name' => 'Our Committee',
	  				'singular_name' => 'committee',
	  				'add_new' => 'New Committee'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );
		register_post_type( 'our_member',array(
	  		'label'   => 'Our Member',
	  		'labels'  => array(
	  				'name' => 'Our Member',
	  				'singular_name' => 'member',
	  				'add_new' => 'New Member'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );
		register_post_type( 'our_student',array(
	  		'label'   => 'Our Student',
	  		'labels'  => array(
	  				'name' => 'Our Student',
	  				'singular_name' => 'student',
	  				'add_new' => 'New Student'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );
		register_post_type( 'our_teacher',array(
	  		'label'   => 'Our Teacher',
	  		'labels'  => array(
	  				'name' => 'Our Teacher',
	  				'singular_name' => 'teacher',
	  				'add_new' => 'New Teacher'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );
		register_post_type( 'form_send',array(
	  		'label'   => 'Scan Forms',
	  		'labels'  => array(
	  				'name' => 'Scan Forms',
	  				'singular_name' => 'scan',
	  				'add_new' => 'Scan Forms'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );

	 

	}
	add_action( 'init', 'create_custom_post' );

	function create_custom_texonomy(){
		
		register_taxonomy( 'program_type', 'our_program',

			array(
				'hierarchical' 	=> true,
				'label'        	=> 'program Texonomy',
				'query_var'    	=> true,
				'rewrite'		=>array(
						'slag'			=> 'our_program_slag',
						'with_front'	=>false
					)
			)
		);
		register_taxonomy( 'committee_type', 'our_committee',

			array(
				'hierarchical' 	=> true,
				'label'        	=> 'Committee Texonomy',
				'query_var'    	=> true,
				'rewrite'		=>array(
						'slag'			=> 'our_committee_slag',
						'with_front'	=>false
					)
			)
		);
		register_taxonomy( 'member_type', 'our_member',

			array(
				'hierarchical' 	=> true,
				'label'        	=> 'Member Texonomy',
				'query_var'    	=> true,
				'rewrite'		=>array(
						'slag'			=> 'our_member_slag',
						'with_front'	=>false
					)
			)
		);
		register_taxonomy( 'student_type', 'our_student',

			array(
				'hierarchical' 	=> true,
				'label'        	=> 'Student Texonomy',
				'query_var'    	=> true,
				'rewrite'		=>array(
						'slag'			=> 'our_student_slag',
						'with_front'	=>false
					)
			)
		);
		register_taxonomy( 'teacher_type', 'our_teacher',

			array(
				'hierarchical' 	=> true,
				'label'        	=> 'Teacher Texonomy',
				'query_var'    	=> true,
				'rewrite'		=>array(
						'slag'			=> 'our_teacher_slag',
						'with_front'	=>false
					)
			)
		);
	}

	add_action('init','create_custom_texonomy');

	function pages_custom_texonomy(){
		register_taxonomy( 'pages_texo', 'page',

				array(
					'hierarchical' 	=> true,
					'label'        	=> 'Global Pages Texonomy',
					'query_var'    	=> true,
					'rewrite'		=>array(
							'slag'			=> 'pages_texo',
							'with_front'	=>false
						)
				)
			 );
	}
	add_action('init','pages_custom_texonomy');


 ?>

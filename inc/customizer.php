<?php
/**
 * flatter Theme Customizer
 *
 * @package flatter
 */
 
function flatter_theme_customizer( $wp_customize ) {
	
	//allows donations
    class flatter_Info extends WP_Customize_Control { 
     
        public $label = '';
        public function render_content() { 
        ?>

        <?php
        }
    }	
	
	// Donations
    $wp_customize->add_section(
        'flatter_theme_info',
        array(
            'title' => __('Like Flatter? Help Us Out.', 'flatter'),
            'priority' => 5,
            'description' => __('We do all we can do to make all our themes free for you. While we enjoy it, and it makes us happy to help out, a little appreciation can help us to keep theming.</strong><br/><br/> Please help support our mission and continued development with a donation of $5, $10, $20, or if you are feeling really kind $100..<br/><br/> <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7LMGYAZW9C5GE" target="_blank" rel="nofollow"><img class="" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" alt="Make a donation to ModernThemes" /></a>'), 
        )
    );  
	 
    //Donations section
    $wp_customize->add_setting('flatter_help', array(   
			'sanitize_callback' => 'flatter_no_sanitize', 
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_control( new flatter_Info( $wp_customize, 'flatter_help', array(
        'section' => 'flatter_theme_info', 
        'settings' => 'flatter_help', 
        'priority' => 10
        ) )
    ); 
	
	// Fonts  
    $wp_customize->add_section(
        'flatter_typography',
        array(
            'title' => __('Google Fonts', 'flatter' ),  
            'priority' => 39,
        )
    );
	
    $font_choices = 
        array(
			'Raleway:400,700' => 'Raleway',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
            'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',     
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Oswald:400,700' => 'Oswald',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt',
    );
    
    $wp_customize->add_setting(
        'headings_fonts',
        array(
            'sanitize_callback' => 'flatter_sanitize_fonts',
        )
    );
    
    $wp_customize->add_control(
        'headings_fonts',
        array(
            'type' => 'select',
            'description' => __('Select your desired font for the headings. Raleway is the default Heading font.', 'flatter'),
            'section' => 'flatter_typography',
            'choices' => $font_choices
        )
    );
    
    $wp_customize->add_setting(
        'body_fonts',
        array(
            'sanitize_callback' => 'flatter_sanitize_fonts',
        )
    );
    
    $wp_customize->add_control(
        'body_fonts',
        array(
            'type' => 'select',
            'description' => __( 'Select your desired font for the body. Raleway is the default Body font.', 'flatter' ), 
            'section' => 'flatter_typography',  
            'choices' => $font_choices 
        ) 
    );

	// Colors
    $wp_customize->add_setting( 'flatter_link_color', array(
        'default'     => '',   
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'flatter_link_color', array(
        'label'	   => 'Link Color', 
        'section'  => 'colors',
        'settings' => 'flatter_link_color',
		'priority' => 3 
    ) ) );
	
	$wp_customize->add_setting( 'flatter_hover_color', array(
        'default'     => '',   
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'flatter_hover_color', array(
        'label'	   => 'Hover Color', 
        'section'  => 'colors',
        'settings' => 'flatter_hover_color',
		'priority' => 4  
    ) ) );
	
	$wp_customize->add_setting( 'flatter_custom_color', array( 
        'default'     => '', 
		'sanitize_callback' => 'sanitize_hex_color',
    ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'flatter_custom_color', array(
        'label'	   => 'Theme Color',
        'section'  => 'colors',
        'settings' => 'flatter_custom_color', 
		'priority' => 1
    ) ) );
	
	$wp_customize->add_setting( 'flatter_custom_color_hover', array( 
        'default'     => '', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'flatter_custom_color_hover', array(
        'label'	   => 'Theme Hover Color',
        'section'  => 'colors',
        'settings' => 'flatter_custom_color_hover', 
		'priority' => 2
    ) ) ); 

    // Logo upload
    $wp_customize->add_section( 'flatter_logo_section' , array(  
	    'title'       => __( 'Logo and Icons', 'flatter' ),
	    'priority'    => 25,
	    'description' => 'Upload a logo to replace the default site name and description in the header. Also, upload your site favicon and Apple Icons.',
	) );

	$wp_customize->add_setting( 'flatter_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'flatter_logo', array(
		'label'    => __( 'Logo', 'flatter' ),
		'section'  => 'flatter_logo_section', 
		'settings' => 'flatter_logo',
		'priority' => 1,
	) ) );
	
	// Logo Width
	$wp_customize->add_setting( 'logo_size', 
	array(
		'default' => '145',
		'sanitize_callback' => 'flatter_sanitize_text',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'logo_size', array( 
		'label'    => __( 'Change the width of the Logo in PX.', 'flatter' ),
		'description'    => __( 'Only enter numeric value', 'flatter' ),
		'section'  => 'flatter_logo_section',
		'settings' => 'logo_size',  
		'priority'   => 2 
	) ) );
	
	//Favicon Upload
	$wp_customize->add_setting(
		'site_favicon',
		array(
			'default' => (get_stylesheet_directory_uri() . '/images/favicon.png'), 
			'sanitize_callback' => 'esc_url_raw',
		)
	);
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_favicon',
            array(
               'label'          => __( 'Upload your favicon (16x16 pixels)', 'flatter' ),
			   'type' 			=> 'image',
               'section'        => 'flatter_logo_section',
               'settings'       => 'site_favicon',
               'priority' => 2,
            )
        )
    );
    //Apple touch icon 144
    $wp_customize->add_setting(
        'apple_touch_144',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_144',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (144x144 pixels)', 'flatter' ),
               'type'           => 'image',
               'section'        => 'flatter_logo_section',
               'settings'       => 'apple_touch_144',
               'priority'       => 11,
            )
        )
    );
    //Apple touch icon 114
    $wp_customize->add_setting(
        'apple_touch_114',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw', 
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_114',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (114x114 pixels)', 'flatter' ),
               'type'           => 'image',
               'section'        => 'flatter_logo_section',
               'settings'       => 'apple_touch_114',
               'priority'       => 12,
            )
        )
    );
    //Apple touch icon 72
    $wp_customize->add_setting(
        'apple_touch_72',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_72',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (72x72 pixels)', 'flatter' ),
               'type'           => 'image',
               'section'        => 'flatter_logo_section',
               'settings'       => 'apple_touch_72',
               'priority'       => 13,
            )
        )
    );
    //Apple touch icon 57
    $wp_customize->add_setting(
        'apple_touch_57',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_57',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (57x57 pixels)', 'flatter' ),
               'type'           => 'image',
               'section'        => 'flatter_logo_section', 
               'settings'       => 'apple_touch_57',
               'priority'       => 14,
            )
        )
    );
	
	// Home Page
	$wp_customize->add_section( 'flatter_home_section' , array(  
	    'title'       => __( 'Home Page', 'flatter' ),
	    'priority'    => 30,
	    'description' => __( 'Icons are a beautiful expression. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right"', 'flatter' ) 
	) );
	
	$wp_customize->add_setting('active_services',
	array(
	        'sanitize_callback' => 'flatter_sanitize_checkbox',
	    ) 
	);     
	
	$wp_customize->add_control( 
    'active_services', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Services Columns',  
        'section' => 'flatter_home_section', 
		'priority'   => 1
    ));
	
	$wp_customize->add_setting('active_cta',
	array(
	        'sanitize_callback' => 'flatter_sanitize_checkbox',
	    ) 
	); 
	
	$wp_customize->add_control( 
    'active_cta', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Call-to-Action Section',  
        'section' => 'flatter_home_section', 
		'priority'   => 2
    ));
	
	// Icon 1
	$wp_customize->add_setting( 'home_icon_1' , 
	array( 
		'default' => 'fa-gears',
		'sanitize_callback' => 'flatter_sanitize_text', 
	)); 
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_icon_1', array( 
    'label' => __( 'First Icon', 'flatter' ),   
    'section' => 'flatter_home_section',
    'settings' => 'home_icon_1',
	'priority'   => 3
	) ) );
	
	// Title 1
	$wp_customize->add_setting( 'icon_title_1' , 
	array( 
		'default' => 'Multi-purpose theme',
		'sanitize_callback' => 'flatter_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_title_1', array( 
    'label' => __( 'First Title', 'personal' ),  
    'section' => 'flatter_home_section',
    'settings' => 'icon_title_1',
	'priority'   => 4
	) ) );
	
	// Descripton 1
	$wp_customize->add_setting( 'icon_desc_1' , 
	array( 
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	  
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_desc_1', array( 
    'label' => __( 'First Column Description', 'personal' ),  
    'section' => 'flatter_home_section',
    'settings' => 'icon_desc_1', 
	'priority'   => 5
	) ) ); 
	
	// Icon 2
	$wp_customize->add_setting( 'home_icon_2', 
	array( 
		'default' => 'fa-edit',
		'sanitize_callback' => 'flatter_sanitize_text', 
	));  
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_icon_2', array( 
    'label' => __( 'Second Icon', 'flatter' ),  
    'section' => 'flatter_home_section',
    'settings' => 'home_icon_2',
	'priority'   => 6
	) ) );
	
	// Title 2
	$wp_customize->add_setting( 'icon_title_2', 
	array( 
		'default' => 'Easy to Customize',
		'sanitize_callback' => 'flatter_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_title_2', array( 
    'label' => __( 'Second Title', 'personal' ),  
    'section' => 'flatter_home_section',
    'settings' => 'icon_title_2',
	'priority'   => 7
	) ) );
	
	// Descripton 2
	$wp_customize->add_setting( 'icon_desc_2', 
	array( 
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
		 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_desc_2', array( 
    'label' => __( 'Second Column Description', 'personal' ),  
    'section' => 'flatter_home_section',
    'settings' => 'icon_desc_2', 
	'priority'   => 8
	) ) ); 
	
	// Icon 3
	$wp_customize->add_setting( 'home_icon_3',
	array( 
		'default' => 'fa-tasks',
		'sanitize_callback' => 'flatter_sanitize_text', 
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_icon_3', array( 
    'label' => __( 'Third Icon', 'flatter' ),    
    'section' => 'flatter_home_section',
    'settings' => 'home_icon_3',
	'priority'   => 9
	) ) );
	
	// Title 3
	$wp_customize->add_setting( 'icon_title_3', 
	array( 
		'default' => 'Built for speed',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_title_3', array( 
    'label' => __( 'Third Title', 'personal' ),  
    'section' => 'flatter_home_section',
    'settings' => 'icon_title_3',
	'priority'   => 10
	) ) ); 
	
	// Descripton 3
	$wp_customize->add_setting( 'icon_desc_3', 
	array( 
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		'sanitize_callback' => 'flatter_sanitize_text',  
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_desc_3', array( 
    'label' => __( 'Third Column Description', 'personal' ),  
    'section' => 'flatter_home_section',
    'settings' => 'icon_desc_3',
	'priority'   => 11
	) ) ); 
	
	// Icon 4
	$wp_customize->add_setting( 'home_icon_4', 
	array( 
		'default' => 'fa-cloud',
		'sanitize_callback' => 'flatter_sanitize_text', 
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_icon_4', array( 
    'label' => __( 'Fourth Icon', 'flatter' ),   
    'section' => 'flatter_home_section',
    'settings' => 'home_icon_4',  
	'priority'   => 12
	) ) ); 
	
	// Title 4
	$wp_customize->add_setting( 'icon_title_4', 
	array( 
		'default' => 'Modern & Effective',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	  
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_title_4', array( 
    'label' => __( 'Fourth Title', 'personal' ),   
    'section' => 'flatter_home_section',
    'settings' => 'icon_title_4',  
	'priority'   => 13
	) ) );
	
	// Descripton 4
	$wp_customize->add_setting( 'icon_desc_4', 
	array( 
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		'sanitize_callback' => 'flatter_sanitize_text',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_desc_4', array( 
    'label' => __( 'Fourth Column Description', 'personal' ),  
    'section' => 'flatter_home_section',
    'settings' => 'icon_desc_4', 
	'priority'   => 14
	) ) );
	
	// Middle Title
	$wp_customize->add_setting( 'middle_title', 
	array( 
		'default' => 'A modern and flat theme design for all.',
		'sanitize_callback' => 'flatter_sanitize_text', 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'middle_title', array( 
    'label' => __( 'Middle Section Title. Edit the subtitle and body in the widget area.', 'personal' ),  
    'section' => 'flatter_home_section',  
    'settings' => 'middle_title', 
	'priority'   => 15  
	) ) );
	
	// Before Footer Section
	$wp_customize->add_section( 'flatter-before-footer' , array(
    	'title' => __( 'Before Footer Section', 'flatter' ),
    	'priority' => 31,  
    	'description' => __( 'Customize the area before the footer. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right"', 'flatter' )  
	) );
	
	$wp_customize->add_setting('active_before_footer',
	array(
	        'sanitize_callback' => 'flatter_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control(  
    'active_before_footer', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Before Footer Section',  
        'section' => 'flatter-before-footer', 
		'priority'   => 1
    )); 
	
	// Before Footer Background
	$wp_customize->add_setting( 'before_footer_background', array(
		'default' => (get_stylesheet_directory_uri() . '/images/contact-bg.jpg'),
		'sanitize_callback' => 'esc_url_raw',
	)); 

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'before_footer_background', array( 
		'label'    => __( 'Before Footer Background', 'flatter' ),
		'section'  => 'flatter-before-footer',  
		'settings' => 'before_footer_background', 
		'priority'   => 2  
	))); 
	
	// Icon 1
	$wp_customize->add_setting( 'bf_icon_1', 
	array( 
		'default' => 'fa-wordpress',
		'sanitize_callback' => 'flatter_sanitize_text', 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bf_icon_1', array( 
    'label' => __( 'First Icon', 'flatter' ),   
    'section' => 'flatter-before-footer',
    'settings' => 'bf_icon_1',
	'priority'   => 3
	))); 
	
	// Title 1
	$wp_customize->add_setting( 'bf_title_1', 
	array( 
		'default' => 'A modern and flat',
		'sanitize_callback' => 'flatter_sanitize_text',
	)); 
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bf_title_1', array( 
    'label' => __( 'First Title', 'personal' ),  
    'section' => 'flatter-before-footer',
    'settings' => 'bf_title_1',
	'priority'   => 4 
	)));
	
	// Descripton 1
	$wp_customize->add_setting( 'bf_desc_1', 
	array( 
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bf_desc_1', array( 
    'label' => __( 'First Column Description', 'personal' ),  
    'section' => 'flatter-before-footer',
    'settings' => 'bf_desc_1', 
	'priority'   => 5
	))); 
	
	// Icon 2
	$wp_customize->add_setting( 'bf_icon_2', 
	array( 
		'default' => 'fa-life-saver',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bf_icon_2', array( 
    'label' => __( 'Second Icon', 'flatter' ),  
    'section' => 'flatter-before-footer',
    'settings' => 'bf_icon_2',
	'priority'   => 6
	) ) );
	
	// Title 2
	$wp_customize->add_setting( 'bf_title_2', 
	array( 
		'default' => 'A modern and flat',
		'sanitize_callback' => 'flatter_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bf_title_2', array( 
    'label' => __( 'Second Title', 'personal' ),  
    'section' => 'flatter-before-footer',
    'settings' => 'bf_title_2',
	'priority'   => 7
	) ) );
	
	// Descripton 2
	$wp_customize->add_setting( 'bf_desc_2', 
	array( 
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bf_desc_2', array( 
    'label' => __( 'Second Column Description', 'personal' ),  
    'section' => 'flatter-before-footer',
    'settings' => 'bf_desc_2', 
	'priority'   => 8
	) ) ); 
	
	// Icon 3
	$wp_customize->add_setting( 'bf_icon_3', 
	array( 
		'default' => 'fa-photo',
		'sanitize_callback' => 'flatter_sanitize_text',
	));
	  
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bf_icon_3', array( 
    'label' => __( 'Third Icon', 'flatter' ),    
    'section' => 'flatter-before-footer',
    'settings' => 'bf_icon_3', 
	'priority'   => 9
	)));
	
	// Title 3
	$wp_customize->add_setting( 'bf_title_3', 
	array( 
		'default' => 'A modern and flat',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bf_title_3', array( 
    'label' => __( 'Third Title', 'personal' ),  
    'section' => 'flatter-before-footer',
    'settings' => 'bf_title_3',
	'priority'   => 10 
	) ) ); 
	
	// Descripton 3
	$wp_customize->add_setting( 'bf_desc_3', 
	array( 
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		'sanitize_callback' => 'flatter_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bf_desc_3', array( 
    'label' => __( 'Third Column Description', 'personal' ),  
    'section' => 'flatter-before-footer', 
    'settings' => 'bf_desc_3',
	'priority'   => 11 
	) ) );
	 
	// Add Footer Section
	$wp_customize->add_section( 'footer-custom' , array(
    	'title' => __( 'Footer', 'flatter' ),
    	'priority' => 32,
    	'description' => __( 'Customize your footer area', 'flatter' )
	) );
	
	// Footer Logo
	$wp_customize->add_setting( 'flatter_footer_logo', 
	array(
		'default' => (get_stylesheet_directory_uri() . '/images/footer-logo-flat.png'),    
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'flatter_footer_logo', array(
		'label'    => __( 'Footer Logo', 'flatter' ),
		'section'  => 'footer-custom', 
		'settings' => 'flatter_footer_logo', 
		'priority'   => 1
	) ) );
	
	// Footer Icon 1
	$wp_customize->add_setting( 'footer_icon_1', 
	array( 
		'default' => 'fa-mobile',
		'sanitize_callback' => 'flatter_sanitize_text',  
	)); 
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_icon_1', array( 
    'label' => __( 'First Footer Icon', 'flatter' ),   
    'section' => 'footer-custom',
    'settings' => 'footer_icon_1',
	'priority'   => 2
	) ) );
	
	// Footer Phone 
	$wp_customize->add_setting( 'flatter_footer_phone', 
	array( 
		'default' => '716-555-5555',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'flatter_footer_phone', array(
    'label' => __( 'Footer Phone Number', 'flatter' ),
    'section' => 'footer-custom',
    'settings' => 'flatter_footer_phone', 
	'priority'   => 3
	) ) );
	
	// Footer Icon 2
	$wp_customize->add_setting( 'footer_icon_2', 
	array( 
		'default' => 'fa-map-marker',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_icon_2', array( 
    'label' => __( 'Second Footer Icon', 'flatter' ),   
    'section' => 'footer-custom',
    'settings' => 'footer_icon_2',
	'priority'   => 4
	) ) );
	
	// Footer Hours
	$wp_customize->add_setting( 'flatter_footer_address', 
	array( 
		'default' => '21 Flatter Way, New York, NY',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'flatter_footer_address', array(
    'label' => __( 'Footer Address', 'flatter' ),
    'section' => 'footer-custom',
    'settings' => 'flatter_footer_address', 
	'priority'   => 5
	) ) );
	
	// Footer Icon 3
	$wp_customize->add_setting( 'footer_icon_3', 
	array( 
		'default' => 'fa-envelope-o',
		'sanitize_callback' => 'flatter_sanitize_text',  
	)); 
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_icon_3', array( 
    'label' => __( 'Third Footer Icon', 'flatter' ),   
    'section' => 'footer-custom',
    'settings' => 'footer_icon_3',
	'priority'   => 6
	) ) );
	
	// Footer Contact
	$wp_customize->add_setting( 'flatter_footer_contact', 
	array( 
		'default' => 'info@flatter.me',
		'sanitize_callback' => 'flatter_sanitize_text',  
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'flatter_footer_contact', array(
    'label' => __( 'Footer Contact Email', 'flatter' ), 
    'section' => 'footer-custom',
    'settings' => 'flatter_footer_contact',
	'priority'   => 7
	) ) );
	
	// Footer Byline Text 
	$wp_customize->add_setting( 'flatter_footerid', 
	array( 
		'sanitize_callback' => 'flatter_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'flatter_footerid', array(
    'label' => __( 'Footer Byline Text', 'flatter' ),
    'section' => 'footer-custom',
    'settings' => 'flatter_footerid',
	'priority'   => 8 
) ) );

	// Set site name and description to be previewed in real-time
	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Move sections up 
	$wp_customize->get_section('static_front_page')->priority = 10;
	$wp_customize->get_section('nav')->priority = 11;  

	// Enqueue scripts for real-time preview
	wp_enqueue_script( 'flatter_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
 

}
add_action('customize_register', 'flatter_theme_customizer');


/**
 * Sanitizes a hex color. Identical to core's sanitize_hex_color(), which is not available on the wp_head hook.
 *
 * Returns either '', a 3 or 6 digit hex color (with #), or null.
 * For sanitizing values without a #, see sanitize_hex_color_no_hash().
 *
 * @since 1.7
 */
function flatter_sanitize_hex_color( $color ) {
	if ( '#FF0000' === $color ) 
		return '';

	// 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;

	return null;
}

/**
 * Sanitizes our post content value (either excerpts or full post content).
 *
 * @since 1.7
 */
function flatter_sanitize_index_content( $content ) {
	if ( 'option2' == $content ) {
		return 'option2';
	} else {
		return 'option1';
	}
}

//Checkboxes
function flatter_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

//Integers
function flatter_sanitize_int( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

//Text
function flatter_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

//Sanitizes Fonts 
function flatter_sanitize_fonts( $input ) {   
    $valid = array(
            'Raleway:400,700' => 'Raleway',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
            'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',     
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Oswald:400,700' => 'Oswald',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt', 
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
} 

//No sanitize - empty function for options that do not require sanitization -> to bypass the Theme Check plugin
function flatter_no_sanitize( $input ) {
}

/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function flatter_add_customizer_css() {
	$color = flatter_sanitize_hex_color( get_theme_mod( 'flatter_link_color' ) );
	?>
	<!-- flatter customizer CSS -->
	<style>
		body {
			border-color: <?php echo $color; ?>;
		}
		a {
			color: <?php echo $color; ?>;
		}
		
		a:hover {
			color: <?php echo get_theme_mod( 'flatter_hover_color' ) ?>;  
		}
		
		a:focus, a:active { color: <?php echo get_theme_mod( 'flatter_custom_color' ) ?> !important; }  
		.services .fa, .cta h1   { color: <?php echo get_theme_mod( 'flatter_custom_color' ) ?>; }
		.home-contact .fa  { color: <?php echo get_theme_mod( 'flatter_custom_color' ) ?>; }
		.entry-header { background: <?php echo get_theme_mod( 'flatter_custom_color' ) ?>; }
		blockquote { border-color: <?php echo get_theme_mod( 'flatter_custom_color' ) ?>; } 
		.sidr ul li ul li a, .sidr ul li ul li span { color: <?php echo get_theme_mod( 'flatter_custom_color' ) ?>; } 
		button, input[type="button"], input[type="reset"], input[type="submit"] { background: <?php echo get_theme_mod( 'flatter_custom_color' ) ?>; border-color: <?php echo get_theme_mod( 'flatter_custom_color' ) ?>; }  
		
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo get_theme_mod( 'flatter_custom_color_hover') ?>; background: <?php echo get_theme_mod( 'flatter_custom_color_hover') ?>; } 
		 
	</style>
<?php }

add_action( 'wp_head', 'flatter_add_customizer_css' );  

<?php
	
	function themezee_sections_general() {
		$themezee_sections = array();
		
		$themezee_sections[] = array("id" => "themeZee_general_header",
					"name" => __('Header Settings', 'zeeDynamic_language'));
					
		$themezee_sections[] = array("id" => "themeZee_general_layout",
					"name" => __('Layout Settings', 'zeeDynamic_language'));
					
		$themezee_sections[] = array("id" => "themeZee_general_css_section",
					"name" => __('Custom CSS Code', 'zeeDynamic_language'));
					
		return $themezee_sections;
	}
	
	function themezee_settings_general() {

		$themezee_settings = array();
	
		### HEADER SETTINGS
		#######################################################################################
		$themezee_settings[] = array("name" => __('Logo Image', 'zeeDynamic_language'),
						"desc" => __('Paste the full Image URL of your logo or click Upload Image. Leave this field blank to display the site title instead of a logo image.', 'zeeDynamic_language'),
						"id" => "themeZee_general_logo",
						"std" => "",
						"type" => "image",
						"section" => "themeZee_general_header");

		$themezee_settings[] = array("name" => __('Show Tagline?', 'zeeDynamic_language'),
						"desc" => __('Check this if you want to show your tagline(blog description) below the logo', 'zeeDynamic_language'),
						"id" => "themeZee_general_tagline",
						"std" => "true",
						"type" => "checkbox",
						"section" => "themeZee_general_header");
						
		### LAYOUT SETTINGS
		#######################################################################################				
		$themezee_settings[] = array("name" => __('Theme Layout', 'zeeDynamic_language'),
						"desc" => "",
						"id" => "themeZee_general_theme_layout",
						"std" => 'boxed',
						"type" => "radio",
						'choices' => array(
									'boxed' => __('Boxed (default)', 'zeeDynamic_language'),
									'wide' => __('Wide', 'zeeDynamic_language')),
						"section" => "themeZee_general_layout"
						);
						
		$themezee_settings[] = array("name" => __('Sidebar Options', 'zeeDynamic_language'),
						"desc" => "",
						"id" => "themeZee_general_sidebars",
						"std" => 'right',
						"type" => "radio",
						'choices' => array(
									'left' => __('Left Sidebar', 'zeeDynamic_language'),
									'right' => __('Right Sidebar', 'zeeDynamic_language')),
						"section" => "themeZee_general_layout"
						);
						
		$themezee_settings[] = array("name" => __('Footer Content', 'zeeDynamic_language'),
						"desc" => __('Enter the content which is displayed in the footer here.', 'zeeDynamic_language'),
						"id" => "themeZee_general_footer",
						"std" => "Place your Footer Content here",
						"type" => "html",
						"section" => "themeZee_general_layout");
						
		### CUSTOM CSS
		#######################################################################################					
		$themezee_settings[] = array("name" => __('Custom CSS', 'zeeDynamic_language'),
						"desc" => __('Place your Custom CSS code here.', 'zeeDynamic_language'),
						"id" => "themeZee_general_css",
						"std" => "",
						"type" => "textarea",
						"section" => "themeZee_general_css_section");
										
		return $themezee_settings;
	}

?>
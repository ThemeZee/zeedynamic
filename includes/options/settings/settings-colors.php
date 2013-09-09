<?php
	
	function themezee_sections_colors() {
		$themezee_sections = array();
		
		$themezee_sections[] = array("id" => "themeZee_colors_schemes",
					"name" => __('Predefined Color Schemes', 'zeeDynamic_language'));
		
		return $themezee_sections;
	}
	
	function themezee_settings_colors() {
	
		$color_schemes = array(
			'#1562a5' => __('Blue', 'zeeDynamic_language'),
			'#725639' => __('Brown', 'zeeDynamic_language'),
			'#777777' => __('Gray', 'zeeDynamic_language'),
			'#2d912e' => __('Green', 'zeeDynamic_language'),
			'#e34c00' => __('Orange', 'zeeDynamic_language'),
			'#9215a5' => __('Purple', 'zeeDynamic_language'),
			'#007896' => __('Teal', 'zeeDynamic_language'),
			'default' => __('Standard', 'zeeDynamic_language'));
		
		$themezee_settings = array();
	
		### COLOR SETTINGS
		#######################################################################################
							
		$themezee_settings[] = array("name" => __('Set Color Scheme', 'zeeDynamic_language'),
						"desc" => __('Please select your color scheme here.', 'zeeDynamic_language'),
						"id" => "themeZee_color_scheme",
						"std" => "default",
						"type" => "select",
						'choices' => $color_schemes,
						"section" => "themeZee_colors_schemes"
						);
		
		return $themezee_settings;
	}

?>
<?php
/**
 * Theme Info Settings
 *
 * Register Theme Info Settings
 *
 * @package zeeDynamic
 */

/**
 * Adds all Theme Info settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function zeedynamic_customize_register_theme_info_settings( $wp_customize ) {

	// Add Section for Theme Fonts.
	$wp_customize->add_section( 'zeedynamic_section_theme_info', array(
		'title'    => esc_html__( 'Theme Info', 'zeedynamic' ),
		'priority' => 200,
		'panel'    => 'zeedynamic_options_panel',
	) );

	// Add Theme Links control.
	$wp_customize->add_control( new zeeDynamic_Customize_Links_Control(
		$wp_customize, 'zeedynamic_theme_options[theme_links]', array(
			'section'  => 'zeedynamic_section_theme_info',
			'settings' => array(),
			'priority' => 10,
		)
	) );

	// Add Pro Version control.
	if ( ! class_exists( 'zeeDynamic_Pro' ) ) {
		$wp_customize->add_control( new zeeDynamic_Customize_Upgrade_Control(
			$wp_customize, 'zeedynamic_theme_options[pro_version]', array(
				'section'  => 'zeedynamic_section_theme_info',
				'settings' => array(),
				'priority' => 20,
			)
		) );
	}

	// Add Magazine Blocks control.
	if ( ! class_exists( 'ThemeZee_Magazine_Blocks' ) ) {
		$wp_customize->add_control( new zeeDynamic_Customize_Plugin_Control(
			$wp_customize, 'zeedynamic_theme_options[magazine_blocks]', array(
				'label'       => esc_html__( 'Magazine Blocks', 'zeedynamic' ),
				'description' => esc_html__( 'Install our free Magazine Blocks to create a magazine-styled homepage in the Editor with just a few clicks.', 'zeedynamic' ),
				'section'     => 'zeedynamic_section_theme_info',
				'settings'    => array(),
				'priority'    => 40,
			)
		) );
	}
}
add_action( 'customize_register', 'zeedynamic_customize_register_theme_info_settings' );

<?php
/**
 * Handles the "Go Pro" section in the Customizer.
 *
 * @package Floral Lite
 */

/**
 * The customizer pro class.
 */
final class Floral_Lite_Customizer_Pro {
	/**
	 * Sets up initial actions.
	 */
	public function init() {
		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @param  WP_Customize_Manager $manager WP_Customize_Manager instance.
	 */
	public function sections( $manager ) {
		// Load custom sections.
		require get_template_directory() . '/inc/customizer-pro/class-floral-customizer-section-pro.php';

		// Register custom section types.
		$manager->register_section_type( 'Floral_Customizer_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Floral_Customizer_Section_Pro(
				$manager,
				'floral-lite',
				array(
					'title'    => esc_html__( 'Ready For More?', 'floral-lite' ),
					'pro_text' => esc_html__( 'Go Pro', 'floral-lite' ),
					'pro_url'  => esc_url( 'https://gretathemes.com/wordpress-themes/floral/' ),
					'priority' => 999,
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 */
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'floral-lite-customize-pro', get_template_directory_uri() . '/inc/customizer-pro/customize-controls.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'floral-lite-customize-pro', get_template_directory_uri() . '/inc/customizer-pro/customize-controls.css' );
	}
}

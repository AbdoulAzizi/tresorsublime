<?php
/**
 * Single Blog Options Customizer
 *
 * @package Innofit
 */
function innofit_theme_option($wp_customize) {

$selective_refresh = isset($wp_customize->selective_refresh) ? 'postMessage' : 'refresh';

    /**
     * Register Custom Slider Controls
     */
    require_once INNOFIT_TEMPLATE_DIR . '/functions/customizer/toggle/class-toggle-control.php';
    $wp_customize->register_control_type('Innofit_Toggle_Control');

     $wp_customize->add_panel('innofit_theme_panel',
            array(
                'priority' => 2,
                'capability' => 'edit_theme_options',
                'title' => esc_html__('Innofit Theme Blog Option', 'innofit')
            )
    );
}

add_action('customize_register', 'innofit_theme_option');


function innofit_blog_page_options_customizer ( $wp_customize )
{
	require_once INNOFIT_TEMPLATE_DIR . '/functions/customizer/toggle/class-toggle-control.php';
    $wp_customize->register_control_type('Innofit_Toggle_Control');

	$wp_customize->add_section('innofit_blog_page_options',
	array(
		'title' => esc_html__('Blog Page Options', 'innofit'),
		'panel' => 'innofit_theme_panel',
		'priority' => 1
	));

	/******************** Blog Excerpt *******************************/
	$wp_customize->add_setting('innofit_blog_content', 
		array(
			'default' 			=> esc_html__('excerpt','innofit'),
			'sanitize_callback' => 'innofit_sanitize_radio'
			)
		);

	$wp_customize->add_control('innofit_blog_content', 
		array(		
			'label' 	=> esc_html__('Choose Options', 'innofit'),		
			'section' 	=> 'innofit_blog_page_options',
			'type' 		=> 'radio',
			'choices' 	=>  array(
				'excerpt' 	=> esc_html__('Excerpt', 'innofit'),
				'content' 	=> esc_html__('Full Content', 'innofit'),
				)
			)
		);

	/******************** Blog Excerpt Length *******************************/
	$wp_customize->add_setting( 'innofit_blog_content_length',
		array(
			'default'           => 55,
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
			)
	);
	$wp_customize->add_control( 'innofit_blog_content_length',
		array(
			'label'       => esc_html__( 'Excerpt Length', 'innofit' ),
			'section'     => 'innofit_blog_page_options',
			'type'        => 'number',
			'input_attrs' => array( 'min' => 10, 'max' => 200, 'step' => 1, 'style' => 'width: 200px;' ),
		)
	);



}
add_action( 'customize_register', 'innofit_blog_page_options_customizer' );
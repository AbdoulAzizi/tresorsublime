<?php
/**
 * Single Blog Options Customizer
 *
 * @package Innofit
 */
function innofit_single_blog_customizer ( $wp_customize )
{
require_once INNOFIT_TEMPLATE_DIR . '/functions/customizer/toggle/class-toggle-control.php';
$wp_customize->register_control_type('Innofit_Toggle_Control');

$wp_customize->add_section('innofit_single_blog_section',
	array(
		'title' => esc_html__('Single Blog Section', 'innofit'),
		'panel' => 'innofit_theme_panel',
		'priority' => 5
	));


$wp_customize->add_setting('innofit_enable_single_post_category',
	array(
		'default' => true,
		'sanitize_callback' => 'innofit_sanitize_checkbox',
	)
);
$wp_customize->add_control(new Innofit_Toggle_Control( $wp_customize, 'innofit_enable_single_post_category', 
	array(
		'label' => esc_html__('Hide/Show Categories', 'innofit'),
		'type'     => 'toggle',
		'section' => 'innofit_single_blog_section',
		'priority' => 4,
	)
));

$wp_customize->add_setting('innofit_enable_single_post_date',
	array(
		'default' => true,
		'sanitize_callback' => 'innofit_sanitize_checkbox',
	)
);
$wp_customize->add_control(new Innofit_Toggle_Control( $wp_customize, 'innofit_enable_single_post_date', 
	array(
		'label' => esc_html__('Hide/Show Date', 'innofit'),
		'type'     => 'toggle',
		'section' => 'innofit_single_blog_section',
		'priority' => 6,
	)
));

$wp_customize->add_setting('innofit_enable_single_post_comments',
	array(
		'default' => true,
		'sanitize_callback' => 'innofit_sanitize_checkbox',
	)
);

$wp_customize->add_setting('innofit_enable_single_post_admin',
	array(
		'default' => true,
		'sanitize_callback' => 'innofit_sanitize_checkbox',
	)
);
$wp_customize->add_control(new Innofit_Toggle_Control( $wp_customize, 'innofit_enable_single_post_admin', 
	array(
		'label' => esc_html__('Hide/Show Author Name', 'innofit'),
		'type'     => 'toggle',
		'section' => 'innofit_single_blog_section',
		'priority' => 5,
	)
));

$wp_customize->add_setting('innofit_enable_single_post_tag',
	array(
		'default' => true,
		'sanitize_callback' => 'innofit_sanitize_checkbox',
	)
);
$wp_customize->add_control(new Innofit_Toggle_Control( $wp_customize, 'innofit_enable_single_post_tag', 
	array(
		'label' => esc_html__('Hide/Show Tags', 'innofit'),
		'type'     => 'toggle',
		'section' => 'innofit_single_blog_section',
		'priority' => 8,
	)
));
$wp_customize->add_setting('innofit_enable_single_post_admin_details',
	array(
		'default' => true,
		'sanitize_callback' => 'innofit_sanitize_checkbox',
	)
);
$wp_customize->add_control(new Innofit_Toggle_Control( $wp_customize, 'innofit_enable_single_post_admin_details', 
	array(
		'label' => esc_html__('Hide/Show Author Details', 'innofit'),
		'type'     => 'toggle',
		'section' => 'innofit_single_blog_section',
		'priority' => 9,
	)
));

}
add_action( 'customize_register', 'innofit_single_blog_customizer' );
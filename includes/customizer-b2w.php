<?php

if (! class_exists('kirki')) {
    return;
}

/* Panels */
new \Kirki\Panel(
	'b2w_theme_option_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'B2W Theme Options', 'bootstrap2wordpress' ),
		'description' => esc_html__( 'Use this to customize the B2W Theme', 'bootstrap2wordpress' ),
	]
);

/** Sections */

// Section subscribe bar
new \Kirki\Section(
	'b2w_subscribe_bar',
	[
		'title'       => esc_html__( 'Subscribe bar', 'bootstrap2wordpress' ),
		'description' => esc_html__( 'This is Subscribe bar.', 'bootstrap2wordpress' ),
		'panel'       => 'b2w_theme_option_panel',
		'priority'    => 160,
	]
);

/* Controls */
new \Kirki\Field\Textarea(
	[
		'settings'    => 'subscribe_text',
		'label'       => esc_html__( 'Subscribe bar text', 'bootstrap2wordpress' ),
		'section'     => 'b2w_subscribe_bar',
		'default'     => esc_html__( 'This is a default value', 'bootstrap2wordpress' ),
	]
);

new \Kirki\Field\Code(
	[
		'settings'    => 'subscribe_form',
		'label'       => esc_html__( 'Subscribe Form HTML', 'bootstrap2wordpress' ),
		'description' => esc_html__( 'Please enter HTML code here for your opt-in form', 'bootstrap2wordpress' ),
		'section'     => 'b2w_subscribe_bar',
		'default'     => '',
		'choices'     => [
			'language' => 'html',
		],
	]
);

// Section Footer
new \Kirki\Section(
	'b2w_footer_bar',
	[
		'title'       => esc_html__( 'Footer', 'bootstrap2wordpress' ),
		'description' => esc_html__( 'This is Footer section.', 'bootstrap2wordpress' ),
		'panel'       => 'b2w_theme_option_panel',
		'priority'    => 160,
	]
);

/* Controls */
new \Kirki\Field\Textarea(
	[
		'settings'    => 'footer_copyright',
		'label'       => esc_html__( 'Footer copyright text', 'bootstrap2wordpress' ),
		'section'     => 'b2w_footer_bar',
		'default'     => esc_html__( 'Adhentux.com', 'bootstrap2wordpress' ),
        'partial_refresh' => array(
            'footer_copyright'  => array(
                'selector' => 'footer .copyright p',
                'render_callback' => function () {
                    return get_theme_mod('footer_copyright');
                }
            )
        )
	]
);
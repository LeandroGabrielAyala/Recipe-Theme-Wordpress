<?php

function lg_social_customizer_section( $wp_customize ) {
    $wp_customize->add_setting( 'lg_facebook_handle', array(
        'default'           => ''
    ) );

    $wp_customize->add_setting( 'lg_twitter_handle', array(
        'default'           => ''
    ) );

    $wp_customize->add_setting( 'lg_instagram_handle', array(
        'default'           => ''
    ) );

    $wp_customize->add_setting( 'lg_email', array(
        'default'           => ''
    ) );

    $wp_customize->add_setting( 'lg_phone_number', array(
        'default'           => ''
    ) );

    $wp_customize->add_section( 'lg_social_section', array(
        'title'             => __( 'Udemy Social Settings', 'udemy' ),
        'priority'          => 30,
        'panel'             => 'udemy'
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,
            'lg_social_facebook_input',
            array(
                'label'         => __( 'Facebook Handle', 'udemy' ),
                'section'       => 'lg_social_section',
                'settings'      => 'lg_facebook_handle',
                'type'          => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,
            'lg_social_twitter_input',
            array(
                'label'         => __( 'Twitter Handle', 'udemy' ),
                'section'       => 'lg_social_section',
                'settings'      => 'lg_twitter_handle',
                'type'          => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,
            'lg_social_instagram_input',
            array(
                'label'         => __( 'Instagram Handle', 'udemy' ),
                'section'       => 'lg_social_section',
                'settings'      => 'lg_instagram_handle',
                'type'          => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,
            'lg_social_email_input',
            array(
                'label'         => __( 'Email', 'udemy' ),
                'section'       => 'lg_social_section',
                'settings'      => 'lg_email',
                'type'          => 'text'
            )
        )
    );

	$wp_customize->add_control(
        new WP_Customize_Control(
		$wp_customize,
		'lg_social_phone_number_input',
		array(
			'label'                 =>  __( 'Phone Number', 'theme_name' ),
			'section'               => 'lg_social_section',
			'settings'              => 'lg_phone_number',
			'type'                  =>  'text'
		)
	));
}
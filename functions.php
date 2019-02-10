<?php

// Setup


// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/theme-customizer.php' );
include( get_template_directory() . '/includes/customizer/social.php' );
include( get_template_directory() . '/includes/customizer/misc.php' );
include( get_template_directory() . '/includes/customizer/enqueue.php' );
include( get_template_directory() . '/includes/buddypress/cover-image.php' );
include( get_template_directory() . '/includes/buddypress/profile-tabs.php' );
include( get_template_directory() . '/includes/functions.php' );
include( get_template_directory() . '/includes/buddypress/profile-posts.php' );
include( get_template_directory() . '/includes/woocommerce/checkout-fields.php' );
include( get_template_directory() . '/includes/mobile.php' );
include( get_template_directory() . '/includes/admin/author-fields.php' );
include( get_template_directory() . '/includes/avatar.php' );
include( get_template_directory() . '/includes/home-query.php' );
require_once( get_template_directory() . '/includes/libs/class-tgm-plugin-activation.php' );
include( get_template_directory() . '/includes/register-plugins.php' );



// Hooks
add_action( 'wp_enqueue_scripts', 'lg_enqueue' );
add_action( 'after_setup_theme', 'lg_setup_theme' );
add_action( 'widgets_init', 'lg_widgets' );
add_action( 'customize_register', 'lg_customize_register' );
add_action( 'customize_preview_init', 'lg_customize_preview_init' );
add_filter( 'bp_before_xprofile_cover_image_settings_parse_args', 'lg_xprofile_cover_image' );
add_filter( 'bp_before_groups_cover_image_settings_parse_args', 'lg_xprofile_cover_image' );
add_action( 'bp_setup_nav', 'lg_buddypress_profile_tabs' );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_filter( 'woocommerce_billing_fields', 'lg_wc_billing_fields' );
add_filter( 'woocommerce_shipping_fields', 'lg_wc_shipping_fields' );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
add_filter( 'excerpt_more', '__return_false' );
add_filter( 'excerpt_length', 'lg_excerpt_length', 999 );
add_action( 'show_user_profile', 'lg_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'lg_custom_user_profile_fields' );
add_action( 'personal_options_update', 'lg_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'lg_save_extra_profile_fields' );
add_filter( 'avatar_defaults', 'lg_new_avatar' );
add_action( 'pre_get_posts', 'lg_modify_homepage_query' );
add_action( 'tgmpa_register', 'lg_register_required_plugins' );

// Shortcodes

<?php

function lg_buddypress_profile_tabs(){
	if( !lg_plugin_activated_check( 'recipe/index.php' ) ){
		return;
	}

	global $bp;

	bp_core_new_nav_item([
		'name'                      =>  __( 'Recipes', 'udemy' ),
		'slug'                      =>  'recipes',
		'position'                  =>  100,
		'screen_function'           =>  'lg_recent_recipes_tab',
		'show_for_displayed_user'   =>  true,
		'item_css_id'               =>  'lg_user_recipes',
		'default_subnav_slug'       =>  'recipes'
	]);
}
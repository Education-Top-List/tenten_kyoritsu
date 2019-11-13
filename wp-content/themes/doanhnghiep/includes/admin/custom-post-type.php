<?php
/*
	
@package sunsettheme
	
	========================
		THEME CUSTOM POST TYPES
	========================
*/
			add_action( 'init', 'tg_contact_custom_post_type_adv' );
	add_filter('manage_adv_posts_columns','sunset_set_contact_columns_adv');
	add_action('manage_adv_posts_custom_column','sunset_contact_custom_column_adv',10,2);

/* ADV */
function tg_contact_custom_post_type_adv() {
	$labels = array(
		'name' 				=> 'People Say',
		'singular_name' 	=> 'People Say',
		'menu_name'			=> 'People Say',
		'name_admin_bar'	=> 'People Say'
	);
	
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 25,
		'menu_icon'			=> 'dashicons-businessperson',
		'supports'			=> array( 'title', 'thumbnail' , 'excerpt' ),
	);

	register_taxonomy(
		'people_says',
		'peoplesays',
		array(
			'label' => false, // label in menu admin sidebar left
			'hierarchical' => true
		)
	);

	register_post_type( 'peoplesays', $args );
	
}

function sunset_set_contact_columns_adv($columns){
	$newColumns = array();
	$newColums['title'] = 'Title';
	$newColums['avatar'] = 'Avatar';
	return $newColums;
}

function sunset_contact_custom_column_adv($column,$post_id){
	switch ($column) {
		case 'avatar':
			echo get_the_post_thumbnail();
		break;
	}
}

// partners
add_action( 'init', 'tg_ctp_partners' );
	add_filter('manage_partners_posts_columns','sunset_set_contact_columns_partners');
	add_action('manage_partners_posts_custom_column','sunset_contact_custom_column_partners',10,2);

function tg_ctp_partners() {
	$labels = array(
		'name' 				=> 'Partners',
		'singular_name' 	=> 'Partners',
		'menu_name'			=> 'Partners',
		'name_admin_bar'	=> 'Partners'
	);
	
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 25,
		'menu_icon'			=> 'dashicons-groups',
		'supports'			=> array( 'title', 'thumbnail' , 'excerpt' ),
	);

	register_taxonomy(
		'partner',
		'partners',
		array(
			'label' => false, // label in menu admin sidebar left
			'hierarchical' => true
		)
	);

	register_post_type( 'partners', $args );
	
}

function sunset_set_contact_columns_partners($columns){
	$newColumns = array();
	$newColums['title'] = 'Title';
	$newColums['avatar'] = 'Avatar';
	return $newColums;
}

function sunset_contact_custom_column_partners($column,$post_id){
	switch ($column) {
		case 'avatar':
			echo get_the_post_thumbnail();
		break;
	}
}
 

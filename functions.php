<?php 
	/*
		============
		Add Css Files
		============
	*/
	function elzero_add_css() {
		//wp_enqueue_style("bootstrap-css", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
		//wp_enqueue_style("font-awesome", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
		wp_enqueue_style("materialize-icons", "https://fonts.googleapis.com/icon?family=Material+Icons");
		wp_enqueue_style("materialize-css", "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css");
		wp_enqueue_style("main-css", get_template_directory_uri() . "/css/main.css");
	}

	/*
		============
		Add JS Files
		============
	*/
	function elzero_add_js() {
		//wp_enqueue_script( "bootstrap-js", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array(), false, true);
		wp_enqueue_script("materialize-js", "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js", array("jquery"), false, true);
		wp_enqueue_script("script-js", get_template_directory_uri() . "/js/script.js", array("jquery"), false, true);
	}

	/*
		==========
		Add Menu
		==========
	*/

	function elzero_add_nav_menu() {
		register_nav_menus( array(
			'header_nav_menu' => "Header Nav Menu",
			"footer_nav_menu" => "Footer Nav Menu"
		));
	}

	function elzero_modify_nav_menu_desktop() {
		wp_nav_menu(array(
			"theme_location" => "header_nav_menu",
			"menu_class" => "right hide-on-med-and-down",
			"container" => false
		));
	}

	function elzero_modify_nav_menu_mobile() {
		wp_nav_menu(array(
			"theme_location" => "header_nav_menu",
			"menu_class" => "side-nav",
			"menu_id" => "mobile-demo",
			"container" => false
		));
	}

	/*
		============
		Add Actions
		============
	*/
	add_action("wp_enqueue_scripts", "elzero_add_css");
	add_action("wp_enqueue_scripts", "elzero_add_js");

	add_action("after_setup_theme", "elzero_add_nav_menu");

	add_theme_support("post-thumbnails");

?>	
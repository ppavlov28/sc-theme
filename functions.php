<?php

/*
 * Подключение стилей и скриптов
 */

function sc_style_connection(){
	wp_register_style('sc_theme_reset', get_template_directory_uri() . '/css/normalize.css');
	wp_register_style('sc_theme_style', get_template_directory_uri() . '/css/styles.css');

	wp_enqueue_style('sc_theme_reset');
	wp_enqueue_style('sc_theme_style');
}

add_action('wp_enqueue_scripts', 'sc_style_connection');

/*
 * Подключение меню
 */

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

register_nav_menus(array(
	'top' => 'Верхнее меню',
	'side' => 'Боковое меню',
	'bottom' => 'Нижнее меню'
));

function the_child_category(){

}
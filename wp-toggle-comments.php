<?php

/**
 * Plugin Name: wp-toggle-comments
 * Plugin URI: 
 * Description: A very simple plugin to toggle comments fields in wordpress posts.
 * Version: 1.0
 * Author: Erez LIeberman
 * Author URI: http://studio-hitchadshut.co.il/
 * License:
 */

/* Assign global variabals */
$plugin_url = WP_PLUGIN_URL . '/wp-toggle-comments';

function wp_toggle_comments_menu(){
	add_options_page(
		'wp-toggle-comments options page',
		'wp-toggle-comments',
		'manage_options',
		'wp-toggle-comments',
		'wp_toggle_comments_options_page'
		);

}

add_action('admin_menu' , 'wp_toggle_comments_menu');

function wp_toggle_comments_options_page(){

	if(!current_user_can('manage_options')){
		wp_die('You do not have suggicient permissions to access this page.');
	}

  global $plugin_url;
  
	require ('inc/options-page-wrapper.php');

}

/*$(function(){
  $('.comment-notes').toggle();
  $('.comment-form-author').toggle();
  $('.comment-form-email').toggle();
  $('.comment-form-url').toggle();
  $('.form-submit').toggle();
  $('.subscribe-to-comments').toggle();
  $('.comment-subscription-form').toggle();

  $('.comment-form-comment textarea').on('focus',function(){
    
    if($('.form-submit').css('display') != "block"){

      $('.comment-notes').slideToggle("fast");
      $('.comment-form-author').slideToggle("fast");
      $('.comment-form-email').slideToggle("fast");
      $('.comment-form-url').slideToggle("fast");
      $('.form-submit').slideToggle("fast");
      $('.subscribe-to-comments').slideToggle("fast");
      $('.comment-subscription-form').slideToggle("fast");

    }
    
  })
});*/


?>
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


/* Assign global variables */
$plugin_url = WP_PLUGIN_URL . '/wp-toggle-comments';


/* set all the menu stuff in WP admin */
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


/* set all the options page stuff in WP admin */
function wp_toggle_comments_options_page(){

	if(!current_user_can('manage_options')){
		wp_die('You do not have sufficient permissions to access this page.');
	}

  global $plugin_url;
  
	require ('inc/options-page-wrapper.php');

}


/* set all the options page stuff in WP admin */
function wp_toggle_comments_styles(){
  wp_enqueue_style('wp_toggle_comments_styles', plugins_url('wp-toggle-comments/wp-toggle-comments.css'));
}

add_action('admin_head','wp_toggle_comments_styles');

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
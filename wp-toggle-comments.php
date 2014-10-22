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
$options = array();


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
  global $options;

  //check if the form in options page is submitted
  if(isset($_POST['wp_toggle_comments_form_submitted'])){

    $hidden_field = esc_html($_POST['wp_toggle_comments_form_submitted']);
   
    if($hidden_field == "Y"){
      
      //the options that user set in options
      $option1 = esc_html($_POST['option1']);

      //add the options the options array
      $options['option1']      = $option1;
      $options['last_updated'] = time();

      update_option( 'wp_toggle_comments' , $options);
      
    }

  };
  
  //set the options from db
  $options = get_option('wp_toggle_comments');

  if($options != ''){

    $option1 = $options['option1'];

  }

	require ('inc/options-page-wrapper.php');

}


/* set all the options page styles (backend styles) stuff in WP admin */
function wp_toggle_comments_backend_styles(){
  wp_enqueue_style('wp_toggle_comments_backend_styles', plugins_url('wp-toggle-comments/wp-toggle-comments-backend.css'));
}

add_action('admin_head','wp_toggle_comments_backend_styles');


/* set the frontend styles and scripts*/
function wp_toggle_comments_frontend_styles_and_scripts(){
  wp_enqueue_script('wp_toggle_comments_frontend_script', plugins_url('wp-toggle-comments/wp-toggle-comments-frontend.js'),array('jquery'),'', true );
  wp_enqueue_style('wp_toggle_comments_frontend_styles', plugins_url('wp-toggle-comments/wp-toggle-comments-frontend.css'));
}

add_action('wp_enqueue_scripts','wp_toggle_comments_frontend_styles_and_scripts');


/* add shortcode to plugin */
function wp_toggle_comments_shortcode( $atts , $content = null ){
    
    global $post;
    
    //parameters of shortcode (optional)
    /*
    extract( shortcode_atts( array(
        'shortcode_option_1' => '5',
        'display_shortcode' => 'off'
    ),$atts ) );
    */
    
    //paramter to display or hide
    
    /*if($display_shortcode == on){
        
        ob_start();
    
        //the thing that you want to happen will be here
        echo "there is!";

        $content = ob_get_clean();

        return $content;
       
    }*/
    
    /*
    the shortcode will be look like this:
    [wp_toggle_comments display_shortcode = "on" shortcode_option_1 = "6"]
    */
    
    
}

add_shortcode( 'wp_toggle_comments'  , 'wp_toggle_comments_shortcode' );

?>
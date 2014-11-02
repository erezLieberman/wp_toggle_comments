<?php

/**
 * Plugin Name: wp-toggle-comments
 * Plugin URI: 
 * Description: A very simple plugin to toggle comments fields in wordpress posts.
 * Version: 1.0
 * Author: Erez LIeberman
 * Author URI: http://studio-hitchadshut.co.il/
 * License:
 * Text Domain:  wp-toggle-comments
 * 
 */


/* Assign global variables */
$plugin_url = WP_PLUGIN_URL . '/wp-toggle-comments-form-fields';
$options = array();

// Localization
function ap_action_init()
{
load_plugin_textdomain('wp-toggle-comments',  false, basename( dirname( __FILE__ ) ) . '/languages' );
}

// Add actions
add_action('init', 'ap_action_init');



/* set all the menu stuff in WP admin */
function wp_toggle_comments_menu(){
	add_options_page(
		'wp-toggle-comments options page',
		'WP toggle comments',
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
      $using_options = $_POST['using_options'];

      //add the options the options array
      $options['using_options']      = $using_options;
      $options['last_updated'] = time();

      update_option( 'wp_toggle_comments' , $options);
      
    }

  };
  
  //set the options from db
  $options = get_option('wp_toggle_comments');

  if($options != ''){

    $using_options = $options['using_options'];

  }

	require ('inc/options-page-wrapper.php');

}




/* set all the options page styles (backend styles) stuff in WP admin */
function wp_toggle_comments_backend_styles(){
  wp_enqueue_style('wp_toggle_comments_backend_styles', plugins_url('wp-toggle-comments-form-fields/css/wp-toggle-comments-backend.css'));
}

add_action('admin_head','wp_toggle_comments_backend_styles');


/* set the frontend styles and scripts*/
function wp_toggle_comments_frontend_styles_and_scripts(){
     
    //GET OPTIONS FROM DB
    global $options; 
    
    $options = get_option('wp_toggle_comments');

    if($options != ''){

        $using_options = $options['using_options'];

    }
    
    // retrieve the options
    $using_options_to_jquery =  $using_options ;

    // register & enqueue a javascript file called globals.js
    wp_register_script( 'globals', plugins_url('wp-toggle-comments-form-fields/js/wp-toggle-comments-frontend.js'), array('jquery'), null  , false);
    wp_enqueue_script( 'globals' ,'');

    // use wp_localize_script to pass PHP variables into javascript
    wp_localize_script( 'globals', 'ourPhpVariables', array( using_options_to_jquery => $using_options_to_jquery ) );
    
    // styles
    wp_enqueue_style('wp_toggle_comments_frontend_styles', plugins_url('wp-toggle-comments-form-fields/css/wp-toggle-comments-frontend.css'),'', null ,'');
    
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
    
      echo '<div class="have_shortcode"></div>';
    
}

add_shortcode( 'wp_toggle_comments'  , 'wp_toggle_comments_shortcode' );




?>
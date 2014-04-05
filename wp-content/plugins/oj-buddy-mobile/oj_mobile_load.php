<?php
    
/* Plugin Name: OJ Buddy Mobile
Plugin URI: none
Description: This is a plugin used to exchange information with mobiles
Version: 1.0
Author: OJ Wang
Author URI: none
License: GPLv2 or later
*/
 
    //quit the program if the ABSPATH is not defined
    if (!defined('ABSPATH')) exit;
    
    if (is_plugin_active('buddypress-followers/loader.php')) {
        
        //this function runs when this plugin is activated
        function oj_buddy_mobile_activite() {
            
            
        }
        register_activation_hook(__FILE__, 'oj_buddy_mobile_activite');
        
        function oj_check_if_from_mobile() {
            
            
            if (isset($_POST["mobile"]) && $_POST["mobile"] == '1') {
                
                //process the file for mobile and then quit
                include(dirname(__FILE__) . '/oj_mobile.php');
                exit;
                
            } else {
                
                //return the function and continue the loading of the page as usual
                return;
            }
        }
        
        add_action('wp_loaded', 'oj_check_if_from_mobile');
        
    } else {
    
        echo "<h1>Attention !!!!! To Make OJ Buddy Mobile functions, please activate Buddypress Follower</h1>";
    }
    
?>
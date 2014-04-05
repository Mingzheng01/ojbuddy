<?php
    
    define(ERROR_INCOMPLETE_INFORMATION, 'incomplete information');
    define(SIGNUP_COMPLETE, 'signup complete');
    
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['name'])) {
    
        if (!is_wp_error($result = wp_create_user($_POST['username'], $_POST['password'], $_POST['email']))) {
            
            // the user is created successfully
            
            $user_id = $result;
            $userdata = array(
            
                'ID' => $user_id,
                'user_nicename' => $_POST['username'],
                'display_name' => $_POST['name']
            
            );
            
            
            
            
            //activate the user
            $activation_key = get_user_meta($user_id, 'activation_key', TRUE);
            
            if ($activation_key != "") {
                //got the activation key
                wpmu_activate_signup($activation_key);
                
                echo SIGNUP_COMPLETE;
                exit;
                
            }
        }
    } else {
    
        echo ERROR_INCOMPLETE_INFORMATION;
        exit;
    }
    
?>
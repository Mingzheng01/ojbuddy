<?php
    
    
    if (isset($_POST["username"]) && isset($_POST["password"])) {
    
        
        if ($user = get_user_by('login', $_POST["username"])) {
        
            if (wp_check_password($_POST["password"], $user->data->user_pass, $user->ID)) {
            
                $user_info->username = $user->user_login;
                $user_info->id = $user->ID;
                $user_info->email = $user->user_email;
                
                echo json_encode($user_info);
                
            } else {
            
                echo LOGIN_WRONG_PASSWORD;
            }
            
        } else {
        
            echo LOGIN_NO_USER;
        }
        
    } else {
        
        echo ERROR_NEED_USERNAME;
        echo ERROR_NEED_PASSWORD;
    }
    
   
    
?>
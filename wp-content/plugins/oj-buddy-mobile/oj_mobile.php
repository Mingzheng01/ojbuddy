<?php
    
// this function contain handles user login
    
    //echo "DEBUG: the mobile file is loaded";
    
    define(ERROR_NEED_USERNAME, "no user name");
    define(ERROR_NEED_PASSWORD, "no password");
    
    define(LOGIN_NO_USER, "no user");
    define(LOGIN_WRONG_PASSWORD, "wrong password");
    
    if (isset($_POST['login']) && $_POST['login'] == '1') {
        
        include(dirname(__FILE__) . "/oj_login.php");
    
    } elseif ( isset($_POST['activity']) && $_POST['activity'] == '1' ) {
    
    
        
    } elseif (isset($_POST['signup']) && $_POST['signup'] == '1') {
    
        include(dirname(__FILE__) . "/oj_signup.php");
    }
    
?>
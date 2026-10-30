
<?php
 function is_input_empty($username, $password, $email){
    if(empty($username) || empty($password) || empty($email)){
        return true;
    }else{
        return false;
    }

 }

 function is_email_valid($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
 }

 function is_username_taken($pdo, $username){
    $result = get_username($pdo, $username);
    if($result){
        return true;
    }else{
        return false;
    }
     
 }

  function is_email_registered($pdo, $email){
    $result = get_email($pdo, $email);
    if($result){
        return true;
    }else{
        return false;
    }
     
 }


 function create_user($pdo, $username, $password, $email){
   set_user($pdo, $username, $password, $email);
 
 
 }

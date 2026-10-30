<?php

function checksiguperror(){
    if(isset($_SESSION['errors signup'])){
        $errors = $_SESSION['errors signup'];
        foreach($errors as $error){
            echo "<p style='color:red;'>$error</p>";
        }
        unset($_SESSION['errors signup']);
        return $errors;
    }
    else if(isset($_GET['signup']) && $_GET['signup'] === 'success'){
        echo "<p style='color:green;'>Signup successful!</p>";
    
    }
}
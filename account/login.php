<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
       require_once __DIR__ . '/db.php';
       require_once __DIR__ . '/loginmodel.php';
       require_once __DIR__ . '/logincontroller.php';

        try {
            $errors =[];
        
        if(is_input_empty($username, $pwd)){
          $errors['empty_input'] = 'empty_input';
            die('Please fill in all fields');
        }; 
        $result = getuser($pdo, $username);
                
        if(is_username_wrong($result)){
            $errors['login_failed'] = 'incorrect username';
        }
        if(!is_username_wrong($result) and is_password_wrong($pwd, $result['pwd'])){
               $errors['login incorrect'] = 'incorrect login info';
        }


        } catch (PDOException $th) {
            die("Error: " . $th->getMessage());
        }

}else {
    header("Location: ../account/login.php");
    exit();
}
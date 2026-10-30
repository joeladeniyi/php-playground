<?php
   require_once __DIR__ . '/db.php';
        require_once __DIR__ . '/signup_controller.php';
        require_once __DIR__ . '/signup_model.php';
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $email = $_POST['email'];

    try {
       

        // require_once 'signup_controller.php';
        // require_once 'signup_model.php';
        $errors =[];
        
        if(is_input_empty($username, $password, $email)){
          $errors['empty_input'] = 'empty_input';
            die('Please fill in all fields');
        };
        
        if(!is_email_valid($email)){
          $errors['invalid_email'] = 'invalid_email';
            die('Please enter a valid email address');
        };

        if(is_username_taken($pdo, $username)){
            $errors['username_taken'] = 'username already taken';
            die('Username already taken');
        };

        if(is_email_registered($pdo, $email)){
            $errors['email_registered'] = 'email already registered';
            die('Email already registered');
        };

        if ($errors){
          $_SESSION['errors signup'] = $errors; 
          header('Location: ./form.php');
          die();
        }

        create_user($pdo,$username, $password, $email);

        header('Location: ./index.php?signup=success');
        $pdo = NULL;
        $stmt = NULL;
        die('data inserted successfully');
    } catch (PDOException $th) {
        die('connection failed' . $th->getMessage());
    }
  }else{
    header('Location: ./index.php');
    die('Invalid request method');
  }

?>
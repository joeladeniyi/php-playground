<?php

 if($_SERVER['REQUEST_METHOD']== 'POST'){
       $username = $_POST['username'];
       $password = $_POST['pwd'];
       $email = $_POST['email'];

       try {
         require_once 'dbh.php';
         $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :password, :email)";
         $stmt = $pdo->prepare($query);
         $options =[
          'value'=>12
         ];
         $hashedpwd = password_hash($password, PASSWORD_BCRYPT, $options);
         $stmt->bindParam(":username", $username);
         $stmt->bindParam(":password", $hashedpwd);
         $stmt->bindParam(":email", $email);
         $stmt->execute();
         $pdo = NULL;
         $stmt = NULL;
         header('Location: ./form.php');
         die('data inserted successfully');       

       } catch (PDOException $th) {
        die('connection failed' . $th->getMessage());
       }

 }

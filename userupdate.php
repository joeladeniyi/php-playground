<?php

 if($_SERVER['REQUEST_METHOD']== 'POST'){
       $username = $_POST['username'];
       $password = $_POST['pwd'];
       $email = $_POST['email'];

       try {
         require_once 'dbh.php';
         $query = "UPDATE users SET pwd = :password, email = :email WHERE username = :username";
         $stmt = $pdo->prepare($query);
         $stmt->bindParam(":username", $username);
         $stmt->bindParam(":password", $password);
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

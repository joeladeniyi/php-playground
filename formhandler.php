<?php

 if($_SERVER['REQUEST_METHOD']== 'post'){
       $username = $_POST['username'];
       $password = $_POST['pwd'];
       $email = $_POST['email'];

       try {
         require_once './dbh.php';
         $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email)";
         $stmt = $pdo->prepare($query);
         $stmt->execute([$username, $password, $email]);
         $pdo = NULL;
         $stmt = NULL;
         header('Location: ./form.php');
         die('data inserted successfully');       

       } catch (PDOException $th) {
        die('connection failed' . $th->getMessage());
       }

 }

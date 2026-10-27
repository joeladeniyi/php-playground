<?php

 if($_SERVER['REQUEST_METHOD']== 'POST'){
       $userSearch = $_POST['usersearch'];
       

       try {
         require_once './dbh.php';
         $query = "SELECT * FROM users WHERE username = :userSearch";
         $stmt = $pdo->prepare($query);
         $stmt->bindParam(":usersearch", $userSearch);
        
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         $pdo = NULL;
         $stmt = NULL;
         header('Location: ./form.php');
         die('data inserted successfully');       

       } catch (PDOException $th) {
        die('connection failed' . $th->getMessage());
       }

 }

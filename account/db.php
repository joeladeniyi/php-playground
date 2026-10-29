<?php
 $dbhost = "localhost";
 $dbname = "firstdatabase";
 $dbusername = "root";
 $dbpassword = "";

 try {
     $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $th) {
     die('connection failed' . $th->getMessage());
 }



?>
<?php

function get_username($pdo, $username){
    $query = ("select * from users where username = :username");
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('username', $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

   
    


}
function get_email($pdo, $email){
    $query = ("select * from users where email = :email");
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('email', $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

   



}

function set_user($pdo, $username, $password, $email){
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :password, :email)";
    $stmt = $pdo->prepare($query);
    $options =[
        'cost' => 12,
    ];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    }   

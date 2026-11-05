<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="sanitize.php"  method="post">
         <label for="option1">Username</label>
         <input type="text" id="option1" name="username" value="username">
         <label for="option2">Age</label>
         <input type="text" id="option2" name="age" value="age">
         <input type="submit" name="login" value="Submit">
</body>
</html>

<?php
if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    echo $username;
    if(empty($age)){
        echo "Age is empty";
    }else{      
    echo $age;
}
}
?>
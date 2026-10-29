<?php
require_once("./config_session.php");
require_once("./signup_view.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="signup.php" method="POST" style="display: flex; flex-direction: row; width: 100%; justify-content: space-between;">
         <div style="display: flex; flex-direction: column; width: 50%; align-items: center; justify-content: space-between;">
            <h3> Login</h3>
    <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit">Submit</button>
    </div>
      <div style="display: flex; flex-direction: column; width: 50%; align-items: center; justify-content: space-between;">
  <h3> Signup</h3>
   <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Submit</button>
      
      </div>
      
    </div>

      </form>   
    
</body>
</html>
<?php
//   $data = 'femi';
//   $salt = bin2hex(random_bytes(16));
//   $pepper = "asecretkey";
//   $datatohash  = $data.$salt.$pepper;
//   $result = hash('sha256', $datatohash);
//   echo $result;
  $pwd = 'femi';
  $options = [
    'value' => 12
  ];
 $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
   $pwdlogin = 'femi';
   $isMatch = password_verify($pwdlogin, $hashedpwd);
   echo $isMatch ? 'Password is correct.' : 'Password is incorrect.';

?>

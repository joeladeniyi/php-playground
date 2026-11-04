<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="index.php"  method="get">
         <label for="name">Name:</label>
         <input type="text" id="name" name="name">
         <br>
         <label for="password">password:</label>
         <input type="password" id="password" name="password">
         <br>
         <input type="submit" value="Submit">
     </form>
</body>
</html>

<?php 
echo $_GET["name"] .'<br>';
echo $_GET["password"].'<br>';

$capitals = array("usa"=>"washington","canada"=>"ottawa","mexico"=>"mexico city");
$key = array_keys($capitals);
foreach($key as $k){
    echo $k .'<br>';
}

$usernam = "admin";
if(isset($username)){
    echo "username is set";

}else{
    echo "username is not set" .'<br>';
}

foreach($_GET as $key => $value){
    echo $key . " : " . $value . "<br>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 $test = 0;
function calculator($num1, $num2){
    global $test;
            $result = $num1 + $num2;
            return  $result + $test;
          }
          $result= calculator(1,2);
          echo($result)
    ?>
</body>
</html>
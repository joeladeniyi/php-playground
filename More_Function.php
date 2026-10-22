<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      Function staticNumber (){
              static $counter = 0;
               $counter++;
               return $counter;

      }
     echo staticNumber();
     echo staticNumber();
     echo staticNumber();
     echo staticNumber();

     define('pi', 3.14);
     define('num', 4);
     echo pi;
     echo num;
    ?>
</body>
</html>
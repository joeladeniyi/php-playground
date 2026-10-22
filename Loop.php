<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $fruits = array('mango'=> 'yellow', 'banana' => 'green', 'orange'=> 'red');
      foreach($fruits as $fruit){
        echo 'this is a/an'. "" . $fruit .'<br>';

        }

        foreach($fruits as $fruit => $color){
            echo 'this is a/an'. $fruit. 'that has a color of'. $color . '<br>';
        }
    ?>
</body>
</html>
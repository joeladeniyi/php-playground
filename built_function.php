<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $string = 'Hello world';
         echo strpos($string, 'l');
         echo strlen($string);
         echo str_replace('H', 'Y', $string);
         echo strtoupper($string);
         echo strtolower($string);

         $num = -3.3;
         $fruits = ['lemon', 'apple', 'orange'];
         $trees = ['mango'];
         print_r(array_reverse($fruits)); 
         print_r(array_merge($trees, $fruits));
         echo date('y-m-d H:i:s')
    ?>
</body>
</html>
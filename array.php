<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
     $task = [
        'laundry' =>  'daniel',
        'washing' =>  'micheal',
        'sweeping' =>  'Mary',
        'Moping'  =>   'Simi',
        
         
     ];
        $places = [
           'lagos' => array('ikeja', 'vi', 'lekki'),
           'ogun' => array('sango', 'ota', 'owode'),
           'ilorin' => array('taiwo', 'basin', 'sango')
        ];
        echo $places['lagos'][2]; 
        echo count($places);
        echo $places['ilorin'][2];
   ?> 
</body>
</html>
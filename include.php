<?php

$a = 3;
$b = 4;
$c = 5;
$d =6;
//  switch($a) {
//     case 1:
//         echo ('çondition 1 is correct');
//         break;
//         case 3:
//             echo ('case 3 is corrrect');
//             break;
//  }
//  $arr = [1,2,3,4,5];
//   for($i=0; $i< count($arr); $i++){
//     echo $arr[$i];
//   }
// if($a < $b && $c < $d ){
//     echo 'conditions met';
// }else{
//     echo 'çonditions not met';
// }
 $result = match($a) {
    3 => 'A is three',
    4 => "A is four",
    default => "No macthing number"
 }
?>
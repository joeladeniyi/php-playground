<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="post" >
            
             <input id="" name="firstnum"  placeholder="Enter a Number">

             <select name="operator">
                <option value="addition"> + </option>
                <option value="subtraction"> - </option>
                <option value= "multiplication"> * </option>
                <option value="division"> / </option>
             </select>
             <input id="" Lastname="" name="secondnum" placeholder="Enter second num">
        
             
               

             </select>
             <button type="submit">Calculate</button>

             <?php 
             $iserror = false;
             $value=0;
               if( $_SERVER['REQUEST_METHOD'] == 'POST'){
                $num1 =filter_input(INPUT_POST, 'firstnum', FILTER_SANITIZE_NUMBER_INT);
                 $num2 = filter_input(INPUT_POST, 'secondnum', FILTER_SANITIZE_NUMBER_INT);
                  $operator = htmlspecialchars($_POST['operator']);
                   
                  if(empty($num1) || empty($num2) || empty($operator)){
                      echo "Enter a number";
                      $iserror = true;
                  }

                  if (!is_numeric($num1) || !is_numeric($num2)){

                  echo "Enter a number";
                  $iserror = true;
                  }
                  switch($operator){
                    case 'addition':
                       $value = $num1 + $num2;
                       break;
                       case 'subtraction':
                        $value = $num1 - $num2;
                        break;
                        case 'multiplication':
                            $value = $num1 * $num2;
                            break;
                            case 'division':
                                $value = $num1 / $num2;
                                break;
                  }
                  echo 'Result =  ' .$value;
              
                    }
             
             ?>

        </form>
    </main>
</body>
</html>
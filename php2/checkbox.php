<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="checkbox.php"  method="get">
         <label for="option1">Beans</label>
         <input type="checkbox" id="option1" name="Beans" value="Beans">
         <label for="option2">Rice</label>
         <input type="checkbox" id="option2" name="Rice" value="Rice">
         <label for="option3">Yam</label>
         <input type="checkbox" id="option3" name="Yam" value="Yam">
         <input type="submit" name="submit" value="Submit">
      </form>

</body>
</html>
<?php
if (isset($_GET['submit'])) {
    
    if (isset($_GET['Beans'])) {
        echo "You selected Beans.";
    }
    if (isset($_GET['Rice'])) {
        echo "You selected Rice.";
    }
    if (isset($_GET['Yam'])) {
        echo "You selected Yam.";
    }

    if (!empty($selectedOptions)) {
        echo "You selected: " . implode(", ", $selectedOptions);
    } else {
        echo "Please select at least one option before submitting.";
    }
}

$myarray = array('yam', 'beans', 'rice');
$result = implode(" -", $myarray);
echo $result;
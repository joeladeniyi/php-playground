<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="radio.php"  method="get">
         <label for="submit">Submit</label>
         <input type="radio" id="submit" name="choice" value="Submit">
         <label for="cancel">Cancel</label>
         <input type="radio" id="cancel" name="choice" value="Cancel">
         <label for="delete">Delete</label>
         <input type="radio" id="delete" name="choice" value="Delete">
         <input type="submit" name="choicevalue" value="Submit">
      </form>
</body>
</html>
<?php
if (isset($_GET['choicevalue'])) {
     if (isset($_GET['choice'])) {
        $choice = $_GET['choice'];
        if ($choice === 'Submit') {
            echo "You selected Submit.";
        } elseif ($choice === 'Cancel') {
            echo "You selected Cancel.";
        } elseif ($choice === 'Delete') {
            echo "You selected Delete.";
        } else {
            echo "Invalid selection.";
        }

}elseif($_GET['choice'] === "" && $_GET['choicevalue'] === "Submit") {
        echo "Please select an option before submitting.";
    }
}
?>  
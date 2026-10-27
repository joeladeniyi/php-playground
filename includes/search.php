<?php
   

 if($_SERVER['REQUEST_METHOD']== 'POST'){
       $userSearch = $_POST['usersearch'];
       

       try {
         require_once __DIR__ . '/../dbh.php';
        //  require_once './dbh.php';
         $query = "SELECT * FROM comments WHERE username = :userSearch";
         $stmt = $pdo->prepare($query);
         $stmt->bindParam(":userSearch", $userSearch);
        
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         $pdo = NULL;
         $stmt = NULL;
        
               

       } catch (PDOException $th) {
        die('connection failed' . $th->getMessage());
       }

 }else{
    die('Location: ./index.php');
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Search Result:</h3>
    <?php
        if(empty($result)){
            echo '<div>';
            echo '<p>there were not search result</p>';
            echo '</div>';
        }else{
            foreach($result as $row){
                 echo $row['username']; 
                 echo $row['comment'];
                 echo $row['created_at'].'<br>';
            };
        }   
    ?>
</body>
</html>
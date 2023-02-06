<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        <h1>Hi <?php echo $_SESSION['Email']?></h1>

        <button><a href="insert.php">Add<a></button>
        <button><a href="delete.php">Delete</a></button>
        <h3><a href="qustion.php">Qustion</a></h3>


</body>
</html>
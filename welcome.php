<?php
include('connection.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>
</head>
<body>
    <h1></h1>
    <?php 
    if(isset($_SESSION['email'])){
    echo'<h1>WELCOME,'.$_SESSION['email'].'</h1>';

    }else{
        echo "please log in.";
    }
    ?>
</body>
</html>
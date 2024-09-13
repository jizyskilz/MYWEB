<?php
session_start();
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['jina'])){
        echo'<div>'.$_SESSION['jina'].'</div>';
    }
    ?>
</body>
</html>
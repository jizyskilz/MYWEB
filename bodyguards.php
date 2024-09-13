<?php
include('connection.php');
session_start();
if(isset($_SESSION['name'])){
    echo'<h1>WELCOME,'.$_SESSION['name'].'</h1>';

    }
?>
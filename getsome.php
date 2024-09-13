<?php
session_start();
include('connection.php');
if(isset($_POST['age'])){
    $age=$_POST['agein'];
    $email=$_POST['email'];
    $_SESSION['jina']=$email;
    $checker="select * from users where email='$email'";
    $loader=mysqli_query($connection,$checker);
    if(empty($age)||empty($email)){
        $error="fill all required fields";

    }
    else if(mysqli_num_rows($loader)==1){
        $seter="UPDATE users SET age='$age' WHERE email='$email'";
        if(mysqli_query($connection,$seter)){
            header('location:weapons.php');
        }
    }
}
?>
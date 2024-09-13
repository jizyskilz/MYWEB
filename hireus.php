<?php
session_start();
include('connection.php');
if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $continent=$_POST['continent'];
    $nationality=$_POST['nationality'];
    $email=$_POST['email'];
    $_SESSION['name']=$email;
    $checker="select * from users where email='$email'";
    $qwerty=mysqli_query($connection,$checker);
    if(empty($fullname)||empty($continent)||empty($nationality)||empty($email)){
        $error="fill all required fields";
    }
    else if(mysqli_num_rows($qwerty)==1){
        $finale="UPDATE users SET fullname='$fullname',continent='$continent',nationality='$nationality' WHERE email='$email'";
        if(mysqli_query($connection,$finale)){
            header('location:bodyguards.php');
        }
    }
    else{
        $error="error whilr inserting data";
    }
}
?>
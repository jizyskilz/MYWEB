<?php
include('connection.php');
session_start();
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $status=$_POST['check'];
    $look="select * from users where email='$email' and password='$password'";
   
    $run=mysqli_query($connection,$look);
    
    if(mysqli_num_rows($run)==1){
        $_SESSION['email']=$email;
        header('location:welcome.php');
    }

    else{
        $error="incorrect credentials";
    }
}
?>

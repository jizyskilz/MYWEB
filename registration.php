<?php
include('connection.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $check="select * from users where email='$email'";
    $checking=mysqli_query($connection,$check);
    if(empty($email)||empty($password)){
        $error="fill all required fields";
    }
    else if(mysqli_num_rows($checking)!=0){
        $error="client already exists";
    }
    else{
        $inseter="INSERT INTO users(email,password)values('$email','$password');";
        if(mysqli_query($connection,$inseter)){
            
            $message="successfully registered";
          
        }
        else{
            $error="error while inserting data try again";
        }
    }
  
    if(!empty($error)){
        echo ' <div id="error" class="alert">
        <h4>'.$error.'</h4>
        </div>  ';
    }if(!empty($message)){
        echo ' <div id="message" class="alert">'.$message.'</div>';
    }
                   
}
?> 
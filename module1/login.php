<?php
include "conn.php";
error_reporting(E_ERROR | E_PARSE);
session_start();
if($_SESSION['email']){
    header("location: index.php");
  }

if(isset($_POST["submit"])){
    $email = $_POST['email'];
	$password = $_POST['password'];
    
        $query = "SELECT * FROM login WHERE `email`='$email'";
        // echo $query;
        $data=mysqli_query($connectDB,$query) or die("error");
        if(mysqli_num_rows($data)>0){
          while($row=mysqli_fetch_assoc($data)){
            if(password_verify($password,$row['password'])){
                header("location: index.php");
                $_SESSION['email']=$email;
            }
            else{
                echo "Wrong Password";
            }
        }
    }
}
    

    // if(isset($_SESSION["email"])){
    //     header("location: index.php");
    //   }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <style>
        .main{
            display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
        }
        .form{
            display:flex;
            margin-top:50px;
            justify-content:space-between;
            flex-direction:column;
            align-items:center;
            height:300px;
        }
        input{
            font-size:20px;
            width:400px;
            height:40px;
        }
        .submit{
            font-size: 20px;
        }
    </style>
    <div class="main">
        <h1>Login page</h1>
        <form method="post" class="form" >
            <input type="email" name="email" placeholder="Enter your email">
            <input type="password" name="password" placeholder="Enter your password" minlength="6" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly')>
            <button class="submit" type="submit" name="submit">Submit</button>
            <a href="register.php" style="text-align:right;"> Register Now </a>
        </form>
    </div>
   
</body>
</html>

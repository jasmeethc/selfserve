<?php
include "conn.php";
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phoneno=$_POST['phoneno'];
  $pwd=$_POST['pwd'];
  $sql="INSERT INTO `login` (`client-name`,`name`,  `email-id`, `mobile-no.`, `password` ) VALUES ('$username', '$name', '$email', '$phoneno', '$pwd')";
  $result=mysqli_query($connectDB, $sql);
  if(!$result){
    echo "Kuch toh gadbad hai....";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.form-container {
    display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
            height:700px;
        }

label {

  text-transform: uppercase;
}


input {
  /* background: white; */
  font-size: 14px;
  display: block;
  padding: 10px 30px 10px 5px;
  margin: 10px 0 40px;
  border: 2px solid black;
  border-radius:5px;
  /* border-bottom: 2px solid grey; */
  font-size:16px;
            width:400px;
            height:40px;
}

.button {
  background: #66cc99;
  border: 0;
  padding: 15px 30px;
  margin-top: 20px;
  color: white;
  text-transform: uppercase;
  font-size: 13px;
}

 </style>
</head>



<body>

  <div class="form-container">
  <h1>Registration form</h1>
    <form name="registerForm" method="post">
      <label for="UserName">Client-Name *</label>
      <input type="text" id="username" name="username" placeholder="Enter Name" required/><p class="error-message"></p>
    
      <label for="Name">Name *</label>
      <input type="text" id="name" name="name" placeholder="Enter Name" required/><p class="error-message"></p>    
      <label for="e-mail">E-mail address *</label>
      <input type="e-mail" id="e-mail" name="email" placeholder="Enter Email-Id" required/>
    
      <label for="phoneNumber">Phone Number</label>
      <input type="number" id="phoneNumber" name="phoneno"  minlength="10" required placeholder="Enter Phone No."/>
    
      <label for="password">Password *</label>
      <input type="password" id="password" name="pwd"  placeholder="Enter Password" required minlength="6" title="6 characters minimum"/>
     
        <input class="button" type="submit" value="submit" name="submit" />
     </form>
</body>

</html>
<?php
include "conn.php";
if(isset($_POST['submit'])){
  $usernam=$_POST['usernam'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phoneno=$_POST['phoneno'];
  $password=password_hash($_POST['pwd'], PASSWORD_DEFAULT);
  $sql="INSERT INTO `register` (`client-name`,`name`,  `email-id`, `mobile-no.`, `password` ) VALUES ('$usernam', '$name', '$email', '$phoneno', '$password')";
  $result=mysqli_query($connectDB, $sql);
  
  $to = $email . ", mohamed.s@hockeycurve.com" ;
    $message = "Hello " . $name . ", <br> \r\n\r\n";

     $message .="Testing for mail function  <br>\r\n";
    $message .="Thanks and Regards  <br>\r\n";
    $message .="Development Team";
     $subject ="Registration of Client";
    $header = "From:sapna.g@hockeycurve.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
                 $header .= "Content-type: text/html\r\n";
                     $retval = mail ($to,$subject,$message,$header);
                    //  echo $header;
                     
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
            height:530px;
        }

label {

  text-transform: uppercase;
}


input {
  /* background: white; */
  font-size: 14px;
  display: block;
  padding: 10px 30px 10px 5px;
  margin: 5px 0 20px;
  border: 2px solid black;
  border-radius:5px;
  /* border-bottom: 2px solid grey; */
  font-size:16px;
            width:300px;
            height:20px;
}

.button {
  background: #66cc99;
  border: 0;
 padding: 10px 15px;
   margin-left: 80px;
  color: white;
  text-transform: uppercase;
  text-align:center;
  font-size: 13px;
  height:40px;
  width:200px;
}

 </style>
</head>



<body>

  <div class="form-container">
  <h1>Registration form</h1>
    <form method="POST">
    
      <label for="Name">Name</label>
      <input type="text" id="name" name="name" placeholder="Enter Name" required/>
      <label for="e-mail">E-mail address</label>
      <input type="email" name="email" placeholder="Enter Email-Id" required multiple/>
    <label for="usernam">Client-Name</label>
      <input type="text" name="usernam" placeholder="Enter Client Name" required />
      <label for="phoneNumber">Phone Number</label>
      <input type="tel" name="phoneno"  minlength="10" required placeholder="Enter Phone No."/>
     
      <label for="password">Password</label>
      <input type="password" name="pwd"  placeholder="Enter Password" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly')" required minlength="6" title="6 characters minimum"/>
     <input class="button" type="submit" value="submit" name="submit" >
     <a href="login.php" style="text-align:right;"> login </a>
     </form>
</body>

</html>

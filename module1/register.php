<?php
include "conn.php";
if(isset($_POST['submit'])){
  $clientname=$_POST['clientname'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $phonenumber=$_POST['phonenumber'];
  $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
  // $password=$_POST['pwd'];
  $sql="INSERT INTO `login` (`client_name`,`name`,  `email`, `number`, `password` ) VALUES ('$clientname', '$username', '$email', '$phonenumber', '$password')";

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
    <form name="registerForm" method="post">

      <label for="clientname">Client-Name *</label>
      <input type="text" id="username" name="username" placeholder="Enter Name" required/>
    
      <label for="username">Name *</label>
      <input type="text" id="name" name="name" placeholder="Enter Name" required/>

      <label for="e-mail">E-mail address *</label>
      <input type="email" id="e-mail" name="email" placeholder="Enter Email-Id" required multiple/>
    
      <label for="phoneNumber">Phone Number</label>
      <input type="tel" id="phoneNumber" name="phonenumber" pattern="^\d{10}$"  minlength="10" required placeholder="Enter Phone No."/>
     
      <label for="password">Password *</label>
      <input type="password" id="password" name="password"  placeholder="Enter Password" required minlength="6" title="6 characters minimum" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly')"/>

     <input class="button" type="submit" value="submit" name="submit" >
     <a href="login.php" style="text-align:right;"> login </a>
     </form>

     
</body>

</html>

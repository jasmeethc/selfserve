<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "self_serve"; 
$connectDB = mysqli_connect($servername,$username,$password,$dbname);
if (!$connectDB){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

?>
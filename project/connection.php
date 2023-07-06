<?php
$servername="localhost";
$username="root";
$pass="";
$db="2074";
$conn=mysqli_connect($servername,$username,$pass,$db);
if(!$conn){
    echo "failed";
}

?>
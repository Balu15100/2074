<?php
$servername="localhost";
$username="root";
$password="";
$database="2074";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "failed";
}
else{
    echo "success";
}


?>
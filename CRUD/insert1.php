<?php
include_once('db1.php');
$first=$_POST['user'];
$last=$_POST['last'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pwd=$_POST['pwd'];
$num=$_POST['number'];
$date=$_POST['dob'];
$gender=$_POST['gen'];
$qual=$_POST['qly'];
$address=$_POST['add'];
$sql="insert into employee (first,last,email,pass,pwd,number,dob,gender,qualification,address) values('$first','$last','$email','$pass','$pwd','$num','$date','$gender','$qual','$address')";
if(mysqli_query($conn,$sql)){
    echo "insert successfully";
}
else{
    echo "Error";
}

?>
<?php
include_once('db1.php');
if($_POST){
$first=$_POST['first'];
$last=$_POST['last'];
$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pwd=$_POST['pwd'];
$date=$_POST['dob'];
$gender=$_POST['gen'];
$num=$_POST['nu']; 
$qual=$_POST['qly'];
$address=$_POST['addr'];
$job=$_POST['job'];
$sql="insert into employee (first,last,user,email,pass,pwd,date,gender,number,qualification,address,job) values
('$first','$last','$user','$email','$pass','$pwd','$date','$gender','$num','$qual','$address','$job')";
if(mysqli_query($conn,$sql)){
    echo "inserted success";
}
else{
    echo "Error";
}
}
?>
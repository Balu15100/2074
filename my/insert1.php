<?php
include_once('db1.php');
$first=$_POST['first'];
$last=$_POST['last'];
$user=$_POST['user'];
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
    echo "<br>";
    echo $_POST['user']."<br>";
    echo $_POST['last']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['pass']."<br>";
    echo $_POST['pwd']."<br>";
    echo $_POST['number']."<br>";
    echo $_POST['dob']."<br>";
    echo $_POST['gen']."<br>";
    echo $_POST['qly']."<br>";
    echo $_POST['add'];
}
else{
    echo "Error";
}

?>
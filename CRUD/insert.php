<?php 
include_once('db.php');
if($_POST){
$user=$_POST['user'];
$m_num=$_POST['m_num'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
$dob=$_POST['dob'];
$qual=$_POST['qual'];
$gen=$_POST['gen'];
$mar=$_POST['mar'];
$add=$_POST['add'];
$sql="insert into student (user_name,mobile_num,email,pass,pass1,dob,qualification,gender,mar_status,address) values ('$user','$m_num','$email','$pass','$pass1','$dob','$qual','$gen','$mar','$add')";
if(mysqli_query($conn,$sql)){
}
else{
    echo "Error";
}
}




?>
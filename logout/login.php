<?php
include_once('connection.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $sql="SELECT * from logout where username='$username' and pass='$pass'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    // $count=mysqli_num_rows($result);
    // if($count==1){
        if($row){
        header("location:welcome.php");
    }
    else{
        echo '<script>';
        echo 'alert("Invalid username or password!");';
        echo "window.location.href='form.php'";
        echo "</script>";
    }
}



?>
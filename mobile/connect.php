<?php
include_once('db.php');
 if(isset($_POST['submit'])){
    $num=$_POST['number'];
    echo $num;
    $sql="SELECT * from number where number='$num'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
        header("location:welcome.php");
    }
    else{
        echo '<script>';
        echo 'alert("Invalid number!");';
        echo "window.location.href='form.php'";
        echo "</script>";
    }
 }
?>
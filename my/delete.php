<?php
include_once('db1.php');
if(isset($_GET['id'])){
 $number=$_GET['id'];
 $result="update employee set flag=1 where id=$number";
 if(mysqli_query($conn,$result)){
    header('location:fetch1.php');
 }
 else{
 echo "failed";
}

}
?>
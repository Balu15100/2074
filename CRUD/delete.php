<?php
include_once('db1.php');
if(isset($_GET['id'])){
 $number=$_GET['id'];
 $result="delete from employee where id=$number";
 if(mysqli_query($conn,$result)){
    echo "success";
 }
 else{
 echo "failed";
}

}
?>
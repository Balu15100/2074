<?php
include_once('db1.php');
$sql = "UPDATE employee SET last='balu' WHERE id=86";

if (mysqli_query($conn,$sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " ;
}
?>
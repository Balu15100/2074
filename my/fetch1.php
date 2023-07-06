<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <table class="table table-stripped">
    <tr>
        <th>S.no</th>
        <th>First</th>
        <th>Last</th>
        <th>Email</th>
        <th>number</th>
        <th>dob</th>
        <th>gender</th>k
        <th>qualification</th>
        <th>address</th>
        <th>view</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
     include_once('db1.php');
     $fetch="select * from employee";
     if($result=mysqli_query($conn,$fetch)){
       if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_array($result)){
          if($row['flag'] == 0 ){
          echo "<td>".$row['id']."</td>";
        echo "<td>".$row['first']."</td>";
        echo "<td>".$row['last']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['number']."</td>";
        echo "<td>".$row['dob']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['qualification']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>";
        echo '<a href="read1.php?id='.$row['id'].' "><span class="glyphicon glyphicon-eye-open"></span></a> ';
        echo "</td>";
        echo "<td>";
        echo '<a class="btn btn-primary" href="update1.php?id='.$row['id'].' ">Edit</a> ';
        echo "</td>";
        echo "<td>".'<a class="btn btn-danger" href="delete.php?id='.$row['id'].' ">Delete</a> ';"</td>";
      echo "</tr>";
      }
    }

       }else{
        echo "no data";
       }
     }
    else{
        echo "no table";
    }



?>


</table>
</body>
</html>
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
    <h3 class="text-center">PARTICULAR STUDENT DETAILS</h3>
    <table class="table table-stripped" border="1">
       <?php
      include_once('connection.php');
      if(isset($_GET['id'])){
       $number=$_GET['id'];
       $view="select * from employee where id=$number";
       if($stmt=mysqli_prepare($conn,$view)){
         if(mysqli_stmt_execute($stmt)){
            $result=mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) ==1){
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $user=$row['first'];
                $last=$row['last'];
                $user=$row['user'];
                $email=$row['email'];
                $dob=$row['date'];
                $gender=$row['gender'];
                $number=$row['number'];
                $qualification=$row['qualification'];
                $address=$row['address'];
                $job=$row['job'];
            }
         }
       }
      }
?>
<tr>
    <th>column_Name</th>
    <th>value</th>
</tr>
<tr>
    <th>first</th>
    <td><?php echo $row['first'] ?></td>
</tr>
<tr>
    <th>last</th>
    <td><?php echo $row['last']  ?></td>
</tr>
<tr>
    <th>user</th>
    <td><?php echo $row['user']  ?></td>
</tr>
<tr>
    <th>email</th>
    <td><?php echo $row['email'] ?></td>
</tr>
<tr>
    <th>dob</th>
    <td><?php echo $row['date']?></td>
</tr>
<tr>
    <th>gender</th>
    <td><?php echo $row['gender']?></td>
</tr>
<tr>
    <th>number</th>
    <td><?php echo $row['number']?></td>
</tr>
<tr>
    <th>qualification</th>
    <td><?php echo $row['qualification']?></td>
</tr>
<tr>
    <th>address</th>
    <td><?php echo $row['address'] ?></td>
</tr>
<tr>
    <th>Job</th>
    <td><?php echo $row['job'] ?></td>
</tr>
    </table>
</body>
</html>
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
       <?php
      include_once('db1.php');
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
                $email=$row['email'];
                $number=$row['number'];
                $dob=$row['dob'];
                $gender=$row['gender'];
                $qualification=$row['qualification'];
                $address=$row['address'];
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
    <td><?php echo $user ?></td>
</tr>
<tr>
    <th>last</th>
    <td><?php echo $last  ?></td>
</tr>
<tr>
    <th>email</th>
    <td><?php echo $email ?></td>
</tr>
<tr>
    <th>number</th>
    <td><?php echo $number?></td>
</tr>
<tr>
    <th>dob</th>
    <td><?php echo $dob?></td>
</tr>
<tr>
    <th>gender</th>
    <td><?php echo $gender?></td>
</tr>
<tr>
    <th>qualification</th>
    <td><?php echo $qualification?></td>
</tr>
<tr>
    <th>address</th>
    <td><?php echo $address ?></td>
</tr>
    </table>
</body>
</html>
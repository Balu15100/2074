<?php
session_start();
$servername="localhost";
$username="root";
$pass="";
$db="2074";
$conn = mysqli_connect($servername,$username,$pass,$db);
if(!$conn){ 
    echo "Failed";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
    body{
       justify-content:center;
       display:flex;
       height:100vh;
       align-items:center;
       background:aqua
    }
    .field{
        margin-bottom:20px;
    }
    div{
        background:pink;
        padding:120px;
        border-radius:20px;
        border:2px solid green;
    }
</style>
<body>
<div> 
  <h3 style="color:green">Please Login User</h3> 
  <form method="post" action="form.php">
    <input type="text" class="field" name="username" placeholder="username"><br>
    <input type="password" class="field" name="pass" placeholder="password" ><br>
    <input type="submit" class="field" name="login" value="login">
  </form>
</div>
<?php
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $pass=$_POST['pass'];
      $select=mysqli_query($conn,"SELECT * FROM logout WHERE username='$username' AND pass='$pass'");
      $row=mysqli_fetch_array($select);
      $count=mysqli_num_rows($select);
      if(is_array($row) &&$count==1){
      $_SESSION["username"]=$row['username']; 
      $_SESSION["pass"]=$row['pass'];
      if(isset($_POST['username'])){
        header('location:login.php');
    }
     }
else{
    echo '<script type="text/javascript">';
    echo 'alert("Invalid username or password!");';
    echo "window.location.href='form.php'";
    echo "</script>";
}
}
// if(isset($_POST['username'])){
//     header('location:login.php');
// }
?>
</body>
</html>
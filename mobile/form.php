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
    .a {
        position:relative;
        left:100px
    }
</style>
<body>
<div> 
  <h3>Mobile OTP</h3> 
  <form method="post" action="connect.php" name="form">
    <label>Number:</label>
    <input type="text" class="field" name="number" placeholder="enter number" ><br>
    <input type="submit" class="field a" name="submit" value="login">
  </form>
</div>

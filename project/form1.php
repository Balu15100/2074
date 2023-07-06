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
    <form class="form-horizontal" method="post" action="insert1.php">
    <div class="container">
     <h1>REGISTRATION FORM</h1>
     <div class="form-group">
        <label class="control-label col-sm-2" for="user">First Name:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter first name" name="user">
        </div>
     </div>
     <div class="form-group">
        <label class="control-label col-sm-2" for="last">Last Name:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter last name" name="last">
        </div>
     </div>
     <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" placeholder="Enter Email" name="email">
        </div>
     </div>
     <div class="form-group">
        <label class="control-label col-sm-2" for="pass">Password:</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" placeholder="Enter Password" name="pass">
        </div>
     </div>
     <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" placeholder="Enter confirm password" name="pwd">
        </div>
     </div>
     <div class="form-group">
        <label class="control-label col-sm-2" for="number">Number:</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" placeholder="Enter Number" name="number">
        </div>
     </div>
     <div class="form-group">
        <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
        <div class="col-sm-10">
        <input type="date" class="form-control"  name="dob">
        </div>
     </div>
     <div class="form-group">
        <label class="control-label col-sm-2" for="gen">Gender:</label>
        <div class="col-sm-10">
        <input type="radio" value="male" name="gen">&nbsp;&nbsp;male&nbsp;&nbsp;
        <input type="radio" value="Female" name="gen">Female&nbsp;&nbsp;
        <input type="radio" value="other" name="gen">&nbsp;&nbsp;other&nbsp;&nbsp;
        </div>
     </div>
     <div class="form-group">
        <label class="control-label col-sm-2">Qualification:</label>
        <div class="col-sm-10">
                 <select name="qly" class="form-control">
        <option value="b.sc">B.sc</option>
        <option value="b.tech">B.Tech</option>
        <option value="b.com">B.com</option>
</select> 
</div>
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address:</label>
      <div class="col-sm-10">          
       <textarea rows="3" cols="10" class="form-control" name="add"></textarea>
      </div>
    </div>
    <button class="btn btn-primary" value="submit" style="position:relative;left:200px">Submit</button>
</div>
    </form>
</body>
</html>

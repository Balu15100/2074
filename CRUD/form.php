<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrtion Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal" method="POST" action="insert.php">
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">User Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user" placeholder="Enter username" name="user">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Mobile Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="m_num" placeholder="+91 123456789" name="m_num">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass1">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date Of Birth:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="pwd"  name="dob">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Qualification:</label>
      <div class="col-sm-10">          
          <select class="form-control" name="qual">
              <option>--Select U r Qualification--</option>
            <option value="bsc">BSC</option>
              <option value="bcom">BCOM</option>
              <option value="agri">AGRI</option>
              <option value="btech">BTECH</option>
              <option value="msc">MSC</option>
              <option value="mca">MCA</option>        
          
          
          </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Gender:</label>
      <div class="col-sm-10">          
        <input type="radio" name="gen" value="male"> &nbsp;&nbsp; Male &nbsp;&nbsp; 
        <input type="radio" name="gen" value="female"> FeMale &nbsp;&nbsp; 
        <input type="radio" name="gen" value="others"> &nbsp;&nbsp; Others 
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Martial Status:</label>
      <div class="col-sm-10">          
        <input type="radio" name="mar" value="maried"> &nbsp;&nbsp; Maried &nbsp;&nbsp; <input type="radio" name="mar" value="un_maried"> Un Maried &nbsp;&nbsp; <input type="radio" name="mar" value="divorce"> &nbsp;&nbsp; Divorced  
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address:</label>
      <div class="col-sm-10">          
       <textarea rows="3" cols="10" class="form-control" name="add"></textarea>
      </div>
    </div>
      
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
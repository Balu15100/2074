<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
  label{
    color:white
  }
  .btn{
    position: relative;
    left:200px;
    background:none;
    border:2px solid white;
    padding:10px 30px 10px 30px;
  }
  select{
    height:35px;width:100%;border:none;border-radius:5px
  }
  .container{
    border-radius:100px
  }
  .a{
    background:white;
    width:72%;position:relative;left:16px;
    padding:15px
  }
  img{
    width:50px;height:50px;
    position:relative;
    left:600px;
  }
  </style>
<body style="margin-top:50px;">
<div class="container" style="background:#29afdf;opacity:0.7">
  <h2 style="margin-top:50px;margin-left:80px;font-weight:bold;color:white;font-size:50px">Contact Form</h2>
  <p style="margin-left:80px;color:white">Please fill in your information and well'll be sending your order in  no time</p>
  <form class="form-horizontal" action="balu.php" style="height:550px;margin-top:30px" method="post">
      <div class="form-group">
      <label class="control-label col-sm-2" for="first">Your Name:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="first" placeholder="First Name..">
      </div>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="last" placeholder="Last name.." >
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Your Email:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="email" placeholder="eg.hello@contact.net" name="last">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone*</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="phone1" placeholder="###">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="phone2" placeholder="###">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="phone3" placeholder="####">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="msg">Message Subject:</label>
      <div class="col-sm-9">
        <select name="mySelect">
          <option value="msg" disabled="disabled" selected>Other</option>
  <option value="full">Telangana</option>
  <option value="offers">Andhra Pradesh</option>
  <option value="none">None</option>
</select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="msg1">Message:</label>
      <div class="col-sm-9">
       <textarea class="form-control" rows="6" cols="76" name="msg1"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">verification:</label>
      <div class="col-sm-10 a">          
        <input type="checkbox" class="form-check-input" style="margin:10px 10px">
        <spans>I'm not a robot</span>
        <img src="images/capcha.png">
      </div>
    </div>
    <hr>
    <button class="btn btn-primary" onclick="fun()">Submit Form</button>
  </form>
</div>
</body>
</html>
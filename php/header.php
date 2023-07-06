<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/script.js"></script>
    <link rel=stylesheet href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/javascript.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
<div class="container-fluid z">
        <header>
          <div class="row bg-light">
            <div class="col-12 col-sm-7 col-md-7">
              <div class="mx-5 mt-2">
                <h6>Email:balakrishnad15100@gmail.com</h6>
            </div>
            </div>
            <div class="col-12 a col-sm-5 col-md-5">
              <div class="mx-5 mt-2">
            <a href="https://www.linkedin.com/in/bala-krishna-28b785191" style="text-decoration:none"><i class="bi bi-linkedin px-3"> Linkedin</i></a>
            <a href="https://m.facebook.com/balakrishna.danduprolu" style="text-decoration:none"><i class="bi bi-facebook px-3"> Fackbook</i></a> 
            <i class="bi bi-instagram px-3">Instagram</i>
            </div>
          </div> 
          </div>
          </header> 
          </div>
          <nav>
            <div class="navbar navbar-expand-lg" style="background:skyblue;">
              <a href="" class="navbar-brand mx-5"><img src="images/bk8.jpg" class="abc"></a>
              <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu"><i class="bi bi-list"></i></button>
              <div class="navbar-collapse collapse" id="menu">
              <ul class="navbar-nav">
                <li class="nav-item"><a href="home.php" class="nav-link text-light  mx-3 fs-5">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light mx-3 fs-5">About</a></li>
                <li class="nav-item"><a href="service.php" class="nav-link text-light mx-3 fs-5">Services</a></li>
                <li class="nav-item"><a href="#Modal" class="nav-link text-light mx-3 fs-5" data-bs-toggle="modal">Register</a></li>
                <li class="nav-item"><a href="#Modal" class="nav-link text-light mx-3 fs-5" data-bs-toggle="modal">Login</a></li>
                <li class="nav-item"><a href="#footer" class="nav-link text-light mx-3 fs-5">Contacts</a></li>
                <li class="nav-item"><a href="careers.php"   class="fs-5 nav-link text-light mx-3">Carriers</a></li>
                <a href="#Model" data-bs-toggle="modal" class="btn btn-success text-light mx-2 fs-5">Admin</a>
              </ul>
            </div>
            </div>
          </nav>
          <div class="modal fade" id="Modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registation Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form action="insert1.php" method="post">
        <div class="form-group">
          <div class="row">
            <div class="col-4">
      <label class="control-label" for="first">First Name:</label>
      </div>
      <div class="col-8">
      <input type="text" name="first" id="first" class="form-control" placeholder="Enter First Name" required>
      </div>
      </div>
        </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="last">Last Name:</label>
      </div>
      <div class="col-8">
      <input type="text" name="last" id="last" class="form-control" placeholder="Enter Last Name" required>
      </div>
      </div>
      </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="first">User Name:</label>
      </div>
      <div class="col-8">
      <input type="text" name="user" id="user" class="form-control" placeholder="Enter User Name" required>
      </div>
      </div>
      </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="email">Email:</label>
      </div>
      <div class="col-8">
      <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
      </div>
      </div>
      </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="pass">Password:</label>
      </div>
      <div class="col-8">
      <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Password" required>
      </div>
      </div>
      </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="pwd">Confirm Name:</label>
      </div>
      <div class="col-8">
      <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Enter Confirm password" required>
      </div>
      </div>
      </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="dob">Date of Birth:</label>
      </div>
      <div class="col-8">
      <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter date of birth" required>
      </div>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label" for="gen">Gender:</label><br>
      <input type="radio" name="gen" id="gen" value="male"> Male&nbsp;&nbsp;
      <input type="radio" name="gen" id="gen" value="Female"> Female&nbsp;&nbsp;
      <input type="radio" name="gen" id="gen" value="other"> Other
      </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="num">Mobile Number:</label>
      </div>
      <div class="col-8">
      <input type="number" name="nu" id="num" class="form-control" placeholder="Enter number" required>
      </div>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label" for="qly">Qualification:</label><br>
      <input type="radio" name="qly" id="gen" value="b.tech"> B.Tech&nbsp;&nbsp;
      <input type="radio" name="qly" id="gen" value="b.sc"> B.sc&nbsp;&nbsp;
      <input type="radio" name="qly" id="gen" value="other"> Other
      </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="addr">Address:</label>
      </div>
      <div class="col-8">
      <textarea type="text" name="addr" id="addr" class="form-control" rows="6" cols="6" required></textarea>  
      </div>
      </div>
      </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="res">Resume:</label>
      </div>
      <div class="col-8">
      <input type="file" name="res" id="res" class="form-control">
      </div>
      </div>
      </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="img">Image:</label>
      </div>
      <div class="col-8">
      <input type="file" name="num" id="img" class="form-control">
      </div>
      </div>
      </div> 
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="job">Job Title:</label>
      </div>
      <div class="col-8">
      <input type="text" name="job" id="job" class="form-control" placeholder="Enter job title" required>
      </div>
      </div>
      </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>

<div class="modal fade" id="Model">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
        <div class="form-group">
          <div class="row">
            <div class="col-4">
      <label class="control-label" for="email">UserName:</label>
      </div>
      <div class="col-8">
      <input type="text" name="username" id="email" class="form-control" placeholder="Enter username" required>
      </div>
      </div>
        </div>
      <div class="form-group">
      <div class="row mt-2">
      <div class="col-4">
      <label class="control-label" for="pwd">Password:</label>
      </div>
      <div class="col-8">
      <input type="password" name="pass" id="pwd" class="form-control" placeholder="Enter password" required>
      </div>
      </div>
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
</div>
</form>
</div>
</div>
</div>
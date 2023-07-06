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
<style>
  li:hover a{
    border-bottom:2px solid red;
  }
</style>
<body style="overflow-x:hidden">
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
              <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="" class="nav-link text-light  mx-3 fs-5">Home</a></li>
                <li class="nav-item"><a href="#us" class="nav-link text-light mx-3 fs-5">About</a></li>
                <li class="nav-item"><a href="#services" class="nav-link text-light mx-3 fs-5">Services</a></li>
                <li class="nav-item"><a href="#Modal" class="nav-link text-light mx-3 fs-5" data-bs-toggle="modal">Register</a></li>
                <li class="nav-item"><a href="#Model" class="nav-link text-light mx-3 fs-5" data-bs-toggle="modal">Login</a></li>
                <li class="nav-item"><a href="#footer" class="nav-link text-light mx-3 fs-5">Contacts</a></li>
                <li class="nav-item"><a href="#balu"   class="fs-5 nav-link text-light mx-3">Carriers</a></li>
                <a href="#Model" data-bs-toggle="modal" class="btn btn-success text-light mx-2 fs-5">Admin</a>
              </ul>
            </div>
            </div>
          </nav> 
          <div class="container-fluid g-0 img-fluid" style="background:url(images/bb.jpg);background-size:cover;height:600px">
            <article>
              <div id="carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="margin-top:100px">
      <img src="images/html1.png" class="d-flex bk rounded-circle mx-auto align-content-center img-fluid">
    </div>
    <div class="carousel-item" style="margin-top:100px">
      <img src="images/css4.png" class="d-flex bk rounded-circle mx-auto align-content-center img-fluid">
    </div>
    <div class="carousel-item" style="margin-top:100px">
      <img src="images/js4.jpg" class="d-flex bk rounded-circle mx-auto align-content-center img-fluid">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
  </div>
</div>
            </article>
          </div>
          <div class="container-fluid">
          <aside>
            <div class="row" id="us">
              <h1 class="main z">ABOUT US</h1>
              <div class="col-12 x col-sm-6 col-md-6">
                <div class=" mx-5" style="margin-top:100px">
              <h1 class="display-6 fw-bold text-primary">Hi</h1>
              <h1 class="display-6 fw-bold text-primary">My name is</h1>
              <h1 class="display-6 fw-bold ab">Bala krishna Danduprolu</h1>
              <h1 class="display-6 fw-bold text-primary">Completed B.tech</h1>
              <a href="https://in.docworkspace.com/d/sIPfOve8u9oWtpAY?sa=e1&st=0t" class="btn btn-primary mt-2 ">Resume</a>
            </div>
            </div>
            <div class="col-12 main4 col-sm-6 col-md-6">
              <img src="images/bk1.jpg" class="kr mt-4 mx-4">
            </div>
            </aside>
          </div>
<!-- Modal -->
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
      <div class="container" id="balu">
        <h1 class="text-center mt-5 text-info y">CAREERS</h1>
        <div class="row">
        <div class="col-12 mt-5 e col-sm-4 col-md-4">
<div class="flip-card"> 
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 120<br>
    <a href="" class="btn btn-info">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
      <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5> 
      <p>1.Develop brand new products from scratch</p>
      <p>2.Interact with Product manager/UX designer, brainstorm on product ideas,
requirements and design a solution</p>
<h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
<p>1.In-depth understanding of the entire web development process</p> 

    </div>
  </div>
</div>
<h3 class="text-center">Web-Developer</h3>
</div>
<div class="col-12 mt-5 f col-sm-4 col-md-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 157<br>
    <a href="" class="btn btn-danger">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5> 
    <p>1.Write “clean”, well-designed code.</p>
    <p>2.Produce detailed specifications.</p>
    <p>3.Troubleshoot, test and maintain the core product </p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.Demonstrable knowledge of web technologies including HTML etc.</p>
  </div>
  </div>
</div>
<h3 class="text-center">PHP-Developer</h3>
</div>
<div class="col-12 mt-5 g col-sm-4 col-md-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 200<br>
    <a href="" class="btn btn-success">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5>
    <p>1.Contribute to all stages of software development lifecycle.</p>
    <p>2.Design, implement and maintain Java-based applications that can be high-volume and low-latency.</p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.Excellent written and verbal communication.</p>
    </div>
  </div>
</div>
<h3 class="text-center">Java-Developer</h3>

</div>

</div>
<div class="row">
        <div class="col-12 mt-5 e col-sm-4 col-md-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 122<br>
    <a href="" class="btn btn-secondary">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5>
    <p>1.Writing effective and scalable Python codes</p>
    <p>2.Designing and implementing robust applications</p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.Degree in Computer Science, Engineering or a related field</p>
    <p>2.You have prior experience as a Python Developer</p>
    </div>
  </div>
</div>
<h3 class="text-center">Python-Developer</h3>
</div>
<div class="col-12 mt-5 f col-sm-4 col-md-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 1509<br>
    <a href="" class="btn btn-primary">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5>
    <p>1.Work with development teams and product managers to ideate software solutions</p>
    <p>2.Design client-side and server-side architecture</p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.Proven experience as a Full Stack Developer or similar role</p>
    <p>2.Experience developing desktop</p>
    </div>
  </div>
</div>
<h3 class="text-center">Full stack-Developer</h3>
</div>
<div class="col-12 mt-5 g col-sm-4 col-md-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 1346<br>
    <a href="" class="btn" style="background:yellow">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5>
    <p>1.Work with other developers to ensure that the website is functional and visually appealing.</p>
    <p>2.Use analytics to test client enjoyment.</p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.Proficiency in HTML, JavaScript, jQuery, and CSS.</p>
  </div>
  </div>
</div>
<h3 class="text-center">UI-Developer</h3>
</div>
</div>
<div class="row">
        <div class="col-12 mt-5 e col-sm-4 col-md-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 1704<br>
    <a href="" class="btn" style="background:pink">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5>
    <p>1.Adopt a pleasing user interface to guarantee that web applications and other projects provide a great experience.</p>
    <p>2.Inform visitors of the design concepts and UI layout of your website.</p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.Knowledge of the programs</p>
    </div>
  </div>
</div>
<h3 class="text-center">UX-Developer</h3>
</div>
<div class="col-12 mt-5 f col-sm-4 col-md-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 1103<br>
    <a href="" class="btn" style="background:orange">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5>
    <p>1.Bachelor’s degree in computer science, information technology, or a similar field.</p>
    <p>2.Knowledge of REACT tools including React.js, Webpack, Enzyme, Redux, and Flux.</p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.Knowledge of REACT tools including React.js, Webpack.</p>
    </div>
  </div>
</div>
<h3 class="text-center">React JS-Developer</h3>
</div>
<div class="col-12 mt-5 g col-sm-4 col-md-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 973<br>
    <a href="" class="btn" style="background:green">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5>
    <p>1.Integration of user-facing elements developed by front-end developers with server side logic</p>
    <p>2.Writing reusable, testable, and efficient code</p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.At least two years' experience as a Node.</p>
    </div>
  </div>
</div>
<h3 class="text-center">Node JS-Developer</h3>
</div>
</div>
<div class="row">
        <div class="col-12 mt-5 e col-sm-4 col-md-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 9832<br>
    <a href="" class="btn" style="background:teal">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5>
    <p>1.Designing and developing user interfaces using angularJS best practices.</p>
    <p>2.Adapting interface for modern internet applications using the latest front-end technologies.</p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.Knowledge of JavaScript MV-VM/MVC frameworks including AngluarJS.</p>
    </div>
  </div>
</div>
<h3 class="text-center">Angular JS-Developer</h3>
</div>
<div class="col-12 mt-5 f col-sm-4 col-md-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 4508<br>
    <a href="" class="btn" style="background:lime">Hover Here</a>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5>
    <p>1.Use markup languages like HTML to create user-friendly web pages</p>
    <p>2.Collaborate with back-end developers and web designers to improve usability</p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.Proven work experience as a Front-end developer</p>
    </div>
  </div>
</div>
<h3 class="text-center">Front end-Developer</h3>
</div>
<div class="col-12 mt-5 g col-sm-4 col-md-4">  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 style="margin-top:100px">No of posts 6574<br>
    <a href="" class="btn" style="background:purple">Hover Here</a></h3>
    </div>
    <div class="flip-card-back px-3">
    <h5 class="text-dark text-decoration-underline fw-bold">Responsibilities</h5>
    <p>1.Excellent foundation in computer science, algorithms, and web design</p>
    <p>2.Experience in writing highly secure web applications</p>
    <h5 class="text-dark text-decoration-underline fw-bold">Requirements</h5>
    <p>1.Write code and tests, build prototypes, resolve issues, and profile and analyze bottlenecks</p>

    </div>
  </div>
</div>
<h3 class="text-center">Back end-Developer</h3>
</div>
</div>
</div>
 <div class="container-fluid">
  <h1 class="text-center mt-5 y">OUR TEAM</h1>
  <div class="row mt-5">
<div class="col-12 col-sm-3 col-md-3">
  <div class="R">
<img src="images/gopi.jpg" class="rounded h rounded-circle mx-5 my-4" style="width:200px;height:200px">
<h3 class="text-center">GOPI CHAND</h3>
<h4 class="text-center text-success">Web Developer</h4>
</div>
</div>
<div class="col-12 col-sm-3 col-md-3">
<div class="R">
<img src="images/chandu.jpg" class="rounded i rounded-circle mx-5 my-4" style="width:200px;height:200px">
<h3 class="text-center">SAI SRINIVAS</h3>
<h4 class="text-center text-success">Web Developer</h4>
</div>
</div>
<div class="col-12 col-sm-3 col-md-3">
<div class="R">
<img src="images/koti.jpg" class="rounded j rounded-circle mx-5 my-4" style="width:200px;height:200px">
<h3 class="text-center">KOTESWARARAO</h3>
<h4 class="text-center text-success">Web Developer</h4>
</div>
</div>
<div class="col-12 col-sm-3 col-md-3">
<div class="R">
<img src="images/naveen.jpg" class="rounded k rounded-circle mx-5 my-4" style="width:200px;height:200px">
<h3 class="text-center">NAVEEN</h3>
<h4 class="text-center text-success">Web Developer</h4>
</div>
</div>
  </div>
</div> 

<div class="container">
      <div class="row mt-5">
      <h1 class="text-center" id="services">SERVICES</h1>
        <div class="col-12 l col-sm-4 col-md-4">
            <div class="service-item">
                <img src="images/ky.jpg" class="img-fluid" style="width:400px;height:400px">
                <div class="service-img">
                    <img src="images/ky.jpg" class="img-fluid w-100 h-100">
                </div>
                <div class="service-detail">
                <div class="service-title">
                 <hr class="w-25">
                 <h3 class="mb-0">DDUGKY-VISION</h3>
                 <hr class="w-25">
                </div>
                <div class="service-text">
                    <p class="text-light">To be a Centre of Excellence and a global leader for policy design and implementation in skilling and placement linked skill programs for rural youth of the developing countries.</p>
                </div>
                </div>
                <a href="" class="btn btn-light">Read More</a>
            </div>
        </div>
        <div class="col-12 m col-sm-4 col-md-4">
            <div class="service-item">
                <img src="images/ky1.jpg" class="img-fluid" style="width:400px;height:400px">
                <div class="service-img">
                    <img src="images/ky1.jpg" class="img-fluid w-100 h-100">
                </div>
                <div class="service-detail">
                <div class="service-title">
                 <hr class="w-25">
                 <h3 class="mb-0">DDUGKY-MISSION</h3>
                 <hr class="w-25">
                </div>
                <div class="service-text">
                    <p class="text-light">To provide technical services such as monitoring, evaluation, training, content development, and research for the programs undertaken by Government at national level to enable rural poor youths including socially disadvantaged groups to secure a better future.</p>
                </div>
                </div>
                <a href="" class="btn btn-light">Read More</a>
            </div>
        </div>
        <div class="col-12 n col-sm-4 col-md-4">
            <div class="service-item">
                <img src="images/ky2.png" class="img-fluid" style="width:400px;height:400px">
                <div class="service-img">
                    <img src="images/ky2.png" class="img-fluid w-100 h-100">
                </div>
                <div class="service-detail">
                <div class="service-title">
                 <hr class="w-25">
                 <h3 class="mb-0">DDUGKY-BENFITS</h3>
                 <hr class="w-25">
                </div>
                <div class="service-text">
                    <p class="text-light">Deen Dayal Upadhyaya - Grameen Kaushalya Yojana is a Government of India youth employment scheme that works towards developing employability skills in rural underprivileged youth and place them in jobs that will give them regular monthly wages or above the minimum wages.</p>
                </div>
                </div>
                <a href="" class="btn btn-light">Read More</a>
            </div>
        </div>
      </div>
     </div>
     <footer id="footer">
      <div class="container-fluid" style="background:olive;height:540px">
        <div class="container">
        <div class="row mt-5 mx-3">
          <div class="col-4 mt-3 text-light o col-sm-4 col-md-4">
           <h5>BALAKRISHNA DANDUPROLU</h5>
           <p>1-267 kandulapadu Bandarulanka<br> Amalapuram mandal East Dist,AP</p>
          </div>
          <div class="col-4 mt-3 text-light p col-sm-4 col-md-4">
            <div class="mx-5">
           <p><i class="bi bi-telephone bc"></i>+91 8179616064</p>
           <P><i class="bi bi-telephone bc"></i>+91 9398176969</P>
          </div>
          </div>
          <div class="col-4 mt-5 q col-sm-4 col-md-4">
            <div class="mx-5">
           <button class="btn btn-info btn-sm btn-lg">More Details</button>
          </div>
          </div>
        </div>
      </div></br>
      <hr class="w-100 text-light">
      <div class="row" style="margin-left:80px"> 
        <div class="col-4 o col-sm-4 col-md-4">
      <h5 class="mx-5 text-info">Follow Us</h5>
      <i class="bi bi-facebook bc mx-3"></i>
      <i class="bi bi-whatsapp bc mx-3"></i>
      <i class="bi bi-github bc mx-3"></i>
      <i class="bi bi-instagram bc mx-3"></i>
      </div>
      <div class="col-4 p col-sm-4 col-md-4">
          <h4 class="text-light">Let's stay connected</h4>
          <input type="email" name="email" id="email" class="form-control w-75" placeholder="Enter Email" style="background:none;border:none;border-bottom:2px solid white;"> 
          <input type="submit" value="submit" class="p-2 mt-2 btn-info px-3 rounded btn-sm btn-lg">
        </div>
        <div class="col-4 q col-sm-4 col-md-4">
          <h6 class="text-light">CALL US</h6>
          <h5 class="text-light">817 961 6064</h5>
        </div>
      </div></br>
      <hr class="w-100 text-light">
      <div class="row">
        <div class="col-6 p col-sm-8 col-md-8">
         <p class="text-light">@2023 Balu software solutions pvt ltd,Andhra pradesh</p>
        </div>
        <div class="col-6 q col-sm-4 col-md-4">
         <p class="text-light">ALL COPLY RIGHTS RESERVED BY |<span class="text-info"> BALAKRISHNA </span>|</p>
        </div>
      </div>
      </div>
     </footer>
</body>
<script>
ScrollReveal({
     reset: true,
     distance:'20px',
     duration:500,
     delay:100   
    });

     ScrollReveal().reveal('.z,.y',{ delay: 500,origin:'top' });
     ScrollReveal().reveal('.kr', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.x', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.e', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.f', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.g', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.h', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.i', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.j', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.k', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.l', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.m', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.n', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.o', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.p', { delay: 500,origin:'top' });
     ScrollReveal().reveal('.q', { delay: 500,origin:'top' });
</script>
</html>
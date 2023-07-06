<?php
include_once('connection.php');
if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];      
    $first= trim($_POST["first"]);    
    $last = trim($_POST["last"]);
    $user = trim($_POST["user"]);
    $email = trim($_POST["email"]);
    $pass = trim($_POST["pass"]);
    $pwd = trim($_POST["pwd"]);
    $dob = trim($_POST["dob"]);
    $gen=trim($_POST['gen']);
    $num = trim($_POST["nu"]);
    $qua=trim($_POST['qly']);
    $add=trim($_POST['addr']);
    $job=tril($_POSt['job']);
    
        $sql = "UPDATE employee SET first=?, last=?, user=?, email=?, pass=?, pwd=?, date=?, gender=?,number=?, qualification=?, address=?,job=? WHERE id=?";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "ssssssssisssi", $f,$l,$a,$u, $e, $s,$a,$g, $m,$q,$add,$jb, $param_id);
            $f = $first;
            $l = $last;
            $a = $user;
            $u = $email;
            $e = $pass;
            $s = $pwd;
            $a = $dob;
            $g = $gen;
            $m = $num;
            $q = $qua;
            $ad= $add;
            $jb =$job;
            $param_id= $id;
            if(mysqli_stmt_execute($stmt)){
                echo 'Records updated successfully. Redirect to landing page' ;
                header("location:fetch1.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        mysqli_stmt_close($stmt);
     }
    mysqli_close($conn);
} else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id =  trim($_GET["id"]);  
        $sql = "SELECT * FROM employee WHERE id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            $param_id = $id;
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $first = $row["first"];
                    $last = $row["last"];
                    $user = $row["user"];
                    $email = $row["email"];
                    $pass = $row["pass"];
                    $pwd = $row["pwd"];
                    $dob = $row["date"];
                    $gender = $row["gender"];
                    $number = $row["number"];
                    $qualification=$row["qualification"];
                    $address=$row["address"];
                    $job = $row["job"];
                    
                } else{
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }  else{
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first" class="form-control" value="<?php echo $first ; ?>">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input name="last" class="form-control" value="<?php echo $last; ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input name="user" class="form-control" value="<?php echo $user; ?>"></textarea>
                        </div>
            
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="pass" class="form-control" value="<?php echo $pass; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" name="pwd" class="form-control" value="<?php echo $pwd; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Date of birth</label>
                            <input type="date" name="dob" class="form-control" value="<?php echo $dob; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label> Gender <?php if($row['gender']=='male'){?>
    <input type="radio" name="gen"  value="male" checked/> Male 
    <input type="radio" name="gen"  value="female"/> Female
    <input type="radio" name="gen"  value="female"/> Others <br /> 
    <?php } else {?><input type="radio" name="gen"  value="male" checked/> Male <input type="radio" name="gen"  value="female" checked/> Female<?php }?>
   
                            
                        </div>
                        <div class="form-group">
                            <label>number</label>
                            <input type="number" name="num" class="form-control" value="<?php echo $number; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Qualification</label>
                            <select style="width:80%;" id="qua" name="qua">
    <option>--Select--</option>
     <option value="B.tech">B.Tech</option>
     <option value="B.sc">B.SC</option>
     <option value="B.com">B.COM</option>
     <option value="agri">Agri</option>
    </select><br><br>                 
                       </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea type="text" name="add" class="form-control"><?php echo $address?></textarea>
                            
                        </div>
                        <div class="form-group">
                            <label>Job Title:</label>
                            <textarea type="text" name="job" class="form-control"><?php echo $job?></textarea>
                            
                        </div>
                          <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="update">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
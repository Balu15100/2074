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
        <table class="table table-stripped table-responsive">
            
            <?php
            include_once 'db.php';
            
            if(isset($_GET["number"])){
                $number = $_GET['number'];
               // echo $id;              
            
            $view = "select * from student where number= $number";
                
                
                
            if($stmt = mysqli_prepare($conn, $view)){
    
        if(mysqli_stmt_execute($stmt)){
            
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $name = $row["user_name"];
                $mnum = $row["mobile_num"];
                $email = $row["email"];
                $dob = $row["dob"];
                $qual = $row["qualification"];
                $gender = $row["gender"];
                 $status = $row["mar_status"];
                 $address = $row["address"];
                
            }
                    
            }
            }
        }
            ?>
            
            
            <tr>
            <th>Cloumn_Name</th>
            <th>Value</th>
            </tr>
            <tr>
                <th>user_name</th>
            <td><?php echo $name ?>                  
                
                </td>
            </tr>
             <tr>
                <th>mobile_num</th>
            <td><?php echo $mnum ?>                  
                
                </td>
            </tr>
             <tr>
                <th>email</th>
            <td><?php echo  $email ?>                  
                
                </td>
            </tr>
             <tr>
                <th>dob</th>
            <td><?php echo $qual ?>                  
                
                </td>
            </tr>
             <tr>
                 <th>qualification</th>
                 <td><?php echo $gender ?>                  
                
                </td>
            </tr>
             <tr>
                <th>gender</th>
            <td><?php echo $dob ?>                  
                
                </td>
            </tr>
             <tr>
                <th>mar_status</th>
            <td><?php echo   $status ?>                  
                
                </td>
            </tr>
             <tr>
                <th>address</th>
            <td><?php echo $address ?>                  
                
                </td>
            </tr>
            
        
        
        </table>
     
    </div>
    
    
    
    

</body>
</html>
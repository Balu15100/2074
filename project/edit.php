 <?php
include_once ('db1.php');
if(isset($_POST)){
$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pwd=$_POST['pwd'];
$number=$_POST['number'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$qualification=$_POST['qualification'];
$address=$_POST['address'];
$sql="update employee set first='$first',last='$last',email='$email',pass='$pass',
pwd='$pwd',number='$number',dob='$dob',gender='$gender',qualification='$qualification',address='$address'";
if(mysqli_query($conn,$sql)){

}
else{
    echo "error";
}
}



?> 
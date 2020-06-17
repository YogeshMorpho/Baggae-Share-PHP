<?php
session_start();


$con=mysqli_connect('localhost','root','');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,'baggage_share');

$name=$_POST['USN-su'];
$pass=$_POST['Pswd-su'];
$aad=$_POST['aadhar'];
$email=$_POST['email'];
$s="select * from registration where `USN-su`='$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
} 
  else {
    $reg = "insert into registration (`USN-su`,`Pswd-su`,`aadhar`,`email`) values ('$name','$pass','$aad','$email')";
    mysqli_query($con,$reg);
   // die('error: '. mysqli_error($con);111
   echo 'Registration Successfull';
   header('location:app.php');
    
}
?>


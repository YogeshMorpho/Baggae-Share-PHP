

<?php
session_start();


$con=mysqli_connect('localhost','root','');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,'baggage_share');

$name=$_POST['USN'];
$pass=$_POST['Pswd'];

$s="select * from registration where `USN-su`='$name' && `Pswd-su`='$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);
$e="select `email` from registration where `USN-su`='$name' && `Pswd-su`='$pass'";
$a="select `aadhar` from registration where `USN-su`='$name' && `Pswd-su`='$pass'";
$p="select `Pswd-su` from registration where `USN-su`='$name' && `Pswd-su`='$pass'";
$i="select `Id` from registration where `USN-su`='$name' && `Pswd-su`='$pass'";

$result2=mysqli_query($con,$e);
$rowe = mysqli_fetch_array($result2,MYSQLI_NUM);

$result3=mysqli_query($con,$a);
$rowa = mysqli_fetch_array($result3,MYSQLI_NUM);


$result4=mysqli_query($con,$i);
$rowi = mysqli_fetch_array($result4,MYSQLI_NUM);

if($num == 1){
    $_SESSION['username'] =$name;
    $_SESSION['email'] =$rowe[0];
    $_SESSION['aadhar']=$rowa[0];
    /*
    $obj->Id=$rowi[0];
    $obj->name=$name;
    $obj->password=$pass;
    $obj->email=$rowe[0];
    $obj->aadhar=$rowa[0];
    $my_obj=json_encode($obj);
    $_SESSION['userinfo']=$my_obj;
    */
    ob_start();
  echo "<script type='text/javascript'>
    var obj=new Object();
    obj.Id='$rowi[0]';
    obj.name='$name';
    obj.password='$pass';
    obj.email='$rowe[0]';
    obj.aadhar='$rowa[0]';
    var myJSON = JSON.stringify(obj);

    localStorage.setItem('bs/userinfo',myJSON);
    </script>";

    
    header('refresh:2;./pages/dashboard.html');

    ob_flush();
} 
  else {
   
    header('location:app.php');
}
?>


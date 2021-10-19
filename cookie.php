<?php include 'admin/dbconnection.php';?>


<?php
$_cookie_name = "loggedin";
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
    $cookie_value = $useremail;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30*30), "/"); // 
    header("location:http:welcome.php");

}

else
{
echo "<script>alert('Invalid username or password');</script>";
}
}
?>









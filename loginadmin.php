<?php
require 'Module/Credentials.php';
session_start();
if(isset($_POST["submit"])){
$username=$_POST['username'];
$password=$_POST['password'];
/*$password=  sha1($password);*/
$sql="SELECT * FROM admins WHERE username='$username' AND password='$password'";
$query=  mysqli_query($connection, $sql) or die(mysqli_error($connection));
$query2=  mysqli_num_rows($query);
if($query2>0){
    $_SESSION['admin']=$username;
    echo $username;
    echo '<script type="text/javascript">alert("Login Successful ")
       </script>';
    header("Location:management.php");
}  else {
    echo  '<script type="text/javascript">alert("Login failed!! wrong credentials");</script>';
}
}
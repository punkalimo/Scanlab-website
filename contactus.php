<?php
$title="Contact us";
$content="";
if(isset($_POST['contact'])){
    require 'Module/Credentials.php';
    $email=$_POST['email'];
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $sql="INSERT INTO queries(email,name,subject,message) VALUES('$email','$name','$subject','$message')";
    $query=  mysqli_query($connection, $sql) or die(mysqli_error($connection));
    if($query){
        $redirect=$_SERVER["HTTP_REFERER"];
    echo '<script type="text/javascript">alert("Submission Sucessful")</script>';
    header("Refresh:0; url='$redirect'");
    }
    else{
        echo '<script type="text/javascript">alert("error")</script>';
    }
}

include 'template.php';

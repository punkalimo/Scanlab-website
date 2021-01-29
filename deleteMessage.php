<?php

if(isset($_GET['delete'])){
    include 'Module/Credentials.php';
    $id=$_GET['delete'];
    echo $id;
    $sql=  mysqli_query($connection,"DELETE FROM queries WHERE ID='$id'") or die(mysqli_error($connection));
}

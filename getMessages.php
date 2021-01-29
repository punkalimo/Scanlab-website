<?php
include 'Module/Credentials.php';
$sql="SELECT * FROM queries";
$query=  mysqli_query($connection, $sql) or die(mysqli_error($connection));
$data = array();
while ($row = mysqli_fetch_object($query))
{
    array_push($data, $row);
}
echo json_encode($data);

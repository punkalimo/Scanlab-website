<?php
require 'Controllers/sparescontroller.php';
$title="Manage Spare Parts";
$sparescontroller=new sparescontroller();
$content=$sparescontroller->SparesOverviewTable();
if(isset($_GET['delete'])){
    $sparescontroller->DeleteSpares($_GET['delete']);
}
include 'template.php';
?> 
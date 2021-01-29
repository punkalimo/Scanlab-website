<?php
require 'controllers/sparescontroller.php';
$sparescontroller=new sparescontroller();
if(isset($_POST['types'])){
    $sparesTable=$sparescontroller->CreateSparesTables($_POST['types']);
}
 else {
    $sparesTable=$sparescontroller->CreateSparesTables('%');
}
$title='Spares overview';
$content=$sparescontroller->CreateSparesDropDownList().$sparesTable;
include 'template.php';



<?php
require 'controllers/audiocontroller.php';
$audiocontroller=new audiocontroller();
if (isset($_POST['types'])){
    $audioTable=$audiocontroller->CreateAudioTables($_POST['types']);
    
}else{
    $audioTable=$audiocontroller->CreateAudioTables('%');
}
$title='Audio Accessories Overview';
$content=$audiocontroller->CreateAudioDropDownList().$audioTable;
include 'template.php';
?>



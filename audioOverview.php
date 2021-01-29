<?php
require 'controllers/audiocontroller.php';
$title="Manage audio accessories";
$audiocontroller=new audiocontroller();
$content=$audiocontroller->AudioOverviewTable();
if(isset($_GET['delete'])){
    $audiocontroller->DeleteAudio($_GET['delete']);
}

include 'template.php';
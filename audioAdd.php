<?php
require'controllers/audiocontroller.php';
$audiocontroller=new audiocontroller();
$title="Add Audio Accessory";
if(isset($_GET['update'])){
    $title="Update Audio Accessories";
    $audio=$audiocontroller->GetAudioById($_GET['update']);
$content="<form action='' method='post'>
  <div class='form-group'>
  <legend>Update Audio Accessory</legend>
  <label for='name'>Name: </label>
    <input type='text' class='form-control' name='txtName' value='$audio->name'>
  </div>
  <div class='form-group'>
  <label for='type'>Type</label>
    <select class='form-control' name='ddlType'>
      <option value='%'>$audio->type</option>
      ".$audiocontroller->CreateOptionValues($audiocontroller->GetAudioTypes())."
    </select>
  </div>
  <div class='form-group'>
  <label for='name'>Price: </label>
    <input type='text' class='form-control' name='txtPrice' value='$audio->price'>
    <label for='name'>Image: </label>
    <select class='form-control form-control-lg' name='ddImage'>".$audiocontroller->GetImage()."
</select>
  </div>
  
  <div class='form-group'>
  <label for='name'>Description: </label>
    <textarea class='form-control' rows='3' name='txtDescription'>$audio->description</textarea>
  </div>
  <input type='submit'class='btn btn-primary' value='submit' name='submit'>
</form>
    
   ";
}else{
    $content="<form action='' method='post'>
  <div class='form-group'>
  <legend>Add New Spare Part</legend>
  <label for='name'>Name: </label>
    <input type='text' class='form-control' name='txtName'>
  </div>
  <div class='form-group'>
  <label for='type'>Type</label>
    <select class='form-control' name='ddlType'>
      <option value='%'>All</option>
      ".$audiocontroller->CreateOptionValues($audiocontroller->GetAudioTypes())."
    </select>
  </div>
  <div class='form-group'>
  <label for='name'>Price: </label>
    <input type='text' class='form-control' name='txtPrice'>
    <label for='name'>Image: </label>
    <select class='form-control form-control-lg' name='ddImage'>".$audiocontroller->GetImage()."
</select>
  </div>
  
  <div class='form-group'>
  <label for='name'>Description: </label>
    <textarea class='form-control' rows='3' name='txtDescription'></textarea>
  </div>
  <input type='submit'class='btn btn-primary' value='submit' name='submit'>
</form>
    
   ";
}

if(isset($_POST["txtName"])){
    $audiocontroller->InsertAudio();
}
include 'template.php';
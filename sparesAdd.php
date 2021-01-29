<?php
require 'controllers/sparescontroller.php';
$sparescontroller=new sparescontroller();
$title="Add new Spare Part";
if(isset($_GET['update'])){
    $title="Update Spare Part";
    $spares=$sparescontroller->GetSparesById($_GET['update']);
     $content="<form action='' method='post'>
  <div class='form-group'>
  <legend>Update Spare Part</legend>
  <label for='name'>Name: </label>
    <input type='text' class='form-control' name='txtName' value='$spares->name'>
  </div>
  <div class='form-group'>
  <label for='type'>Type</label>
    <select class='form-control' name='ddlType'>
      <option value='%'>$spares->type</option>
      ".$sparescontroller->CreateOptionValues($sparescontroller->GetSparesTypes())."
    </select>
  </div>
  <div class='form-group'>
  <label for='name'>Price: </label>
    <input type='text' class='form-control' name='txtPrice' value='$spares->price'>
    <label for='name'>Image: </label>
    <select class='form-control form-control-lg' name='ddImage'>".$sparescontroller->GetImage()."
</select>
  </div>
  
  <div class='form-group'>
  <label for='name'>Description: </label>
    <textarea class='form-control' rows='3' name='txtDescription'>$spares->description'</textarea>
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
      ".$sparescontroller->CreateOptionValues($sparescontroller->GetSparesTypes())."
    </select>
  </div>
  <div class='form-group'>
  <label for='name'>Price: </label>
    <input type='text' class='form-control' name='txtPrice'>
    <label for='name'>Image: </label>
    <select class='form-control form-control-lg' name='ddImage'>".$sparescontroller->GetImage()."
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
if(isset($_GET['update'])){
    if(isset($_POST["txtName"])){
    $sparescontroller->UpdateSpares($_GET['update']);
}
}else{

if(isset($_POST["txtName"])){
    $sparescontroller->InsertSpares();
}
}
include 'template.php';
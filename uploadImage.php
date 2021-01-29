<?php

$title="Upload New Image";
$content='<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="file">Filename: </label>
    <input type="file" class="form-control-file" name="file" id="file"><br>
    <input class="btn btn-primary" type="submit" name="submit" value="submit">
  </div>
</form>';
if(isset($_POST['submit'])){
$fileaType=$_FILES['file']['type'];
if(($fileaType=='image/gif')||($fileaType=='image/jpeg')||
        ($fileaType=='image/jpg')||($fileaType=='image/png')){
    if(file_exists('image/truck and trailers/'.$_FILES['file']['name'])){
    echo 'file already exists';}
         else {
            move_uploaded_file($_FILES['file']['tmp_name'], 'images/truck and trailers/'.$_FILES['file']['name']);
            echo 'Upload In '.'images/truck and trailers/'.$_FILES['file']['name'];
        }
        }
}
include 'template.php';
?>

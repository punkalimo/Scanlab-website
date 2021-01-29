<!DOCTYPE html>
<head>
    <script type="text/javascript" src="Module/messages.js"></script>
</head>
    <?php
$title="Management";
$content='<div class="dropdown">
  <button class="btn btn-primary  btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Manage Spares
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="sparesAdd.php">Add new spare part</a>
    <a class="dropdown-item" href="SparesOverview.php">Spares overview</a>
    <a class="dropdown-item" href="uploadImage.php">Upload spare part image</a>
  </div>
</div><br><div class="dropdown">
  <button class="btn btn-success  btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Manage audio accessories
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="audioAdd.php">Add Audio accessory</a>
    <a class="dropdown-item" href="audioOverview.php">Audio accessory overview</a>
    <a class="dropdown-item" href="#">Upload audio accessory image</a>
  </div>
</div><br>
<a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
         <div  id="messagesTable" class="dets" name="messagesTable" >
                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Action</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody id="messages"><br>
  <h2><span class="badge badge-info">Messages</span></h2>
    <td></td>
  </tbody>
</table>
                </div>';
if(isset($_GET['delete'])){
    include 'Module/Credentials.php';
    $id=$_GET['delete'];
    echo $id;
    $sql=  mysqli_query($connection,"DELETE FROM queries WHERE ID='$id'") or die(mysqli_error($connection));
}
include 'template.php';

<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <!--bootstrap integration -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=146346785565469&autoLogAppEvents=1" nonce="XQuIZLwn"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
        
    </head>
    <body>
        <div id="wrapper">
             <div class="container"> 
        <div class="jumbotron text-center" style="background-color:crimson">
                <h1 class="logo">SCANLAB</h1>
                <p class="logo1">MOTOR SPARES </p>
                
        </div>
    </div>
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="index.php">SCANLAB MOTOR SPARES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="spares.php">Spares</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="audio.php">Audio Accessories</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="" data-toggle="modal" data-target="#emailUpdates">Contact us</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
      </li>
      <?php if(isset($_SESSION["admin"])){ echo '<li class="nav-item">
          <a class="nav-link" href="management.php">Management</a>
      </li>';}?>
    
    </ul>
    
  </div>
</nav>
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            <div id="sidebar">
                <div class="fb-page" data-href="https://www.facebook.com/Scanlab-Motorspares-116143239784921/" data-tabs="timeline" data-width="250" data-height="510" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Scanlab-Motorspares-116143239784921/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Scanlab-Motorspares-116143239784921/">Scanlab Motorspares</a></blockquote></div>
                 </div>
           <div class="modal fade" id="emailUpdates" tabindex="-1" role="dialog" aria-labelledby="callAction" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="callAction">Contact us</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="contactUs.php" method="POST">
					<div class="form-group">
						<label>Email</label><br>
                                                <input type="text" class="form-control" name="email" placeholder="email address" required>
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                <label>Full name</label><br>
                                                <input type="text" class="form-control" name="name" placeholder="Full name" required>
                                                <label>Subject</label><br>
                                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                                <label>Message</label><br>
                                                <textarea class='form-control' rows='3' name='message'></textarea>
						<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button name="contact" type="submit" class="btn btn-primary submitBtn">Query</button>
				</div>
					</div>
					</form>
				</div>
				
				</div>
			</div>
			</div>

            <footer>
                <p>&copy;2020 All Rights Reserved</p>
            </footer>
        </div>
    </body>
</html>


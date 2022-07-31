

<?php
    session_start();
    if(isset($_POST['admin_login'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"nexa");
        $query = "select * from admin where email = '$_POST[email]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['email'] == $_POST['email']){
                if($row['password'] == $_POST['password']){
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    header("Location:admin_dashboard.php");
                }
                else{
                    echo "<script>alert('Wrong Password...!Please Try again');</script>";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

  <link href="https://fonts.googleapis.com/css?family=Damion" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700" rel="stylesheet">
  <link rel="icon" href="resources\images\main_icon.jpg" type="image/png">
  <link href = "./resources/css/reset.css" rel = "stylesheet">
  <link rel="stylesheet" href="New folder\resources\css\style.css">
  <title>Hotel nexa</title>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="content">
      <a href="Nexa\index.html" id = "main" class="desktop logo">Hotel nexa</a>
      <nav class="desktop">
        <ul>
          <li><a href="Nexa\index.html">Home</a></li>
          <li><a href="About.html">About Us</a></li>
          <li id = "main_id"><a href="accomodation.html">Accomodation</a></li>
          <li><a href="Nexa\gallery.html">Gallery</a></li>
          <li><a href="Contact.html">Contact</a></li>
          <li></li>
        </ul>
      </nav>
      <nav class="mobile">
        <ul>
          <li><a href="Nexa\index.html">Home</a></li>
          <li><a href="About.html">About Us</a></li>
          <li id = "main_id"><a href="accomodation.html">Accomodation</a></li>
          <li><a href = "Nexa\gallery.html">Gallery</a></li>
          <li><a href="Contact.html">Contact</a></li> 
        </ul>
      </nav>
    </div>
  </header>
  <br><br><br><br><br><br><br><br><br><br>


  <div class="row">
       	<div class="col-md-12">
       		<center><h3 style = "font-size:35px;">Admin Login Page</h3></center>
       	</div>
       </div><br><br><br>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<form action="" method="post">
			<div class="form-group">
		    	<label for="name">Email:</label>
		    	<input type="text" class="form-control" name="email" required="">
		  	</div>
			<div class="form-group">
		    	<label for="email">Password:</label>
		    	<input type="password" class="form-control" name="password" required="">
		  	</div>
		  	
				<button type="submit" class="btn btn-warning" name="admin_login">Login</button>
		</form>
        
        	</div>
        	<div class="col-md-2"></div>
        </div>




        <br><br><br><br><br><br><br><br><br><br>
   <!-- Footer -->
    <footer>
      <h1 style = "color:rgb(255, 0, 0);padding-top:3px;font-size: 30px;font-weight: bold;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Follow Us</h1>
      <div class = "social_med">
      <a href = "#"><img src = "resources\images\social_media_logos\iconfinder_1_Facebook_colored_svg_copy_5296499.png"></a>
      <a href = "#"><img src = "resources\images\social_media_logos\iconfinder_1_Twitter_colored_svg_5296514.png"></a>
      <a href = "#"><img src = "resources\images\social_media_logos\iconfinder_1_Instagram_colored_svg_1_5296765.png"></a>    
      <a href = "#"><img src = "resources\images\social_media_logos\iconfinder_1_Youtube_colored_svg_5296521.png"></a>
      <a href = "#"><img src = "resources\images\social_media_logos\linkedin.png"></a>
      <a href = "#"><img src = "resources\images\social_media_logos\pinterest.png"></a>
     </div>
     <br><br>
      <div class="content">
        <span class="copyright">© 2021  Hotel nexa, All Rights Reserved</span>
        <span class="location">Designed in IND</span>
      </div>
    </footer>
  </div>
  </body>
</html>
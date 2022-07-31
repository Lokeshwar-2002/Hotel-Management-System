<?php 
    session_start();
   if(isset($_POST['book_room'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"nexa");
        if($_POST['room_type'] == 'Single Room'){
            $query = "update single_room set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
        }
        if($_POST['room_type'] == 'Normal Double Room'){
            $query = "update normal_double_room  set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
        }
        if($_POST['room_type'] == 'King Double Room'){
           $query = "update king_double_room set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
        }
        if($_POST['room_type'] == 'Queen Double Room'){
            $query = "update queen_double_room set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
        }
        if($_POST['room_type'] == 'Double-Double (Twin Double) Room'){
          $query = "update double_double_twin_double_room set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
      }
      if($_POST['room_type'] == 'Twin Room'){
          $query = "update twin_room  set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
      }
      if($_POST['room_type'] == 'Hollywood Twin Room'){
         $query = "update hollywood_twin_room set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
      }
      if($_POST['room_type'] == 'Duplex Room'){
          $query = "update duplex_room set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',status = 1 where room_no = $_GET[rn]";
      }
        $query_run = mysqli_query($connection,$query);
        if($_SESSION['name'] == 'admin'){
            header("location:redirect_page.php");   
        }
        else{
            header("location:redirect_user.php");   
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
      <a href="index.html" id = "main" class="desktop logo">Hotel nexa</a>
      <nav class="desktop">
      <center><h1 style = "font-size: 36px; line-height: 45px; font-weight: 600; text-align: center;">Room Booking Page</h1></center>
      
      </nav>
      <nav class="mobile">
      <center><h1>Room Booking Page</h1></center>
      </nav>
    </div>
  </header>
  <br><br><br><br><br><br><br><br><br><br>



  <div class="row">
       	<div class="col-md-12">
       		
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-4"></div>
        	<div class="col-md-4">
        	<form action="" method="post">
			<div class="form-group">
		    	<label for="name">Room No:</label>
		    	<input type="text" class="form-control" name="room_no" value="<?php echo $_GET['rn'];?>" disabled>
		  	</div>
			<div class="form-group">
		    	<label for="email">Room Type:</label>
		    	<input type="text" class="form-control" name="room_type" value="<?php if($_GET['rt'] == 'a'){echo 'Single Room';}if($_GET['rt'] == 'b'){echo 'Normal Double Room';}if($_GET['rt'] == 'c'){echo 'King Double Room';}if($_GET['rt'] == 'd'){echo 'Queen Double Room';}if($_GET['rt'] == 'e'){echo 'Double-Double (Twin Double) Room';}if($_GET['rt'] == 'f'){echo 'Twin Room';}if($_GET['rt'] == 'g'){echo 'Hollywood Twin Room';}if($_GET['rt'] == 'h'){echo 'Duplex Room';}?>">
		  	</div>
            <div class="form-group">
                <label for="email">Holder Name:</label>
                <input type="text" class="form-control" name="holder_name" required="">
            </div>
            <div class="form-group">
                <label for="email">Holder ID:</label>
                <input type="text" class="form-control" name="holder_id" required="">
            </div>
            <div class="form-group">
                <label for="email">Holder Mobile:</label>
                <input type="text" class="form-control" name="holder_mobile" required="">
            </div>
            <div class="form-group">
                <label for="email">Holder Address:</label>
                <textarea rows="3" cols="40" class="form-control" name="holder_address"></textarea>
            </div>
            <div class="form-group">
                <label>No of Child:</label>
                <select class="form-control" name="child_no">
                    <option>-Select-</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="select_adult">No of Adult:</label>
                <select class="form-control" id="select_adult" name="adult_no">
                    <option>-Select-</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Check-In Date: (yyyy-mm-dd)</label>
                <input type="text" class="form-control" name="check_in_date" required="">
            </div>
            <div class="form-group">
                <label for="email">Check-Out Date:(yyyy-mm-dd)</label>
                <input type="text" class="form-control" name="check_out_date" required="">
            </div>
            <br><br>
			<button type="submit" name="book_room" class="btn btn-warning">Book Now</button>
		</form>
        	</div>
        	<div class="col-md-4"></div>
        </div>
        <br><br><br><br><br><br>



<br><br><br><br><br><br>
    <!-- Footer -->
    <footer>
      <h1 style = "color:rgb(255, 0, 0);font-size: 30px;font-weight: bold;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Follow Us</h1>
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
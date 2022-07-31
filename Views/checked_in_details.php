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
          <li><a href="admin_dashboard.php">Home</a></li>
          <li><a href="#"></a></li>
          <li id = "main_id" ><a href="#">User Details</a></li>
          <li><a href="#"></a></li>
          <li><a href="Contact.html">Contact</a></li>
          <li></li>
        </ul>
      </nav>
      <nav class="mobile">
        <ul>
          <li><a href="admin_dashboard.php">Home</a></li>
          <li><a href="#"></a></li>
          <li id = "main_id" ><a href="#">User Details</a></li>
          <li><a href = "#"></a></li>
          <li><a href="Contact.html">Contact</a></li> 
        </ul>
      </nav>
    </div>
  </header>
  <br><br><br><br><br><br><br><br>


  <center><h1 style = "font-size: 36px; line-height: 45px; font-weight: 600; text-align: center;">Checked In User Details</h1></center>
  <br><br><br><br>


<div class="row">
       	<div class="col-md-12">
           <center><h1 style = "color : blue; font-size: 26px; line-height: 30px; font-weight: 400; text-align: center;">Single Room</h1></center>
       	</div>
       </div><br>
        <div class="row">
        	<div class="col-md-12">
            <table class="table  table-hover">
                    <thead  class="thead-dark">
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"nexa");
                    $query = "select * from single_room where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>

<br><br>
        <div class="row">
       	<div class="col-md-12">
           <center><h1 style = "color : blue; font-size: 26px; line-height: 30px; font-weight: 400; text-align: center;">Normal Double Room</h1></center>
       	</div>
       </div><br>
        <div class="row">
        	<div class="col-md-12">
            <table class="table  table-hover">
                    <thead  class="thead-dark">
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"nexa");
                    $query = "select * from normal_double_room where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
        <br><br>



        <div class="row">
       	<div class="col-md-12">
           <center><h1 style = "color : blue; font-size: 26px; line-height: 30px; font-weight: 400; text-align: center;">King Double Room</h1></center>
       	</div>
       </div><br>
        <div class="row">
        	<div class="col-md-12">
            <table class="table  table-hover">
                    <thead  class="thead-dark">
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"nexa");
                    $query = "select * from king_double_room where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
<br><br>




<div class="row">
       	<div class="col-md-12">
           <center><h1 style = "color : blue; font-size: 26px; line-height: 30px; font-weight: 400; text-align: center;">Queen Double Room</h1></center>
       	</div>
       </div><br>
        <div class="row">
        	<div class="col-md-12">
            <table class="table  table-hover">
                    <thead  class="thead-dark">
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"nexa");
                    $query = "select * from queen_double_room where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
<br><br>


<div class="row">
       	<div class="col-md-12">
           <center><h1 style = "color : blue; font-size: 26px; line-height: 30px; font-weight: 400; text-align: center;">Double-Double (Twin Double) Room</h1></center>
       	</div>
       </div><br>
        <div class="row">
        	<div class="col-md-12">
            <table class="table  table-hover">
                    <thead  class="thead-dark">
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"nexa");
                    $query = "select * from double_double_twin_double_room where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
<br><br>


<div class="row">
       	<div class="col-md-12">
           <center><h1 style = "color : blue; font-size: 26px; line-height: 30px; font-weight: 400; text-align: center;">Twin Room</h1></center>
       	</div>
       </div><br>
        <div class="row">
        	<div class="col-md-12">
            <table class="table  table-hover">
                    <thead  class="thead-dark">
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"nexa");
                    $query = "select * from twin_room where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
<br><br>



<div class="row">
       	<div class="col-md-12">
           <center><h1 style = "color : blue; font-size: 26px; line-height: 30px; font-weight: 400; text-align: center;">Hollywood Twin Room</h1></center>
       	</div>
       </div><br>
        <div class="row">
        	<div class="col-md-12">
            <table class="table  table-hover">
                    <thead  class="thead-dark">
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"nexa");
                    $query = "select * from hollywood_twin_room where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
<br><br>




<div class="row">
       	<div class="col-md-12">
           <center><h1 style = "color : blue; font-size: 26px; line-height: 30px; font-weight: 400; text-align: center;">Duplex Room</h1></center>
       	</div>
       </div><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table  table-hover">
                    <thead  class="thead-dark">
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"nexa");
                    $query = "select * from duplex_room where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
<br><br>



        <br><br>
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
  
    </body>
  </html>



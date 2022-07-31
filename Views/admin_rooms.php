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
          <li id = "main_id" ><a href="#">Rooms</a></li>
          <li><a href="#"></a></li>
          <li><a href="Contact.html">Contact</a></li>
          <li></li>
        </ul>
      </nav>
      <nav class="mobile">
        <ul>
          <li><a href="admin_dashboard.php">Home</a></li>
          <li><a href="#"></a></li>
          <li id = "main_id" ><a href="#">Rooms</a></li>
          <li><a href = "#"></a></li>
          <li><a href="Contact.html">Contact</a></li> 
        </ul>
      </nav>
    </div>
  </header>
  <br><br><br><br><br><br><br><br><br><br>

  
 


<br><br><br>
     <section class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center col-auto" style = "font-size: 25px; line-height: 30px; font-weight: 600; text-align: center;border-color: chocolate; border-style: solid; border-width: 5px; background-color: rgb(64, 224, 208);">
        <h1>Single Room</h1>
           </div>
            </div>
          </section>
 
          

            <div class = "row">
              <?php
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection,"nexa");
                 $query = "select * from single_room";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                     ?>
                    <div class = "col-auto" style = "margin: 70px; border-style: solid; border-width: 5px; "> 
                        
                        <div class = "card bg-light" style = "width : 300px;">
                          
                            <div class = "card-header">Room No : <?php echo $row['room_no'] ?> </div>

                            <div class="card-body">
                              <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                              <a href="admin_book_room.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                              &nbsp;&nbsp;&nbsp;
                              <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        
                            </div>
                         
                        </div>
                     </div>
                    <?php
                 }
              ?>
            </div>



 <br><br><br>
     <section class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center col-auto" style = "font-size: 25px; line-height: 30px; font-weight: 600; text-align: center;border-color: chocolate; border-style: solid; border-width: 5px; background-color: rgb(64, 224, 208);">
        <h1>Normal Double Room</h1>
           </div>
         </div>
       </div>
     </section>



     <div class = "row">
              <?php
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection,"nexa");
                 $query = "select * from normal_double_room";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                     ?>
                    <div class = "col-auto" style = "margin: 70px; border-style: solid; border-width: 5px; "> 
                        
                        <div class = "card bg-light" style = "width : 300px;">
                          
                            <div class = "card-header">Room No : <?php echo $row['room_no'] ?> </div>

                            <div class="card-body">
                              <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                              <a href="admin_book_room.php?rn=<?php echo $row['room_no'] . "&rt=b";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                              &nbsp;&nbsp;&nbsp;
                              <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=b";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        
                            </div>
                         
                        </div>
                     </div>
                    <?php
                 }
              ?>
            </div>





<br><br><br>
     <section class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center col-auto" style = "font-size: 25px; line-height: 30px; font-weight: 600; text-align: center;border-color: chocolate; border-style: solid; border-width: 5px; background-color: rgb(64, 224, 208);">
        <h1>King Double Room</h1>
           </div>
         </div>
       </div>
     </section>    


     <div class = "row">
              <?php
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection,"nexa");
                 $query = "select * from king_double_room";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                     ?>
                    <div class = "col-auto" style = "margin: 70px; border-style: solid; border-width: 5px; "> 
                        
                        <div class = "card bg-light" style = "width : 300px;">
                          
                            <div class = "card-header">Room No : <?php echo $row['room_no'] ?> </div>

                            <div class="card-body">
                              <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                              <a href="admin_book_room.php?rn=<?php echo $row['room_no'] . "&rt=c";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                              &nbsp;&nbsp;&nbsp;
                              <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=c";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                            </div>
                         
                        </div>
                     </div>
                    <?php
                 }
              ?>
            </div>


 
<br><br><br>
     <section class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center col-auto" style = "font-size: 25px; line-height: 30px; font-weight: 600; text-align: center;border-color: chocolate; border-style: solid; border-width: 5px; background-color: rgb(64, 224, 208);">
        <h1>Queen Double Room</h1>
           </div>
         </div>
       </div>
     </section>


     <div class = "row">
              <?php
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection,"nexa");
                 $query = "select * from queen_double_room";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                     ?>
                    <div class = "col-auto" style = "margin: 70px; border-style: solid; border-width: 5px; "> 
                        
                        <div class = "card bg-light" style = "width : 300px;">
                          
                            <div class = "card-header">Room No : <?php echo $row['room_no'] ?> </div>

                            <div class="card-body">
                              <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                              <a href="admin_book_room.php?rn=<?php echo $row['room_no'] . "&rt=d";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                              &nbsp;&nbsp;&nbsp;
                              <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=d";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                            </div>
                         
                        </div>
                     </div>
                    <?php
                 }
              ?>
            </div>




<br><br><br>
     <section class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center col-auto" style = "font-size: 25px; line-height: 30px; font-weight: 600; text-align: center;border-color: chocolate; border-style: solid; border-width: 5px; background-color: rgb(64, 224, 208);">
        <h1>Double-Double (Twin Double) Room</h1>
           </div>
         </div>
       </div>
     </section>


     <div class = "row">
              <?php
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection,"nexa");
                 $query = "select * from double_double_twin_double_room";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                     ?>
                    <div class = "col-auto" style = "margin: 70px; border-style: solid; border-width: 5px; "> 
                        
                        <div class = "card bg-light" style = "width : 300px;">
                          
                            <div class = "card-header">Room No : <?php echo $row['room_no'] ?> </div>

                            <div class="card-body">
                              <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                              <a href="admin_book_room.php?rn=<?php echo $row['room_no'] . "&rt=e";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                              &nbsp;&nbsp;&nbsp;
                              <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=e";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                            </div>
                         
                        </div>
                     </div>
                    <?php
                 }
              ?>
            </div>



<br><br><br>
     <section class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center col-auto" style = "font-size: 25px; line-height: 30px; font-weight: 600; text-align: center;border-color: chocolate; border-style: solid; border-width: 5px; background-color: rgb(64, 224, 208);">
        <h1>Twin Room</h1>
           </div>
         </div>
       </div>
     </section>


     <div class = "row">
              <?php
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection,"nexa");
                 $query = "select * from twin_room";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                     ?>
                    <div class = "col-auto" style = "margin: 70px; border-style: solid; border-width: 5px; "> 
                        
                        <div class = "card bg-light" style = "width : 300px;">
                          
                            <div class = "card-header">Room No : <?php echo $row['room_no'] ?> </div>

                            <div class="card-body">
                              <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                              <a href="admin_book_room.php ?rn=<?php echo $row['room_no'] . "&rt=f";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                              &nbsp;&nbsp;&nbsp;
                              <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=f";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                            </div>
                         
                        </div>
                     </div>
                    <?php
                 }
              ?>
            </div>



<br><br><br>
     <section class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center col-auto" style = "font-size: 25px; line-height: 30px; font-weight: 600; text-align: center;border-color: chocolate; border-style: solid; border-width: 5px; background-color: rgb(64, 224, 208);">
        <h1>Hollywood Twin Room</h1>
           </div>
         </div>
       </div>
     </section>


     <div class = "row">
              <?php
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection,"nexa");
                 $query = "select * from hollywood_twin_room";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                     ?>
                    <div class = "col-auto" style = "margin: 70px; border-style: solid; border-width: 5px; "> 
                        
                        <div class = "card bg-light" style = "width : 300px;">
                          
                            <div class = "card-header">Room No : <?php echo $row['room_no'] ?> </div>

                            <div class="card-body">
                              <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                              <a href="admin_book_room.php?rn=<?php echo $row['room_no'] . "&rt=g";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                              &nbsp;&nbsp;&nbsp;
                              <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=g";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                            </div>
                         
                        </div>
                     </div>
                    <?php
                 }
              ?>
            </div>



    <section class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center col-auto" style = "font-size: 25px; line-height: 30px; font-weight: 600; text-align: center;border-color: chocolate; border-style: solid; border-width: 5px; background-color: rgb(64, 224, 208);">
        <h1>Duplex Room</h1>
           </div>
         </div>
       </div>
     </section>


     <div class = "row">
              <?php
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection,"nexa");
                 $query = "select * from duplex_room";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                     ?>
                    <div class = "col-auto" style = "margin: 70px; border-style: solid; border-width: 5px; "> 
                        
                        <div class = "card bg-light" style = "width : 300px;">
                          
                            <div class = "card-header">Room No : <?php echo $row['room_no'] ?> </div>

                            <div class="card-body">
                              <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                              <a href="admin_book_room.php?rn=<?php echo $row['room_no'] . "&rt=h";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                              &nbsp;&nbsp;&nbsp;
                              <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=h";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                            </div>
                         
                        </div>
                     </div>
                    <?php
                 }
              ?>
            </div>
    


  
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

<?php include('server2.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="save.css">
  <link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
  <title>Iterinary</title>

</head>

<body class="main">
<div class='headerbox'>


&nbsp
&nbsp
<div class="statusbox">
 <ul class="statusboxul">
  <li class="statusboxli"><a href="after_login_homepage.php">HOME</a></li>
  <li class="statusboxli"><a href="after_login_homepage.php#dest">DESTINATION</a></li>
  <?php
    if(isset($_SESSION['success']))
    {
  ?>
  <li class="statusboxli"><a href="iterinary.php">ITERINARY</a></li>
   <li class="statusboxli"><a href="saved.php" class="active">YOUR ITERINARIES</a></li>
  <li style="float:right" class="statusboxli"><a href="mainhomepage.php?logout='1'">LOGOUT</a></li>
  <?php
    } else {
  ?>
   <li style="float:right" class="statusboxli"><a href="login.php">LOGIN</a></li>
   <?php
    }
   ?>
  <li class="statusboxli bar"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></li>
 </ul>
</div>
</300px
<div class="hero-image">
  <div class="hero-text" style="border:5px; border-style:solid;top:300px; border-color:black; padding: 1em;">
    <h1 style="font-size:50px; color:black;font-size: 70px">Corners Of India</h1>
    <br>
    <button onclick="location.href='#it'" type="button"><strong>Your Iterinaries<strong></button>
  </div>
</div>
</div>

<!--Html code for navigation-->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="after_login_homepage.php#dest">Destinations</a>
    <a href="about.php">About</a>
    <a href="#footer">Contact </a>
  </div>
<!--Slideshow html code-->
&nbsp
<div class="pdheader">
<center>
<p class="pd">“ Take only memories, leave only footprints.” – Chief Seattle</p>
</center>
</div>
<center><div class="datadatadata" id="it">
<?php

    $con = mysqli_connect('localhost','root','','places');
    $names=$_SESSION['username'];
    $sql="SELECT * FROM iterdata WHERE Username='$names'";
     $result=mysqli_query($con,$sql);
    $numrows=mysqli_fetch_assoc($result);
    $result=mysqli_query($con,$sql);
    if($numrows){
        echo "<table><tr><th>City</th><th>Days</th><th>Places</th></tr>";
        while($row=mysqli_fetch_array($result)){
      echo "<tr><td>" .$row["Place"]."</td><td>".$row['Days']."</td><td>".$row["Place1"]."</td></tr>";
    }
    echo "</table>";
    mysqli_close($con);
    } else {
      echo "You haven't saved any plans";
    }

    ?>
</div></center>
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="bottom" id="footer" style="background-color:black">
      <br>
      <center><h2 style="color:white;">"Corners of India"</h2>
      <p style="font-size: 17px; color:white;"> Explore and plan your trip with us 
       <br>Email: cornersofindia@gmail.com 
       <br>Ph:080-22233389 </p></center>
       <br>
    </div>
</body>
</html>

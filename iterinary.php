<?php include('server2.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="itstyle.css">
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
  <li class="statusboxli"><a href="iterinary.php" class="active">ITERINARY</a></li>
   <li class="statusboxli"><a href="saved.php">YOUR ITERINARIES</a></li>
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
<div class="hero-image">
  <div class="hero-text" style="border:5px; border-style:solid; border-color:black; padding: 1em;">
    <h1 style="font-size:50px;color: black;font-size: 70px">Corners Of India</h1>
    <br>
    <button onclick="location.href='#it'" type="button"><strong>Iterinary<strong></button>
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
<p class="pd">"I'm in love with cities I've never been to, and people I've never met."-John Green</p>
</center>
</div>
<br>
<div class="divider">
  <br>
  <br>
  <br>
</div>
<div class="REGFORM" id="it">
<br>
<Center><p class="ria" style="color: white; font-family: Georgia;font-size: 35px"> Choose Your Destination</p></Center>
<br>
<br>
<form method="post" action="iterinary.php" class="frm">
  <div class="input group">
    Place
    <br>
    <select name="whichplace">
     <option value="Agra">Agra</option>
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Chennai">Chennai</option>
    <option value="Coimbatore">Coimbatore</option>
    <option value="Delhi">Delhi</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Indore">Indore</option>
    <option value="Jaipur">Jaipur</option>
    <option value="Kolkata">Kolkata</option>
    <option value="Kochi">Kochi</option>
    <option value="Lucknow">Lucknow</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Mysore">Mysore</option>
    <option value="Nagpur">Nagpur</option>    
    <option value="Pune">Pune</option>
    <option value="Ranchi">Ranchi</option>
    <option value="Surat">Surat</option>
    <option value="Vizag">Vizag</option>
  </select>
  </div>
  <div class="input group">
    <br>
    Days
    <br>
    <select name="howmanydays">
    <option value="1">1</option>
    <option value="3">3</option>
  </select>
  </div>
  <br>

  <button type="submit" name="submission" class="btn">Submit</button>
  <button type="submit" name="savesubmission" class="btn">Save and Submit</button>
</form>
&nbsp
<br>
<br>
<br>
<br>
&nbsp
<br>
&nbsp
<div class="answertoquery">

<?php
$dbase = mysqli_connect('localhost','root','','places');
if(isset($_REQUEST['submission']) || isset($_REQUEST['savesubmission']))
{
  echo "<p><center>We recommend you visit these places <br></center></p>";
  ?>
  <br>
  <?php

  if($days==3)
  {
    for($i=1;$i<=3;$i++)
  {
    $days=$i;
    $selection="SELECT * FROM alldata WHERE AllPlaces='$place' AND AllDays='$days' ";
    $result=$dbase->query($selection);
    while($row=mysqli_fetch_assoc($result)){
      $places=$row["Place1"];
      echo "<center> ".$row["Place1"]."</center><br>";
    }
  }
}
else {
  $selection="SELECT * FROM alldata WHERE AllPlaces='$place' AND AllDays='$days' ";
  $result=$dbase->query($selection);
  while($row=mysqli_fetch_assoc($result)){
    $Place1=$row["Place1"];
    echo "<center> ".$row["Place1"]."</center><br>";
  }
}

  

}else {
    echo "<center>You haven't chosen any place yet...</center>";
  }
?>
</div>
<br>
<br>
</div>
<!--Js for Navigation bar -->
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



</body>
</html>

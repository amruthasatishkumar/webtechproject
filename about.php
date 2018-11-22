<?php include('server2.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="aboutstyle1.css">
  <link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
  <title>About</title>

</head>

<body class="main">
<div class='headerbox'>


&nbsp
&nbsp
<div class="statusbox">
 <ul class="statusboxul">
 <?php
    if(isset($_SESSION['success']))
    {
  ?>
  <li class="statusboxli"><a href="after_login_homepage.php">HOME</a></li>
  <li class="statusboxli"><a href="after_login_homepage.php#dest">DESTINATION</a></li>
  <?php
    } else {
  ?>
   <li class="statusboxli"><a href="mainhomepage.php">HOME</a></li>
  <li class="statusboxli"><a href="mainhomepage.php#dest">DESTINATION</a></li>
  <?php
}
?>
  <?php
    if(isset($_SESSION['success']))
    {
  ?>
  <li class="statusboxli"><a href="iterinary.php">ITERINARY</a></li>
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
    <h1 style="font-size:70px;color: black">Corners Of India</h1>
    <br>
    <?php
    if(isset($_SESSION['success']))
    {
    ?>
    <button onclick="location.href='after_login_homepage.php#explore'" type="button">Explore India</button>
    <?php
    } else {
  ?>
  <button onclick="location.href='mainhomepage.php#explore'" type="button">Explore India</button>
  <?php
}
?>
  </div>
</div>
</div>

<!--Html code for navigation-->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="mainhomepage.php#dest">Destinations</a>
    <a href="#footer">Contact </a>
  </div>
<!--Slideshow html code-->
&nbsp
<div class="pdheader">
<center>
<p class="pd">"Travel makes one modest. You see what a tiny place you occupy in the world"</p>
</center>
</div>
<br>
<br>
<div class="about">
  <center><h1>About Us</h1></center>
  <br><hr>
  <div class="ab">
  <center><p style="font-size:20px;"> 
    <br>
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp India, it is often said, is not a country, but a continent. Stretching from the frozen summits of the Himalayas to the tropical greenery of Kerala, its expansive borders encompass an incomparable range of landscapes, cultures and people. Walk the streets of any city when you visit India and you’ll rub shoulders with representatives of several of the world’s great faiths, encounter temple rituals performed since the time of the Egyptian Pharaohs, onion-domed mosques erected centuries before the Taj Mahal, and quirky echoes of the British Raj on virtually every corner.
<br>
That so much of India’s past remains discernible today is all the more astonishing given the pace of change since Independence in 1947. Spurred by the free-market reforms of the early 1990s, the economic revolution started by Rajiv Gandhi has transformed the country with new consumer goods, technologies and ways of life.
<br>
However, the presence in even the most far-flung market towns has thrown into sharp relief the problems that have bedevilled India since long before it became the world’s largest secular democracy. No other nation on earth has slum settlements on the scale of those in Delhi, Mumbai and Kolkata, nor so many malnourished children, uneducated women and homes without access to clean water and waste disposal. Many first-time visitors find themselves unable to see past such glaring disparities. Others come expecting a timeless ascetic wonderland and are surprised to encounter one of the most materialistic societies on the planet. Still more find themselves intimidated by what may seem, initially, an incomprehensible and bewildering continent. But for all its jarring juxtapositions, intractable paradoxes and frustrations, India remains an utterly compelling destination. Intricate and worn, its distinctive patina – the stream of life in its crowded bazaars, the ubiquitous filmi music, the pungent melange of diesel fumes, cooking spices, dust and dung smoke – casts a spell that few forget from the moment they step off a plane. Love it or hate it – and most travellers oscillate between the two – India will shift the way you see the world.
<br>
<br>
Travelling in India can be a hard task, considering its diverse culture, the places that can be visited, and various other factors. To make travel planning easy, we - Amrutha , Krithika , Ria and Anagha came up with this website to make travel easy. This website contains extensive information about all the states in India, along with most frequently visited travel spots, famous cuisine, and the flora & fauna in that place.
   <br> We also provide an option for planning an iterinary if you want to visit any city. <br> Have a look at our website and get lost in the world of travel :)
<br>
<br>
<br>
  </p></center></div>
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
<br>

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

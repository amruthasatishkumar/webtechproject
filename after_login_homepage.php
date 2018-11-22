<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="mainhomepage.css">
  <link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Web Tech Project</title>
</head>

<body class="main">
<div class='headerbox'>


&nbsp
&nbsp
<div class="statusbox">
 <ul class="statusboxul">
  <li class="statusboxli"><a class="active" href="#">HOME</a></li>
  <li class="statusboxli"><a href="#dest">DESTINATION</a></li>
  <li class="statusboxli"><a href="#ttd">THINGS TO DO</a></li>
  <?php
    if(isset($_SESSION['success']))
    {
  ?>
  <li class="statusboxli"><a href="iterinary.php">ITERINARY</a></li>
   <li class="statusboxli"><a href="saved.php">YOUR ITERINIARIES</a></li>
  <li style="float:right" class="statusboxli"><a href="mainhomepage.php?logout='1'">LOGOUT</a></li>
  <?php
    } else {
  ?>
   <li style="float:right" class="statusboxli" id="login"><a href="login.php">LOGIN</a></li>
   <?php
    }
   ?>
  <li class="statusboxli bar"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></li>
 </ul>
</div>
<div class="hero-image">
  <div class="hero-text" style="border:5px; border-style:solid; border-color:black; padding: 1em; ">
    <h1 style="font-size:60px">Corners Of India</h1>
    <button onclick="location.href='iterinary.php'"type="button" >Get Free Iternary</button>
    <br>
    <br>
    <button onclick="location.href='#explore'" type="button">Explore India</button>
    <br>
  </div>
</div>
</div>
<!--Html code for navigation-->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#dest">Destinations</a>
    <a href="about.php">About</a>
    <a href="#footer">Contact </a>
  </div>
``
<!--Slideshow html code-->
&nbsp
<div class="pdheader" id="dest">
<center>
<p class="pd">POPULAR DESTINATIONS </p>
<p class="quote">"It leaves you speechless and turns you into a story teller."</p>
</center>
&npsp
</div>
&nbsp<div class="slideshow-container">

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s1.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s2.webp" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s3.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s4.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s5.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s6.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s7.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s8.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s9.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
 <center><img class="slideshowimg" src="s10.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s11.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s12.jpg" style="width:1000px"></center>
</div>

<div class="mySlides fade">
  <div class=""></div>
  <center><img class="slideshowimg" src="s13.jpg" style="width:1000px"></center>
</div>
</div>
<br>
<br>
<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<!--Maps-->
<br>
<div class="pdheader" id="explore">
<center>
<p class="pd" >EXPLORE</p>
<p class="quote">"Before you run out of time"</p>
</center>
</div>
<br>
<div class="mapdiv"><br>
  <br>
<div class="row">
    <!--north India-->
    <div class="column">
      <div class="dropdown">
      <img src="p1.jpg" class="image" height="300" width="300" border="2" >
      <div class="middle" >
          <div class="text" >
            <div class="cont">
            <ul style="list-style-type:square" >
               <li><a href="Haryana/HA.php">Haryana</a></li>
               <li><a href="HimachalPradesh/HP.php">Himachal Pradesh</a></li>
               <li><a href="JammuAndKashmir/JK.php">Jammu and Kashmir</a></li>
               <li><a href="Punjab/punjab.php">Punjab </a></li>
               <li><a href="Rajasthan/rajasthan.php">Rajasthan </a></li>
               <li><a href="UttarPradesh/uttarpradesh.php">Uttar Pradesh </a></li>
               <li><a href="Uttarakhand/uttarakhand.php">Uttarkhand </a></li>
            </ul>
            </div>
          </div>
        </div>
  </div>
    </div>
    <!--South India-->
    <div class="column">
    <div class="dropdown">
      <img src="p2.jpg" class="image" height="300" width="300" border="2">

<div class="middle">
          <div class="text">
          <div class="cont">
<ul style="list-style-type:square">

 <li><a href="Karnataka/KA.php">Karnataka</a></li>

 <li><a href="Kerala/KE.php">Kerala</a></li>

 <li><a href="AndhraPradesh/AndhraPradesh.php">Andhra Pradesh</a></li>

 <li><a href="TamilNadu/tamilnadu.php">Tamil Nadu</a></li>

 <li><a href="Telangana/telangana.php">Telangana</a></li>

</ul>

</div>
</div></div>
</div>

</div>

<!--Central India-->

<div class="column">
<div class="dropdown">
      <img src="p3.jpg" class="image" height="300" width="300" border="2">
      <div class="middle">
          <div class="text">
          <div class="cont">
            <ul style="list-style-type:square">
               <li><a href="Chattisgarh/CH.php">Chattisgarh</a></li>
               <li><a href="MadhyaPradesh/MP.php">Madhya Pradesh</a></li>
            </ul>
          </div>
        </div>
    </div>
    </div></div>
    <!--east india-->
    <div class="column">
    <div class="dropdown">
      <img src="p4.jpg" class="image" height="300" width="300" border="2">
      <div class="middle">
          <div class="text">
          <div class="cont">
            <ul style="list-style-type:square" >
               <li><a href="Bihar/bihar.php">Bihar</a></li>
               <li><a href="Jharkhand/JA.php">Jharkhand</a></li>
               <li><a href="Odisha/odisha.php">Odisha</a></li>
               <li><a href="WestBengal/westbengal.php">West Bengal</a></li>
            </ul>
          </div>
        </div>
    </div>
    </div></div>
 <!--west india-->

<div class="column">
<div class="dropdown">

<img src="p5.jpg" class="image" height="300" width="300" border="2">

<div class="middle">
          <div class="text">
          <div class="cont">
            <ul style="list-style-type:square">
               <li><a href="Goa/GOA.php">Goa</a></li>
               <li><a href="Gujarat/Gujarat.php">Gujarat</a></li>
               <li><a href="Maharashtra/MA.php">Maharashtra</a></li>
            </ul>
          </div>
</div>

</div></div></div>

<!--Northeasten India-->

<div class="column">
<div class="dropdown">

<img src="p6.jpg" class="image" height="300" width="300" border="2">

<div class="middle">

<div class="text">
<div class="cont">
<ul style="list-style-type:square">

 <li><a href="ArunachalPradesh/arunachal.php">Arunanchal Pradesh</a></li>
 <li><a href="Assam/ass.php">Assam</a></li>
 <li><a href="Manipur/MR.php">Manipur</a></li>
 <li><a href="Meghalaya/ME.php">Meghalaya </a></li>
 <li><a href="Mizoram/mizoram.php">Mizoram </a></li>
 <li><a href="Nagaland/Nagaland.php">Nagaland</a></li>
 <li><a href="Sikkim/sikkim.php">Sikkim</a></li>
 <li><a href="Tripura/tripura.php">Tripura</a></li>
</ul>
</div>

</div>
</div></div>

</div>
</div>
<p class="mapword" style="font-family:Cedarville Cursive;font-size:35px">Click on any part of the country to know more about the different states of India and the various breathtaking places ....</p>
</div>
<br>
<div class="pdheader" id="things">
<center>
<p class="pd" id="ttd">Things to do in India</p>
<p class="quote">You don't want to miss these..</p>
</center>
</div>
<br>
<div class="thingsto">
  <div class="row">
<div class="column"><div class="ani"><div class="a1"><strong>Visit the Taj Mahal</strong><div class="overr"><br>When listing the things one must do in India, you can’t leave Taj Mahal out. Built in the 17th century, this white marble monument attracts thousands of tourists from all over the world. It is the epitome of love as the world knows it. While a visit to Taj Mahal at any time of the day is exciting, consider visiting it during night, preferably on a full moon night. </div></div></div></div>
<div class="column"><div class="ani"><div class="a2"><strong>Kedarnath Temple </strong><div class="overr"><br>Call it a pilgrimage or an exciting trek in the Himalayan region, either way, it is an exciting experience. The Kedarnath Temple is located near the Mandakini River, and attracts thousands of pilgrims every year. You have take an arduous 14 km trek starting from Gaurikund to reach the temple. The Kedarnath temple is opened to the public in the month of April till the time around Dusshehra.</div></div></div></div>
<div class="column"><div class="ani"><div class="a3"><strong>Old Delhi tour and Chandni Chowk</strong><div class="overr"><br>This is where you get to feel the pulse of Delhi. As you make your way through narrow streets filled with people, you start wonder how people can live in such a chaotic place. But soon enough, you fall in love with the chaos and the liveliness of the place.</div></div></div></div>
<div class="column"><div class="ani"> <div class="a4"><strong>Bike trip to Ladakh</strong><div class="overr"><br>This one is for the adventure enthusiasts. If you love biking, a bike trip to Ladakh is ultimate fun. You start from Manali and make your way through the stunning Rohtang Pass, beautiful Lahaul and Spiti Valley, and cross several high mountain passes before entering Ladakh. While in Ladakh, one should go on a bike trip to Khardung La Pass, the highest motorable pass in the world. </div></div></div></div>
<div class="column"><div class="ani"><div class="a5"><strong>Wagah Border Visit </strong><div class="overr"><br>This is where Gautama Buddha is said to have attained enlightenment. Pay a visit to Mahabodhi Temple, which is regarded as one of the most important Buddhist temples. Revel at the spirituality of the place or just chat with the local Buddhist monks which reside at the place. Either way, it is a different kind of experience you get here.</div></div></div></div>
<div class="column"><div class="ani"><div class="a6"><strong>Holi at Vrindavan</strong> <div class="overr"><br>Holi is a festival which is a special experience in India. While most places in India celebrate the festival for only a day, if you love the color of festivals, Vrindavan is the place to be. Holi is celebrated for a week here, amidst crowds thronging the various temples dedicated to Lord Krishna here.</div></div></div></div>

  </div>
  <div class="row">
  <div class="column"><div class="ani"><div class="a7"><strong>Mysore Dusshera Festival</strong><div class="overr"><br>Dusshera- the festival which celebrates the triumph of good over evil- is celebrated with a lot of fervor all over the country. But none can match the celebrations in Mysore. This famous hill station of Karnataka was once home to royal kingdoms. Come Dusshera and you can see the beautiful palaces of the region decorated even more beautifully. The fervor at the time of the festival is unparalleled.</div></div></div></div>
<div class="column"><div class="ani"><div class="a8"><strong>Old Cathedrals of Goa</strong><div class="overr"><br>Take a tour of the old churches in Goa, which give a peek into the rich cultural past of the land, The churches date back to the time when Portuguese ruled the land. Some of them have an interesting story behind them, while others have beautiful architecture to be marveled at. Some of the must visits one when in Goa are Basilica of Bom Jesus, Mary Immaculate Conception and Se Cathedral.</div></div></div></div>
<div class="column"><div class="ani"> <div class="a9"><strong><center>Feel the royalty</center></strong><div class="overr"><br>If you get the chance, don’t miss an opportunity to be a part of a royal wedding on a Rajasthan Tour. From the decor to the food and the guests of the honor, and of course the palaces they are hosted in, everything is ornately royal about them.</div></div></div></div>
<div class="column"><div class="ani"> <div class="a10"><strong>Kite Flying in Rajasthan</strong><div class="overr"><br>Rajasthan, particularly the cities of Jaipur, Jodhpur and Pushkar, play host to a kite festival every year in the month of January. The festival sees people from all walks of life participating and trying to go one up against each other. Pick up some colorful kites in interesting shapes and take to the skies to settle old scores.</div></div></div></div>
<div class="column"><div class="ani"><div class="a11"><strong><center>Waterfall Rappelling Vihigaon</center></strong><div class="overr"><br>Vihigaon in Thane is a small village where you can the adventure of a lifetime. There is waterfall rappelling to be done in the roaring waterfalls of Vihigaon. You get to combine the experience of rappelling, mountaineering and maneuvering the gushing streams of water in this adrenaline pumping adventure. It takes bones of steel and some really technical skills to complete this adventure.</div></div></div></div>
<div class="column"><div class="ani"><div class="a12"><strong>See the Kathakali Fest</strong> <div class="overr"><br>Trained dancers dancing in colorful costumes, telling stories of love, passion and betrayal is definitely something that shouldn’t be missed. The kathakali festival happens every year at Sree Padmanabhaswamy Temple in Trivandrum. It is a 10 day long festival, with beautiful dances scheduled on all days.</div></div></div></div>
  </div>
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
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<br>
<br>

<br>
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

<?php
  include("config.php");
  session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['login_user'];
    //bio
    $bio = mysqli_real_escape_string($db,$_POST['bio']);
    $sql = "UPDATE InvestorData2 SET bio = '$bio' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {}
    //preference
    $preference = mysqli_real_escape_string($db,$_POST['preference']);
    $sql = "UPDATE InvestorData2 SET preference = '$preference' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {}
    //previous 
    $previous = mysqli_real_escape_string($db,$_POST['previous']);
    $sql = "UPDATE InvestorData2 SET previous = '$previous' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {}
    //tag
   $checkbox1=$_POST['tag'];  
   $tag= "";  
   foreach($checkbox1 as $chk1)  
      {  
         $tag .="[".$chk1."] ";  
      } 
   $sql2 = "UPDATE InvestorData2 SET tag = '$tag' WHERE user = '$username'";
   $result=mysqli_query($db,$sql2);
  //tag2
   $checkbox2=$_POST['tag2'];  
   $tag2="";  
   foreach($checkbox2 as $chk2)  
      {  
         $tag2 .= "[".$chk2."] ";  
      } 
   $sql2 = "UPDATE InvestorData2 SET tag2 = '$tag2' WHERE user = '$username'";
   $result=mysqli_query($db,$sql2);
   //unsdg
   $unsdg = mysqli_real_escape_string($db,$_POST['unsdg']);
   $sql3 = "UPDATE InvestorData2 SET unsdg = '$unsdg' WHERE user = '$username'";
   if($db->query($sql3) === TRUE) {}
}
?>

<!DOCTYPE html>
<html>
<title>Investor Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="signin1.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* The popup form - hidden by default */
/* The popup form - hidden by default */

.form-popup {
    display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 99; /* Sit on top */
	left: 0;
	right:0;
	top: 0;
	bottom:0;
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}


/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body>



<!-- Navbar -->
<div class="top">
    <div class="bar">
      <a class="logodiv" title="Logo">
           <img src="logo.png" alt="Logo" style="width: 60% !important; height: 85% !important; margin-top: 4% !important;">
         </a>
      <a href="InvestorHome.php" class="baritem" title="Home"><p class="word1">Home<p></a>
      <a href="InvestorMatch.php" class="baritem" title="Matches"><p class="word1">Matches<p></a>
      <a href="InvestorFavorite.php" class="baritem" title="Favorites"><p class="word1">Favorites<p></a>
      <a href="InvestorSetting.php" class="baritem" title="Setting"><p class="word1">Setting</p></a>
      <a href="InvestorAccount.php" class="baritem" title="Myaccount" style = "position: absolute; right: 16%; top: 0%"><p class="word1">My Account<p></a>
        <a href="logout.php" class="baritem" style = "position: absolute; right: 10%" title="Logout"><p class="word1">Sign out</p></a>
    </div>
   </div>

<div class="w3-container" style="background-color: #ffffff; margin-bottom: 5%;"> 
    <div class="containerx">
        <h1 class="matchmaking">Matchmaking </h1>
        <h1 class="matchmaking">for Startups</h1> 
        <h1 class="matchmaking">and investors</h1>
        <br>
        <p style="margin-left:10%">Build a relationship with your startups, and add value from your </p>
        <p style="margin-left:10%">experience and network.</p>
        <form method="post" action="iupdate.php"> 
          <button class="matchbutton" style="margin-left: 10%; width:36%; margin-top: 5%"><p class="matchword">Get Started</p></button>
        </form>
    </div>
    <div class="containery" style="margin-left: 10%; margin-top: 8%; float: left">
        <img src="image1.jpg" style="width: 500px; height:500px"></div>
</div>


<br><br>

<div class="container" style="margin-left: 0%; margin-bottom: 5%;">
  <div class="firstline"> 
      <h1 style="float: left; font-size: 6vh; font-family: 'Arial Black'; margin-left: 10%; width: 61%">Startups near you</h1>
      <form method="post" action="iupdate.php"> 
      <button type="submit" class="explorebutton" onclick="openForm()"><p class="exploreallword">Explore all <i class="fa fa-arrow-right" style="color: #9228d8; "></i></p></button>
      </form>
  </div>
  <div style="position: relative;">
    <table style="width:95%;padding:5px 5px;">
    <tr>
      <th style="flex-direction: column; text-align: left">
        <img src="salogo.png" style="width: 35%; height: 50%; margin-left: 36%">
        <div class="para">
          <h3>Square Ark</h3>
          <p>An e-commerce platform where brands and</p>
          <p>ambassadors can connect, collaborate, and</p>
          <p>explore for new opportunities. </p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="width: 28%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important; margin-left: 35%
        "><p class="learnmoreword" style="margin-left:0% !important; font-size: 2vh; color: #9228d8;">
        Learn more <i class="fa fa-arrow-right" style="color: #9228d8; "></i></p></button>
      </th>
      <th style="flex-direction: column; text-align: left; width: 30%">
        <img src="but.png" style="position: relative; margin-left: 20%; width: 35%; height: 50%; margin-top: 10%">
        <div class="para" style="position: relative; text-align: left; margin-left: 22%;">
          <h3>Butler</h3>
          <p>Butler is a monthly subscription that provides</p>
          <p>professional and personalised home services.</p>
          <p>At your service, 24 hrs a day and 365 days a year.</p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="width: 30%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;margin-left: 20%
        "><p class="learnmoreword" style="margin-left:0% !important; font-size: 2vh; color: #9228d8;">
        Learn more <i class="fa fa-arrow-right" style="color: #9228d8; "></i></p></button>
      </th>
      <th>
        <img src="3s.png" style="position: relative;  width: 35%; height: 50%; text-align: left; margin-left: -10%; margin-top: 3%;">
        <div class="para" style="position: relative; text-align: left; margin-left: 32%;">
          <h3>3S Global Limited</h3>
          <p>We are a food & bevarage sourcing company</p>
          <p>that uses intelligent technology to effective</p>
          <p>meet all your sourcing needs. </p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="width: 32%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;margin-left: 0%
        "><p class="learnmoreword" style="margin-left:0% !important; font-size: 2vh; color: #9228d8;">
        Learn more <i class="fa fa-arrow-right" style="color: #9228d8; "></i></p></button>
      </th>
    </tr>
  </table>
  </div>
</div>

<div style="margin-left: 0%;">
  <div class="firstline"> 
      <h1 style="float: left; font-size: 6vh; font-family: 'Arial Black'; margin-left: 10%; width: 61%">Based on your activity</h1>
      <form method="post" action="iupdate.php"> 
      <button class="explorebutton" onclick="openForm()"><p class="exploreallword">Explore all <i class="fa fa-arrow-right" style="color: #9228d8; "></i></p></button>
      </form>
  </div>
  <div class="secondline" style="position: relative;">
    <table style="width:95%;padding:5px 0px;">
    <tr>
      <th style=" display: block; text-align: left">
        <img src="kami.png" style="margin-left: 36%; width: 35%; height: 50%; margin-top: 10%">
        <div class="para">
          <h3 >Kami Intelligence</h3>
          <p>Build a Kami Bot for any role or task! Our</p>
          <p>cutting-edge AI, is easy to use and</p>
          <p>customizable to your needs</p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="margin-left: 35%; width: 30%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;"><p class="learnmoreword" style="margin-left:0% !important; font-size: 2vh; color: #9228d8;;">
        Know more <i class="fa fa-arrow-right" style="color: #9228d8; "></i></p></button>
      </th>
      <th style="flex-direction: column; text-align: left">
        <img src="a4alpha.png" style="margin-left: 31%; width: 25%; height: 50%">
        <div class="para" style="text-align: left; margin-left: 35%">
          <h3>A4 Alpha</h3>
          <p>Established in 2019. A4Alpha is the fun-learning </p>
          <p>tool for sustainable education. </p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="margin-left: 35%; width: 32%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;"><p class="learnmoreword" style="margin-left:0% !important; font-size: 2vh; color: #9228d8;">
        Know more <i class="fa fa-arrow-right" style="color: #9228d8; "></i></p></button>
      </th>
      <th style="flex-direction: column; text-align: left">
        <img src="GOLS.png" style="margin-left: 31%; width: 35%; height: 50%; margin-top: 3%">
        <div class="para" style="text-align: left; margin-left: 35%">
          <h3>GOLS</h3>
          <p>We specialize in developing, managing and </p>
          <p>aexecuting end-to-end customized solutions to</p>
          <p>meet your logistic requirements. </p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="margin-left: 30%; width: 30%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;"><p class="learnmoreword" style="margin-left:0% !important; font-size: 2vh; color: #9228d8;">
        Know more <i class="fa fa-arrow-right" style="color: #9228d8; "></i></p></button>
      </th>
    </tr>
  </table>
  </div>
</div>

<div class="form-popup" id="myForm">
    <div style="margin-top:5%; margin-left: 5%; height: 80%; width: 90%;
            -webkit-box-shadow: 0 0 5px 2px darkgray; background-color: #FFFFFF !important;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray;">
          <span onclick="document.getElementById('myForm').style.display='none'" class="w3-button w3-xlarge w3-transparent" style="position: absolute; right: 10%;" title="Close Modal">×</span>
      <img id="Bar" src="" alt="">
      <div onchange="hideDiv($num)">
        <div id="buttons" class="hideDiv">  
            <form method="post" action="StartupHome.php"> 
            <input type="hidden" class="text" name="x" value="$id"/> 
            <input type="hidden" class="text" name="unseen2" value="$unseen2"/> 
            <input type="hidden" class="text" name="username" value="$username"/> 
              <button type="submit"  class="circle-icon1" name="button3" style="float: left;  margin-left: 30%; margin-right: 5%">
                <i class="fa fa-times fa-10x"></i>
              </button> 
              <button onclick="changeColor()" type="submit" id="button2" class="circle-icon" name="button2" style="float: left;  margin-right: 5%">
                <i class="fa fa-heart fa-8x"></i> 
              </button> 
              <button type="submit" class="circle-icon2" name="button1" style="float: left; margin-right: 5%">
                <i class="fa fa-check fa-7x"></i>
              </button>
          </form> 
        </div>
      </div>
        </div>
  </div>
<br><br><br><br><br><br>
 <!-- Footer -->
 <!--
   <footer class="footer w3-container w3-padding-32 w3-center w3-xlarge">
<div class="grid-container">
        <div class="grid-title">Product</div>
        <div class="grid-title">Company</div>
        <div class="grid-title">Legal</div>  
        <div class="grid-title">Follow us</div>
        <div class="grid-item">5</div>
        <div class="grid-item">6</div>  
        <div class="grid-item">7</div>
        <div class="grid-item">8</div>
        <div class="grid-item">9</div>
        <div class="grid-item">1</div>
        <div class="grid-item">2</div>
        <div class="grid-item">3</div>  
        <div class="grid-item">4</div>
        <div class="grid-item">5</div>
        <div class="grid-item">6</div>  
        <div class="grid-item">7</div>
        <div class="grid-item">8</div>
        <div class="grid-item">9</div> 
        <div class="grid-item">1</div>
        <div class="grid-item">2</div>
        <div class="grid-item">3</div>  
        <div class="grid-item">4</div>
        <div class="grid-item">5</div>
        <div class="grid-item">6</div>     
      </div>
      <img src="footer.png" class="footerimage">
    <p class="w3-medium">Powered by <a href="http://jumpstartmag.com/" target="_blank" class="w3-hover-text-green">jumpstartmag</a></p>
      </footer>
 -->
  <footer style="position: relative; margin-top: 10%;">
    <img src="foot.png" class="foot" alt="foot" style="display: block;margin-left: auto;margin-right: auto; width: 100%;">
</footer>
</body>

<script>
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }


function start() {
    let button1 = document.getElementById("button1");
    button1.onclick = toggleContent;
}
function toggleContent() {
  document.getElementById("myForm").style.display = "block";
    let number = +document.getElementById('number').value; // take value as a number
    let liquid = document.getElementById('Bar');

    if (isNaN(number) || number < 0) { // move exit condition to top and exit early
        alert("Invalid Entry. Enter a Number.")
        return;
    }

    if (number == 1) { // condition without parseint 
        liquid.src = 'FJLabsInfo.png';
        liquid.alt = 'FJ Labs Info';
    } else { // no need for another check
        liquid.src = 'assets/Beer.png';
        liquid.alt = 'Angry Juice';
    }
}

window.onload = start;
    </script>
</html>
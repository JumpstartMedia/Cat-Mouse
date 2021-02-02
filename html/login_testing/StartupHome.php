<?php
   include('session.php');
   $username = $login_session;
   echo $username;
$sql = "SELECT FullName, Position, StartupName, Loc, industry, founded, series, raised, raisenow, pie, Website, stage, logofilename FROM StartupData WHERE user = '$username'";
$result = mysqli_query($db,$sql);
if ($result->num_rows > 0) {
   // output data of each row
   $row = '';
   while($row = $result->fetch_assoc()) {
      $f = '';
      $po = '';
       $s = '';
       $lo = '';
       $r = 0;
       $i = '';
       $fo = '';
       $ra = 0;
       $pi = '';
       $w = '';
       $series = ' ';
       $stage = 0;
      $f = $row["FullName"];
      $po = $row["Position"];
       $s = $row["StartupName"];
       $lo = $row["Loc"];
       $r = $row["raised"];
       $i = $row["industry"];
       $fo = $row["founded"];
       $ra = $row["raisenow"];
       $pi = $row["pie"];
       $w = $row["Website"];
       $se = $row["series"];
       $st = $row["stage"];
       $stage = 0;
      $imageURL = 'uploads/'.$row["logofilename"];
   }
  } else {
   echo "0 results";
  }
$sql = "SELECT bio, unsdg, unsdg2, funds, shareholders, highlights, ftname1, ftposition1, ftbio1, ftname2, ftposition2, ftbio2, ftname3, ftposition3, ftbio3, exits, profitability FROM StartupData2 WHERE user = '$username'";
$result = mysqli_query($db,$sql);
if ($result->num_rows > 0) {
   // output data of each row
   $row = '';
   while($row = $result->fetch_assoc()) {
      $bio = '';
      $unsdg = '';
      $unsdg2 = '';
      $funds = '';
      $shareholders = '';
      $highlights = '';
      $ftname1 = '';
      $ftposition1 = '';
      $ftbio1 = '';
      $ftname2 = '';
      $ftposition2 = '';
      $ftbio2 = ''; 
      $ftname3 = '';
      $ftposition3 = '';
      $ftbio3 = '';
      $exits = 0;
      $profitability = '';
      $pitch = '';
      $bio = $row["bio"];
      $unsdg = $row["unsdg"];
      $unsdg2 = $row["unsdg2"];
      $shareholders = $row["shareholders"];
      $highlights = $row["highlights"];
      $ftname1 = $row["ftname1"];
      $ftposition1 = $row["ftposition1"];
      $ftbio1 = $row["ftbio1"];
      $ftname2 = $row["ftname2"];
      $ftposition2 = $row["ftposition2"];
      $ftbio2 = $row["ftbio2"]; 
      $ftname3 = $row["ftname3"];
      $ftposition3 = $row["ftposition3"];
      $ftbio3 = $row["ftbio3"];
      $exits = $row["exits"];
      $profitability = $row["profitability"];
   }
  } else {
   echo "0 results";
  }

  $sql = "SELECT activity, type1, tag FROM StartupData3 WHERE user = '$username'";
$result = mysqli_query($db,$sql);
if ($result->num_rows > 0) {
   // output data of each row
   $row = '';
   while($row = $result->fetch_assoc()) {
      $activity = '';
      $type = '';
      $tag = '';
      $activity = $row["activity"];
      $type = $row["type1"];
      $tag =  $row["tag"];
   }
  } else {
   echo "0 results";
  }
/*
  $sql = "SELECT unseen FROM StartupArray WHERE user = '$username'";
    $result = mysqli_query($db,$sql);
    if ($result->num_rows > 0) {
      // output data of each row
      $row = '';
      while($row = $result->fetch_assoc()) {
          $unseen = '';
          $unseen = $row["unseen"];
          $unseen2 = explode(",", $unseen);
          $count = count($unseen2);
      }
      } else {
      echo "Error";
      }*/


?>
<!DOCTYPE html>
<html>
<title>Startup Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="signin1.css">
<link rel="stylesheet" href="home2.css">
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

/* Add styles to the form container */
.form-container {
  margin-left: 10%;
  margin-top: 10%;
  margin-bottom: 10%;
  margin-right: 10%;
  padding: 10px;
  background-color:white;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}

.circle-icon {
    background: lightgray;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    text-align: center;
    line-height: 100px;
    vertical-align: middle;
    padding: 30px;
    color: white;
    font-size: 40px;
    border: none;
}
.circle-icon1 {
    background: #ead1fa;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    text-align: center;
    line-height: 100px;
    vertical-align: middle;
    padding: 30px;
    color: white;
    font-size: 40px;
    border: none;
}
.circle-icon2 {
    background: #9228d8;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    text-align: center;
    line-height: 100px;
    vertical-align: middle;
    padding: 30px;
    color: white;
    font-size: 40px;
    border: none;
}
</style>
<body>



<!-- Navbar -->
<div class="top">
    <div class="bar">
       <a class="baritem"></a>
       <a class="logodiv" title="Logo">
           <img src="logo.png" alt="Logo" style="width: 60% !important; height: 85% !important; margin-top: 4% !important;">
         </a>
     <a href="StartupHome.php" class="baritem" title="Home"><p class="word1">Home<p></a>
     <a href="StartupMatch.php" class="baritem" title="Matches"><p class="word1">Matches<p></a>
     <a href="StartupFavorite.php" class="baritem" title="Favorites"><p class="word1">Favorites<p></a>
     <a href="StartupSetting.php" class="baritem" title="Setting"><p class="word1">Setting</p></a>
     <a href="StartupAccount.php" class="baritem" title="Myaccount" style = "position: absolute; right: 16%; top: 0%"><p class="word1">My Account<p></a>
      <a href="logout.php" class="baritem" style = "position: absolute; right: 10%" title="Logout"><p class="word1">Sign out</p></a>
    </div>
</div>
<div class="w3-container" style="background-color: #ffffff;"> 
    <div class="containerx" style="margin-left: 10%; margin-top: 5%; float: left; width: 500px;">
    <h1>Welcome Startup <?php echo $login_session; ?></h1> 
        <h1 style="font-size: 400%; margin-left: 10%; margin-top: 15%; font-family: 'Arial Black';">Matchmaking </h1>
        <h1 style="font-size: 400%; margin-left: 10%;font-weight:bolder;font-family: 'Arial Black'; ">for Startups</h1> 
        <h1 style="font-size: 400%; margin-left: 10%;font-family: 'Arial Black'; ">and Investors</h1>
        <p style="margin-left:10%; font-size: 100%;">Build a relationship with your startups, and add value from your </p>
        <p style="margin-left:10%; font-size: 100%;">experience and network.</p>
        <form method="post" action="update.php"> 
        <button class="matchbutton" style="margin-left: 10%; width: 29%;"><p class="matchword">Start Matching</p></button>
      </form>
    </div>
    <div class="containery" style="margin-left: 8%; margin-top: 0%; float: left">
        <img src="1b.png" style="width: 700px; height:700px"></div>
</div>


<br><br>
<div class="container" style="margin-left: 0%; margin-bottom: 5%;">
  <div class="firstline"> 
      <h1 style="float: left; font-size: 6vh; font-family: 'Arial Black'; margin-left: 10%; width: 61%">Investors near you</h1>
      <form method="post" action="update.php"> 
      <button class="explorebutton" ><p class="exploreallword">Explore all <i class="fa fa-arrow-right" style="color: #1ebdc8; "></i></p></button>
      </form>
  </div>
  <div class="secondline" style="position: relative;">
    <table style="width:90%;padding:5px 5px; margin-left: 0%">
      <br><br><br><br>
    <tr>
      <th>
        <img src="FJLabs.png" style="width: 40%; height: 50%; margin-left: 5%;">
        <div class="para" style="margin-left: 35%">
          <h3>FJ LABS</h3>
          <p>We are global marketplace investors and we've</p>
          <p>backed more than 500 entrepreneurs globally.</p>
        </div>
        <input type="hidden" value="1" id="number">
        <button id="button1" title="gs" onclick="toggleContent()" style="width: 30%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;"><p class="learnmoreword" style="margin-left:-20% !important; font-size: 2vh; color: #1ebdc8;">
        Learn more <i class="fa fa-arrow-right" style="color: #1ebdc8; "></i></p></button>
      </th>
      <th>
        <img src="UpHonestCapital.png" style="width: 30%; height: 50%; margin-left: 5%;">
        <div class="para" style="margin-left: 40% !important">
          <h3>UpHonest Capital</h3>
          <p>An Early Stage Focused Venture Capital Group</p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="width: 35%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;"><p class="learnmoreword" style="margin-left:5% !important; font-size: 2vh; color: #1ebdc8;">
        Learn more <i class="fa fa-arrow-right" style="color: #1ebdc8; "></i></p></button>
      </th>
      <th>
        <img src="7-7-6.png" style="width: 30%; height: 50%; margin-left: 5%;">
        <div class="para" style="margin-left: 40% !important">
          <h3>Seven Seven Six</h3>
          <p>We strive to be the most valuable investment our</p>
          <p>portfolio companies ever have.</p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="width: 30%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;"><p class="learnmoreword" style="margin-left:10% !important; font-size: 2vh; color: #1ebdc8;">
        Learn more <i class="fa fa-arrow-right" style="color: #1ebdc8; "></i></p></button>
      </th>
    </tr>
  </table>
  </div>
</div>

<div class="container" style="margin-left: 0%;">
  <div class="firstline"> 
      <h1 style="float: left; font-size: 6vh; font-family: 'Arial Black'; margin-left: 10%; width: 61%">Based on your activity</h1>
      <form method="post" action="update.php"> 
      <button class="explorebutton"><p class="exploreallword">Explore all <i class="fa fa-arrow-right" style="color:#1ebdc8; "></i></p></button>
      </form>
  </div>
  <div class="secondline" style="position: relative;">
    <table style="width:95%;padding:5px 0px;">
      <br><br><br><br>
    <tr>
      <th>
        <img src="FundersClub.png" style="width: 40%; height: 50%; margin-left: 5%;">
        <div class="para" style="margin-left: 35% !important">
          <h3>Funders Club</h3>
          <p>We invest in top startup founders and arm them</p>
          <p>with the support they need to shake the world.</p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="width: 28%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;"><p class="learnmoreword" style="margin-left:-15% !important; font-size: 2vh; color: #1ebdc8;">
        Learn more <i class="fa fa-arrow-right" style="color: #1ebdc8; "></i></p></button>
      </th>
      <th>
        <img src="Episode1.png" style="width: 40%; height: 50%; margin-left: 5%;">
        <div class="para" style="margin-left: 35% !important">
          <h3>Square Ark</h3>
          <p>We want to help you build the business that big</p>
          <p>idea can become.</p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="width: 28%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;"><p class="learnmoreword" style="margin-left:-15% !important; font-size: 2vh; color: #1ebdc8;">
        Learn more <i class="fa fa-arrow-right" style="color: #1ebdc8; "></i></p></button>
      </th>
      <th>
        <img src="BlingCapital.png" style="width: 40%; height: 50%; margin-left: 5%;;">
        <div class="para" style="margin-left: 35% !important">
          <h3>Bling Capital</h3>
          <p>Bling Capital can help you with building product</p>
          <p>and scaling distribution.</p>
        </div>
        <button id="button1" title="gs" onclick="toggleContent()" style="width: 28%; background-color: Transparent !important; background-repeat:no-repeat !important;
        border: none !important; cursor:pointer !important; overflow: hidden !important; outline:none !important;"><p class="learnmoreword" style="margin-left:-30% !important; font-size: 2vh; color: #1ebdc8;">
        Learn more <i class="fa fa-arrow-right" style="color: #1ebdc8; "></i></p></button>
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



<br><br><br><br><br><br><br><br>
 <!--footer-->
  <footer style="position: relative; margin-top: 10%;">
    <img src="foot.png" class="foot" alt="foot" style="display: block;margin-left: auto;margin-right: auto; width: 100%;">
</footer>
</body>

<script>

    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }

    var colors = ["black", "white"];
    var colorIndex = 0;
    function changeColor() {
        var col = document.getElementById("button2");
        if( colorIndex >= colors.length ) {
            colorIndex = 0;
        }
        col.style.color = colors[colorIndex];
        colorIndex++;
    }

  function hideDiv(int) {
    if(int == 0 || int == 1)
	    document.getElementById('hideDiv').style.display = "none";
    else
        document.getElementById('hideDiv').style.display = 'block';
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

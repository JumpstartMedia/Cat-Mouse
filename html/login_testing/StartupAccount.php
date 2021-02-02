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
$sql = "SELECT bio, unsdg, unsdg2, funds, shareholders, highlights, ftname1, ftposition1, ftbio1, ftname2, ftposition2, ftbio2, ftname3, ftposition3, ftbio3, exits, profitability, pitch, ftimage1, ftimage2, ftimage3 FROM StartupData2 WHERE user = '$username'";
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
      $ftimage1 = '';
      $ftimage2 = '';
      $ftimage3 = '';
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
      $pitch = $row["pitch"];
      $ftimage1 = $row["ftimage1"];
      $ftimage2 = $row["ftimage2"];
      $ftimage3 = $row["ftimage3"];
      $imageURL1 = 'uploads/'.$ftimage1;
      $imageURL2 = 'uploads/'.$ftimage2;
      $imageURL3 = 'uploads/'.$ftimage3;
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


?>
<!DOCTYPE html>
<html>
<title>Startup Menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="signin1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.wrapper {
    display: grid;
    grid-gap: 5%;
		grid-template-columns:40% 40%;
		background-color: #fff;
		color: #fff;
	}

	.box {
		color: #fff;
		border-radius: 5px;
		padding: 20px;
		font-size: 150%;

  }
  
  .textbox {
    -webkit-box-shadow: 0 0 5px 2px darkgray;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray;
    border-radius: 5px;
    border-color: gray;
    border-style: solid;
  }

	.a {
        -webkit-box-shadow: 0 0 5px 2px darkgray;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray;
		grid-column: 1 ;
		grid-row: 1 / 5;
	}
	.b {
        -webkit-box-shadow: 0 0 5px 2px darkgray;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray;
		grid-column: 2 ;
		grid-row: 1;
	}
	.c {
        -webkit-box-shadow: 0 0 5px 2px darkgray;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray;
		grid-column: 2 ;
		grid-row: 2 ;
	}
	.d {
        -webkit-box-shadow: 0 0 5px 2px darkgray;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray;
		grid-column: 2;
		grid-row: 3;
    }
    .e {
        -webkit-box-shadow: 0 0 5px 2px darkgray;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray;
		grid-column: 2;
		grid-row: 4;
    }
    
    .matchbutton{
    position: relative;
    left: 30%;
    top: 5%;
    width:22% !important;
    text-align:left;
    padding:0px 24px;
    font-size: 14px;
    display:inline-block;
    border-radius:1em;
    text-decoration:none;
    color:#FFFFFF;
    background-color: #1ebdc8;
    border-style: none;
}

.matchb{
    position: relative;
    left: 30%;
    top: 5%;
    width:22%;
    text-align:left;
    padding:0px 24px;
    font-size: 13px;
    display:inline-block;
    color: #b11b1b;
    border-radius:1em;
    text-decoration:none;
    border-style: solid;
    margin-left: 10%;
    border-color: #1ebdc8;
}

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

.next11, .next22, .next33 {
    cursor: pointer;
    position: absolute;
    width: 100px;
    height: 100px;
    padding: 16px;
    color: none;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
    bottom: 0;
  }
  
  /* Position the "next button" to the right */
  .next11 {
    position: absolute;
    right: 35%;
    border-radius: 3px 0 0 3px;
  }
  .next22 {
    position: absolute;
    left: 37%;
    bottom: 0;
    border-radius: 3px 0 0 3px;
  }

  .next33 {
    position: absolute;
    right: 46%;
    top: 99%;
    bottom: 0;
    border-radius: 3px 0 0 3px;
  }

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    /* The popup form - hidden by default */
/* The popup form - hidden by default */

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
      <a href="StartupHome.php" class="baritem" title="Home"><p class="word1">Home<p></a>
      <a href="StartupMatch.php" class="baritem" title="Matches"><p class="word1">Matches<p></a>
      <a href="StartupFavorite.php" class="baritem" title="Favorites"><p class="word1">Favorites<p></a>
      <a href="StartupSetting.php" class="baritem" title="Setting"><p class="word1">Setting</p></a>
      <a href="StartupAccount.php" class="baritem" title="Myaccount" style = "position: absolute; right: 16%; top: 0%"><p class="word1">My Account<p></a>
        <a href="logout.php" class="baritem" style = "position: absolute; right: 10%" title="Logout"><p class="word1">Sign out</p></a>
    </div>
   </div>
<div class="col-12 row-13" style="margin-top: 8%; margin-bottom: 5%; margin-left: 5%; width: 100%; height: 100%">
<div class="col-5 row-13 textbox" style="float: left">
        <a href="CIA.php" style="margin-left: 95%; margin-top: 10%" class="w3-xxlarge"><i class="fa fa-edit"></i></a>
         <img src="/uploads/logo.png" alt="" style="margin-left: 0%; left: 0%; max-width: 50%; max-height: 50%"/>
         <div style="margin-left: 5%"> 
          <?php
          echo "<br> <h1>". $s. "</h1>". $po;
          echo "<br> <h3>". $f. "</h3>";
          echo "<br> Location: ". $lo;
          echo "<br> Raised: ". $r;
          echo "<br> Industry: ". $i;
          echo "<br> Founded: ". $fo;
          echo "<br> Looking to raise now: ". $ra;
          echo "<br> Pie: ". $pi;
          echo "<br> Series: ". $se;
          echo "<br> Stage: ". $st;
          echo "<br> Website: ". $w;
            echo "<br> Bio: ". $bio;
            echo " <br> UNSDG: ". $unsdg. $unsdg2;
            echo " <br> Shareholders: ". $shareholders;
            echo " <br> Highlights ". $highlights. "<br>"; ?>
            <div style="float: left;width: 30%; margin-right: 5%">
              <img src="<?php echo $imageURL1; ?>" alt="" style="height: 10%; width: auto; margin-left: 0%; left: 0%;"/>
              <?php
              if ($ftname1!="" && $ftposition1!="" && $ftbio1!="") {
              echo " <br> Name: 1: ". $ftname1;
              echo " <br> Position 1: ". $ftposition1;
              echo " <br> Bio 1: ". $ftbio1. "<br>";
              }
              ?>
            </div>
            <div style="float: left; width: 30%; margin-right: 5%">
              <img src="<?php echo $imageURL2; ?>" alt="" style="height: 5%; width: 80%; margin-left: 0%; margin-top: 15%; margin-bottom: 15%"/>
              <?
              if ($ftname2!="" && $ftposition2!="" && $ftbio2!="") {
              echo " <br> Name 2: ". $ftname2;
              echo " <br> Position 2: ". $ftposition2;
              echo " <br> Bio 2: ". $ftbio2. "<br>";
              }
              ?>
             </div>
            <div style="float: left; width: 30%">
              <img src="<?php echo $imageURL3; ?>" alt="" style="height: 10%; width: auto; margin-left: 0%; left: 0%;"/>
              <?
              if ($ftname3!="" && $ftposition3!="" && $ftbio3!="") {
                echo " <br> Name 3: ". $ftname3;
                echo " <br> Position 3: ". $ftposition3;
                echo " <br> Bio 3: ". $ftbio3;
                echo "<br><br><br>";
              }?>
            </div>
            <?php
            echo "<br><br>";
            echo " <br> Exits: ". $exits;
            echo " <br> Profitability: ". $profitability;
            echo "<br> Activity: ". $activity;
            echo " <br> Type: ". $type;
            echo " <br> Tag: ". $tag;
            ?>
         </div>
</div>
<div class="col-5 row-13" style="margin-left: 5%; float: left">
        <div style="border-style: solid; border-color: black">
              <img src="b.png" class="foot" alt="foot1" style="max-width:100%; max-height:100%; height: 250px">
          </div>
          <div class="row-3" style="border-style: solid; border-color: black; margin-top: 5%">
              <img src="c.png" class="foot" alt="foot2" style="max-width:100%; max-height:75%;">
              <button class="matchbutton" onclick="window.location.href='/login_testing/update.php'" style="margin-left: 10%"><p class="matchword">
                  &nbsp;&nbsp;&nbsp;View all&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
              </p></button>
          </div>
          <div class="row-3" style="border-style: solid; border-color: black; margin-top: 5%">
              <img src="d.png" class="foot" alt="foot3" style="max-width:100%; max-height:75%;" >
              <button class="matchbutton" onclick="window.location.href='/login_testing/StartupMatch.php'" style="margin-left: 10%"><p class="matchword">
                  &nbsp;Explore all&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
              </p></button>
          </div>
          <div class="row-3" style="border-style: solid; border-color: black; margin-top: 5%"> 
              <img src="e.png" class="foot" alt="foot4" style="max-width:100%; max-height:75%;" >
              <button class="matchb" onclick="window.location.href='/login_testing/StartupFavorite.php'" style="background-color: #FFFFFF !important;"><p class="matchword" style="color:#1ebdc8">
                  &nbsp;Explore all&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></p></button>
    </div>
</div>
<div class="form-popup" id="myForm">
    <div class="fc"  style="margin-top:5%; margin-left: 20%; height:70%; width: 60%; 
            -webkit-box-shadow: 0 0 5px 2px darkgray; background-color: #FFFFFF;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray;">
        <div class="container" style="position: absolute;top: 8%; margin-left: 1%; 
                -webkit-box-shadow: 0 0 5px 2px darkgray;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray; max-width: 58%; height: 54%;">
          <span onclick="document.getElementById('myForm').style.display='none'" class="w3-button w3-xlarge w3-transparent" style="position: absolute; right: 0%;" title="Close Modal">×</span>
            <div class="mySlides">
              <img src="bsv.png" style="width:100%">
            </div>
          
            <div class="mySlides">
              <img src="bsv.png" style="width:100%">
            </div>
            <div class="mySlides">
              <img src="runout.png" style="width:100%">
            </div>
              
            <a class="next33" onclick="plusSlides(1)" style="font-size: 20px;"></a><!--<i class="fa fa-heart, check, times"></i>-->
            <a class="next11" onclick="plusSlides(1)" style="font-size: 20px;"></a>
            <a class="next22" onclick="plusSlides(1)" style="font-size: 20px;"></a>
        </div>
    </div>
  </div>

  <div class="form-popup" id="myForm2">
    <div class="fc"  style="margin-top:2%; margin-left: 20%; height:90%; width: 60%; 
            -webkit-box-shadow: 0 0 5px 2px darkgray; background-color: #FFFFFF;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray;">
        <div class="container" style="position: absolute;top: 2%; margin-left: 1%; margin-bottom: 5% !important; height: 80%;
                -webkit-box-shadow: 0 0 5px 2px darkgray;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray; max-width: 58%; height: 54%;">
          <span onclick="document.getElementById('myForm2').style.display='none'" class="w3-button w3-xlarge w3-transparent" style="position: absolute; right: 0%;" title="Close Modal">×</span>
            <div class="mySlides2" style="margin-bottom: 40% !important;">
              <img src="uphonest.png" style="width:100%; height: 10%">
            </div>
            <div class="mySlides2" style="margin-bottom: 40% !important">
                <img src="runout.png" style="width:100%; height: 10%">
              </div>
            </div>
              
            <a class="next3" onclick="plusSlides2(1)" style="font-size: 20px;bottom: 5% important!"></a><!--<i class="fa fa-heart, check, times"></i>-->
        </div>
    </div>
  </div>

<footer style="position: relative;;">
    <img src="foot.png" class="foot" alt="foot" style="display: block;margin-left: auto;margin-right: auto; margin-top: 90%; width: 100%">
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
var slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}

function currentSlide2(n) {
  showSlides2(slideIndex2 = n);
}
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }

    function openForm2() {
      document.getElementById("myForm2").style.display = "block";
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
    function showSlides2(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides2");
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
    </script>
</html>
<?php
   include('session.php');
   $username = $login_session;
   echo $username;
   $sql = "SELECT fullname, position, companyname, location, industry, founded, type, role, size, report, timeframe, website, logofilename FROM InvestorData WHERE user = '$username'";
   $result = mysqli_query($db,$sql);
   if ($result->num_rows > 0) {
      // output data of each row
      $row = '';
      while($row = $result->fetch_assoc()) {
         $fullname = '';
         $position = '';
         $companyname = '';
         $location = '';
         $industry = '';
         $founded = '';
         $type = '';
         $role = '';
         $size = '';
         $report = '';
         $timeframe = '';
         $website = '';
         $logofilename = '';
         $fullname = $row["fullname"];
         $position = $row["position"];
         $companyname = $row["companyname"];
         $location = $row["location"];
         $industry = $row["industry"];
         $founded = $row["founded"];
         $type = $row["type"];
         $role = $row["role"];
         $size = $row["size"];
         $report = $row["report"];
         $timeframe = $row["timeframe"];
         $website = $row["website"];
         $logofilename = $row["logofilename"];
         $imageURL = 'uploads/'.$row["logofilename"];
      }
     } else {
      echo "0 results";
     }
     $sql = "SELECT bio, preference, previous, tag, tag2, unsdg FROM InvestorData2 WHERE user = '$username'";
     $result = mysqli_query($db,$sql);
   if ($result->num_rows > 0) {
      // output data of each row
      $row = '';
      while($row = $result->fetch_assoc()) {
         $bio = '';
         $preference = '';
         $previous = '';
         $tag = '';
         $tag2 = '';
         $unsdg = '';
         $bio = $row["bio"];
         $preference = $row["preference"];
          $previous = $row["previous"];
          $tag = $row["tag"];
          $tag2 = $row["tag2"];
          $unsdg = $row["unsdg"];
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
      <a href="InvestorHome.php" class="baritem" title="Home"><p class="word1">Home<p></a>
      <a href="InvestorMatch.php" class="baritem" title="Matches"><p class="word1">Matches<p></a>
      <a href="InvestorFavorite.php" class="baritem" title="Favorites"><p class="word1">Favorites<p></a>
      <a href="InvestorSetting.php" class="baritem" title="Setting"><p class="word1">Setting</p></a>
      <a href="InvestorAccount.php" class="baritem" title="Myaccount" style = "position: absolute; right: 16%; top: 0%"><p class="word1">My Account<p></a>
        <a href="logout.php" class="baritem" style = "position: absolute; right: 10%" title="Logout"><p class="word1">Sign out</p></a>
    </div>
   </div>
<div class="col-12 row-13" style="margin-top: 8%; margin-bottom: 5%; margin-left: 5%; width: 100%; height: 100%">
<div class="col-5 row-13s textbox" style="float: left">
        <a href="IIA.php" style="margin-left: 95%; margin-top: 10%" class="w3-xxlarge"><i class="fa fa-edit"></i></a>
         <img src="/uploads/logo.png" alt="" style="margin-left: 0%; left: 0%; max-width: 50%; max-height: 50%"/>
         <div style="margin-left: 5%"> 
          <?php
          echo "<br> <h1>". $companyname. "</h1>". $position;
          echo "<br> <h3>". $fullname. "</h3>";
          echo " <br> Location: ". $location;
          echo " <br> Industry: ". $industry;
          echo " <br> Founded: ". $founded;
          echo " <br> Type: ". $type;
          echo " <br> Role: ". $role;
          echo " <br> Size: ". $size;
          echo " <br> Report: ". $report;
          echo " <br> Timeframe: ". $timeframe;
          echo " <br> Website: ". $website;
          echo " <br> Logofullname: ". $logofilename;
          echo " <br> Bio: ". $bio;
            ?>
         </div>
</div>
<div class="col-5 row-12" style="margin-left: 5%; float: left">
        <div style="border-style: solid; border-color: black">
              <img src="investorupcoming.png" class="foot" alt="foot1" style="max-width:100%; max-height:100%; height: 250px">
          </div>
          <div class="row-3" style="border-style: solid; border-color: black; margin-top: 5%">
              <img src="investormatches.png" class="foot" alt="foot3" style="max-width:100%; max-height:75%;" >
              <button class="matchbutton" onclick="window.location.href='/login_testing/InvestorMatch.php'" style="margin-left: 10%"><p class="matchword">
                  &nbsp;Explore all&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
              </p></button>
          </div>
          <div class="row-3" style="border-style: solid; border-color: black; margin-top: 5%"> 
              <img src="investorfavorites.png" class="foot" alt="foot4" style="max-width:100%; max-height:75%;" >
              <button class="matchb" onclick="window.location.href='/login_testing/InvestorFavorite.php'" style="background-color: #FFFFFF !important;"><p class="matchword" style="color:#1ebdc8">
                  &nbsp;Explore all&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></p></button>
          </div>
      </div>
</div>

<footer style="position: relative;">
    <img src="foot.png" class="foot" alt="foot" style="display: block;margin-left: auto;margin-right: auto; margin-top: 90%; width: 100%">
</footer>


</body>

<script>
    </script>
</html>
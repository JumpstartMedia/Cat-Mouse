<?php
  include("config.php");
  session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $u = mysqli_real_escape_string($db,$_POST['username']);
  $p = mysqli_real_escape_string($db,$_POST['password']);
  $e = mysqli_real_escape_string($db,$_POST['email']);
  $t = 'Startup';
  $sql = "SELECT * FROM test2 WHERE user = '$u' and pass = '$p'";
  $result = mysqli_query($db,$sql);
  $count = mysqli_num_rows($result);
    if($count == 0) {
    $sql2 = "INSERT INTO test2 (user, pass, email, type)
    VALUES ('$u', '$p', '$e', '$t')";
    $result = mysqli_query($db,$sql2);
    $activity = '';
    $type = '';
    $tag = '';
    $sql5 = "INSERT INTO StartupData3 (user, activity, type1, tag) VALUES ('$u', '$activity', '$type', '$tag')";
    $result = mysqli_query($db,$sql5);
    $_SESSION['login_user'] = $u;
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
       $logo = ' ';
    $sql3 = "INSERT INTO StartupData (user, FullName, Position, StartupName, Loc, industry, founded, series, raised, raisenow, pie, Website, stage, logofilename)
    VALUES ('$u', '$f', '$po', '$s', '$lo', '$i', '$fo', '$series', $r, $ra, '$pi', '$w', $stage, '$logo' )";
    $result = mysqli_query($db,$sql3);
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
    $sql4 = "INSERT INTO StartupData2 (user, bio, unsdg, unsdg2, funds, shareholders, highlights, ftname1, ftposition1, ftbio1, ftname2, ftposition2, ftbio2, ftname3, ftposition3, ftbio3, exits, profitability, pitch, ftimage1, ftimage2, ftimage3)
    VALUES ('$u', '$bio', '$unsdg','$unsdg2', '$funds', '$shareholders', '$highlights', '$ftname1', '$ftposition1', '$ftbio1', '$ftname2', '$ftposition2', '$ftbio2','$ftname3', '$ftposition3', '$ftbio3', $exits, '$profitability', '$pitch','$ftimage1','$ftimage2', '$ftimage3')";
    $result = mysqli_query($db,$sql4);

    $unseen = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");
   $unseen2 = implode(",", $unseen);
   $liked='';
   $unliked='';
   $favorite='';
    $sql6 = "INSERT INTO StartupArray (user, unseen, liked, unliked, favorite) VALUES 
    ('$u', '$unseen2', '$liked', '$unliked', '$favorite')";
     $result = mysqli_query($db,$sql6);
    }
    else {
    $error = "Your Login Name or Password is invalid";
    }
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel=stylesheet href = "signin.css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="morecss/favorites.css">
    <link rel="stylesheet" href="questionaire.css">
    <style>
        #myinput {
    background: linear-gradient(to right, #82CFD0 0%, #82CFD0 50%, #fff 50%, #fff 100%);
    border: solid 1px #82CFD0;
    border-radius: 8px;
    height: 7px;
    width: 850px;
    outline: none;
    transition: background 450ms ease-in;
    -webkit-appearance: none;
  }
    body{
        background-color: #ffffff !important;
        text-decoration: none !important;
    }
    html, body, h1, h2, h3, h4, h5, p {font-family: "Manrope"}
    h1 {
        font-weight: 800;
    }
    </style>
 	
    <title>StartupP1</title>
    <h2><?php echo "Your username is: ".$_SESSION['login_user']."."; ?></h2> 
    
    <?php
        $username = $_SESSION['login_user'];
        $unseen = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");
        $unseen2 = implode(",", $unseen);
        $liked='';
        $unliked='';
        $favorite='';
        $sql5 = "UPDATE StartupArray SET unseen = '$unseen2' WHERE user = '$username'";
        $sql6 = "UPDATE StartupArray SET liked = '' WHERE user = '$username'";
        $sql7 = "UPDATE StartupArray SET unliked = '' WHERE user = '$username'";
        $sql8 = "UPDATE StartupArray SET favorite = '' WHERE user = '$username'";
        $result = mysqli_query($db,$sql5);
        $result = mysqli_query($db,$sql6);
        $result = mysqli_query($db,$sql7);
        $result = mysqli_query($db,$sql8);
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
             $series = $row["series"];
             $stage = $row["stage"];
             $logo = $row["logofilename"];
            $imageURL = 'uploads/'.$row["logofilename"];
         }
        } else {
         echo "0 results";
        }?>
      <h2><a href = "logout.php">Sign Out</a></h2>
</head>
<body style="background-color: #ffffff;">
        <div class="col-11 row-10" style=" margin-left: 5%; margin-top: 5%; margin-bottom:5%; border:3px solid black; ">
            <h3 style="margin-left:39%; margin-top: 5%; font-size: 30px; ">Fill in the details to get started!</h3>
        <form action="StartupQuestionaire.php" method = "POST" enctype="multipart/form-data">
            <div class="col-12 row-0">
                <p style= "margin-left:5%; font-size: 18px; font-weight: 300;">
                    1. What is your full name? (firstname, lastname)    
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" placeholder="Full Name" name="fullname" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $f;?>" required/>
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    2. What is your position at the company?  
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" class="text" placeholder="Position" name="position" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $po;?>" required/> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    3. What is the name of your startup? 
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" class="text" placeholder="Startup" name="startup" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $s;?>" required/> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    4. Upload your logo here:
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <h5 style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray"><?php echo "[".$logo."] ";?></h5>
                <input type="file" name="file" class="custom-file-input" value="<?php echo $logo;?>" style="margin-left: 5%;">
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    5. Where is your startup located? (Country, City)
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" class="text" placeholder="Location" name="location" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $lo;?>" required/> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    6. Which industry are you focused in?
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <div style="margin-left:5%;">
                    <label name="Industry">Choose one industry:</label>
                        <select id="Industry" name="Industry">
                        <option <?php if (!isset($i)) echo "selected";?> >Choose Below</option>
                        <option <?php if ($i=='Accounting') echo "selected";?> value="Accounting">Accounting</option>
                        <option <?php if ($i=='Airlines/Aviation') echo "selected";?> value="Airlines/Aviation">Airlines/Aviation</option>
                        <option <?php if ($i=='Apparel & Fashion') echo "selected";?> value="Apparel & Fashion">Apparel & Fashion</option>
                        <option <?php if ($i=='Architecture & Planning') echo "selected";?> value="Architecture & Planning">Architecture & Planning</option>
                        <option <?php if ($i=='Arts & Craft') echo "selected";?>  value="Arts & Craft">Arts & Craft</option>
                        <option <?php if ($i=='Automotive') echo "selected";?> value="Automotive">Automotive</option>
                        <option <?php if ($i=='Banking') echo "selected";?> value="Banking">Banking</option>
                        <option <?php if ($i=='Biotechnology') echo "selected";?> value="Biotechnology">Biotechnology</option>
                        <option <?php if ($i=='Broadcast & Media') echo "selected";?> value="Broadcast & Media">Broadcast & Media</option>
                        <option <?php if ($i=='Business Supplies & Equipment') echo "selected";?> value="Busines Supplies & Equipment">Business Supplies & Equipment</option>
                        <option <?php if ($i=='Capital Markets') echo "selected";?> value="Capital Markets">Capital Markets</option>
                        <option <?php if ($i=='Chemicals') echo "selected";?> value="Chemicals">Chemicals</option>
                        <option <?php if ($i=='Civic & Social Organization') echo "selected";?> value="Civic & Social Organization">Civic & Social Organization</option>
                        <option <?php if ($i=='Civil Engineering') echo "selected";?> value="Civil Engineering">Civil Engineering</option>
                        <option <?php if ($i=='Commercial Real Estate') echo "selected";?> value="Commercial Real Estate">Commerical Real Estate</option>
                        <option <?php if ($i=='Computer & Network Security') echo "selected";?> value="Computer & Network Security">Computer & Network Security</option>
                        <option <?php if ($i=='Computer Games') echo "selected";?> value="Computer Games">Computer Games</option>
                        <option <?php if ($i=='Computer Hardware') echo "selected";?> value="Computer Hardware">Computer Hardware</option>
                        <option <?php if ($i=='Computer Networking') echo "selected";?> value="Computer Networking">Computer Networking</option>
                        <option <?php if ($i=='Computer Software') {echo "selected";} ?> value="Computer Software">Computer Software</option>
                    </select>
                </div>
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    7. What year was your startup founded?
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" placeholder="Founded year" name="founded" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $fo;?>" required/> 
            </div>
            <div class="col-10 row-4;">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    8. What stage is your startup at?
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <br>
                <div class="chrome" style= "margin-left:5%;">
                  <input name="myinput" id="myinput" type="range"  value="<?php echo $stage;?>" min="1" max="100"/>
                  <br>
                  <p style="float:left; margin-right: 15%">Idea Stage</p>
                  <p style="float:left; margin-right: 15%">Development Stage</p>
                  <p style="float:left; margin-right: 15%">Startup Stage</p>
                  <p style="float:left;">Expansion Stage</p>
                </div>
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    9. How much have you raised so far? (in USD)
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" placeholder="Total value in USD" name="raised" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $r;?>" required/> 
            </div>
            <div class="col-12 row-4;">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    10. I am raising my series
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <br>
                <div style="margin-left:5%;">
                    <ul class="radio">
                        <li>
                        <input type="radio" name="series" id="1" onclick="ShowHideDiv()"
                        <?php if (isset($series) && $series=="Friends and Family") echo "checked";?>
                        value="Friends and Family"> 
                            <label for="1">Friends and Family</label>
                        </li>
                        <li>
                        <input type="radio" name="series" id="2" onclick="ShowHideDiv()"
                        <?php if (isset($series) && $series=="Seed") echo "checked";?>
                        value="Seed">
                            <label for="2">Seed</label>
                        </li>
                        <li>
                        <input type="radio" name="series" id="3" onclick="ShowHideDiv()"
                        <?php if (isset($series) && $series=="Series A") echo "checked";?>
                        value="Series A">
                            <label for="3">Series A</label>
                        </li>
                        <li>
                        <input type="radio" name="series" id="4" onclick="ShowHideDiv()"
                        <?php if (isset($series) && $series=="Series B") echo "checked";?>
                        value="Series B">
                            <label for="4">Series B</label>
                        </li>
                        <li>
                        <input type="radio" name="series" id="6" onclick="ShowHideDiv()"
                        <?php if (isset($series) && $series=="Series C") echo "checked";?>
                        value="Series C">
                            <label for="6">Series C</label>
                        </li>
                        <li>
                        <input type="radio" name="series" id="5" onclick="ShowHideDiv()"
                        <?php if (isset($series) && $series!="Friends and Family" && $series!="Seed" && $series!="Series A"
                        && $series!="Series B" && $series!="Series C" && $series!=' ') echo "checked";?> value="Other">
                            <label for="5">Other</label>
                        </li>
                        <li>
                        <div id="dvtext" style="display: none"><input type="text" name="textbox" id="txtBox" placeholder="" value="<?php echo $series;?>"/>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    11.	How much are you looking to raise now? (in USD)
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" placeholder="Total value in USD" name="raisenow" 
                    value="<?php echo $ra;?>"
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    required/> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    12.	In return for the investment, what size of the pie would the investor(s) would get?
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" placeholder="XX% (0-100)" name="pie" 
                    value="<?php echo $pi;?>"
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    required/> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    13.	What is your website where investors can find more information?
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" placeholder="Paste company url link here" name="website" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $w;?>"
                    required/> 
            </div>

            <div class="col-12 row-2">

                    <button name="submit" type="submit" style="margin-top: 5%; padding: 10px 20px; position: relative; border-radius: 10px; background-color: #1ebdc8; margin-left: 43%; width:10%; color: white; border-style: none;"  class="signupbtn">
                    Next Step</button>
            </div>
            </form>
        </div>
 </body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        document.getElementById("myinput").oninput = function() {
  this.style.background = 'linear-gradient(to right, #82CFD0 0%, #82CFD0 ' + this.value + '%, #fff ' + this.value + '%, white 100%)'
};
         $(".guess").click(function(){
            xyz = this.id
            console.log(xyz)
            if(this.clicked){
                $(this).css('background-color', '#f8f8f8');
                $(this).css('color', 'black');
                this.clicked  = false;
            } else {
                $(this).css('background-color', '#1ebdc8');
                this.clicked  = true;
            }
        });
        var count = 1;
        function setColor(btn, color) {
            var property = document.getElementById(btn);
            if (count == 0) {
                property.style.backgroundColor = "#FFFFFF"
                count = 1;        
            }
            else {
                property.style.borderColor = "#1ebdc8;"
                count = 0;
            }
        }
        function ShowHideDiv() {
            var Other = document.getElementById("5");
            var dvtext = document.getElementById("dvtext");
            dvtext.style.display = Other.checked ? "block" : "none";
        }
    </script>
</html>


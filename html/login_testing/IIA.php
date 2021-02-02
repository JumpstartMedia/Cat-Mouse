<?php
  include("config.php");
  session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $u = mysqli_real_escape_string($db,$_POST['username']);
  $p = mysqli_real_escape_string($db,$_POST['password']);
  $e = mysqli_real_escape_string($db,$_POST['email']);
  $t = 'Investor';
  $sql = "SELECT * FROM test2 WHERE user = '$u' and pass = '$p'";
  $result = mysqli_query($db,$sql);
  $count = mysqli_num_rows($result);
  if($count == 0) {
    $sql2 = "INSERT INTO test2 (user, pass, email, type)
    VALUES ('$u', '$p', '$e', '$t')";
    $result = mysqli_query($db,$sql2);
    $_SESSION['login_user'] = $u;
    $fullname = '';
    $position = '';
    $companyname = '';
    $location = '';
    $industry = '';
    $founded = 0 ;
    $type = '';
    $role = '';
    $size = '';
    $report = '';
    $timeframe = '';
    $w = '';
    $logofilename = '';
    $sql3 = "INSERT INTO InvestorData (user, fullname, position, companyname, location, industry, founded, type, role, size, report, timeframe, website, logofilename) 
    VALUES ('$u', '$fullname', '$position', '$companyname', '$location', '$industry', $founded, '$type', '$role', '$size', '$report', '$timeframe', '$w', '$logofilename')";
    $result = mysqli_query($db,$sql3);
    $bio = '';
    $preference = '';
    $previous = '';
    $tag = '';
    $tag2 = '';
    $unsdg = '';
    $sql4 = "INSERT INTO InvestorData2 (user, bio, preference, previous, tag, tag2, unsdg) 
    VALUES ('$u', '$bio', '$preference', '$previous', '$tag', '$tag2', '$unsdg')";
    $result = mysqli_query($db,$sql4);
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
 	
	<title>Investor Questionaire</title>
</head>
<body style="background-color: #ffffff;">
        <div class="col-11 row-10" style=" margin-left: 5%; margin-top: 5%; margin-bottom:5%; border:3px solid black; ">
          <?php
                echo "Your username is: ".$_SESSION['login_user'].".";
                $username = $_SESSION['login_user'];
                $unseen = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");
                $unseen2 = implode(",", $unseen);
                $liked='';
                $unliked='';
                $favorite='';
                $sql5 = "UPDATE InvestorArray SET unseen = '$unseen2' WHERE user = '$username'";
                $sql6 = "UPDATE InvestorArray SET liked = '' WHERE user = '$username'";
                $sql7 = "UPDATE InvestorArray SET unliked = '' WHERE user = '$username'";
                $sql8 = "UPDATE InvestorArray SET favorite = '' WHERE user = '$username'";
                $result = mysqli_query($db,$sql5);
                $result = mysqli_query($db,$sql6);
                $result = mysqli_query($db,$sql7);
                $result = mysqli_query($db,$sql8);
                $sql = "SELECT user, fullname, position, companyname, location, industry, founded, type, role, size, report, timeframe, website, logofilename FROM InvestorData WHERE user = '$username'";
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
                        $founded = 0 ;
                        $type = '';
                        $role = '';
                        $size = '';
                        $report = '';
                        $timeframe = '';
                        $w = '';
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
                        $w = $row["website"];
                        $logofilename = $row["logofilename"];
                    }
                }
             ?>
            <h3 style="margin-left:23%; margin-top: 5%; font-size: 30px; ">More information will help us suggest better matches. Could you tell us:</h3>
        <form action="InvestorQuestionaire.php" method = "POST" enctype="multipart/form-data">
            <div class="col-12 row-10">
                <p style= "margin-left:5%; font-size: 18px; font-weight: 300;">
                    1. What is your full name? (firstname, lastname)    
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" placeholder="Full Name" name="fullname" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $fullname;?>" required/>
            </div>
            <div class="col-12 row-4;" style="margin-left:5%;">
                <p style= "margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    2. Type of investor:
                </p>
                <p style= "font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <ul class="radio">
                    <li>
                    <input type="radio" name="type" id="Angel" onclick="ShowHideDiv()"
                    <?php if (isset($type) && $type=="Angel") echo "checked";?>
                    value="Angel">
                        <label for="Angel">Angel</label>
                    </li>
                    <li>
                    <input type="radio" name="type" id="Institutional" onclick="ShowHideDiv()"
                    <?php if (isset($type) && $type=="Institutional") echo "checked";?>
                     value="Institutional">
                        <label for="Institutional">Institutional</label>
                    </li>
                </ul>
            </div>
            <div id="div1" style="display: none" class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    3. What is your position at the company?  
                </p>
                <input type="text" class="text" placeholder="Position" name="position" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $position;?>" required/> 
            </div>
            <div id="div2" style="display: none" class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    3. What is your website where investors can find more information?
                </p>
                <input type="text" placeholder="Paste company url link here" name="website" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $w;?>" required/> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    4. What is the name of your company? 
                </p>
                <input type="text" class="text" placeholder="Investor name" name="companyname" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $companyname;?>" required/> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    5. Please include an image for your profile 
                </p>
                <input name="file" type="file" class="custom-file-input" value="<?php echo $logofilename;?>"
                style="margin-left: 5%;">
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    6. Where are you based? (Country, City)
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" class="text" placeholder= "Location" name="location" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $location;?>" required/> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    7. How long have you been an investor?
                </p>
                <p style= "margin-left:5%; font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                <input type="text" placeholder="Founded year" name="founded" 
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    value="<?php echo $founded;?>" required/> 
            </div>
            <div class="col-12 row-4;" style="margin-left:5%;">
                <p style= "margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    8. What kind of role do you prefer to take with the startups?
                </p>
                <p style= "font-size: 10px; font-weight: 100; color: gray">
                    *required
                </p>
                        <input type="radio" name="role" id="active1" 
                        <?php if (isset($active) && $active=="active") echo "checked";?>
                        value="active">
                        <label for="active1">Active role where I give advice and mentorship</label>
                        <br>
                    <input type="radio" name="role" id="inactive1" 
                    <?php if (isset($role) && $role=="inactive") echo "checked";?>
                    value="inactive">
                        <label for="inactive1">Silent role, where I sit back, relax, and see my investments grow</label>
            </div>
            <div class="col-12 row-0">
                <div style="margin-left: 5%;">
                    <p style= "margin-bottom:1%; font-size: 18px; font-weight: 300;">
                        9. What size of investments are you looking at, per startup?
                    </p>
                    <ul class="radio">
                    <li>
                    <input type="radio" name="size" id="1" 
                    <?php if (isset($size) && $size=="1 - 100k USD") echo "checked";?>
                    value="1 - 100k USD">
                        <label for="1">1 - 100k USD</label>
                    </li>
                    <li>
                    <input type="radio" name="size" id="2" 
                    <?php if (isset($size) && $size=="100-250k USD") echo "checked";?>
                    value="100-250k USD">
                        <label for="2">100-250k USD</label>
                    </li>
                    <li>
                    <input type="radio" name="size" id="3" 
                    <?php if (isset($size) && $size=="350-500k USD") echo "checked";?>
                    value="350-500k USD">
                        <label for="3">350-500K USD</label>
                    </li>
                    <li>
                    <input type="radio" name="size" id="4" 
                    <?php if (isset($size) && $size=="500k+ USD") echo "checked";?>
                    value="500k+ USD">
                        <label for="4">500k+ USD</label>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 row-0">
                <div style="margin-left: 5%;">
                    <p style= "margin-bottom:1%; font-size: 18px; font-weight: 300;">
                        10. How often do you want startups to report back?
                    </p>
                    <ul class="radio">
                    <li>
                    <input type="radio" name="report" id="a" 
                    <?php if (isset($report) && $report=="Every month") echo "checked";?>
                    value="Every month">
                        <label for="a">Every month</label>
                    </li>
                    <li>
                    <input type="radio" name="report" id="b" 
                    <?php if (isset($report) && $report=="Every two months") echo "checked";?>
                    value="Every two months">
                        <label for="b">Every two months</label>
                    </li>
                    <li>
                    <input type="radio" name="report" id="c" 
                    <?php if (isset($report) && $report=="Every quarter") echo "checked";?>
                    value="Every quarter">
                        <label for="c">Every quarter</label>
                    </li>
                    <li>
                    <input type="radio" name="report" id="d" 
                    <?php if (isset($report) && $report=="Every half year") echo "checked";?>
                    value="Every half year">
                        <label for="d">Every half year</label>
                    </li>
                    <li>
                    <input type="radio" name="report" id="e" 
                    <?php if (isset($report) && $report=="Every year") echo "checked";?>
                    value="Every year">
                        <label for="e">Every year</label>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 row-0">
                <div style="margin-left: 5%;">
                    <p style= "margin-bottom:1%; font-size: 18px; font-weight: 300;">
                        11. What investment timeframe are you looking at, per startup?
                    </p>
                    <ul class="radio">
                    <li>
                    <input type="radio" name="timeframe" id="<" 
                    <?php if (isset($timeframe) && $timeframe=="Less than 1 yr") echo "checked";?>
                    value="Less than 1 yr">
                        <label for="<">Less than 1 yr</label>
                    </li>
                    <li>
                    <input type="radio" name="timeframe" id="1-3" 
                    <?php if (isset($timeframe) && $timeframe=="1-3 yr") echo "checked";?>
                    value="1-3 yr">
                        <label for="1-3">1-3 yr</label>
                    </li>
                    <li>
                    <input type="radio" name="timeframe" id="3-5" 
                    <?php if (isset($timeframe) && $timeframe=="3-5 yr") echo "checked";?>
                    value="3-5 yr">
                        <label for="3-5">3-5 yr</label>
                    </li>
                    <li>
                    <input type="radio" name="timeframe" id="5-10" 
                    <?php if (isset($timeframe) && $timeframe=="5-10 yr") echo "checked";?>
                    value="5-10 yr">
                        <label for="5-10">5-10 yr</label>
                    </li>
                    <li>
                    <input type="radio" name="timeframe" id="10" 
                    <?php if (isset($timeframe) && $timeframe=="10 yr+") echo "checked";?>
                    value="10 yr+">
                        <label for="10">10 yr+</label>
                    </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 row-2">

                    <button type="submit" style="margin-top: 5%; padding: 10px 20px; position: relative; border-radius: 10px; background-color: #1ebdc8; margin-left: 43%; width:10%; color: white; border-style: none;"  class="signupbtn">
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
            var angel = document.getElementById("Angel");
            var institutional = document.getElementById("Institutional");
            var dvtext = document.getElementById("div1");
            var dvtext2 = document.getElementById("div2");
            dvtext.style.display = angel.checked ? "block" : "none";
            dvtext2.style.display = institutional.checked ? "block" : "none";
        }
    </script>
</html>

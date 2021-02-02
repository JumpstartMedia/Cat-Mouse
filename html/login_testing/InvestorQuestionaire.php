<?php
  include("config.php");
  session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['login_user'];
    $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
   $sql = "UPDATE InvestorData SET FullName = '$fullname' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
   else {
         $error = "Your Full Name is invalid";
   }
   //position
   $position = mysqli_real_escape_string($db,$_POST['position']);
   $sql = "UPDATE InvestorData SET position = '$position' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
   else {
         $error = "Your position is invalid";
   }
   //StartupName
   $companyname = mysqli_real_escape_string($db,$_POST['companyname']);
   $sql = "UPDATE InvestorData SET companyname = '$companyname' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
   else {
         $error = "Your startup name is invalid";
   }
   //LOGO !!!!
   //Location
   $location = mysqli_real_escape_string($db,$_POST['location']);
   $sql = "UPDATE InvestorData SET location = '$location' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
   else {
         $error = "Your location is invalid";
   }

   $founded = mysqli_real_escape_string($db,$_POST['founded']);
   $sql = "UPDATE InvestorData SET founded = '$founded' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
   else {
         $error = "Your location is invalid";
   }

   $type = mysqli_real_escape_string($db,$_POST['type']);
   $sql = "UPDATE InvestorData SET type = '$type' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
   else {
         $error = "Your location is invalid";
   }

   $role = mysqli_real_escape_string($db,$_POST['role']);
   $sql = "UPDATE InvestorData SET role = '$role' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
   else {
         $error = "Your location is invalid";
   }

   $size = mysqli_real_escape_string($db,$_POST['size']);
   $sql = "UPDATE InvestorData SET size = '$size' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
   else {
         $error = "Your location is invalid";
   }
   
   $report = mysqli_real_escape_string($db,$_POST['report']);
   $sql = "UPDATE InvestorData SET report = '$report' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
   else {
         $error = "Your location is invalid";
   }

   $timeframe = mysqli_real_escape_string($db,$_POST['timeframe']);
   $sql = "UPDATE InvestorData SET timeframe = '$timeframe' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
   else {
         $error = "Your location is invalid";
   }
   
   $website = mysqli_real_escape_string($db,$_POST['website']);
   //website
   $sql = "UPDATE InvestorData SET website = '$website' WHERE user = '$username'";
   if($db->query($sql) === TRUE) {
   }
  else {
        $error = "Your Login Name or website is invalid";
  }

  $statusMsg = '';

  // File upload path
  $targetDir = "uploads/";
  $fileName = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg','gif','pdf');
      if(in_array($fileType, $allowTypes)){
          // Upload file to server
          if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
              // Insert image file name into database
              $insert = $db->query("UPDATE InvestorData SET logofilename = '".$fileName."' WHERE user = '$username'");
              if($insert){
                  $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              }else{
                  $statusMsg = "File upload failed, please try again.";
              } 
          }else{
              $statusMsg = "Sorry, there was an error uploading your file.";
          }
      }else{
          $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
      }
  /*}else{
      $statusMsg = 'Please select a file to upload.';
  }*/
}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel=stylesheet href = "signin1.css">
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

    <?php
      $username = $_SESSION['login_user'];
      
    $sql = "SELECT user, bio, preference, previous, tag, tag2, unsdg FROM InvestorData2 WHERE user = '$username'"; 
    $result = mysqli_query($db,$sql);
    if ($result->num_rows > 0) {
    // output data of each row
        $row = '';
        while($row = $result->fetch_assoc()) {
            $bio = $row["bio"];
            $preference = $row["preference"];
            $previous = $row["previous"];
            $tag = $row["tag"];
            $tag2 = $row["tag2"];
            $unsdg = $row["unsdg"];
            
        }
        $telecommunication = "Telecommunication";
        $iot= "iot";
        $automation = "Automation";
        $renewableenergy = "Renewable Energy";
        $healthcare = "Healthcare";
        $consumergoods = "Consumer Goods";
        $AR = "AR";
        $VR = "VR";
        $logistics = "Logistics";
        $services = "Services";
        $fintech = "Fintech";
        $media = "Media";
        $esd = "y";
        $msd = "y";
        $lsd = "y";
        $seed = "y";
        $seriesA = "y";
        $seriesB = "y";
        $seriesC = "y";
        $profitable = "y";
        $pr = "y";
        $be = "y";
        $tbnr = "y";
        $AI = "AI";
        $ML = "ML";
        $ARVR = "AR/VR";
        $AustraliaStartups = "Australia Startups";
        $BigTech = "Big Tech";
        $Blockchain = "Blockchain";
        $CambodiaStartups = "Cambodia Startups";
        $ChinaStartups = "China Startups";
        $Coronavirus = "Coronavirus";
        $CorporateInnovation = "Corporate Innovation";
        $Cryptocurrency = "Cryptocurrency";
        $Cybersecurity = "Cybersecurity";
        $Ecommerce = "Ecommerce";
        $Retail = "Retail";
        $Ecosystem = "Ecosystem";
        $Edtech = "Edtech";
        $EntertainmentMedia = "Entertainment Media";
        $EntertainmentReview = 'Entertainment Review';
        $EntrepreneurBasics = 'Entrepreneur Basics';
        //tag
        if(strpos($tag, $AI) == false){
            $AI = "";
        }
        if(strpos($tag, $ML) == false){
            $ML = "";
        }
        if(strpos($tag, $ARVR) == false){
            $ARVR = "";
        }
        if(strpos($tag, $AustraliaStartups) == false){
            $AustraliaStartups = "";
        }
        if(strpos($tag, $BigTech) == false){
            $BigTech = "";
        }
        if(strpos($tag, $Blockchain) == false){
            $Blockchain = "";
        }
        if(strpos($tag, $CambodiaStartups) == false){
            $CambodiaStartups = "";
        }
        if(strpos($tag, $ChinaStartups) == false){
            $ChinaStartups = "";
        }
        if(strpos($tag, $Coronavirus) == false){
            $Coronavirus = "";
        }
        if(strpos($tag, $CorporateInnovation) == false){
            $CorporateInnovation = "";
        }
        if(strpos($tag, $Cryptocurrency) == false){
            $Cryptocurrency = "";
        }
        if(strpos($tag, $Cybersecurity) == false){
            $Cybersecurity = "";
        }
        if(strpos($tag, $Ecommerce) == false){
            $Ecommerce = "";
        }
        if(strpos($tag, $Retail) == false){
            $Retail = "";
        }
        if(strpos($tag, $Ecosystem) == false){
            $Ecosystem = "";
        }
        if(strpos($tag, $Edtech) == false){
            $Edtech = "";
        }
        if(strpos($tag, $EntertainmentMedia) == false){
            $EntertainmentMedia = "";
        }
        if(strpos($tag, $EntertainmentReview) == false){
            $EntertainmentReview = "";
        }
        if(strpos($tag, $EntrepreneurBasics) == false){
            $EntrepreneurBasics = "";
        }
        //tag2
        if(strpos($tag2, "Early Stage Development") == false){
            $esd = "";
        }
        if(strpos($tag2, "Medium Stage Development") == false){
            $msd = "";
        }
        if(strpos($tag2, "Late Stage Development") == false){
            $lsd = "";
        }
        if(strpos($tag2, "Seed") == false){
            $seed = "";
        }
        if(strpos($tag2, "Series A") == false){
            $seriesA = "";
        }
        if(strpos($tag2, "Series B") == false){
            $seriesB = "";
        }
        if(strpos($tag2, "Series C") == false){
            $seriesC = "";
        }
        if(strpos($tag2, "Profitable") == false){
            $profitable = "";
        }
        if(strpos($tag2, "Positive Revenue") == false){
            $pr = "";
        }
        if(strpos($tag2, "Break Even") == false){
            $be = "";
        }
        if(strpos($tag2, "Traction but no Revenue") == false){
            $tbnr = "";
        }
    }
    ?>
 	
	<title>Signin</title>

</head>
<body style="background-color: #ffffff;">
   <form action="InvestorQuestionaire2.php" method = "POST">
        <h1>
            <?php
            echo $fileName;
            echo $statusMsg;
            ?>
        </h1>
        <div class="col-11 row-15" style=" margin-left: 5%; margin-top: 5%; margin-bottom:5%; border:3px solid black; ">
            <h3 style="margin-left:25%; margin-top: 5%; font-size: 30px; ">A robust profile also helps startups understand you better.</h3>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; font-size: 18px; font-weight: 300;">
                    1. Please include a bio  
                </p>
                <textarea id="text" name="bio" rows="4" cols="145" style="margin-left:5%; border-radius: 10px; border-width: 2px; 
                border-color: lightgrey; background-color: white; color: darkgrey;" placeholder="Bio"><?php echo $bio;?></textarea> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; font-size: 18px; font-weight: 300;">
                    2. Preference: Please describe the type of startups you’re interested in
                </p>
                <textarea id="text" name="preference" rows="4" cols="145" style="margin-left:5%; border-radius: 10px; border-width: 2px; 
                border-color: lightgrey; background-color: white; color: darkgrey;" placeholder=""><?php echo $preference;?></textarea> 
            </div>
            <div class="col-12 row-2">
                <p style= "margin-left:5%; font-size: 18px; font-weight: 300;">
                    3.	Previous investments:
                </p>
                <textarea id="text" name="previous" rows="4" cols="145" style="margin-left:5%; border-radius: 10px; border-width: 2px; 
                border-color: lightgrey; background-color: white; color: darkgrey;" placeholder="e.g. Name of Company, Ownership"><?php echo $previous;?></textarea> 
            </div>
            <div class="col-12 row-4" style="margin-left: 5%">
                <p style= "font-size: 18px; font-weight: 300; margin-bottom: 2%">
                    4.	Keywords and tags. This will help us find Startups that match your interests. 
                </p>
                
                <ul class="post-action">
                <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="AI"
                            <?php if ($AI == 'AI') echo "checked='checked'"; ?>>
                            <span>AI</span>
                        </label>
                </div>
                <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="ML"
                            <?php if ($ML == 'ML') echo "checked='checked'"; ?>>
                            <span>ML</span>
                        </label>
                </div>
                <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="AR/VR"
                            <?php if ($ARVR == 'AR/VR') echo "checked='checked'"; ?>>
                            <span>AR/VR</span>
                        </label>
                </div>
                <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="Australia Startups"
                            <?php if ($AustraliaStartups == 'Australia Startups') echo "checked='checked'"; ?>>
                            <span>Australia Startups</span>
                        </label>
                </div>
                    <br><br><br>
                    <div id="ck-button">
                    <label>
                        <input type="checkbox" name="tag[]"value="Big Tech"
                        <?php if ($BigTech == 'Big Tech') echo "checked='checked'"; ?>>
                        <span>Big Tech</span>
                    </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="Blockchain"
                            <?php if ($Blockchain == 'Blockchain') echo "checked='checked'"; ?>>
                            <span>Blockchain</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="Cambodia Startups"
                            <?php if ($CambodiaStartups == 'Cambodia Startups') echo "checked='checked'"; ?>>
                            <span>Cambodia Startups</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="China Startups"
                            <?php if ($ChinaStartups == 'China Startups') echo "checked='checked'"; ?>>
                            <span>China Startups</span>
                        </label>
                    </div>
                  <br><br><br>
                  <div id="ck-button">
                    <label>
                        <input type="checkbox" name="tag[]"value="Coronavirus"
                        <?php if ($Coronavirus == 'Coronavrius') echo "checked='checked'"; ?>>
                        <span>Coronavirus</span>
                    </label>
                </div>
                <div id="ck-button">
                    <label>
                        <input type="checkbox" name="tag[]"value="Corporate Innovation"
                        <?php if ($CorporateInnovation == 'Corporate Innovation') echo "checked='checked'"; ?>>
                        <span>Corporate Innovation</span>
                    </label>
                </div>
                <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="Cryptocurrency"
                            <?php if ($Cryptocurrency == 'Cryptocurrency') echo "checked='checked'"; ?>>
                            <span>Cryptocurrency</span>
                        </label>
                </div>
                <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="Cybersecurity"
                            <?php if ($Cybersecurity == 'Cybersecurity') echo "checked='checked'"; ?>>
                            <span>Cybersecurity</span>
                        </label>
                </div>
                    <br><br><br>
                    <div id="ck-button">
                    <label>
                        <input type="checkbox" name="tag[]"value="Ecommerce"
                        <?php if ($Ecommerce == 'Ecommerce') echo "checked='checked'"; ?>>
                        <span>Ecommerce</span>
                    </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="Retail"
                            <?php if ($Retail == 'Retail') echo "checked='checked'"; ?>>
                            <span>Retail</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="Ecosystem"
                            <?php if ($Ecosystem == 'Ecosystem') echo "checked='checked'"; ?>>
                            <span>Ecosystem</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="Edtech"
                            <?php if ($Edtech == 'Edtech') echo "checked='checked'"; ?>>
                            <span>Edtech</span>
                        </label>
                    </div>
                    <br><br><br>
                    <div id="ck-button">
                    <label>
                        <input type="checkbox" name="tag[]"value="Entertainment & Media"
                        <?php if ($EntertainmentMedia == 'Entertainment & Media') echo "checked='checked'"; ?>>
                        <span>Entertainment & Media</span>
                    </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="Entertainment Review"
                            <?php if ($EntertainmentReview == 'Entertainment Review') echo "checked='checked'"; ?>>
                            <span>Entertainment Review</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag[]"value="Entrepreneur Basics"
                            <?php if ($EntrepreneurBasics == 'Entrepreneur Basics') echo "checked='checked'"; ?>>
                            <span>Entrepreneur Basics</span>
                        </label>
                    </div>
                  <br><br>
                </ul>
            </div>
            <div class="col-12 row-4" style="margin-left: 5%">
                <p style= "font-size: 18px; font-weight: 300; margin-bottom: 2%">
                    5.	What stage and series are you interested in?
                </p>
                <ul class="post-action">
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Early Stage Development"
                            <?php if ($esd == 'y') echo "checked='checked'"; ?>>
                            <span>Early Stage Development</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Medium Stage Development"
                            <?php if ($msd == 'y') echo "checked='checked'"; ?>>
                            <span>Medium Stage Development</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Late Stage Development"
                            <?php if ($lsd == 'y') echo "checked='checked'"; ?>>
                            <span>Late Stage Development</span>
                        </label>
                    </div>
                  <br><br><br>
                  <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Seed"
                            <?php if ($seed == 'y') echo "checked='checked'"; ?>>
                            <span>Seed</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Series A"
                            <?php if ($seriesA == 'y') echo "checked='checked'"; ?>>
                            <span>Series A</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Series B"
                            <?php if ($seriesB == 'y') echo "checked='checked'"; ?>>
                            <span>Series B</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Series C"
                            <?php if ($seriesC == 'y') echo "checked='checked'"; ?>>
                            <span>Series C</span>
                        </label>
                    </div>
                  <br><br><br>
                  <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Profitable"
                            <?php if ($profitable == 'y') echo "checked='checked'"; ?>><span>Profitable</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Positive Revenue"
                            <?php if ($pr == 'y') echo "checked='checked'"; ?>>
                            <span>Positive Revenue</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Break Even"
                            <?php if ($be== 'y') echo "checked='checked'"; ?>>
                            <span>Break Even</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" name="tag2[]" value="Traction but no Revenue"<?php if ($tbnr == 'y') echo "checked='checked'"; ?>>
                            <span>Traction but no Revenue</span>
                        </label>
                    </div>
                  <br><br>
                </ul>
            </div>
            
            <div class="col-12 row-0" style="margin-left: 5%">
                <p style= "margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    6.	Do you prefer teams with an UNSDG focus?
                </p>
                <ul class="radio">
                    <li>
                        <input type="radio" name="unsdg" id="y" 
                        <?php if (isset($unsdg) && $unsdg=="Yes") echo "checked";?> value="Yes">
                        <label for="y">Yes</label>
                    </li>
                    <li>
                    </li>
                    <li>
                        <input type="radio" name="unsdg" id="n" 
                        <?php if (isset($unsdg) && $unsdg=="No") echo "checked";?> value="No">
                        <label for="n">No</label>
                    </li>
                </ul>
            </div>
            <div class="col-12 row-2">
                    <button type="submit" style="margin-top: 5%; padding: 10px 20px; position: relative; border-radius: 10px; background-color: #1ebdc8; margin-left: 43%; width:10%; color: white; border-style: none;"  class="signupbtn">
                    Submit</button>
            </div>
        </div>
   </form>
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
            return false;
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
    </script>
</html>


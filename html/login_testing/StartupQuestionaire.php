<?php
  include("config.php");
  session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['login_user'];
   //fullname
   $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
   $sql = "UPDATE StartupData SET FullName = '$fullname' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your Full Name is invalid";
   }
   //position
   $position = mysqli_real_escape_string($db,$_POST['position']);
   $sql = "UPDATE StartupData SET Position = '$position' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your position is invalid";
   }
   //StartupName
   $startupname = mysqli_real_escape_string($db,$_POST['startup']);
   $sql = "UPDATE StartupData SET StartupName = '$startupname' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your startup name is invalid";
   }
   //LOGO !!!!
   //stage !!! 
   //Location
   $location = mysqli_real_escape_string($db,$_POST['location']);
   $sql = "UPDATE StartupData SET Loc = '$location' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your location is invalid";
   }
   //Industry
   $industry = mysqli_real_escape_string($db,$_POST['Industry']);
   $sql = "UPDATE StartupData SET industry = '$industry' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your industry value is invalid";
   }
   //Founded
   $founded = mysqli_real_escape_string($db,$_POST['founded']);
   $sql = "UPDATE StartupData SET founded = '$founded' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your industry value is invalid";
   }
   //stage
   $stage = mysqli_real_escape_string($db,$_POST['myinput']);
   $sql = "UPDATE StartupData SET stage = '$stage' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your industry value is invalid";
   }
   //Raised
   $raised = mysqli_real_escape_string($db,$_POST['raised']);
   $sql = "UPDATE StartupData SET raised = '$raised' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your raised amount is invalid";
   }
   //Series
   $series = mysqli_real_escape_string($db,$_POST['series']);
   if ($series = "Other") {
       $series = mysqli_real_escape_string($db,$_POST['textbox']);
   }
   $sql = "UPDATE StartupData SET series = '$series' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your raised amount is invalid";
   }
   //Raise now
   $raisenow = mysqli_real_escape_string($db,$_POST['raisenow']);
   $sql = "UPDATE StartupData SET raisenow = '$raisenow' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your raised now value is invalid";
   }
   //pie
   $pie = mysqli_real_escape_string($db,$_POST['pie']);
   $sql = "UPDATE StartupData SET pie = '$pie' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        //echo "Your website is: ".$website.".";
    }
   else {
         $error = "Your pie value is invalid";
   }
   $website = mysqli_real_escape_string($db,$_POST['website']);
   //website
   $sql = "UPDATE StartupData SET Website = '$website' WHERE user = '$username'";
   if($db->query($sql) === TRUE) {
       //echo "Your username is: ".$username.".";
       //echo "Your website is: ".$website.".";
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

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("UPDATE StartupData SET logofilename = '".$fileName."' WHERE user = '$username'");
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
}else{
    $statusMsg = 'Please select a file to upload.';
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
    <link rel="stylesheet" href="questionaire2.css">

 	
	<title>Startup Questionaire</title>
    <h2><?php echo "Your username is: ".$_SESSION['login_user']."."; ?></h2> 
    <?php
      $username = $_SESSION['login_user'];
      
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
        $bio = $row["bio"];
        $unsdg = $row["unsdg"];
        $unsdg2 = $row["unsdg2"];
        $funds = $row["funds"];
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
    }
  } else {
   echo "0 results";
  }?>
    <h2><?php echo "Your bio is: ".$bio."."; ?></h2> 
      <h2><a href = "logout.php">Sign Out</a></h2>
</head>
<body style="background-color: #ffffff;">
   <div class="col-11 row-12" style=" margin-left: 5%; margin-top: 5%; margin-bottom: 5%; border: 3px solid black; ">
      <form action="StartupQuestionaire2.php" method = "POST" enctype="multipart/form-data">
            <h3 style="margin-left: 12%; margin-top: 5%; margin-bottom: 5%">A robust profile will help you get more accurate connections. Give us some more information below:</h3>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    1. Describe what your company does and why it's awesome
                </p>
                <textarea name="bio" rows="4" cols="145" style="margin-left:5%; border-radius: 10px; border-width: 2px; 
                border-color: lightgrey; background-color: white; color: darkgrey;" placeholder="" required><?php echo $bio;?></textarea> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    2. Attach your pitch deck
                </p>
                <h5><?php echo $pitch;?></h5>
                <input type="file" name="file" class="custom-file-input" value="<?php echo $pitch;?>" style="margin-left: 5%;">
            </div>
            <div class="col-12 row-0">
                <div style="margin-left: 5%;">
                     <p style= "margin-bottom:1%; font-size: 18px; font-weight: 300;">
                        3.  Do you have a UNSDG focus or angle?
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
                <textarea id="text" name="unsdg2" rows="4" cols="145" style="margin-left:5%; border-radius: 10px; border-width: 2px; 
                border-color: lightgrey; background-color: white; color: darkgrey;" placeholder="Sustainability Angle"><?php echo $unsdg2;?></textarea> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    4. How will you use the funds?
                </p>
                <textarea id="text" name="funds" rows="4" cols="145" style="margin-left:5%; border-radius: 10px; border-width: 2px; 
                border-color: lightgrey; background-color: white; color: darkgrey;" placeholder=""><?php echo $funds;?></textarea> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    5. Current Shareholders: (Name and Ownersip %)
                </p>
                <textarea id="text" name="shareholders" rows="4" cols="145" style="margin-left:5%; border-radius: 10px; border-width: 2px; 
                border-color: lightgrey; background-color: white; color: darkgrey;" placeholder="e.g. -John Doe, Jumpstart, 5%"><?php echo $shareholders;?></textarea> 
            </div>
            <div class="col-12 row-0">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    6. Are there any company highlights you would like to emphasize?
                </p>
                <textarea id="text" name="highlights" rows="4" cols="145" style="margin-left:5%; border-radius: 10px; border-width: 2px; 
                border-color: lightgrey; background-color: white; color: darkgrey;" placeholder=""><?php echo $highlights;?></textarea> 
            </div>
            <div class="col-12 row-7">
                <p style= "margin-left:5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    7. Founding team:
                </p>
                <div class="col-3 row-6" style="border-color: white; border-style: solid; margin-left: 0%">
                    <div style= "margin-left:15%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                        <p>Image:</p>
                        <h5><?php echo $ftimage1;?></h5>
                        <input type="file" name="file1" class="custom-file-input" value="<?php echo $ftimage1;?>" >
                        <br><br>
                        <p style= "margin-left:0%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                            Name:
                         </p>
                         <input type="text" placeholder="" name="ftname1" 
                         style="margin-left: 0%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                         value= "<?php echo $ftname1;?>" /> 
                         <p style= "margin-left:0%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                             Position:
                          </p>
                          <input type="text" placeholder="" name="ftposition1" 
                         style="margin-left: 0%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                         value= "<?php echo $ftposition1;?>" /> 
                          <p style= "margin-left:0%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                             Description or bio:
                          </p>
                          <input type="text" placeholder="" name="ftbio1"  value= "<?php echo $ftbio1;?>"
                         style="margin-left: 0%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                         /> 
                    </div>
                </div>
                <div class="col-3 row-7" style="border-color: white; border-style: solid; margin-left: 11%">
                    <div style= "margin-left:15%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                        <p>Image:</p>
                        <h5><?php echo $ftimage2;?></h5>
                        <input type="file" name="file2" class="custom-file-input" value="<?php echo $ftimage2;?>" >
                        <br><br>
                        <p style="margin-left:0%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                            Name:
                         </p>
                         <input type="text" placeholder="" name="ftname2" value= "<?php echo $ftname2;?>"
                         style="margin-left: 0%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                         /> 
                         <p style= "margin-left:0%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                             Position:
                          </p>
                          <input type="text" placeholder="" name="ftposition2"  value= "<?php echo $ftposition2;?> "
                         style="margin-left: 0%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                         /> 
                          <p style= "margin-left:0%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                             Description or bio:
                          </p>
                          <input type="text" placeholder="" name="ftbio2" value="<?php echo $ftbio2;?> "
                         style="margin-left: 0%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                         /> 
                    </div>
                </div>
                <div class="col-3 row-7" style="border-color: white; border-style: solid; margin-left: 11%">
                    <div style= "margin-left:15%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                        <p>Image:</p>
                        <h5><?php echo $ftimage3;?></h5>
                        <input type="file" name="file3" class="custom-file-input" value="<?php echo $ftimage3;?>" >
                        <br><br>
                        <p style= "margin-left:0%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                            Name:
                         </p>
                         <input type="text" placeholder="" name="ftname3"  value= "<?php echo $ftname3;?>"
                         style="margin-left: 0%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                         /> 
                         <p style= "margin-left:0%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                             Position:
                          </p>
                          <input type="text" placeholder="" name="ftposition3" value= "<?php echo $ftposition3;?> "
                         style="margin-left: 0%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                         /> 
                          <p style= "margin-left:0%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                             Description or bio:
                          </p>
                          <input type="text" placeholder="" name="ftbio3" value= "<?php echo $ftbio3;?> "
                         style="margin-left: 0%; border-width: 2pxborder-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                         /> 
                    </div>
                </div>  
            </div>
            <div class="col-12 row-1">
                <p style= "margin-left: 5%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    8. Number of Exits by Founding Team
                </p>
                <input type="text" placeholder="" name="exits" value= "<?php echo $exits;?> "
                    style="margin-left: 5%; border-width: 2px;border-radius: 10px; width: 90%; background-color: white; color: darkgrey;border-style: solid; border-color: lightgrey;"
                    />
            </div>
            <div class="col-12 row-2" style="margin-left: 5%">
                <p style= "margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    9. Profitability
                </p>
                <ul class="radio">
                    <li>
                        <input type="radio" name="profit" id="a" 
                        <?php if (isset($profitability) && $profitability=="Traction but no revenue") echo "checked";?> value="Traction but no revenue" onclick="ShowHideDiv()">
                        <label for="a">Traction but no revenue</label>
                    </li>
                    <li>
                        <input type="radio" name="profit" id="b" 
                        <?php if (isset($profitability) && $profitability=="Revenue") echo "checked";?> value="Revenue" onclick="ShowHideDiv()">
                        <label for="b">Revenue</label>
                    </li>
                    <li>
                        <input type="radio" name="profit" id="c" 
                        <?php if (isset($profitability) && $profitability=="Break even") echo "checked";?> value="Break even" onclick="ShowHideDiv()">
                        <label for="c">Break even</label>
                    </li>
                    <li>
                        <input type="radio" name="profit" id="d" 
                        <?php if (isset($profitability) && $profitability=="Profitable") echo "checked";?> value="Profitable" onclick="ShowHideDiv()">
                        <label for="d">Profitable</label>
                    </li>
                    <li>
                        <input type="radio" name="profit" id="e"
                        <?php if (isset($profitability) && $profitability!="Traction but no revenue" && $profitability!="Revenue" 
                        && $profitability!="Break even" && $profitability!="Profitable" 
                        && $profitability!='' ) echo "checked";?>  value="Other" onclick="ShowHideDiv()">
                        <label for="e">Other</label>
                    </li>
                    <li>
                        <div id="dvtext" style="display: none"><input type="text" name="textbox" id="txtBox" placeholder="" value="<?php echo $profitability;?>"/>
                    </li>
                </ul>
            </div>
            <div class="col-12 row-2">
                <button type="submit" name="submit" style="margin-top: 5%; padding: 10px 20px; position: relative; border-radius: 10px; background-color: #1ebdc8; margin-left: 43%; width:10%; color: white; border-style: none;"  class="signupbtn">
                    Next Step</button>
            </div>
        </div>
   </form>
</div>
 </body>
 </html>

 <script>
     function ShowHideDiv() {
            var Other = document.getElementById("e");
            var dvtext = document.getElementById("dvtext");
            dvtext.style.display = Other.checked ? "block" : "none";
        }
</script>

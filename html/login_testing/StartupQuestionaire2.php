<?php
  include("config.php");
  session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['login_user'];
    //bio
   $bio = mysqli_real_escape_string($db,$_POST['bio']);
   $sql = "UPDATE StartupData2 SET bio = '$bio' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
        //echo "Your username is: ".$username.".";
        echo "Your bio is: ".$bio.".";
    }
   else {
         $error = "Your Full Name is invalid";
   }
   //unsdg
    $unsdg = mysqli_real_escape_string($db,$_POST['unsdg']);
    $sql2 = "UPDATE StartupData2 SET unsdg = '$unsdg' WHERE user = '$username'";
    if($db->query($sql2) === TRUE) {
        echo "Your unsdg value is: ".$unsdg.".";
    }
      else {
         $error = "Your Login Name or website is invalid";
    }
    //unsdg2
    $unsdg2 = mysqli_real_escape_string($db,$_POST['unsdg2']);
    $sql3 = "UPDATE StartupData2 SET unsdg2 = '$unsdg2' WHERE user = '$username'";
    if($db->query($sql3) === TRUE) {
        //echo "Your username is: ".$username.".";
        echo "Your unsdg2 is: ".$unsdg2.".";
    }
   else {
         $error = "Your unsdg2 is invalid";
   }
   //funds
   $funds = mysqli_real_escape_string($db,$_POST['funds']);
   $sql4 = "UPDATE StartupData2 SET funds = '$funds' WHERE user = '$username'";
    if($db->query($sql4) === TRUE) {
        //echo "Your username is: ".$username.".";
        echo "Your funds value is: ".$funds.".";
    }
   else {
         $error = "Your funds value is invalid";
   }
   //shareholders
   $shareholders = mysqli_real_escape_string($db,$_POST['shareholders']);
   $sql5 = "UPDATE StartupData2 SET shareholders = '$shareholders' WHERE user = '$username'";
    if($db->query($sql5) === TRUE) {
        //echo "Your username is: ".$username.".";
        echo "Your shareholders info is: ".$shareholders.".";
    }
   else {
         $error = "Your shareholders info is invalid";
   }
   //highlights
   $highlights = mysqli_real_escape_string($db,$_POST['highlights']);
   $sql6 = "UPDATE StartupData2 SET highlights = '$highlights' WHERE user = '$username'";
    if($db->query($sql6) === TRUE) {}
    //ftname1
    $ftname1 = mysqli_real_escape_string($db,$_POST['ftname1']);
    $sql7 = "UPDATE StartupData2 SET ftname1 = '$ftname1' WHERE user = '$username'";
    if($db->query($sql7) === TRUE) {}
    //ftposition1
    $ftposition1 = mysqli_real_escape_string($db,$_POST['ftposition1']);
    $sql8 = "UPDATE StartupData2 SET ftposition1 = '$ftposition1' WHERE user = '$username'";
    if($db->query($sql8) === TRUE) {}
    //ftbio1
    $ftbio1 = mysqli_real_escape_string($db,$_POST['ftbio1']);
    $sql9 = "UPDATE StartupData2 SET ftbio1 = '$ftbio1' WHERE user = '$username'";
    if($db->query($sql9) === TRUE) {}
     //ftname2
     $ftname2 = mysqli_real_escape_string($db,$_POST['ftname2']);
     $sql10 = "UPDATE StartupData2 SET ftname2 = '$ftname2' WHERE user = '$username'";
     if($db->query($sql10) === TRUE) {}
     //ftposition2
     $ftposition2 = mysqli_real_escape_string($db,$_POST['ftposition2']);
     $sql11 = "UPDATE StartupData2 SET ftposition2 = '$ftposition2' WHERE user = '$username'";
     if($db->query($sql11) === TRUE) {}
     //ftbio2
     $ftbio2 = mysqli_real_escape_string($db,$_POST['ftbio2']);
     $sql12 = "UPDATE StartupData2 SET ftbio2 = '$ftbio2' WHERE user = '$username'";
     if($db->query($sql12) === TRUE) {}
      //ftname3
      $ftname3 = mysqli_real_escape_string($db,$_POST['ftname3']);
      $sql13 = "UPDATE StartupData2 SET ftname3 = '$ftname3' WHERE user = '$username'";
      if($db->query($sql13) === TRUE) {}
      //ftposition3
      $ftposition3 = mysqli_real_escape_string($db,$_POST['ftposition3']);
      $sql14 = "UPDATE StartupData2 SET ftposition3 = '$ftposition3' WHERE user = '$username'";
      if($db->query($sql14) === TRUE) {}
      //ftbio3
      $ftbio3 = mysqli_real_escape_string($db,$_POST['ftbio3']);
      $sql15 = "UPDATE StartupData2 SET ftbio3 = '$ftbio3' WHERE user = '$username'";
      if($db->query($sql15) === TRUE) {}
      //exits
      $exits = mysqli_real_escape_string($db,$_POST['exits']);
      $sql16 = "UPDATE StartupData2 SET exits = '$exits' WHERE user = '$username'";
      if($db->query($sql16) === TRUE) {}
      //Profitability
      $profit = mysqli_real_escape_string($db,$_POST['profit']);
      if ($profit = "Other") {
        $profit = mysqli_real_escape_string($db,$_POST['textbox']);
    }
      $sql17 = "UPDATE StartupData2 SET profitability = '$profit' WHERE user = '$username'";
      if($db->query($sql17) === TRUE) {}

      // File upload path
      $targetDir = "uploads/";
      $fileName = basename($_FILES["file"]["name"]);
      $targetFilePath = $targetDir . $fileName;
      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
      if(isset($_POST["submit"]) && !empty($fileName)){
          // Allow certain file formats
          $allowTypes = array('jpg','png','jpeg','gif','pdf');
          //echo "test";
          if(in_array($fileType, $allowTypes)){
              // Upload file to server
              //echo "test1";
              if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                //echo "test2";
                  // Insert image file name into database
                  $insert = $db->query("UPDATE StartupData2 SET pitch = '".$fileName."' WHERE user = '$username'");
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

      // ftimage1
      $targetDir = "uploads/";
      $fileName = basename($_FILES["file1"]["name"]);
      $targetFilePath = $targetDir . $fileName;
      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
      if(isset($_POST["submit"]) && !empty($fileName)){
          // Allow certain file formats
          $allowTypes = array('jpg','png','jpeg','gif','pdf');
          //echo "test";
          if(in_array($fileType, $allowTypes)){
              // Upload file to server
              //echo "test1";
              if(move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath)){
                //echo "test2";
                  // Insert image file name into database
                  $insert = $db->query("UPDATE StartupData2 SET ftimage1 = '".$fileName."' WHERE user = '$username'");
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

      // ftimage2
      $targetDir = "uploads/";
      $fileName = basename($_FILES["file2"]["name"]);
      $targetFilePath = $targetDir . $fileName;
      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
      if(isset($_POST["submit"]) && !empty($fileName)){
          // Allow certain file formats
          $allowTypes = array('jpg','png','jpeg','gif','pdf');
          if(in_array($fileType, $allowTypes)){
              // Upload file to server
              if(move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath)){
                  // Insert image file name into database
                  $insert = $db->query("UPDATE StartupData2 SET ftimage2 = '".$fileName."' WHERE user = '$username'");
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
      
      // ftimage3
      $targetDir = "uploads/";
      $fileName = basename($_FILES["file3"]["name"]);
      $targetFilePath = $targetDir . $fileName;
      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
      if(isset($_POST["submit"]) && !empty($fileName)){
          // Allow certain file formats
          $allowTypes = array('jpg','png','jpeg','gif','pdf');
          if(in_array($fileType, $allowTypes)){
              // Upload file to server
              if(move_uploaded_file($_FILES["file3"]["tmp_name"], $targetFilePath)){
                  // Insert image file name into database
                  $insert = $db->query("UPDATE StartupData2 SET ftimage3 = '".$fileName."' WHERE user = '$username'");
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
<?php
      $username = $_SESSION['login_user'];
      
    $sql = "SELECT activity, type1, tag FROM StartupData3 WHERE user = '$username'";
    $result = mysqli_query($db,$sql);
    if ($result->num_rows > 0) {
   // output data of each row
    $row = '';
    while($row = $result->fetch_assoc()) {
        $activity = "";
        $type1 = "";
        $tag = "";
        $tag = $row["tag"];
        $type1 = $row["type1"];
        $activity = $row["activity"];
        $inactive=  "inactive";
        $active = "active";
        $angel = "Angel";
        $institutional = "Institutional";
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
        
        //activity
        if(strpos($activity, $inactive) == false){
            $inactive = "";
        }
        if(strpos($activity, $active) == false){
            $active = "";
        }
        //type1
        if(strpos($type1, $angel) == false){
            $angel = "";
        }
        if(strpos($type1, $institutional) == false){
            $institutional = "";
        }
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
    }
  } else {
   echo "0 results";
  }?>
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
    <link rel="stylesheet" href="questionaire2.css">
    <link rel="stylesheet" href="morecss/favorites.css">

 	
    <title>Startup Questionaire</title>
    <h2><?php echo "Your username is: ".$username."."; ?></h2> 
      <h2><a href = "logout.php">Sign Out</a></h2>
</head>
<body style="background-color: #ffffff;">
        <div class="col-11 row-13" style=" margin-left: 5%; margin-top: 5%; margin-bottom: 5%;border: 3px solid black; ">
        <form action="StartupQuestionaire3.php" method = "POST">
            <h3 style="margin-left: 25%; margin-bottom: 2%">These investor preferences will help us find better matches for you</h3>
            <div class="col-12 row-0" style="margin-left:5%;">
                <p style= "margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    1. Just between us, would your ideal investor be
                </p>
                <div id="ck-button">
                        <label>
                        <input type="checkbox" id="active" name="activity[]" value="active"
                        <?php if ($active == 'active') echo "checked='checked'"; ?>>
                        <span>Active with regular involvement</span>
                        </label>
                </div>
                <div id="ck-button">
                        <label>
                        <input type="checkbox" id="inactive" name="activity[]" value="inactive"
                        <?php if ($inactive == 'inactive') echo "checked='checked'"; ?>>
                        <span>Silent with limited involvement</span>
                        </label>
                </div>
            </div>
            <div class="col-12 row-0" style="margin-left: 5%">
                <p style= "margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    2. What type of investor would you prefer?
                </p>
                <div id="ck-button">
                        <label>
                        <input type="checkbox" name="type[]" value="Angel"
                        <?php if ($angel == 'Angel') echo "checked='checked'"; ?>>
                        <span>Angel Investor</span>
                        </label>
                </div>
                <div id="ck-button">
                        <label>
                        <input type="checkbox" name="type[]" value="Institutional"
                        <?php if ($institutional == 'Institutional') echo "checked='checked'"; ?>>
                        <span>Institutional Investor</span>
                        </label>
                </div>
                <br>
            </div>

            <div class="panel-footer" id="loop">
                <p style= "margin-left:6%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    3. Keywords and tags
                </p>
                <p style= "margin-left:6%; margin-bottom:1%; font-size: 18px; font-weight: 300;">
                    Help us find the perfect matching investor
                </p>
                <br><br>
                <ul class="post-action" style="margin-left: 6%;">
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
                        <?php if ($EntertainmentMedia == 'Eentertainment & Media') echo "checked='checked'"; ?>>
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
            <div class="col-12 row-2">
                    <button type="submit" style="margin-top: 5%; padding: 10px 20px; position: relative; border-radius: 10px; background-color: #1ebdc8; margin-left: 43%; width:10%; color: white; border-style: none;"  class="signupbtn">
                    Submit</button>
            </div>
        </div>
    </form>
    </div>
</div>
 </body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
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
    </script>
</html>
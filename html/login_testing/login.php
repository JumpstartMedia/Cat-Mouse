<?php
  include("config.php");
  session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $u = mysqli_real_escape_string($db,$_POST['u']);
  $p = mysqli_real_escape_string($db,$_POST['p']);
  $sql = "SELECT * FROM test2 WHERE user = '$u' and pass = '$p'";
  $result = mysqli_query($db,$sql);
  $count = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
      if($count == 1) {
         $_SESSION['login_user'] = $u;
         
         if ($row['type'] == 'Startup') {
          header("location: StartupHome.php");
      }
      else if ($row['type']= 'Investor') {
          header("location: InvestorHome.php");
      }
    }
      else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

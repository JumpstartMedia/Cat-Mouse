<?php
   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_dev_basics";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$u = $_REQUEST['u'];
$p = $_REQUEST['p'];
$sql = "SELECT type FROM test2 WHERE user = '$u' and pass = '$p'";
$result = $conn->query($sql);
      if($result->num_rows == 1) {
          $row = $result->fetch_array()[0] ?? '';
        if ($row == 'Startup') {
            header("location: StartupHome.html");
        }
        else if ($row== 'Investor') {
            header("location: InvestorHome.html");
        }
       else {
         $error = "Your Login Name or Password is invalid";
      }
   }
mysqli_close($conn);
?>

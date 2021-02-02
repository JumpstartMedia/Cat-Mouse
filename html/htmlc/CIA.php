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
$e = $_REQUEST['e'];
$t = 'Startup';
$sql = "INSERT INTO test2 (user, pass, email, type)
VALUES ('$u', '$p', '$e', '$t')";

if ($conn->query($sql) === TRUE) {
    header("Location: SignIn.html#createstartupaccount");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


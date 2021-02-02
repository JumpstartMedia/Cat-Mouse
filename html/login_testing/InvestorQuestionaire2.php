<?php
  include("config.php");
  session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['login_user'];
    //bio
    $bio = mysqli_real_escape_string($db,$_POST['bio']);
    $sql = "UPDATE InvestorData2 SET bio = '$bio' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {}
    //preference
    $preference = mysqli_real_escape_string($db,$_POST['preference']);
    $sql = "UPDATE InvestorData2 SET preference = '$preference' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {}
    //previous 
    $previous = mysqli_real_escape_string($db,$_POST['previous']);
    $sql = "UPDATE InvestorData2 SET previous = '$previous' WHERE user = '$username'";
    if($db->query($sql) === TRUE) {
    }
    //tag2
   $checkbox=$_POST['tag2'];  
   $tag2="";  
   $sql = "UPDATE InvestorData2 SET tag2 = '$tag2' WHERE user = '$username'";
   if($db->query($sql) === TRUE) {}
   foreach($checkbox as $chk2)  
      {  
         $tag2 .= "[".$chk2."] ";  
      }
   $tag3 = (string) $tag2;
   $sql4 = "UPDATE InvestorData2 SET tag2 = '$tag3' WHERE user = '$username'";
   $result=mysqli_query($db,$sql4);
    //tag
   $checkbox1=$_POST['tag'];  
   $tag= "";  
   foreach($checkbox1 as $chk1)  
      {  
         $tag .="[".$chk1."] ";  
      } 
   $sql2 = "UPDATE InvestorData2 SET tag = '$tag' WHERE user = '$username'";
   $result=mysqli_query($db,$sql2);
   //unsdg
   $unsdg = mysqli_real_escape_string($db,$_POST['unsdg']);
   $sql3 = "UPDATE InvestorData2 SET unsdg = '$unsdg' WHERE user = '$username'";
   if($db->query($sql3) === TRUE) {}
}
   $newURL = "InvestorHome.php";
   header('Location: '.$newURL);
?>

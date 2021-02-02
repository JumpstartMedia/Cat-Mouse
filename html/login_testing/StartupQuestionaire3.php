<?php
  include("config.php");
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_SESSION['login_user'];
   //activity
   $checkbox1=$_POST['activity'];  
   $activity="";  
   foreach($checkbox1 as $chk1)  
      {  
         $activity .= "[".$chk1."] ";   
      } 
   $sql = "UPDATE StartupData3 SET activity = '$activity' WHERE user = '$username'"; 
   $result=mysqli_query($db,$sql);
   //type
   $checkbox2=$_POST['type'];  
   $type="";  
   foreach($checkbox2 as $chk2)  
      {  
         $type .= "[".$chk2."] "; 
      } 
   $sql2 = "UPDATE StartupData3 SET type1 = '$type' WHERE user = '$username'";
   $result=mysqli_query($db,$sql2);
   //tag
   $checkbox3=$_POST['tag'];  
   $tag="";  
   foreach($checkbox3 as $chk3)  
      {  
         $tag .= "[".$chk3."] ";  
      } 
   $sql2 = "UPDATE StartupData3 SET tag = '$tag' WHERE user = '$username'";
   $result=mysqli_query($db,$sql2);
}
   $newURL = "StartupHome.php";
   header('Location: '.$newURL);
   
   ?>
<?php
      /*
      include("config.php");
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $sql = "SELECT unseen FROM StartupArray WHERE user = '$username'";
      $result = mysqli_query($db,$sql);
      $id = mysqli_real_escape_string($db,$_POST['x']);
      $unseen2 = mysqli_real_escape_string($db,$_POST['unseen2']);
      $results = print_r($unseen2, true); */
      include ("iupdate.php");   
      //echo $results; 
      //echo "update2";
      if(isset($_POST['button1'])) { 
        unset($unseen2[$id]);
        $unseen = implode(",", $unseen2);
        //place back in to unseen 
        $sql2 = "UPDATE InvestorArray SET unseen = '$unseen' WHERE user = '$username'";
      $result = mysqli_query($db,$sql2);

      //liked 
        $sql = "SELECT liked FROM InvestorArray WHERE user = '$username'";
        $result = mysqli_query($db,$sql);
        if ($result->num_rows > 0) {
          // output data of each row
          $row = mysqli_fetch_assoc($result);
              $liked = '';
              $liked = $row["liked"];
              $liked2 = explode(",", $liked);
              $count = count($liked2);
              if (in_array("$value", $liked2, TRUE)) 
                { 
                } 
              else
                { 
                  //add to favorites
                  echo "pushed".$value."<br>";
                  array_push($liked2, $value);
                  $liked = implode(",", $liked2);
                  $sql2 = "UPDATE InvestorArray SET liked = '$liked' WHERE user = '$username'";
                  $result = mysqli_query($db,$sql2);
                  $num--;
                } 
          } else {
          echo "Error";
          }
      } 
      else if(isset($_POST['button2'])) { 
        unset($unseen2[$id]);
        $unseen = implode(",", $unseen2);
        //place back in to unseen 
        $sql2 = "UPDATE StartupArray SET unseen = '$unseen' WHERE user = '$username'";
      $result = mysqli_query($db,$sql2);

      //favorite/heart
        $sql = "SELECT favorite FROM InvestorArray WHERE user = '$username'";
        $result = mysqli_query($db,$sql);
        if ($result->num_rows > 0) {
          // output data of each row
          $row = mysqli_fetch_assoc($result);
              $favorite = '';
              $favorite = $row["favorite"];
              $favorite2 = explode(",", $favorite);
              $count = count($favorite2);
              if (in_array("$value", $favorite2, TRUE)) 
                { 
                } 
              else
                { 
                  //add to favorites
                  echo "pushed".$value."<br>";
                  array_push($favorite2, $value);
                  $favorite = implode(",", $favorite2);
                  $sql2 = "UPDATE InvestorArray SET favorite = '$favorite' WHERE user = '$username'";
                  $result = mysqli_query($db,$sql2);
                  $num--;
                  $x =0;
                } 
          } else {
          echo "Error";
          }
      }
      else if(isset($_POST['button3'])) { 
        unset($unseen2[$id]);
        $unseen = implode(",", $unseen2);
        //place back in to unseen 
        $sql2 = "UPDATE InvestorArray SET unseen = '$unseen' WHERE user = '$username'";
      $result = mysqli_query($db,$sql2);

      //favorite/heart
        $sql = "SELECT unliked FROM InvestorArray WHERE user = '$username'";
        $result = mysqli_query($db,$sql);
        if ($result->num_rows > 0) {
          // output data of each row
          $row = mysqli_fetch_assoc($result);
              $unliked = '';
              $unliked = $row["unliked"];
              $unliked2 = explode(",", $unliked);
              $count = count($unliked2);
              if (in_array("$value", $unliked2, TRUE)) 
                { 
                } 
              else
                { 
                  //add to favorites
                  echo "pushed".$value."<br>";
                  array_push($unliked2, $value);
                  $unliked = implode(",", $unliked2);
                  $sql2 = "UPDATE InvestorArray SET unliked = '$unliked' WHERE user = '$username'";
                  $result = mysqli_query($db,$sql2);
                  $num--;
                } 
          } else {
          echo "Error";
          }
      }
  ?>


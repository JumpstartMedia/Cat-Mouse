<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style> 
.circle-icon {
    background: lightgray;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    text-align: center;
    line-height: 100px;
    vertical-align: middle;
    padding: 30px;
    color: white;
    font-size: 40px;
    border: none;
}
.circle-icon1 {
    background: #ead1fa;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    text-align: center;
    line-height: 100px;
    vertical-align: middle;
    padding: 30px;
    color: white;
    font-size: 40px;
    border: none;
}
.circle-icon2 {
    background: #9228d8;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    text-align: center;
    line-height: 100px;
    vertical-align: middle;
    padding: 30px;
    color: white;
    font-size: 40px;
    border: none;
}
</style>
<?php
include('session.php');
//echo "update";
$username = $login_session;
$sql = "SELECT unseen FROM StartupArray WHERE user = '$username'";
$result = mysqli_query($db,$sql);
if ($x=0) {

}
if ($result->num_rows > 0) {
  // output data of each row
  $row = '';
  while($row = $result->fetch_assoc()) {
      $unseen = '';
      $unseen = $row["unseen"];
      $unseen2 = explode(",", $unseen);
      $count = count($unseen2);
      if ($count==1) {
        if (empty($unseen)) {
            $count= 0 ;
        }
    }
  }
  } 
  $num = $count;
    if ($num==0) {
      $imageURL = 'images/'.'done.png';
      ?>
      <span onclick="window.location.href='/login_testing/StartupHome.php'" class="w3-button w3-xlarge w3-transparent w3-right" title="Close Modal" style="font-size: 40px">×</span>
      <script> document.getElementById('buttons').style.display = 'none';
    </script> 
    <img src="<?php echo $imageURL; ?>">
    <?php
    
    }
    else {
      echo "number of remaining profiles".$num."<br>";
        $id = rand(0, $num-1);
        $value = $unseen2[$id];
        echo "arraynum".$id."<br>";
        echo "value".$unseen2[$id]."<br>";
        //find image and show
        $sql = "SELECT image FROM profileimage WHERE id = '$value'";
        $result = mysqli_query($db,$sql);
        $row = $result->fetch_assoc();
        $imageURL = 'images/'.$row["image"];
        ?>
        <img src="<?php echo $imageURL; ?>">
    <span onclick="window.location.href='/login_testing/StartupHome.php'" class="w3-button w3-xlarge w3-transparent w3-right" title="Close Modal" style="font-size: 40px">×</span>
    <?php
    echo '  <div onchange="hideDiv($num)">
    <div id="buttons" class="hideDiv">  
        <form method="post" action="update2.php"> 
        <input type="hidden" class="text" name="x" value="$id"/> 
        <input type="hidden" class="text" name="unseen2" value="$unseen2"/> 
        <input type="hidden" class="text" name="username" value="$username"/> 
          <button type="submit"  class="circle-icon1" name="button3" style="float: left;  margin-left: 30%; margin-right: 5%">
            <i class="fa fa-times fa-10x"></i>
          </button> 
          <button onclick="changeColor()" type="submit" id="button2" class="circle-icon" name="button2" style="float: left;  margin-right: 5%">
            <i class="fa fa-heart fa-8x"></i> 
          </button> 
          <button type="submit" class="circle-icon2" name="button1" style="float: left; margin-right: 5%">
            <i class="fa fa-check fa-7x"></i>
          </button>
      </form> 
    </div>
  </div>';
    }
  ?> 

  <script>
    var colors = ["black", "white"];
    var colorIndex = 0;
    function changeColor() {
        var col = document.getElementById("button2");
        if( colorIndex >= colors.length ) {
            colorIndex = 0;
        }
        col.style.color = colors[colorIndex];
        colorIndex++;
    }

  function hideDiv(int) {
    if(int == 0 || int == 1)
	    document.getElementById('hideDiv').style.display = "none";
    else
        document.getElementById('hideDiv').style.display = 'block';
}
</script>

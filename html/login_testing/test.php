<!DOCTYPE html>
<html>
<title>Startup Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="signin1.css">
<link rel="stylesheet" href="home2.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
        <img src="FJLabs.png" style="width: 40%; height: 50%; margin-left: 5%;">
        <div class="para" style="margin-left: 35%">
          <h3>FJ LABS</h3>
          <p>We are global marketplace investors and we've</p>
          <p>backed more than 500 entrepreneurs globally.</p>
        </div>
        <input type="hidden" value="1" id="number">
        <button class="learnmore" id="button1" title="gs" onclick="toggleContent()"><p class="learnmoreword" style="margin-left:35% !important; font-size: 2vh;">Learn more <i class="fa fa-arrow-right" style="color: #1ebdc8; "></i></p></button>



        <input type="hidden" value="2" id="number">
        <button class="learnmore" id="button1" title="gs" onclick="toggleContent()"><p class="learnmoreword" style="margin-left:35% !important; font-size: 2vh;">Learn more 2<i class="fa fa-arrow-right" style="color: #1ebdc8; "></i></p></button>

        <div class="form-popup" id="myForm">
    <div style="margin-top:5%; margin-left: 5%; height: 80%; width: 90%;
            -webkit-box-shadow: 0 0 5px 2px darkgray; background-color: #FFFFFF !important;
        -moz-box-shadow: 0 0 5px 2px darkgray;
        box-shadow: 0 0 5px 2px darkgray;">
          <span onclick="document.getElementById('myForm').style.display='none'" class="w3-button w3-xlarge w3-transparent" style="position: absolute; right: 10%;" title="Close Modal">×</span>
      <img id="Bar" src="assets/barimage.png" alt="Image of a Bar Sign.">
      <div onchange="hideDiv($num)">
        <div id="buttons" class="hideDiv">  
            <form method="post" action="StartupHome.php"> 
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
      </div>
        </div>
  </div>
</body>
</html>
<script>
function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }

function start() {
    let button1 = document.getElementById("button1");
    button1.onclick = toggleContent;
}
function toggleContent() {
  document.getElementById("myForm").style.display = "block";
    let number = +document.getElementById('number').value; // take value as a number
    let liquid = document.getElementById('Bar');

    if (isNaN(number) || number < 0) { // move exit condition to top and exit early
        alert("Invalid Entry. Enter a Number.")
        return;
    }

    if (number == 1) { // condition without parseint 
        liquid.src = 'FJLabsInfo.png';
        liquid.alt = 'FJ Labs Info';
    } else { // no need for another check
        liquid.src = 'assets/Beer.png';
        liquid.alt = 'Angry Juice';
    }
}

window.onload = start;
</script>
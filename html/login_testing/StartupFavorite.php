<!DOCTYPE html>
<html>
<title>Startup Menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="morecss/favorites.css">
<link rel=stylesheet href = "signin1.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* The popup form - hidden by default */
/* The popup form - hidden by default */

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
body{
        background-color: #ffffff !important;
        text-decoration: none !important;
    }
    html, body, h1, h2, h3, h4, h5 {font-family: "Helvetica"}
    h1,header {
        font-weight: bold;
    }
</style>
<body>

</div>
    <!-- Navbar -->
    <header>
        <!-- Navbar -->
        <div class="top">
            <div class="bar">
            <a class="baritem"></a>
            <a class="logodiv" title="Logo">
                <img src="logo.png" class="logo" alt="Logo">
                </a>
            <a href="StartupHome.php" class="baritem" style="margin-top: 1%; font-weight: 400" title="Home"><p class="word">Home<p></a>
            <a href="StartupMatch.php" class="baritem" style="margin-top: 1%; font-weight: 400" title="Matches"><p class="word">Matches<p></a>
            <a href="StartupFavorite.php" class="baritem" style="margin-top: 1%; font-weight: 400" title="Favorites"><p class="word">Favorites<p></a>
            <a href="StartupSetting.php" class="baritem" style="margin-top: 1%; font-weight: 400" title="Setting"><p class="word">Setting</p></a>
            <a href="StartupAccount.php" class="baritem" title="Myaccount" style = "position: absolute; margin-top: 1%; right: 16%; top: 0%;font-weight: 400"><p class="word">My Account<p></a>
            <a href="logout.php" class="baritem" style = "margin-top: 1%; position: absolute; right: 10%;font-weight: 400" title="Logout"><p class="word">Sign out</p></a>
            </div>
</div>  
    </header>
    <div class="cd-header">
        <img src="line.png">
	</div>

<main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
        <div class="cd-tab-filter">
            <ul class="cd-filters">
                <li class="placeholder"> 
                    <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                </li> 
                <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
                <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Fashion</a></li>
                <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Tech</a></li>
            </ul> <!-- cd-filters -->
        </div> <!-- cd-tab-filter -->
    </div> <!-- cd-tab-filter-wrapper -->

    <section class="cd-gallery">
        <ul>
            <li class="mix color-1 check1 1check1 option3 cursor demo">
                <div class="container">
                    <img src="byteimg.png" alt="profile" style="border-radius: 5% 5% 0 0;; display: block;margin-left: 0;margin-right: 0; margin-top: 0; width: 100%">
            <div class="imagetop"> 
                <div style="width: 30%; height: 30%; float:left; height:100px;">
                    <img src="salogo.png" alt="profile" style="display: block;margin-left: auto;margin-right: auto; width: 100%;">
                    </div>
                <div style="width: 50%; float:left; height:100px; margin-top: 5%; line-height: 70%;">
                        <h3>Squareark</h3>
                        <p>Ecommerce</p>
                </div>
            </div>
            </li>
            <li class="mix color-2 check2 radio2 option2">
                <div class="container">
                    <img src="images/2.jpg" alt="2" class="image">
                    <div class="overlay">
                      <div class="text">Hello World</div>
                    </div>
                  </div>
            </li>
            <li class="mix color-1 check3 radio3 option1">
                <div class="container">
                    <img src="images/3.jpg" alt="3" class="image">
                    <div class="overlay">
                      <div class="text">Hello World</div>
                    </div>
                  </div>
            </li>
            <li class="mix color-2 check2 radio2 option1">
                <div class="container">
                    <img src="images/4.jpg" alt="4" class="image">
                    <div class="overlay">
                      <div class="text">Hello World</div>
                    </div>
                  </div>
            </li>
            <li class="mix color-1 check3 radio2 option4">
                <div class="container">
                    <img src="images/5.jpg" alt="5" class="image">
                    <div class="overlay">
                      <div class="text">Hello World</div>
                    </div>
                  </div>
            </li>
            <li class="mix color-2 check1 radio2 option3">
                <div class="container">
                    <img src="images/6.jpg" alt="6" class="image">
                    <div class="overlay">
                      <div class="text">Hello World</div>
                    </div>
                  </div>
            </li>
            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
        </ul>
        <div class="cd-fail-message">No results found</div>
    </section> <!-- cd-gallery -->
    
    <div class="cd-filter">
        <form>
            <div class="cd-filter-block">
                <h4>Search</h4>
                
                <div class="cd-filter-content">
                    <input type="search" style="font-size: 14px!important" placeholder="Enter something">
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Size of Investor Firm</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                        <label class="checkbox-label" for="checkbox1">Small</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                        <label class="checkbox-label" for="checkbox2">Medium</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                        <label class="checkbox-label" for="checkbox3">Large</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Location</h4>
                
                <div class="cd-filter-content">
                    <div class="cd-select cd-filters" style="font-size: 14px!important">
                        <select class="filter" name="selectThis" id="selectThis">
                            <option value="">Choose a location</option>
                            <option value=".option1">Hong Kong</option>
                            <option value=".option2">China</option>
                            <option value=".option3">Japan</option>
                            <option value=".option4">Korea</option>
                        </select>
                    </div> <!-- cd-select -->
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Reporting Requirements</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter=".check1" type="checkbox" id="1checkbox1">
                        <label class="checkbox-label" for="checkbox1">> once a month</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check2" type="checkbox" id="2checkbox2">
                        <label class="checkbox-label" for="checkbox2">> once every quarter</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check3" type="checkbox" id="3checkbox3">
                        <label class="checkbox-label" for="checkbox3">> once every half year</label>
                    </li>
                    <li>
                        <input class="filter" data-filter=".check3" type="checkbox" id="4checkbox4">
                        <label class="checkbox-label" for="checkbox3">> once per year</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Investor Involvement</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter=".check11" type="checkbox" id="11checkbox1">
                        <label class="checkbox-label" for="checkbox1">Active</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check22" type="checkbox" id="22checkbox2">
                        <label class="checkbox-label" for="checkbox2">Inactive</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->
        </form>

        <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-filter -->

    <a href="#0" class="cd-filter-trigger">Filters</a>
</main> <!-- cd-main-content -->

<footer style="position: relative; margin-top: 0%;">
    <img src="foot.png" class="foot" alt="foot" style="display: block;margin-left: auto;margin-right: auto; width: 100%">
</footer>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
    
</body>
</html>
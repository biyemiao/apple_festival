<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset = "utf-8">
  <title>AppleFest</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
    
<body>

  <?php include 'includes/nav_bar.php';?>

  <div class="banner">
    <img id="banner_img" src="images/apple.jpg" alt="apples">
   <!-- image adapted from picture take by Haewon Hwang, 2014 -->
   <h2><span>Experience Apple Festival</span></h2>
   <h4><span>Bring some friends, bring a date, this event should not be missed</span></h4>
   <h5><span>On the Ithaca Commons, September 29th - October 1st</span></h5>
  </div>

  <div class="content">
    
    <div id = "circle_nav_pics">
        <ul class="img_list">
            
            <li class="img_list_item">
                <a href="about_map.php" class="wrapper">
                    <div class="circle_text">
                        <div class="text">
                            <span class="ct_title">About & Maps</span>
                            <div class="ct_desc"> Learn about AppleFest and how to navigate it</div>
                        </div>
                    </div>

                    <img class="circle_pic" src="images/map.png" alt="map">
                    <!-- image taken from : http://www.downtownithaca.com/local/file_upload/images/Apple%20Harvest%20Map%202016.jpg
                    -->
                </a>
            </li>
        
            <li class="img_list_item">
            <a href="tastings_food.php" class="wrapper">
                <div class="circle_text">
                    <div class="text">
                        <span class="ct_title">Tastings & Food</span>
                        <div class="ct_desc"> Where to try cider & eat</div>
                    </div>
                </div>
                <img class="circle_pic" src="images/food.png" alt="an apple">
                <!-- image adapted from picture take by Haewon Hwang, 2014 -->
            </a>
            </li>

            <li class="img_list_item">
            <a href="music.php" class="wrapper">
                <div class="circle_text">
                    <div class="text">
                        <span class="ct_title">Live Music</span>
                        <div class="ct_desc"> See the weekend concert schedule</div>
                    </div>
                </div>
                
                <img class="circle_pic" src="images/music.png" alt="musician on stage">
                <!-- image adapted from picture take by August Larmer DiFilippo, 2016 -->
            </a>
            </li>

            <li class="img_list_item">
            <a href="craft_booths.php" class="wrapper">
                <div class="circle_text">
                    <div class="text">
                        <span class="ct_title">Craft Booths</span>
                        <div class="ct_desc"> Check out local artist's work</div>
                    </div>
                </div>
                
                <img class="circle_pic" src="images/craft.png" alt="a craft booth">
                <!-- image adapted from picture take by August Larmer DiFilippo, 2016 --> 
            </a>
            </li>
            
        </ul>
    </div> <!-- class circle_nav_pics end -->
      
   <footer>
        <?php include 'includes/footer.php';?>
   </footer>
      
   </div> <!-- class content end -->
</body>
</html>

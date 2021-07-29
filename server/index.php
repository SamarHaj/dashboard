
<!DOCTYPE html>
<?php
 include 'connection.php';
 include 'check.php';





   $username = $_SESSION['username'];

 $usql1 = "SELECT * FROM users WHERE username='$username' ;";

      $res = mysqli_query($db, $usql1);
    $r = mysqli_fetch_assoc($res);  





    $usql = "UPDATE users SET `active` = 'yes' WHERE username = '" . $username . "' ;";

      $result = mysqli_query($db, $usql);

     $query = "SELECT * FROM users WHERE username='$username' and flogout ='yes';";
 
 $result1 = mysqli_query($db, $query) or die(mysqli_error($db));
     $count = mysqli_num_rows($result1);

 if ($count == 1){

 header("Location: logout.php"); 
 }
      


?>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css1/animate.css">
  <!-- Icomoon Icon Fonts-->
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css1/bootstrap.css">

  <!-- Magnific Popup -->

  <!-- Flexslider  -->
  <link rel="stylesheet" href="css1/flexslider.css">

  <!-- Owl Carousel -->

  <!-- Theme style  -->
  <link rel="stylesheet" href="css1/style.css">

<script>
    $(document).ready(function() {
        // auto refresh page after 1 second
        setInterval('refreshPage()', 1000000);
    });

    function refreshPage() { 
        location.reload(); 
    }
</script>


 

  <script type="text/javascript">var timer = 0;
function set_interval() {
  // the interval 'timer' is set as soon as the page loads
  <?php 

                 $query = "SELECT `atime` FROM `time` WHERE `id` = 1 ;";
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                      $r = mysqli_fetch_assoc($result); 


echo 'timer = setInterval("auto_logout()", ' .  $r['atime'] .  ');' ;
     ?>  // the figure '10000' above indicates how many milliseconds the timer be set to.
  // Eg: to set it to 5 mins, calculate 5min = 5x60 = 300 sec = 300,000 millisec.
  // So set it to 300000
}

function reset_interval() {
  //resets the timer. The timer is reset on each of the below events:
  // 1. mousemove   2. mouseclick   3. key press 4. scroliing
  //first step: clear the existing timer

  if (timer != 0) {
    clearInterval(timer);
    timer = 0;
    // second step: implement the timer again
 <?php 

                 $query = "SELECT `atime` FROM `time` WHERE `id` = 1 ;";
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                      $r = mysqli_fetch_assoc($result); 



echo 'timer = setInterval("auto_logout()", ' . $r['atime'] .  ');' ;
     ?>     // completed the reset of the timer
  }
}

function auto_logout() {
  // this function will redirect the user to the logout script
  window.location = "logout.php";
}</script>
</head>
<body onload="set_interval()" 
onmousemove="reset_interval()"
onclick="reset_interval()"
onkeypress="reset_interval()"
onscroll="reset_interval()">

<?php  $usql1 = "SELECT * FROM users WHERE username='$username' ;";

      $res = mysqli_query($db, $usql1);
    $r = mysqli_fetch_assoc($res);  

;


  ?> 
  <script>
    var sock = new WebSocket("ws://localhost:5001");
    sock.onopen = function(event){
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

var myJSON = '{"name": <?php echo'"' .$r['name'] .'"'?> , "username":  <?php echo'"' .$r['username'] .'"'?>, "session ID":" <?php echo'"' . session_id() .'"'?>" , "login date": <?php echo'"' . date("Y/m/d") .'"'?> , "login time":  <?php echo'"' . date("h:i:sa") .'"'?> , "user IP": <?php  echo'"' .$_SERVER['REMOTE_ADDR'] .'"'?>   }';

        sock.send(myJSON);

    };
    
  </script>

  

  <div class="colorlib-loader"></div>

  <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-xs-2">
              <div id="colorlib-logo"><a href="index.php">Project</a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
              <ul>
                <li class="active"><a href="index.php">Home</a></li>
                
                <li><a href="logout.php">Logout</a></li>
              
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <aside id="colorlib-hero">
      <div class="flexslider">
        <ul class="slides">
          <?php 

                 $query = "SELECT `css` FROM `temp` WHERE `id` = 1 ;";
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                      $r = mysqli_fetch_assoc($result); 
   $f = $r['css'] ;
   echo '          <li style="background-image: url(images1/img_bg_'.$f.'.jpg);">';
?>                      
            <div class="overlay"></div>
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                  <div class="slider-text-inner">
                    <div class="desc">
                      <p class="meta">
                        
                      </p>
                      <h1> <?php 

                 $query = "SELECT `login` FROM `temp` WHERE `id` = 1 ;";
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                      $r = mysqli_fetch_assoc($result); 
   $f = $r['login'] ;
   echo str_replace("username","$username","$f");
?>                       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          
          </ul>
        </div>
    </aside>




    <script src="js1/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js1/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js1/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js1/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="js1/jquery.flexslider-min.js"></script>
  <!-- Owl carousel -->
  <script src="js1/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js1/jquery.magnific-popup.min.js"></script>
  <script src="js1/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="js1/main.js"></script>

</body>
</html>
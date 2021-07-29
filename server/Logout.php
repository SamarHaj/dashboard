<?php
   include 'connection.php';
   $username = $_SESSION['username'];

    $usql = "UPDATE users SET `active` = 'no' WHERE username = '" . $username . "' ;";

      $result = mysqli_query($db, $usql);
      

session_destroy();
echo'<script> alert("';
$query = "SELECT `logout` FROM `temp` WHERE `id` = 1 ;";
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                      $r = mysqli_fetch_assoc($result); 
   echo  $r['logout'];
echo '"); window.location="login.php"</script>'; 
?>
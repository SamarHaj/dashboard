<?php 
include 'connection.php';
   $username = $_SESSION['username'];

if(isset($_POST) & !empty($_POST)){
	$pass = mysqli_real_escape_string($db, $_POST['pass']);
$uppercase = preg_match('@[A-Z]@', $pass1);
$lowercase = preg_match('@[a-z]@', $pass1);
$number    = preg_match('@[0-9]@', $pass1);
$specialChars = preg_match('@[^\w]@', $pass1);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{

	
      $usql = "UPDATE users SET`password` = ' " . $pass . "' WHERE username = '$username' ;";

      $result = mysqli_query($db, $usql);

		$r = mysqli_fetch_assoc($result);	
	
			 header("Location: index.php"); 


		}}else{
			echo "Failed to Recover your password, try again";
		}




?>
<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">

      <form class="form-signin" action="setpass.php" method="POST">
        <h2 class="form-signin-heading">Enter your new password</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" name="pass" class="form-control" placeholder="Password" required>
		   <input type="text" name="repass" class="form-control" placeholder="Password" required>

		</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>
</div>
</body>
</html>
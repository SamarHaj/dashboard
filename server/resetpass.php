<?php 

   include 'connection.php';

if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($db, $_POST['username']);

	$sql = "SELECT * FROM `users` WHERE username = '$username'";
	echo $sql ; 
	$res = mysqli_query($db, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		$password = rand(1000, 5000);
$password_hash = $password;
 
      $usql = "UPDATE users SET`password` = ' " . $password_hash . "' WHERE username = '$username' ;";

      $result = mysqli_query($db, $usql);

		$r = mysqli_fetch_assoc($res);	
		$password = $r['password'];
		$to = $r['email'];
		$subject = "Your Recovered Password";
        
		$message = "Please use this password to login " . $password_hash;
$from = "samarhajj202044@gmail.com" ;
		$headers = "From: Admin<".$from. ">\r\nContent-type: text/html; charset=iso-8859-1\r\nMIME-        Version: 1.0\r\n";
$mail =mail($to, $subject, $message , $headers);
		if($mail){
			echo "Your Password has been sent to your email id";
			$_SESSION['username'] = $username;
			 header("Location: code.php"); 


		}else{
			echo "Failed to Recover your password, try again";
		}

	}else{
		echo "User name does not exist in database";
	}
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
      
      <form class="form-signin" action="resetpass.php" method="POST">
        <h2 class="form-signin-heading">Enter your Email</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" name="username" class="form-control" placeholder="email" required>
		</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>
</div>
</body>
</html>
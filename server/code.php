<?php 

include 'connection.php';
   $username = $_SESSION['username'];

if(isset($_POST) & !empty($_POST)){

	$code = mysqli_real_escape_string($db, $_POST['code']);
	$sql = "SELECT * FROM `users` WHERE username = '" . $username . "' ;";
	$res = mysqli_query($db, $sql);
	$count = mysqli_num_rows($res);
			$r = mysqli_fetch_assoc($res);	
    $pass = $r['password'];
    
	if( $pass == $code ){
					$_SESSION['username'] = $username;

		 header("Location: setpass.php"); 

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
<div class="container justify-content-center align-content-center">
   <div class="row justify-content-center align-content-center">
   	   <div class="col-3 justify-content-center align-content-center">
</div>
   	   <div class="col-6 justify-content-center align-content-center">

      <form class="form-signin" action="code.php" method="POST"  >
        <h2 class="form-signin-heading">Enter the code we send to your email</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" name="code" class="form-control" placeholder="code" required>
		</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>
  </div>
     	   <div class="col-3 justify-content-center align-content-center">

  </div>
</div>
</body>
</html>
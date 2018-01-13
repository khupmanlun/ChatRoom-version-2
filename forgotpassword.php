<?php
	$on = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  body{
	background-image: url("https://source.unsplash.com/random/1390x720");
  }
.auto-style1 {
	color: black;
	font-family:Verdana;
}
.auto-style2 {
	background-color: #348E9B;
}

</style>
</head>
<body >
<?php
    include('Navbar.php');
?>
<div class="container">
	
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
	<div class="row">
		<div class="col-sm-7"><h2 class="auto-style1">Forgot Password...</h2><p><h3 class="auto-style1">Password should be alphanumeric and 8 maximum characters</h3></p></div>
    	<div class="col-sm-4" style="background-color:transparent;">
			</br>
			</br>
			<form action="check.php?id=3" method="POST" >
				<br>
				<input type="text" name="name" placeholder="Username"  style="width: 234px; height: 39px"  autocomplete="off" required><br>
				<br>
				<input type="password" name="password" placeholder="New Password"   required minlength="4" maxlength="8" autocomplete="off" style="width: 234px; height: 39px" required>
				</br>
				</br>
				<input type="submit" name="submit" value="Change Password" class="btn btn-primary" style="width: 150px; height: 35px" title="Click" required>
			</br>
			</br>
       	</div>
		<div class="col-sm-1"></div>
	</div>
</div>

</body>
</html>

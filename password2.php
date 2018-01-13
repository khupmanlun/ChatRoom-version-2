<?php
  $on = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ChatRoom</title>
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
		<div class="col-sm-2"></div>
    	<div class="col-sm-7">
			<h3 class="auto-style1">Your password or username is wrong!</h3>
			<p>
				<h3 class="auto-style1">Sign In with a correct username or different username.</h3>
			</p>
			<p>
				<h3 class="auto-style1">Go to Sign In <a href="index.php">Sign In</a></h3>
			</p>
       	</div>
		<div class="col-sm-1"></div>
	</div>
</div>

</body>
</html>

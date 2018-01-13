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
	background-image: url("bg.JPEG");
  }
.auto-style1 {
	color: black;
  font-family: Halveica,Verdana,sans-serif;
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
    	<div class="col-sm-10">
			<h3 class="auto-style1">Username is not there in database or User password change is not successfull!</h3>
			<p>
				<h3 class="auto-style1">Try Again.</h3>
			</p>
			<p>
				<h3 class="auto-style1"><a href="index.php">Sign In</a>&nbsp;&nbsp;&nbsp; OR &nbsp;&nbsp;&nbsp;<a href="signup.php">Sign Up</a></h3>
			</p>
       	</div>
	</div>
</div>

</body>
</html>

<?php
	$on = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to ChatRoom</title>
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
	color: #C1CED0;
	font-family:Halvetica;
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
    <br
    <br/>
	<div class="row">
		<div class="col-sm-7"><h2 class="auto-style1">Use ChatRoom to connect</h2><p><h3 class="auto-style1"> and to  keep in touch with your old friend.</h3></p></div>
    	<div class="col-sm-4" style="background-color:transparent;">
			</br>
			</br>
			<form action="check.php?id=2" method="POST">
				<br>
				<input type="text" name="name" placeholder="Username" style="width: 234px; height: 39px" autocomplete="off" required autofocus="On"><br>
				<br>
				<input type="password" name="password" placeholder="Password" style="width: 234px; height: 39px" autocomplete="off" required>
				</br>
				</br>
				<input type="submit" name="submit" value="Sign In" class="btn btn-primary" style="width: 102px; height: 35px;font-family:verdana;" title="Click" required>&nbsp;&nbsp;&nbsp;
        <a href="forgotpassword.php"  id ="password" style="color:black;">Forgot password?</a>
				</form>
			</br>
			</br>
       	</div>
		<div class="col-sm-1"></div>
	</div>
</div>
<script>
	var hover = document.getElementById("password");
	var click = addEventListener("hover");
	if(click){
		hover.addClass("hide-me");
	}
</script>
</body>
</html>

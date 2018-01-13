<?php
	$on =0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  body{
  background-image: url("https://source.unsplash.com/random/1370x720");
  }
.auto-style1 {
	color: #C1CED0;
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
	<div class="row">
		<div class="col-sm-4"></div>
		<!--<div class="col-sm-4"><h1 class="auto-style1">Sign Up</h1></div>-->
		<div class="col-sm-4"></div>
	</div>
	<div class="row">
		
    	<div class="col-xs-3 col-sm-6" style="background-color:transparent;">
			</br>
			<form action="check.php?id=1" method="POST">
				<br> 
				<input type="text" name="name" placeholder="Username" style="width: 234px; height: 39px" align='center' autocomplete="off" autofocus required><br>
				<br> 
				<input type="email" name="email" placeholder="Email" style="width: 234px; height: 39px"  autocomplete="off" required><br>
				<br>
				<input type="password" name="password" placeholder="Password" style="width: 234px; height: 39px" autocomplete="off" required>
				</br>
				</br>
				<input type="submit" name="submit" value="Sign Up" class="btn btn-primary" style="width: 102px; height: 35px" title="Click" required>
				<a href="index.php"><input type="button" class="btn btn-danger" style="font-family:Verdana;width:105px;height:36px;" value="Sign In"></a>
				</form>
				
				
			</br>
			</br>
       	</div>
		<div class="col-sm-4"></div>
	</div>
</div>

</body>
</html>

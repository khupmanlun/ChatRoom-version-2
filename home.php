
<?php
	ob_start();
	session_start();
	if(isset($_SESSION['name']))
	{
?>
		<!doctype html>
		<html>
			<head>
				
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<style type="text/css">
					body
					{
						/*background-image: url("bg.JPEG");*/
					}
					.auto-style2 {
					background-color: #348E9B;
					
					}
				</style>
			</head>
			<body>
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						
						<div class="navbar-header">
							<a class="navbar-brand" href="home.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ChatRoom</a>
						</div>
				
						<ul class="nav navbar-nav navbar-right">
							<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>LogOut&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
						</ul>
					
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
						</ul>
					</div>
					
					
				</nav>
					<div class="col-sm-12">
							<div class="jumbotron">
								<div class = " container ChatPage" id="scroll" style = "background-color:white;border: 1px solid none;margin:auto;width:1280px;height:500px;overflow:auto;scroll-behavior:auto; background:transparent;">
						
								</div>
						</div>
					</div>
				<div id= 'messageEntry'  class="col-sm-6 col-xs-12" style="padding:6px;margin-left:105px;">
						<form action="" onsubmit= "return false" method="POST">
								<input type="hidden" name="name" id="name" value="<?php echo $_SESSION['name'];?>">
								<input type="textbox" style="padding:2px;margin:auto;width:1050px;height:38px; " name="inputBox"  id = "inputBox" autofocus="On" autocomplete="off">
								<button class="btn btn-primary"   type='submit' id = "enterMessage">Send</button>
								
								
						</form>
				</div>
							<script src='SendMessage.js'></script>
							<script src="display.js"></script>
							
					
			
			</body>
		</html>
<?php
	}
	else{
		header('location:index.php');
	}
?>


	
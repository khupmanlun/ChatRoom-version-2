 <?php 
 $connect= mysqli_connect('localhost','root','');
	if(!$connect)
		echo "error";
	$db= mysqli_select_db($connect,"chatroom");
	if(!$db)
		echo " database is Not fine";
	?>
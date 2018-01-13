<?php
	$con =  mysqli_connect('localhost','root','');
	$create = "CREATE DATABASE IF NOT EXISTS `chatroom`";
	if(mysqli_query($con,$create)){
		
		$createTable = "CREATE TABLE 
	  chatroom.userdetails (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 `Name` varchar(20) NOT NULL, 
	 `email` varchar(20) NOT NULL,
	 `userPassword` varchar(11) NOT NULL
	)";
		if(mysqli_query($con,$createTable)){
			echo "database created";
			echo "table created";
		}
		
	}
	
	else{
		echo "ChatRoom is not created";
	}

		
		
?>
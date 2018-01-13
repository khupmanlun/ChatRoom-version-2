

<?php
		//This is where a userMessage table is created when the enters a message, only if the table hasn't been created.
		// Also it will insert the message sent by the user
		session_start();
		$name = $_POST['name'];
		include('Config.php');
		$userMessage = $_POST['inputBox'];//message typed by the user
		if($userMessage!=''){

		$createMsgTable = "CREATE TABLE IF NOT EXISTS 
				chatroom.userMessages (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
					`Name` varchar(20) NOT NULL,
					`message` varchar(256) NOT NULL,
					`time` int(11) NOT NULL
				)";
	
		if(mysqli_query($connect,$createMsgTable)){
			echo "Created";
		}
			$insertTime = time();
			$insert = "INSERT INTO userMessages
			(`id`,`Name`,`message`,`time`) VALUES(NULL,'$name','$userMessage','$insertTime') ";
			if(mysqli_query($connect,$insert)){
						
			}
				else
					echo "not inserte into userMessages";

	}
		else
			echo "Message database and table is not created";

?>
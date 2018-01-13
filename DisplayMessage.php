<?php
	//Here the user's messages are displayed 
	session_start();
	include('Config.php');
	
	$time = time() - 600;
	$display = "SELECT * FROM 
	`userMessages` 
	WHERE
	 `time` > $time
	  ORDER 
	  BY `time`";
	  $query= mysqli_query($connect,$display);
	  if($query){
	  			while($row = mysqli_fetch_assoc($query)){
	  					echo "<div style='background-color:none;'>";
	  				echo "<b style='font-size:19px;color:purple'>";
	  				echo $row['Name'];
	  				echo "</b>";
	  				echo "        Says :" ;
	  				echo "<br>";
	  				echo "<b style='font-family:Helvetica Neue, Helvetica, Arial, sans-serif; font-size:15px;'>";
	  				echo $row['message'];
	  				echo "</b>";
	  				echo "<br>";
	  				echo "<hr>";
	  				echo "</div>";
	  			}
	  }
	  else{
	  	echo "";
	  }
?>
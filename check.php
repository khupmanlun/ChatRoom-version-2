<?php
	session_start();
	$id = $_GET['id'];//Getting the id of the action url...different id means different function of the check php file
	include('database.php');
	include('Config.php');
	
	//This database.php file creates database and table if not created so dynamically if you dont have the database
	
	//Getting the values of name,email and password from the user
	//Using  hash passwrod scheme, we secure the password with sha512 encryption
	if($id==1){
			
				$name =mysqli_real_escape_string($connect,$_POST['name']);
				$email=mysqli_real_escape_string($connect,$_POST['email']);
				$password=mysqli_real_escape_string($connect,$_POST['password']);

				//$password= password_hash($password,PASSWORD_BCRYPT);
				$search =  "SELECT Name  FROM `userdetails` where  Name='$name' ";
				$query = mysqli_query($connect,$search);
				$row = mysqli_num_rows($query);
				if($row>=1){
					header('location:password1.php');
				}
				else{
					$insert = "INSERT INTO  `userdetails`(`id`,`Name`,`email`,`userPassword`) VALUES(NULL,'$name','$email','$password')";
				//implementing the insert query and checking at the same time if it works well or not
					if(!mysqli_query($connect,$insert)){
					echo "not inserted";
				}
					else{
								

							header('location:index.php');
										}
			}
				
		

		}

//if user tries to sign in this block is activated
	else if($id==2){
				$name = $_POST['name'];
				$password=mysqli_real_escape_string($_POST['password']);
				//$password= password_hash($password,PASSWORD_BCRYPT);
				$search =  "SELECT * FROM `userdetails` where Name = '$name'";
				$qry= mysqli_query($connect,$search);
				$row = mysqli_fetch_array($qry,MYSQLI_ASSOC);
				if($row['userPassword']===$password){
					$_SESSION['name'] = $name;
					header('location:home.php');
				}
				else
					header('location:password2.php');
					
			}
//When user tries to change the password this block is being called
	else if($id==3){

			$name = $_POST['name'];
			$password= $_POST['password'];
			$find = "SELECT Name  FROM `userdetails` WHERE Name='$name'";
			$q = mysqli_query($connect,$find);
			
			$row= mysqli_fetch_assoc($q);
			if(mysqli_num_rows($q)>=1){

				$changeP = "UPDATE userdetails  SET userPassword = '$password' WHERE Name = '$name'";

				$query= mysqli_query($connect,$changeP);
				if($query){
					header('location:success.php');
				}
				else{
					header('location:password3.php');			
				}

			}
			
			else{
					header('location:password3.php');
			}
		
	}

?>
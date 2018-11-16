<?php

session_start();


include 'connection/config.php';

if(isset($_POST["username"], $_POST["password"])) 
    {  

    	$username = null;
    	$password = null;
		$username=$_POST['username']; 
		$password=$_POST['password'];

		$sql1="SELECT * FROM login WHERE username='$username' and password='$password'";
		
		$result1=mysqli_query($db,$sql1);
		$row1=mysqli_fetch_array($result1);
		$level = $row1['level'];

				if(mysqli_num_rows($result1) > 0 )
				{
							if ($level=='admin'){
								header("location: admin/user_file.php"); }
				}
				else
				{
					//echo 'Log masuk tidak sah!';
					header("location: redirect.php");  
				}
				exit();
		
	}



?>
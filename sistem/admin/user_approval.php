<?php

		include("../connection/config.php");
		session_start();
		$no = $_SESSION['no'];
		if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$id=$_GET['user_id']; 



		$sql = "SELECT * FROM personal_info WHERE personal_info.id='$id'";
		$result = mysqli_query($db, $sql);
		$row = mysqli_fetch_array($result);

		/*echo $row['zone'];*/

		

		$sql_info = "DELETE  FROM personal_info  WHERE  id='".$id."'";		
		$sql_info2 = "DELETE  FROM login  WHERE  no='".$id."'";
		if (mysqli_query($db, $sql_info) && mysqli_query($db, $sql_info2)) {
			header("Location: user_list10.php?zone=".$row['zone']."");
			
		} else {
			echo "Error deleting record: " . mysqli_error($db);
		}
mysqli_close($db);
		
		

?>


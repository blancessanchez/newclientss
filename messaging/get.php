<html>
<head>
</head>
<?php include('connection.php');
?>
<?php
	$query= mysqli_query($DB,"SELECT * FROM tblmessages WHERE userid = '".$_POST['userid']."'");
	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_assoc($query)){
			if($row['id']==$row['userid'])
			echo '<p  align="right"><b>'.$row['sentBy'].'</b>: '.$row['message'].'</p>';
			else
		 	echo '<p><b>'.$row['sentBy'].'</b>: '.$row['message'].'</p>';


		}
	}

?>


</html>
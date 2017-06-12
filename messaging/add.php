<?php
include('connection.php');
mysqli_query($DB,"INSERT INTO tblmessages(message) VALUES ( '".$_POST['message']."')");

?>
<?php 
	$username = 'root';
	$password = '';
	$db = 'money_ms';

	$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");

	$sql  = " DELETE FROM update_n WHERE id='$_GET[id]' ";

	$query = mysqli_query($conn, $sql);
	if($query)
		include('view.php');
 ?>
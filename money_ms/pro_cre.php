<?php 

$username = 'root';
$password = '';
$db = 'money_ms';

$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");

$sql = "insert into musers(u_name, u_email, u_pass) values ('$_POST[user]','$_POST[gmail]','$_POST[pass]')";

$query = mysqli_query($conn, $sql);
if($query)
	include('index.php');

?>
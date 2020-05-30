<?php 

$username = 'root';
$password = '';
$db = 'money_ms';

$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");

$sql = "insert into update_n(prod, money, ndate) values ('$_POST[n_prod]', '$_POST[n_money]','$_POST[n_date]')";

$query = mysqli_query($conn, $sql);
if($query)
	include('home.php');

?>
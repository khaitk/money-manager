<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'money_ms';

$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");


if(isset($_POST['user'])){
	$uname = $_POST['user'];
	$password = $_POST['pass'];

	$sql ="select * from musers where u_name = '".$uname."' AND u_pass= '".$password."' limit 1";

	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1){
		include 'home.php';
		exit();
	}else{
		include 'error.php';
		exit();
	}
}
?>
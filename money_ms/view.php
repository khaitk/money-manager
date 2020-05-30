<?php 
	$username = 'root';
	$password = '';
	$db = 'money_ms';

	$conn = new mysqli('localhost', $username, $password, $db) or die("Khong ket noi");
	$query = "SELECT  * FROM update_n";
	$result = $conn -> query($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Money</title>
	<link rel="stylesheet" href="css/view.css">
	<script type="text/javascript">
		function confirm_delete(){
		  confirm('are you sure?');
		}
	</script>
</head>
<body>
	<div id="container">
		<div class="icon-wh">
			<img src="image/icon.png" alt="" class="icon">
		</div>
		<div id="content">
			<table>
					<tr>
						<th>ID</th>
						<th>Date - Time</th>
						<th>Product</th>
						<th>Money</th>
					</tr>
			</table>
		
			<div id="content-left">
				<table>
					<?php
						while($re = mysqli_fetch_assoc($result)){
						echo "<tr>
							<td>".$re['id']."</td>
							<td>".$re['ndate']."</td>
							<td>".$re['prod']."</td>
							<td>".$re['money']."</td>
							<td>
								<button><a href=delete.php?id=".$re['id']." >DEL</a></button>
							</td>
						</tr>";
						}
					?>
				</table>
			</div>
			<div id="content-rigth">
				<a href="home.php"><button class="btn">Update</button></a>
				<span class="sp">Tổng : 
				<?php    
					foreach ($conn->query('SELECT SUM(money) FROM update_n') as $row) {
						echo $row['SUM(money)'];					
					}
				?>
					
				</span>
			</div>
		</div>
	</div>
	<div id="footer">
		<p class="ftext">Khải TK - 2020 
			<?php
				date_default_timezone_set("Asia/Ho_Chi_Minh");
				echo "VietNam: ".date("Y-m-d H:i:s"). "<br>";
			?>
		</p>
	</div>
</body>
</html>

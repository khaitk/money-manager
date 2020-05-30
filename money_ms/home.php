<?php
	$datetime =date_default_timezone_set("Asia/Ho_Chi_Minh");  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Money</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		  $(".icon-wh").click(function(){
		    $(".toggle-lg").toggle();
		  });
		});
	</script>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="icon-wh">
				<img src="image/icon.png" alt="" class="icon">
			</div>
			<div class="toggle-lg">
				<a href="logout.php"><button class="btn-lg">Log Out</button></a>
			</div>
			<div class="table">
				
					<form action="update.php" method="post">
						<table>
							<tr>
								<td><p class="font">Name Product</p></td>
								<td> <input type="text" name="n_prod"  required="" class="ied"></td>
							</tr>
							<tr>
								<td><p class="font">Money</p></td>
								<td><input type="text" name="n_money" required="" class="ied"></td>
							</tr>
							<tr>
								<td><p class="font">Date</p></td>
								<td><input type="datetime" id="txt_time_in" placeholder="Time In" name="n_date" value = "<?php echo date("Y-m-d H:i:s") ?>" class="form-control" /> </td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="checkbox" required="">
									<span>I Agree</span>
								</td>
							</tr>
						</table>
						<div class="sm-container-left">
							<input type="submit" value="Update" class="sub">
						</div>
					</form>
					<div class="sm-container-right">
						<a href="view.php"><button class="btn">View</button></a>
					</div>
				
			</div>
			<div id="footer">
				<p class="ftext">Khải TK - 2020</p>
			</div>
		</div>
	</div>
</body>
</html>


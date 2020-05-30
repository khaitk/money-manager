<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/create.css">
</head>
<body>
	<div id="container-login">
		<div class="icon-wh">
			<img src="image/icon.png" alt="" class="icon">
		</div>

		<div id="content-lg">
				<h3 class="font">Register</h3>
				<form action="pro_cre.php" method="POST">
					<table>
						<tr>
							<input type="text" name="user" required="" placeholder="User Name" class="ip">				
						</tr>
						<tr>
							<input type="text" name="gmail" placeholder="Gmail" required="" class="ip">
						</tr>
						<tr>
							<input type="text" name="pass" placeholder="Password" required="" class="ip">
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Sign Up" class="sb">
								<button>	
									<a href="index.php" class="cre">Sign In</a>
								</button>
							</td>
						</tr>
					</table>
				</form>
		</div>
	</div>
	<div id="footer">
		<p class="ftext">Khải TK - 2020</p>
	</div>

</body>
</html>
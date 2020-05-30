<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div id="container-login">
		<div class="icon-wh">
			<img src="image/icon.png" alt="" class="icon">
		</div>
		<div id="content-lg">
			<h3 class="font">Sign In</h3>
			<form action="pro_signin.php" method="POST">
					<table>
						<tr>
							<input type="text" name="user" placeholder="Gmail" required="" class="ip">
						</tr>
						<tr>
							<input type="text" required="" placeholder="Password" name="pass" class="ip">
						</tr>
						<tr>
							<td>
								<input type="submit" value="Sign In" class="sb">
								<button>
									<a href="create_acc.php" class="cre">Sign Up</a>
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
	</div>
</body>
</html>
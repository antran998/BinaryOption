<!DOCTYPE html>
<html>	
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>

	<?php  
	if(isset($_COOKIE['empty'])){
		header('Location: ../Demostock/stock.php');
	}

	?>

	<div id="lable">SIGN IN</div>
	<div id="form">
		<form action="test/signinsubmit.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="usernameSignin"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="passwordSignin"></td>
			</tr>
			<tr>
				<td colspan="2" id="button"><input type="submit" value="Enter" name="submit"></td>
			</tr>
			<tr>
				<td colspan="2" id="signup"><a href="signup.php">SIGN UP</a></td>
			</tr>
		</table>
	</form>
	</div>	
</body>
</html>
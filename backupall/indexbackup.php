<!DOCTYPE html>
<html>	
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	<?php  

	include 'test/conn.php';

	// if(isset($_POST['fullname'])){
	// 	$fullname = $_POST['fullname'];
	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];
	// 	$confirm = $_POST['confirm'];
	// 	$email = $_POST['email'];
	// 	$phone = $_POST['phone'];
	// }

	?>
	<div id="lable">SIGN IN</div>
	<div id="form">
		<form>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name=""></td>
			</tr>
			<tr>
				<td colspan="2" id="button"><input type="button" value="Enter" name="" onclick="location.href='stock.php'"></td>
			</tr>
			<tr>
				<td colspan="2" id="signup"><a href="signup.php">SIGN UP</a></td>
			</tr>
		</table>
	</form>
	</div>	
</body>
</html>
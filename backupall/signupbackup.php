<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="../Demostock/css/signup.css">
	<script type="text/javascript" src="../Demostock/js/account.js"></script>
	
</head>
<body onload="showSubmit();">
	<!-- <?php

		include '../Demostock/test/conn.php';

		$query = "SELECT ACCOUNT_SEQUENCE.NEXTVAL FROM DUAL";
		$statement = oci_parse($conn,$query);
		oci_execute($statement);
		while ($row = oci_fetch_array($statement)) {
		    // Use the uppercase column names for the associative array indices
		    echo $row[0];
		   	}

	?> -->


	<div id="avatar"><span class="centerID"></span></div>
	<div id="form">
		<form action="index.php" method="post">
			<table>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="fullname" id="fullname" oninput="validate(fullname,/^([A-Z]\w+(\ )*)+$/,show1)"></td>					
				</tr>
				<tr class="check">
					<td><span id="show1"></span></td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username" id="username" oninput="validate(username,/^([a-z][a-z0-9]{6,})$/,show2)"></td>
				</tr>
				<tr class="check">
					<td><span id="show2"></span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password" oninput="validate(password,/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/,show3)"></td>
				</tr>
				<tr class="check">
					<td><span id="show3"></span></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirm" id="confirm" oninput="checkpass(password,confirm,show4)"></td>
				</tr>
				<tr class="check">
					<td><span id="show4"></span></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td><input type="text" name="email" id="email" oninput="validate(email,/^[a-z][a-z0-9_\.\-]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/,show5)"></td>
				</tr>
				<tr class="check">
					<td><span id="show5"></span></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="text" name="phone" id="phone" oninput="validate(phone,/^(\+\d{2}|[0])[1-9]{9}$/,show6)"></td>
				</tr>
				<tr class="check">
					<td><span id="show6"></span></td>
				</tr>
				<!-- <tr>
					<td>Country</td>
					<td><input type="text" name="Nation" id="Nation" oninput="validate(Nation,/[a-zA-Z]{2,}/,show7)"></td>
				</tr>
				<tr class="check">
					<td><span id="show7"></span></td>
				</tr> -->
				<tr>
					<td>Birthday</td>
					<td><input type="text" name="birthday" id="birthday" oninput="validate(birthday,/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/,show7)"></td>
				</tr>
				<tr class="check">
					<td><span id="show7"></span></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" id="address" oninput="validate(address,/^\d+\s[A-z]+\s[A-z]+/,show8)"></td>
				</tr>
				<tr class="check">
					<td><span id="show8"></span></td>
				</tr>
				<!-- <tr>
					<td>Card Number</td>
					<td><input type="text" name="cardnumber" id="cardnumber" oninput="validate(cardnumber,/^(?:4[0-9]{12}(?:[0-9]{3})?|[25][1-7][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/,show10)"></td>					
				</tr>
				<tr class="check">
					<td><span id="show10"></span></td>
				</tr>
				<tr>
					<td>Account Number</td>
					<td><input type="text" name="accountnumber" id="accountnumber" oninput="validate(accountnumber,/^[0-9]{7,14}$/,show11)"></td>
				</tr>
				<tr class="check">
					<td><span id="show11"></span></td>
				</tr>
				<tr>
					<td>Owner Name</td>
					<td><input type="text" name="owner" id="owner" oninput="validate(owner,/^([A-Z]\w+(\ )*)+$/,show12)"></td>
				</tr>
				<tr class="check">
					<td><span id="show12"></span></td>
				</tr>
				<tr>
					<td>Expired date</td>
					<td><input type="text" name="valid" id="valid" oninput="validate(valid,/^(0[1-9]|1[0-2])\/\d{2}$/,show13)"></td>
				</tr>
				<tr class="check">
					<td><span id="show13"></span></td>
				</tr>
				<tr>
					<td>CVN</td>
					<td><input type="text" name="digit" id="digit" oninput="validate(digit,/^[0-9]{3}$/,show14)"></td>
				</tr>
				<tr class="check">
					<td><span id="show14"></span></td>
				</tr> -->
			</table>
			<input type="submit" name="submit" id="submitButt">				
		</form>
	</div>

</body>
</html>
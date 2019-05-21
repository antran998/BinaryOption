<!DOCTYPE html>
<html>
<head>
	<title>Acc_Info</title>
	<link rel="stylesheet" type="text/css" href="css/acc_info.css">
</head>
<body>
	<?php 

	include "test/conn.php";

	if(isset($_COOKIE['empty'])){
		$userID = $_COOKIE['empty'];
	}

	$query = "SELECT NAME,EMAIL,PHONE,BIRTHDAY,ADDRESS FROM ACCOUNT_INFORMATION WHERE ACCOUNT_ID = :userID";
	$statement = oci_parse($conn,$query);

	oci_bind_by_name($statement,':userID',$userID);

	oci_execute($statement);
	$row = oci_fetch_array($statement);

	oci_free_statement($statement);
	oci_close($conn);

	?>


	<div id="avatar"><span class="centerID"><?php echo $userID?></span></div>
	<div id="form">
	<table>
		<tr>
			<td class="align-right">Full Name:</td>
			<td class="align-left"><span><?php echo $row[0]; ?></span></td>
		</tr>
		<tr>
			<td class="align-right">Email:</td>
			<td class="align-left"><span><?php echo $row[1]; ?></span></td>
		</tr>
		<tr>
			<td class="align-right">Phone number:</td>
			<td class="align-left"><span><?php echo $row[2]; ?></span></td>
		</tr>
		<tr>
			<td class="align-right">Birthday:</td>
			<td class="align-left"><span><?php echo $row[3]; ?></span></td>
		</tr>
		<tr>
			<td class="align-right">Address:</td>
			<td class="align-left"><span><?php echo $row[4]; ?></span></td>
		</tr>
	</table>
	</div>
</body>
</html>
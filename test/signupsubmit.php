<?php  

include 'conn.php';

if(isset($_POST['fullname'])){

		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$birthday = $_POST['birthday'];
		$defineDate = 'DD/MM/YYYY';
		$address = $_POST['address'];
		$DBId = $_POST['DBId'];

		$sql = 'INSERT INTO ACCOUNT VALUES(:DBId,:username,:password,SYSDATE)';

		$statement = oci_parse($conn, $sql);

		oci_bind_by_name($statement, ':username', $username);
		oci_bind_by_name($statement, ':password', $password);
		oci_bind_by_name($statement, ':DBId', $DBId);

		oci_execute($statement);

		$sql = 'INSERT INTO ACCOUNT_INFORMATION VALUES(NULL,:fullname, :email, :phone, TO_DATE(:birthday, :defineDate), :address,0,:DBId)';

		$statement = oci_parse($conn, $sql);		

		oci_bind_by_name($statement, ':fullname', $fullname);		
		oci_bind_by_name($statement, ':email', $email);
		oci_bind_by_name($statement, ':phone', $phone);
		oci_bind_by_name($statement, ':birthday', $birthday);
		oci_bind_by_name($statement, ':defineDate', $defineDate);
		oci_bind_by_name($statement, ':address', $address);
		oci_bind_by_name($statement, ':DBId', $DBId);
		
		oci_execute($statement);

		oci_free_statement($statement);
		oci_close($conn);

		
		header("Location:../index.php");
		
		
		
		/////////////////////////////////////////////////
		// INSERT INTO ACCOUNT_INFORMATION VALUES(NULL,'An','baoan11111@gmailcom','0123456789',TO_DATE('30/10/1998','DD/MM/YYYY'),'36 Tran Quang Co',720.1564,97)
	}



?>
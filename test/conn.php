<?php
	$servername = "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-PGNO1ME)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = orcl)
    )
  )";
	$username = "stockdemo";
	$password = "Scorpio30101998";

	// Create connection
	$conn = oci_connect($username, $password,$servername);


	// //////////////////////////////////////////////////////////// ADD data to oracle
	// $fullname = $_POST['fullname'];
	// $username = $_POST['username'];
	// $password = $_POST['password'];
	// $confirm = $_POST['confirm'];
	// $email = $_POST['email'];
	// $phone = $_POST['phone'];
	// $country = $_POST['Nation'];
	// $birthday = $_POST['birthday'];
	// $defineDate = 'DD/MM/YYYY';
	
	// $address = $_POST['address'];
	// $cardNumber = $_POST['cardnumber'];
	// $accountNumber = $_POST['accountnumber'];
	// $ownerName = $_POST['owner'];
	// $expireddate = $_POST['valid'];
	// $cvn = $_POST['digit'];

	// // echo $fullname."<br>".$username."<br>";
	// // echo $password."<br>".$confirm."<br>";
	// // echo $email."<br>".$phone."<br>";
	// // echo $country."<br>".$birthday."<br>";
	// // echo $address."<br>".$cardNumber."<br>";
	// // echo $accountNumber."<br>".$ownerName."<br>";
	// // echo $expireddate."<br>".$cvn."<br>";

	

	// $sql = 'INSERT ALL 
	// 	   INTO ACCOUNT VALUES(1,:username,:password,SYSDATE)
	// 	   INTO ACCOUNT_INFORMATION VALUES(1,:fullname, :email, :phone, :country, TO_DATE(:birthday, :defineDate), :address, :cardnumber, :accountnumber, :ownername, :expireddate, :cvn,1)'.
	// 	   'SELECT * FROM dual';

	// $compiled = oci_parse($conn, $sql);

	// oci_bind_by_name($compiled, ':fullname', $fullname);	
	// oci_bind_by_name($compiled, ':username', $username);
	// oci_bind_by_name($compiled, ':password', $password);
	// oci_bind_by_name($compiled, ':email', $email);
	// oci_bind_by_name($compiled, ':phone', $phone);
	// oci_bind_by_name($compiled, ':country', $country);
	// oci_bind_by_name($compiled, ':birthday', $birthday);
	// oci_bind_by_name($compiled, ':defineDate', $defineDate);
	// oci_bind_by_name($compiled, ':address', $address);
	// oci_bind_by_name($compiled, ':cardnumber', $cardNumber);
	// oci_bind_by_name($compiled, ':accountnumber', $accountNumber);
	// oci_bind_by_name($compiled, ':ownername', $ownerName);
	// oci_bind_by_name($compiled, ':expireddate', $expireddate);
	// oci_bind_by_name($compiled, ':cvn', $cvn);

	// oci_execute($compiled);

	
	/////////////////////////////////////////////////////// Get data from oracle
	// $query = "select hoten from account";
	// $statement = oci_parse($conn,$query);
	// oci_execute($statement);
	// while ($row = oci_fetch_array($statement)) {
	//     // Use the uppercase column names for the associative array indices
	//     echo $row[0] . " and " . $row['HOTEN'] . " ";
	//    	}
	// oci_free_statement($statement);
	// oci_close($conn);




	////////////////////////////////////////////
	// $sendObj = json_decode($_POST['sendObj']);
	
	// if(isset($sendObj->depositeAmount)){
	// 	echo $sendObj->depositeAmount;
	// }

	// if(isset($sendObj->purTime)){
	// 	echo $sendObj->purTime;
	// }

	// if(isset($sendObj->closeTime)){
	// 	echo $sendObj->closeTime;
	// }
		

?>
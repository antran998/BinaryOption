<?php

	include 'conn.php';

	$sendObj = json_decode($_POST['sendObj']);
	console.log($sendObj);
	if(isset($sendObj->depositeAmount)){
		$userID = $_COOKIE['empty'];
		$amount = $sendObj->depositeAmount;
		$sql = "UPDATE ACCOUNT_INFORMATION SET CURRENT_MONEY = (CURRENT_MONEY+:amountValue) WHERE ACCOUNT_ID = :userID";

		$statement = oci_parse($conn, $sql);

		oci_bind_by_name($statement, ':amountValue',$amount);
		oci_bind_by_name($statement, ':userID',$userID);

		oci_execute($statement);

		oci_free_statement($statement);
		oci_close($conn);

	}

	if(isset($sendObj->purTime)){
		// echo $sendObj->purTime;
		$userID = $_COOKIE['empty'];
		$purAmount = $sendObj->purAmount;
		$purPrice = $sendObj->purPrice;
		$purTime = $sendObj->purTime;
		$lever = $sendObj->lever;
		$tranType = $sendObj->callput;


		$sql = "INSERT INTO TRANSACTION_ORDER(ID,AMOUNT,PURCHASE_PRICE,PURCHASE_TIME,STATUS,TRAN_TYPE,ACCOUNT_ID,LEVERAGE) VALUES(NULL,:purAmount,:purPrice,:purTime,'Pending',:tranType,:userID,:lever)";

		$statement = oci_parse($conn, $sql);

		oci_bind_by_name($statement, ':purAmount',$purAmount);
		oci_bind_by_name($statement, ':purPrice',$purPrice);
		oci_bind_by_name($statement, ':purTime',$purTime);
		oci_bind_by_name($statement, ':tranType',$tranType);
		oci_bind_by_name($statement, ':userID',$userID);
		oci_bind_by_name($statement, ':lever',$lever);

		oci_execute($statement);

		///////////////////////////////////////////////////////////

		$sql = "UPDATE ACCOUNT_INFORMATION SET CURRENT_MONEY = (CURRENT_MONEY-:purAmount) WHERE ACCOUNT_ID = :userID";

		$statement = oci_parse($conn, $sql);

		oci_bind_by_name($statement, ':purAmount',$purAmount);
		oci_bind_by_name($statement, ':userID',$userID);

		oci_execute($statement);

		oci_free_statement($statement);
		oci_close($conn);
	}

	if(isset($sendObj->closeTime)){
		echo $sendObj->profit;
		$userID = $_COOKIE['empty'];
		$closePrice = $sendObj->closePrice;
		$closeTime = $sendObj->closeTime;
		$profit = $sendObj->profit;
		$percent = $sendObj->percent;
		$takeorlost = $sendObj->takeorlost;
		$hisPurTime = $sendObj->hisPurTime;

		$sql = "UPDATE TRANSACTION_ORDER SET STATUS = 'Processing', CLOSE_PRICE = :closePrice,CLOSE_TIME = :closeTime,PROFIT = CONCAT(:takeorlost,:profit),PERCENT = CONCAT(:takeorlost,:percent) WHERE ACCOUNT_ID = :userID AND STATUS = 'Pending' AND PURCHASE_TIME = :hisPurTime";

		$statement = oci_parse($conn, $sql);

		oci_bind_by_name($statement, ':closePrice',$closePrice);
		oci_bind_by_name($statement, ':closeTime',$closeTime);
		oci_bind_by_name($statement, ':profit',$profit);
		oci_bind_by_name($statement, ':percent',$percent);
		oci_bind_by_name($statement, ':userID',$userID);
		oci_bind_by_name($statement, ':takeorlost',$takeorlost);
		oci_bind_by_name($statement, ':hisPurTime',$hisPurTime);		
		

		oci_execute($statement);

		///////////////////////////////////////////////////////////

		$sql = "BEGIN CLOSE_ORDER(:userID); END;";

		$statement = oci_parse($conn, $sql);

		oci_bind_by_name($statement, ':userID',$userID);

		oci_execute($statement);

		oci_free_statement($statement);
		oci_close($conn);

	}
		

?>
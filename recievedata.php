<?php
	$sendObj = json_decode($_POST['sendObj']);
	
	if(isset($sendObj->depositeAmount)){
		echo $sendObj->depositeAmount;
	}

	if(isset($sendObj->purTime)){
		echo $sendObj->purTime;
	}

	if(isset($sendObj->closeTime)){
		echo $sendObj->closeTime;
	}
		

?>
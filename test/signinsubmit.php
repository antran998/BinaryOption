<?php  

include "conn.php";

if(isset($_POST['usernameSignin'])){

	$usernameSignin = $_POST['usernameSignin'];
	$passwordSignin = $_POST['passwordSignin'];

	$sql = "BEGIN :tem := SEARCH_USER_PASS(:usernameSignin,:passwordSignin); END;";

	$statement = oci_parse($conn,$sql);

	oci_bind_by_name($statement,':usernameSignin',$usernameSignin);
	oci_bind_by_name($statement,':passwordSignin',$passwordSignin);
	oci_bind_by_name($statement, ':tem', $tem,3);

	oci_execute($statement);

	////////////////////////////////////////////////////////////////////////////////

	$sql = "BEGIN :tmp := SEARCH_ID_USER(:usernameSignin); END;";

	$statement = oci_parse($conn,$sql);

	oci_bind_by_name($statement,':usernameSignin',$usernameSignin);
	oci_bind_by_name($statement, ':tmp', $tmp,10000);

	oci_execute($statement);

	oci_free_statement($statement);
	oci_close($conn);


	if($tem == "match"){

		setcookie('empty', $tmp, 0, "/");

		header('Location: ../stock.php');

		// echo "<form action='../stock.php' method='post' name='myForm' id='myForm'>
		// 		<input type='text' name='userID' value='".$tmp."'>
		// 		<input type='submit' id='submitbutt'>
		// 	</form>";
		// echo "<script type='text/javascript'>
		// 		window.onload = function() {					
		// 	        submitbutt.click();
		// 	    }
		// 	</script>";		
	}
	else{
		echo "<SCRIPT type='text/javascript'>
        		window.location.replace(\"../index.php\");
        		alert('INVALID USER or PASSWORD');
    		  </SCRIPT>";
	}

}

?>
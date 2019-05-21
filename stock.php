<!DOCTYPE html>
<html>
<head>
	<title>Stock Market</title>
	<link rel="stylesheet" type="text/css" href="../Demostock/css/Demo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/Demo.js"></script>
</head>
<body>

	<?php

		include "test/conn.php";  

		if(isset($_COOKIE['empty'])){
			$userID = $_COOKIE['empty'];

			$query = "SELECT CURRENT_MONEY FROM ACCOUNT_INFORMATION WHERE ACCOUNT_ID = :userID";
			$statement = oci_parse($conn,$query);

			oci_bind_by_name($statement,':userID',$userID);

			oci_execute($statement);
			$row = oci_fetch_array($statement);
			$moneyDeposite = $row[0];

		}
		else{
			header('Location: ../Demostock/index.php');
		}
		
	?> 

	<div id="board">
		<div id="topbar">
			<div id="money" onclick="deposite()"><?php echo $moneyDeposite; ?>$</div>
			<div id="moneyalert"><input type="text" name="money" id="inputmoney"><button id="depositebut">Deposite</button><button id="exit" onclick="logout();">LOG OUT</button></div>
			<div class="avatar" id="avatar" onclick="window.open('acc_info.php','_blank');"><span class="centerID"><?php echo $userID ?></span></div>
			<img src="img/logo.png" id="logo">
			<img src="img/fb.png" id="company">				
		</div>							

		<div id="rightbar">
			<form>
				<div class="choose" id="moneyIn">Amount<input type="text" name="amt" id="amt" onclick="AmountColorChangeWhenClick()"></div>
				<div class="choose">Lever
					<select id="lever">
						<option selected="selected">x1</option>
						<option>x5</option>
						<option>x10</option>
						<option>x20</option>
					</select>
				</div>
				<div class="centerText" id="closebutt">Close
					<!-- <table id="setTL" onclick="takestopprofit()">					
						<tr>
							<td>+5%</td>
							<td>-10%</td>
						</tr>
					</table> -->
					<!-- <div id="setTLalert">Take<input type="text" name="take" class="takestop">Stop<input type="text" name="stop" class="takestop stopin"></div> -->
				</div>				
				<div class="button" id="myBuy">CALL</div>
				<div class="button" id="mySell">PUT</div>

			</form>
		</div>

		<div id="leftbar">
			<div id="hist">HISTORY</div>
			<div id="histo">
			<!-- <div class="historyForm">
				<table class="historySingle">
					<tr>
						<td colspan="2">2019-05-24 14:31:00</td>					
					</tr>
					<tr>
						<td colspan="2">2019-05-24 14:31:00</td>
					</tr>
					<tr>
						<td>195.1535</td>
						<td>195.1535</td>
					</tr>									
					<tr>
						<td>1000.00$</td>
						<td>5.00$</td>
					</tr>					
					<tr>
						<td colspan="2">+10%</td>					
					</tr>
				</table>
			</div> -->
			</div> 
		</div>			

		<div id="centerbar">

			<canvas id="myCanvas"></canvas>			
						
		</div>
	
		<div id="bottombar">

		</div>

	</div>
	<script type="text/javascript" src="../Demostock/js/chart.js"></script>
	<?php  

	$query = "SELECT * FROM TRANSACTION_ORDER WHERE ACCOUNT_ID = :userID ORDER BY PURCHASE_TIME ASC";
	$statement = oci_parse($conn,$query);

	oci_bind_by_name($statement,':userID',$userID);

	oci_execute($statement);

	while ($row = oci_fetch_array($statement)) {
	    echo "<script type='text/javascript'>";

		echo "historyTable('";
		echo $row['PURCHASE_TIME'];
		echo "','"; 
		echo $row['CLOSE_TIME'];
		echo "','";
		echo $row['PURCHASE_PRICE'];
		echo "','";
		echo $row['CLOSE_PRICE'];
		echo "',parseFloat('";
		echo $row['AMOUNT'];
		echo "'),parseFloat('";
		echo substr($row['PROFIT'],1);
		echo "').toFixed(2),parseFloat('";
		echo substr($row['PERCENT'],1);
		echo "').toFixed(2),'";
		echo substr($row['PROFIT'],0,1);
		echo "');";

		

		//echo "historyTable('2019-05-24 14:31:00','2019-05-24 14:31:00','195.1535','195.1535',parseFloat('1000'),parseFloat('5'),parseFloat('10'),'+');";
	    echo "</script>";
	}
	

	oci_free_statement($statement);
	oci_close($conn);

	?>

</body>
</html>
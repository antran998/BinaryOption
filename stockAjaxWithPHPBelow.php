<!DOCTYPE html>
<html>
<head>
	<title>Stock Market</title>
	<link rel="stylesheet" type="text/css" href="css/Demo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/Demo.js"></script>
</head>
<body>	
	<div id="board">
		<div id="topbar">
			<div id="money" onclick="deposite()">0.00$</div>
			<div id="moneyalert"><input type="text" name="money" id="inputmoney"><button id="depositebut">Deposite</button></div>
			<div class="avatar"><a href="acc_info.php" target="_blank"><img src="img/dollar.png" id="avatar"></a></div>
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

		<div id="centerbar">

			<canvas id="myCanvas"></canvas>			
						
		</div>
	
		<div id="bottombar">

		</div>

	</div>
	<script type="text/javascript" src="js/chart.js"></script>
	<?php

	// Change the link of url of ajax backupchartAjax.js
	if(isset($_POST['sendObj'])){
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
	}
	?>

</body>
</html>
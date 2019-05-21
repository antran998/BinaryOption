<!DOCTYPE html>
<html>
<head>
	<title>ab</title>
</head>
<body>
	<form action="test.php" method="post">
	<input type="text" name="valPurTime" id="valPurTime" class="secretVal" value="">
	<input type="text" name="valCloseTime" id="valCloseTime" class="secretVal" value="">
	<input type="text" name="valPurPrice" id="valPurPrice" class="secretVal" value="">
	<input type="text" name="valClosePrice" id="valClosePrice" class="secretVal" value="">
	<input type="text" name="valAmount" id="valAmount" class="secretVal" value="">
	<input type="text" name="valProfit" id="valProfit" class="secretVal" value="">
	<input type="text" name="valPercent" id="valPercent" class="secretVal" value="">
	<input type="text" name="valLever" id="valLever" class="secretVal" value="">
	<input type="text" name="valCallPut" id="valCallPut" class="secretVal" value="">

	<button type="submit" id="submit">submit</button>
	</form>

	<div id="output1" style="border: 1px solid black; width: 60px; height: 60px;"></div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">var wu = 1;</script>
	<script type="text/javascript" src="../js/testabc.js"></script>
</body>
</html>
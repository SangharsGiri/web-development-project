<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="index.php" method="get">
	enter first number<input type="number" name="num">
	enter second number<input type="number" name="num2">
	<input type="submit" name="submit">
</form>

<?php
 echo $_GET["num"] + $_GET["num2"];
?>
</body>
</html>
<?php
// phpinfo();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<h1>Test with autocomplete off in form itself</h1>
<form autocomplete="off">
	<label>City:</label>
	<input type="text" name="city" ><br><br><br>
	<label>Address:</label>
	<textarea name="address" ></textarea>
</form>
	<h1>===========================</h1>
	<h1>Test with autocomplete off in inidividual inputs</h1>
<form autocomplete="">
	<label>City:</label>
	<input type="text" name="city" autocomplete="off"><br><br><br>
	<label>Address:</label>
	<textarea name="address" autocomplete="off"></textarea>
</form>
</body>
</html>
<?php
// phpinfo();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<h3>Test with autocomplete off in form itself</h3>
<form autocomplete="off">
	<label>City:</label>
	<input type="text" name="city" ><br><br><br>
	<label>Address:</label>
	<textarea name="address" ></textarea>
</form>
	<h1>===========================</h1>
	<h3>Test with autocomplete off in inidividual inputs</h3>
<form autocomplete="">
	<label>City:</label>
	<input type="text" name="city" autocomplete="off"><br><br><br>
	<label>Address:</label>
	<textarea name="address" autocomplete="off"></textarea>
</form>

	<h1>===========================</h1>
	<h3>Tests Solutions</h3>
<form autocomplete="">
	<label>City:</label>
	<input type="text" name="city" autocomplete="" auto-complete="something-new"><br><br><br>
	<label>Address:</label>
	<textarea name="address" autocomplete="" value="&nbsp;"></textarea>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
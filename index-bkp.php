<?php
// phpinfo();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
</head>
<body>
	<h3>Test with autocomplete off in form itself</h3>
<form >
	<label>City:</label>
	<input type="text" name="city" autocomplete="disabled"><br><br><br>
	<label>Address:</label>
	<input name="nearest_airport" autocomplete="disabled" >
</form>
	<h1>===========================</h1>
	<h3>Test with autocomplete off in inidividual inputs</h3>
<form autocomplete="">
	<label>City:</label>
	<input type="text" name="city" autocomplete="off"><br><br><br>
	<label>Address:</label>
	<input name="nearest_airport" autocomplete="off">
</form>

	<h1>===========================</h1>
	<h3>Tests Solutions</h3>
<form autocomplete="">
	<label>City:</label>
	<input type="text" name="city" autocomplete="" auto-complete="something-new"><br><br><br>
	<label>Address:</label>
	<input name="nearest_airport" autocomplete="" value="&nbsp;">
	<input type="submit" name="submit" value="submit">
</form>
<h3>Tests Solutions</h3>
<form autocomplete="">
	<div class="ui-widget">
	  <label for="tags">Tags: </label>
	  <input id="tags">
	</div>
	<!-- <label>City:</label>
	<input type="text" name="city" autocomplete="" auto-complete="something-new"><br><br><br>
	<label>Address:</label>
	<textarea name="address" autocomplete="" value="&nbsp;"></textarea> -->
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
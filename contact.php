<?php

// LOAD ALL THE PIECES NEEDED
include ("components/config.php");
include ("components/db.php");


?>
<!DOCTYPE html>
<html>

<head>
<title><?php print(_SITENAME); ?> - Contact Us</title>
<link href="assets/styles/main.css" rel="StyleSheet" />
</head>

<body>
<?php include_once('template/header.php'); ?>
<section>
<h2>Contact Us ...</h2>

<form method="POST" action="process.php?type=1">

<p>Email: <br />
<input type="text" name="email" /></p>

<p>Reason for contact: <br />
<select name="reason">
	<option value="buy">Problem Buying</option>
	<option value="sell">Problem Selling</option>
	<option value="web">Web site problem</option>
	<option value="ad">Want to advertise</option>	
	<option value="general">General</option>			
</select>
</p>

<p>Comment: <br />
<textarea name="comment"></textarea>
</p>

<p><input type="submit" /></p>
</form>

</section>
<?php include_once('template/footer.php'); ?>

</body>
</html>
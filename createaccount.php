<?php

// LOAD ALL THE PIECES NEEDED
include ("components/config.php");
include ("components/db.php");
include ("components/menuLibrary.php");


?>
<!DOCTYPE html>
<html>

<head>
<title><?php print(_SITENAME); ?> - Sell an Item</title>
<link href="assets/styles/main.css" rel="StyleSheet" />
</head>

<body>
<?php include_once('template/header.php'); ?>

<section>
<h2>Sell an item...</h2>

<form method="POST" action="process.php?type=2">
<p>eMail:<br />
<input type="text" name="email1" /></p>
<p>Re-enter eMail:<br />
<input type="text" name="email2" /></p>
<p>Password:<br />
<input type="text" name="email1" /></p>
<p>Re-enter Password:<br />
<input type="text" name="email2" /></p>
<p><input type="submit" /></p>
</form>

</section>
<?php include_once('template/footer.php'); ?>

</body>
</html>
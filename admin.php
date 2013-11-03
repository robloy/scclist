<?php

// LOAD ALL THE PIECES NEEDED
include ("components/config.php");
include ("components/db.php");


?>
<!DOCTYPE html>
<html>

<head>
<title><?php print(_SITENAME); ?> - Report Page</title>
<link href="assets/styles/main.css" rel="StyleSheet" />
</head>

<body>

<header>
	<h1><a href="#"><?php print(_SITENAME); ?></a></h1>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="sell.php">Sell an item</a></li>
		<li><a href="signin.php">Sign-in</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>						
	</ul>
</nav>
</header>
<section>
<h2>Report an Issue ...</h2>
</section>
<footer>
<p><a href="contact.php">Contact Us</a> | <a href="issue.php" style="color:#f00;">Report Issue</a> | <a href="privacy.php">Privacy Statement</a> | <a href="terms.php">Terms of Use</a> | <a href="admin.php">Admin</a></p>
<p>&copy; 2013 - <?php print(_SITENAME); ?> - All Rights Reserved</p>
</footer>

</body>
</html>
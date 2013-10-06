<?php

// LOAD ALL THE PIECES NEEDED
include ($_SERVER["DOCUMENT_ROOT"] . "/scclist/components/config.php");
include ($_SERVER["DOCUMENT_ROOT"] . "/scclist/components/db.php");


?>
<!DOCTYPE html>
<html>

<head>
<title><?php print(_SITENAME); ?> - Report Page</title>
<link href="/scclist/assets/styles/main.css" rel="StyleSheet" />
</head>

<body>

<header>
	<h1><a href="#"><?php print(_SITENAME); ?></a></h1>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="sell.php">Sell an item</a></li>
		<li><a href="signon.php">Sign-in</a></li>
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
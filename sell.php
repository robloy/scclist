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
<h2>Sell an item...</h2>

<form method="POST" action="process.php?type=2">
<input type="hidden" name="seller" value="1" />
<p>Title:<br />
<input type="text" name="title" /></p>
<p>Description:<br />
<textarea name="description"></textarea></p>
<p>Price:<br />
<input type="text" name="price" /></p>
<p>Image:<br />
<input type="file" name="image" /></p>
<p>Category:<br />
<?php echo categoryList(); ?></p>
<p>Location:<br />
    <?php echo locationList(); ?></p>
<p><input type="submit" /></p>
</form>

</section>
<footer>
<p><a href="contact.php">Contact Us</a> | <a href="issue.php" style="color:#f00;">Report Issue</a> | <a href="privacy.php">Privacy Statement</a> | <a href="terms.php">Terms of Use</a> | <a href="admin.php">Admin</a></p>
<p>&copy; 2013 - <?php print(_SITENAME); ?> - All Rights Reserved</p>
</footer>

</body>
</html>
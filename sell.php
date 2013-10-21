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
<?php include_once('template/footer.php'); ?>

</body>
</html>
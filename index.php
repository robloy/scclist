<?php

// LOAD ALL THE PIECES NEEDED
include ("components/config.php");
include ("components/db.php");
include ("components/displayLibrary.php");


?>
<!DOCTYPE html>
<html>

<head>
<title><?php print(_SITENAME); ?> - Home Page</title>
<link href="assets/styles/main.css" rel="StyleSheet" />
</head>

<body>
<?php include_once('template/header.php'); ?>
<section>
<h2>Buy an item...</h2>
<?php print(displayItems()); ?>
</section>
<?php include_once('template/footer.php'); ?>

</body>
</html>
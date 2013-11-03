<?php
// LOAD ALL THE PIECES NEEDED
include ("components/config.php");
include ("components/db.php");
include ("components/displayLibrary.php");

?>
<!DOCTYPE html>
<html>

<head>
<title><?php print(_SITENAME); ?> - Item Page</title>
<link href="assets/styles/main.css" rel="StyleSheet" />
</head>

<body>
<?php include_once('template/header.php'); ?>
<section>
<h2>View an item...</h2>
<?php print(displayItem()); ?>
</section>
<?php include_once('template/footer.php'); ?>

</body>
</html>
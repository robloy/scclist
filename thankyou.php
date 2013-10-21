<?php

// LOAD ALL THE PIECES NEEDED
include ("components/config.php");
include ("components/db.php");
include("components/messageLibrary.php");

$message = thankyouMessages();

?>
<!DOCTYPE html>
<html>

<head>
<title><?php print(_SITENAME); ?> - Thank You</title>
<link href="assets/styles/main.css" rel="StyleSheet" />
</head>

<body>
<?php include_once('template/header.php'); ?>

<section>

<?php echo $message; ?>

</section>

<?php include_once('template/footer.php'); ?>

</body>
</html>
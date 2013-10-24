<?php

// LOAD ALL THE PIECES NEEDED
include ("components/config.php");
include ("components/db.php");
include ("components/menuLibrary.php");


?>
<!DOCTYPE html>
<html>

<head>
<title><?php print(_SITENAME); ?> - Forgot Information</title>
<link href="assets/styles/main.css" rel="StyleSheet" />
</head>

<body>
<?php include_once('template/header.php'); ?>

<section>
    <h2>Send Log-in Info ...</h2>
    <form action="process.php" method="POST">
        <p>Username (email): <br />
            <input type="text" name="username" /></p>
        <p><input type="submit" name="Remind Me" /></p>
    </form>

</section>
<?php include_once('template/footer.php'); ?>

</body>
</html>
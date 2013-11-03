<?php

// LOAD ALL THE PIECES NEEDED
include ("components/config.php");
include ("components/db.php");


?>
<!DOCTYPE html>
<html>

<head>
<title><?php print(_SITENAME); ?> - Sign-in</title>
<link href="assets/styles/main.css" rel="StyleSheet" />
</head>

<body>
<?php include_once('template/header.php'); ?>
<section>
<h2>Sign-in ...</h2>
    <form action="process.php?type=4" method="POST">
     <p>Username (email): <br />
         <input type="text" name="username" /></p>
        <p>Password: <br />
            <input type="text" name="password" /></p>
        <p><input type="submit" name="Sign-in" /></p>
    </form>
    <p><a href="createaccount.php">Create Account</a> | <a href="forgot.php">Forgot info</a></p>
</section>
<?php include_once('template/footer.php'); ?>

</body>
</html>
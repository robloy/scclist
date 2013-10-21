<?php
include("../components/config.php");
include("../components/db.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php print(_SITENAME); ?> - Admin: Home Page</title>
    <link href="../assets/styles/main.css" rel="StyleSheet" />
</head>

<body>
<?php include_once('../template/header.php'); ?>
<section>
    <h2>Admin ...</h2>
<p><a href="createlocation.php">Create Location</a></p>
<p><a href="createcategory.php">Create Category</a></p>
</section>
<?php include_once('../template/footer.php'); ?>

</body>
</html>
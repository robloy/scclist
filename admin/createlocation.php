<?php
include("../components/config.php");
include("../components/db.php");

if ($_POST["zip"] !== null)
{
    try {
        $sql = "INSERT INTO location (l_zip) VALUE (:zip)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':zip',$_POST["zip"]);
        $stmt->execute();
    }
    catch (PDOException $ex)
    {
        print("There was an ERROR: " . $ex);
    }

    header("Location:../thankyou.php?msg=2");
}


?>

<!DOCTYPE html>
<html>

<head>
    <title><?php print(_SITENAME); ?> - Admin: Create Location Page</title>
    <link href="../assets/styles/main.css" rel="StyleSheet" />
</head>

<body>
<?php include_once('../template/header.php'); ?>
<section>
    <h2>Admin: Create Location ...</h2>

<form method="POST">

    <p>Zip:<br />
        <input name="zip" type="text" /></p>
    <p><input type="submit" /></p>
</form>

</section>
<?php include_once('../template/footer.php'); ?>

</body>
</html>
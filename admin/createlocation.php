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

<html>

<body>

<form method="POST">

    <p>Zip:<br />
        <input name="zip" type="text" /></p>
    <p><input type="submit" /></p>
</form>

</body>


</html>
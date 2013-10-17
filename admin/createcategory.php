<?php
include("../components/config.php");
include("../components/db.php");

if ($_POST["category"] !== null)
{
    try {
        $sql = "INSERT INTO category (c_name) VALUE (:category)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':category',$_POST["category"]);
        $stmt->execute();
    }
    catch (PDOException $ex)
    {
        print("There was an ERROR: " . $ex);
    }

    header("Location:../thankyou.php?msg=3");

}


?>

<html>

<body>

<form method="POST">

<p>Category:<br />
<input name="category" type="text" /></p>
<p><input type="submit" /></p>
</form>

</body>


</html>
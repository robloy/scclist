<?php
// LOAD ALL THE PIECES NEEDED
include ("components/config.php");
include ("components/db.php");
include ("components/validationLibrary.php");


switch($_GET["type"])
{
	case 1:
		$results = sendmymail($_POST);
		break;
	case 2:
		$results = addItem();		
		break;
	default:
}

header("Location:" . $results);


function addItem()
{
    $error = validateSell();

    $error = '';

    if ($error == '')
    {
        $sql = 'INSERT INTO item (
            i_title, i_description, i_price, i_photo, s_id, c_id, l_id)
            VALUES (
                :title,
                :description,
                :price,
                :image,
                :seller,
                :category,
                :location
            )';

        try{
            global $dbh;
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':title',      $_POST["title"] );
            $stmt->bindParam(':description',$_POST["description"] );
            $stmt->bindParam(':price',      $_POST["price"] );
            $stmt->bindParam(':image',      $_POST["image"] );
            $stmt->bindParam(':seller',     $_POST["seller"] );
            $stmt->bindParam(':category',   $_POST["category"] );
            $stmt->bindParam(':location',   $_POST["location"] );
            $stmt->execute();

            $stmt->debugDumpParams();
        }
        catch (PDOException $ex)
        {
            print('<p>There was an ERROR: ' . $ex . '</p>');
        }
        return "thankyou.php?msg=1";
    }
    else
    {
        return "sell.php?msg=1";
    }
}

function sendmymail($email)
{

	$to 		= 'rob.loy@gmail.com';
	$subject 	= 'Topic:' . $email["reason"];
	$message 	= $email["comment"] . ' FROM: ' . $email["email"];
	
	mail($to, $subject, $message);
	//mail($email["email"], "We received your message", $message);

	return "thankyou.php";
	
}
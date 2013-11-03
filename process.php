<?php
session_start();

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
	case 3:
		$results = addUser();
		break;
	case 4:
		$results = signinUser();
		break;
	default:
}

header("Location:" . $results);


function signinUser() {
	
	global $dbh;
	
	$checkuser = 'SELECT * FROM seller 
			WHERE 
			s_username = :user AND
			s_password = :password';
	
	$stmt = $dbh->prepare($checkuser);
	$stmt->bindParam(':user',  $_POST["username"]);
	$stmt->bindParam(':password',  $_POST["password"]);	
	$stmt->execute();	
	
	if ($stmt->rowCount() > 0)
	{
		$record = $stmt->fetchAll();
		$_SESSION["user"] = $_POST["username"];
		$_SESSION["id"] = $record[0]["s_id"];
	}
	else {
		return 'signin.php';		
	}
	
	return 'sell.php';
}


function addItem()
{
    $price = floatval($_POST["price"]);
    $title = cleanText($_POST["title"]);
    $description = cleanText($_POST["description"]);
    if ($_FILES["image"]["tmp_name"] <> '')
    {
        $imagename = imageName(cleantext($_FILES["image"]["name"]));

        if ($imagename <> 'no-image.png')
            move_uploaded_file($_FILES["image"]["tmp_name"],'user/items/'.$imagename);
    }
    else
        $imagename = 'no-image1.png';

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
            $stmt->bindParam(':title',      $title);
            $stmt->bindParam(':description',$description);
            $stmt->bindParam(':price',      $price);
            $stmt->bindParam(':image',      $imagename );
            $stmt->bindParam(':seller',     intval($_POST["seller"]) );
            $stmt->bindParam(':category',   intval($_POST["category"]) );
            $stmt->bindParam(':location',   intval($_POST["location"]) );
            $stmt->execute();

            //  $stmt->debugDumpParams();
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

function addUser()
{
	$email = $_POST["email1"];
	$password = $_POST["password1"];
	
	$sql = 'INSERT INTO seller (
            s_username, 
			s_password, 
			s_personalemail, 
			s_sccemail)
            VALUES (
                :username,
                :password,
                :email,
                :sccemail
            )';

	try{
		global $dbh;
		
		$sccmail = $password.time();
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(':username',   $email );
		$stmt->bindParam(':password',	$password);
		$stmt->bindParam(':email',      $email );
		$stmt->bindParam(':sccemail',   $sccmail );
		$stmt->execute();

		//  $stmt->debugDumpParams();
	}
	catch (PDOException $ex)
	{
		print('<p>There was an ERROR: ' . $ex . '</p>');
	}
	return "thankyou.php?msg=4";
}

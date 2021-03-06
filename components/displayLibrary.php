<?php

function displayItems() {
    $itemsHTML = '';

    global $dbh;

    $sql = "SELECT * FROM item";
    $records = $dbh->query($sql);

    if ($records->rowCount() > 0)
    {
        $itemsHTML .= '<table width="100%">';
        foreach ($records as $row)
        {
            $itemsHTML .= '<tr>';
            $itemsHTML .= '<td><p><a href="display.php?item='.$row["i_id"].'">
            	<img src="'. displayImage($row["i_photo"]) .'" class="itemImage" />
            	</a></p></td>';
            $itemsHTML .= '<td><h2>' . $row["i_title"] . '</h2><p>' . $row["i_description"] . '</p></td>';
            $itemsHTML .= '<td><p>' . displayLocation($row["l_id"]). '</p></td>';
            $itemsHTML .= '<td><p>' . displayCategory($row["c_id"]). '</p></td>';
            $itemsHTML .= '<td><p>$' . $row["i_price"] . '</p></td>';
            $itemsHTML .= '</tr>';
        }
        $itemsHTML .= '</table>';
    }
    else
    {
        $itemsHTML .= '<p>No items were found</p>';
    }

    return $itemsHTML;
}

function displayItem() {
	$itemsHTML = '';

	global $dbh;

	$sql = "SELECT * FROM item WHERE i_id = " . $_GET["item"];
	$records = $dbh->query($sql);

	if ($records->rowCount() > 0)
	{

		foreach ($records as $row)
		{

			$itemsHTML .= '<p><a href="display.php?item='.$row["i_id"].'">
            	<img src="'. displayImage($row["i_photo"]) .'" class="itemImage" />
            	</a></p>';
			$itemsHTML .= '<h2>' . $row["i_title"] . '</h2><p>' . $row["i_description"] . '</p>';
			$itemsHTML .= '<p>' . displayLocation($row["l_id"]). '</p>';
			$itemsHTML .= '<p>' . displayCategory($row["c_id"]). '</p>';
			$itemsHTML .= '<p>$' . $row["i_price"] . '</p></td>';
			$itemsHTML .= '<p><a href="mailto:' . displaySeller($row["s_id"]) . '">Email seller</a></p>';			

		}

	}
	else
	{
		$itemsHTML .= '<p>No items were found</p>';
	}

	return $itemsHTML;
}

function displayImage($name) {
	if(file_exists("user/items/".$name))
	    $imageHTML = 'user/items/'.$name;
	else
    	$imageHTML .= "assets/images/no-image.png";

    return $imageHTML;

}

function displayLocation($id) {
	
	global $dbh;
	
	$sql = "SELECT l_zip FROM location WHERE l_id = " .$id;
	$record = $dbh->query($sql);
	$row = $record->fetchAll();
	
	if ($row[0]["l_zip"] !== '')
    	$locationHTML = $row[0]["l_zip"];
	else
    	$locationHTML = "No Zip";

    return $locationHTML;

}

function displayCategory($id) {
	global $dbh;
	
	$sql = "SELECT c_name FROM category WHERE c_id = " .$id;
	$record = $dbh->query($sql);
	$row = $record->fetchAll();
	
	if ($row[0]["c_name"] !== '')
    	$categoryHTML = $row[0]["c_name"];
	else
    	$categoryHTML = "No Category";

    return $categoryHTML;

}

function displaySeller($id) {
	global $dbh;

	$sql = "SELECT s_sccemail FROM seller WHERE s_id = " .$id;
	$record = $dbh->query($sql);
	$row = $record->fetchAll();

	if ($row[0]["s_sccemail"] !== '')
		$categoryHTML = $row[0]["s_sccemail"]. '@scclist.com';
	else
		$categoryHTML = "No Seller";

	return $categoryHTML;

}

function displayusers() {
	$itemsHTML = '';

	global $dbh;

	$sql = "SELECT * FROM seller";
	$records = $dbh->query($sql);

	if ($records->rowCount() > 0)
	{
		$itemsHTML .= '<table width="100%">';
		foreach ($records as $row)
		{
			$itemsHTML .= '<tr>';
			$itemsHTML .= '<td><h2>' . $row["s_username"] . '</h2><p>';
			$itemsHTML .= '<td><p>' . $row["s_password"] . '</p></td>';	
			$itemsHTML .= '<td><p>' . $row["s_personalemail"] . '</p></td>';	
			$itemsHTML .= '<td><p>' . $row["s_sccemail"] . '</p></td>';
			$itemsHTML .= '</tr>';
		}
		$itemsHTML .= '</table>';
	}
	else
	{
		$itemsHTML .= '<p>No items were found</p>';
	}

	return $itemsHTML;
}

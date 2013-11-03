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
            $itemsHTML .= '<td><p><img src="'. displayImage($row["i_photo"]) .'" class="itemImage" /></p></td>';
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

function displayUsers() {
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
			$itemsHTML .= '<td><h2>' . $row["s_username"] . '</h2><p>' . $row["i_description"] . '</p></td>';
			$itemsHTML .= '<td><p>$' . $row["s_password"] . '</p></td>';			$itemsHTML .= '<td><p>' . displayLocation($row["l_id"]). '</p></td>';
			$itemsHTML .= '<td><p>$' . $row["s_personalemail"] . '</p></td>';			$itemsHTML .= '<td><p>' . displayCategory($row["c_id"]). '</p></td>';
			$itemsHTML .= '<td><p>$' . $row["s_sccemail"] . '</p></td>';
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

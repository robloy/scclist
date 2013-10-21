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
            $itemsHTML .= '<td><p><img src="'. displayImage($row["i_id"]) .'" class="itemImage" /></p></td>';
            $itemsHTML .= '<td><h2>' . $row["i_title"] . '</h2><p>' . $row["i_description"] . '</p></td>';
            $itemsHTML .= '<td><p>' . displayLocation($row["l_id"]). '</p></td>';
            $itemsHTML .= '<td><p>' . displayCategory($row["l_id"]). '</p></td>';
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

function displayImage($id) {
    $imageHTML = '';

    $imageHTML .= "assets/images/no-image.png";

    return $imageHTML;

}

function displayLocation($id) {
    $locationHTML = '';

    $locationHTML .= "Phoenix, AZ";

    return $locationHTML;

}

function displayCategory($id) {
    $categoryHTML = '';

    $categoryHTML .= "Household";

    return $categoryHTML;

}
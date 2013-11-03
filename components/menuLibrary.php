<?php

function categoryList() {

    $catHTML = '';
    global $dbh;

    $sql = 'SELECT c_id, c_name FROM category WHERE c_status = "" ORDER BY c_name';
    $records = $dbh->query($sql);

    $catHTML .= '<select name="category">';
    foreach ($records as $rows)
        $catHTML .= '<option value="'.$rows["c_id"].'">'.$rows["c_name"].'</option>';

    $catHTML .= '</select>';

    return $catHTML;
}

function locationList() {
    $locHTML = '';
    global $dbh;

    $sql = 'SELECT l_id, l_zip FROM location WHERE l_status = "" ORDER BY l_zip';
    $records = $dbh->query($sql);

    $locHTML .= '<select name="location">';
    foreach ($records as $rows)
        $locHTML .= '<option value="'.$rows["l_id"].'">'.$rows["l_zip"].'</option>';

    $locHTML .= '</select>';

    return $locHTML;
}

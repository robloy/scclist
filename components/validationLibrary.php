<?php

// Check for DECIMAL
function validateMoney($money) {

    if (is_float($money))
        return true;
    else
        return false;
}

// Check for normal TEXT
function validateText($text) {

    return true;
}

// Check for normal TEXT
function validateDescription($text) {

    return true;
}

// Check for FILETYPE and SIZE
function validateUpload($fileName, $folderName) {

        return true;
}

function validateSell(){

    if (!validateMoney($_POST["price"]))
        $error = "Price";
    if (!validateText($_POST["title"]))
        $error = "Title";
    if (!validateDescription($_POST["Description"]))
        $error = "Title";

    return $error;
}


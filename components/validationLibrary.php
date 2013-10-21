<?php

// Check for normal TEXT
function cleanText($text) {

    $text = preg_replace("/[^A-Za-z0-9., ]/", '', $text);

    return $text;
}

// Check for FILETYPE and SIZE
function validateUpload($fileName, $folderName) {

        return true;
}

function imageName($file){

    $filepart   = explode('.', mb_strtolower($file));
    $fileExt    = $filepart[count($filepart)-1];

    switch ($fileExt)
    {
        case 'gif':
        case 'jpg':
        case 'png':
        case 'jpeg':
            $filename   = implode('',$filepart) . time() . '.' . $fileExt;
            break;
        default:
            $filename   = 'no-image2.png';

    }

    return $filename;

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


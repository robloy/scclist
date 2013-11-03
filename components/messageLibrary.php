<?php
/**
 * Created by JetBrains PhpStorm.
 * User: robloy
 * Date: 10/11/13
 * Time: 7:11 PM
 * To change this template use File | Settings | File Templates.
 */

function thankyouMessages()
{

    switch ($_GET["msg"])
    {
        case 1:
            $messageHTML = '<h1>Thank You!</h1>';
            $messageHTML .= '<p>Your item to sell has been added to the system. You should receive an email shortly.</p>';
            break;
        case 2:
            $messageHTML = '<h1>Thank You!</h1>';
            $messageHTML .= '<p>Your location has been added to the system. You should receive an email shortly.</p>';
            break;
        case 3:
            $messageHTML = '<h1>Thank You!</h1>';
            $messageHTML .= '<p>Your category has been added to the system. You should receive an email shortly.</p>';
            break;
        case 4:
            $messageHTML = '<h1>Thank You!</h1>';
            $messageHTML .= '<p>Your account has been created. You should receive an email shortly.</p>';
            break;

        default:
            $messageHTML = '<h1>Thank You Error!</h1>';
            $messageHTML .= '<p>You got here by mistake. Please try again.</p>';

    }

    return $messageHTML;
}

function sellMessages()
{

    switch ($_GET["msg"])
    {
        case 1:
            $messageHTML = '<h1>Thank You!</h1>';
            $messageHTML .= '<p>Your item to sell has been added to the system. You should receive an email shortly.</p>';
            break;
        case 2:
            $messageHTML = '<h1>Thank You!</h1>';
            $messageHTML .= '<p>Your location has been added to the system. You should receive an email shortly.</p>';
            break;
        case 3:
            $messageHTML = '<h1>Thank You!</h1>';
            $messageHTML .= '<p>Your category has been added to the system. You should receive an email shortly.</p>';
            break;
        case 4:
            $messageHTML = '<h1>Thank You!</h1>';
            $messageHTML .= '<p>Your account has been created. You should receive an email shortly.</p>';
            break;

        default:
            $messageHTML = '<h1>Thank You Error!</h1>';
            $messageHTML .= '<p>You got here by mistake. Please try again.</p>';

    }

    return $messageHTML;
}
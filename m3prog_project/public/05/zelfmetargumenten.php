<?php
function convertCurrency($amount, $fromCurrency, $toCurrency)
{
    print("$amount");
    print("<br>");
    print("$fromCurrency");
    print("<br>");
    print("$toCurrency");
    print("<br>");
}

function sendEmail($to, $from, $subject, $message)
{
    print("$to");
    print("<br>");
    print("$from");
    print("<br>");
    print("$subject");
    print("<br>");
    print("$message");
    print("<br>");
}

function generateRandomString($length)
{
    print("$length");
    print("<br>");
}

function calculateArea($length, $width)
{
    print("$length");
    print("<br>");
    print("$width");
    print("<br>");
}


convertCurrency(100,"euro","yen");

generateRandomString(10);

calculateArea(10, 20);

sendEmail("leraar@college.nl", "student@college.nl", "huiswerk", "voor volgende week");
?>
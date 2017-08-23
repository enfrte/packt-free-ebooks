<?php
/**
 * Call this file as Cron job
 * https://stackoverflow.com/questions/851367/how-to-execute-and-get-content-of-a-php-file-in-a-variable
*/

ob_start(); // Start output buffer 
include_once 'packt-ebook-info.php'; // some content for the output buffer
$Content = ob_get_clean(); // Get current buffer content and delete current output buffer

$FromName = 'admin@yourdomain.tk';
$FromEmail = 'admin@yourdomain.tk';
$ReplyTo = 'admin@yourdomain.tk';
$Subject = 'PACKT Publishing - Free eBook of the day';
$ToEmail = 'yourmail@yourdomain.com';

$Headers  = "MIME-Version: 1.0\n";
$Headers .= "Content-type: text/html; charset=iso-8859-1\n";
$Headers .= "From: ".$FromName." <".$FromEmail.">\n";
$Headers .= "Reply-To: ".$ReplyTo."\n";
$Headers .= "X-Sender: <".$FromEmail.">\n";
$Headers .= "X-Mailer: PHP\n";
$Headers .= "X-Priority: 1\n";
$Headers .= "Return-Path: <".$FromEmail.">\n";

if(!mail($ToEmail, $Subject, $Content, $Headers)) {
    echo "Error - Mail failed.";
}


<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 8/11/2015
 * Time: 11:59 PM
 */
    $userName=$_POST["username"];
    $subject=$_POST["subject"];
    $email=$_POST["email"];
    //$message=$_POST["message"];

    $to = "jyeluwa@gmail.com";
    $headers = "From: $email\n";
    $message = "A visitor to your site has sent the following email address to be added to your mailing list.\n
                Email Address: $email";
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: jyeluwa@gmail.com\n";
$usermessage = "Thank you for subscribing to our mailing list.";

mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);

?>
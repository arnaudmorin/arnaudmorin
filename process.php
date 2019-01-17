<?php
@session_start();

// Retrieve form data.
// GET - user submitted data using AJAX
// POST - in case user does not support javascript, we'll use POST instead
$name = ($_GET['name']) ? $_GET['name'] : $_POST['name'];
$email = ($_GET['email']) ? $_GET['email'] : $_POST['email'];
$website = ($_GET['website']) ? $_GET['website'] : $_POST['website'];
$comment = ($_GET['comment']) ? $_GET['comment'] : $_POST['comment'];
$anti42 = ($_GET['anti42']) ? $_GET['anti42'] : $_POST['anti42'];
$code = $_SESSION['code'];

//Simple server side validation for POST data, of course, you should validate the email
if (!$name) $errors[count($errors)] = "Please enter your name!";
if (!$email) $errors[count($errors)] = "Please enter your email!";
if (!$comment) $errors[count($errors)] = "Please enter a message!";
if (!$anti42) $errors[count($errors)] = "Wrong anti-spam answer!";
else if ($anti42 != $code) $errors[count($errors)] = "Wrong anti-spam answer!";

//if the errors array is empty, send the mail
if (!$errors) {

        //recipient
        $to = 'Arnaud Morin <arnaud.morin@gmail.com>';
        //sender
        $from = $name . ' <' . $email . '>';

        //subject and the html message
        $subject = '[arnaudmorin.fr] nouveau message' . $name;
        $message = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head></head>
        <body>
        <table>
                <tr><td>Nom</td><td>' . $name . '</td></tr>
                <tr><td>Email</td><td>' . $email . '</td></tr>
                <tr><td>Message</td><td>' . nl2br($comment) . '</td></tr>
        </table>
        </body>
        </html>';

        //send the mail
        $result = sendmail($to, $subject, $message, $from);

        echo $result;

//if the errors array has values
} else {
        //display the errors message
        for ($i=0; $i<count($errors); $i++) echo $errors[$i] . '<br/>';
        //echo '<a href="index.php">Go back</a>';
        //exit;
        //echo '0';
}

//Simple mail function with HTML header
function sendmail($to, $subject, $message, $from) {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
        //$headers .= 'From: ' . $from . "\r\n";
        $headers .= "From: arnaudmorin.fr <brezhinnov@gmail.com>\r\n";

        $result = mail($to,$subject,$message,$headers);

        if ($result) return 1;
        else return 0;
}

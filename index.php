<?php
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'Contact Form';
    $to = 'mepaul1210@gmail.com';
    $subject = 'Message from philwalker.do contact form';

    $body = "From: $firstName $lastName\n Phone: $phone\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        /* Anything that goes in here is only performed if the form is submitted */
        if (mail ($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
        } else {
            echo '<p>Something went wrong, go back and try again!</p>';
        }
    }
?>

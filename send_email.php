<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $arrival_date = htmlspecialchars($_POST['arrival-date']);
    $programme = htmlspecialchars($_POST['programme']);
    $age = htmlspecialchars($_POST['age']);
    $country = htmlspecialchars($_POST['country']);
    $email = htmlspecialchars($_POST['email']);
    $departure_date = htmlspecialchars($_POST['departure-date']);
    $comments = htmlspecialchars($_POST['comments']);

    $to = "manoharas19600@gmail.com"; // Replace with your email address
    $subject = "New Inquiry from Shreyas Retreat Contact Form";
    $message = "
        <html>
        <head>
            <title>New Inquiry</title>
        </head>
        <body>
            <h2>Contact Form Details</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Telephone:</strong> $telephone</p>
            <p><strong>Date of Arrival:</strong> $arrival_date</p>
            <p><strong>Programme:</strong> $programme</p>
            <p><strong>Age:</strong> $age</p>
            <p><strong>Country:</strong> $country</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Date of Departure:</strong> $departure_date</p>
            <p><strong>Comments:</strong> $comments</p>
        </body>
        </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $headers .= "From: <$email>" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $message = trim($_POST["message"] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Form Error</title>
            <link rel='stylesheet' href='assets/css/style.css'>
        </head>
        <body>
            <section class='contact' style='text-align:center; padding:100px 20px;'>
                <h1>All fields are required.</h1>
                <p>Please go back and fill in every field.</p>
                <br>
                <a href='index.php#contact' class='btn btn-primary'>Go Back</a>
            </section>
        </body>
        </html>";
        exit();
    }

    header("Location: thank-you.html");
    exit();
} else {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Invalid Request</title>
        <link rel='stylesheet' href='assets/css/style.css'>
    </head>
    <body>
        <section class='contact' style='text-align:center; padding:100px 20px;'>
            <h1>Invalid Request</h1>
            <p>This page only works when the contact form is submitted.</p>
            <br>
            <a href='index.php' class='btn btn-primary'>Back to Home</a>
        </section>
    </body>
    </html>";
}
?>
<?php

require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $description = $_POST['description'];

    $dompdf = new Dompdf;

    $html = "
        <html>
        <head><title>Generated PDF</title></head>
        <body>
            <h1>Generated PDF</h1>
            <p>First Name: $fname</p>
            <p>Last Name: $lname</p>
            <p>Email: $email</p>
            <p>number: $number</p>
            <p>Gender: $gender</p>
            <p>City: $city</p>
            <p>Description: $description</p>
        </body>
        </html>
    ";

    $dompdf->loadHtml($html);

    $dompdf->render();

    $dompdf->stream("pdf.pdf");
}

?>

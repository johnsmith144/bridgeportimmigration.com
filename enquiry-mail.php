<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect POST data
    $customername = trim($_POST['customername']);
    $addressoff = trim($_POST['addressoff']);
    $email = trim($_POST['email']);
    $mobileno = trim($_POST['mobileno']);
    $comments = trim($_POST['comments']);

    // Recipient email
    $to = "sangramsomnath@gmail.com";

    // Subject
    $subject = "*** Customer Enquiry | Bridgeport Immigration ***";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Bcc: somnathsangram24@gmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Email message
    $message = "
Customer Name : $customername
Mobile No     : $mobileno
E-Mail ID     : $email
Enquiry Type  : $addressoff
Comments      : $comments
";

    // Send Email
    if (mail($to, $subject, $message, $headers)) {
        header("Location: thank-you.html");
        exit();
    } else {
        echo "Error - Mail Not Sent";
    }
} else {
    echo "Invalid Request";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $secretKey = "6LeL7CIsAAAAAJyY9U3SruZHp6VIFRIYvgXWpXGK";  
$captcha = $_POST['g-recaptcha-response'];

if (!$captcha) {
    http_response_code(400);
    die("Please verify the reCAPTCHA.");
}

$url = "https://www.google.com/recaptcha/api/siteverify";

$data = [
    'secret' => $secretKey,
    'response' => $captcha
];

// CURL request to Google
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$responseKeys = json_decode($response, true);

// If captcha failed
if (empty($responseKeys["success"])) {
    http_response_code(400);
    die("reCAPTCHA verification failed!");

}else{
    
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $qualification = htmlspecialchars($_POST['qualification']);
    $skills = htmlspecialchars($_POST['skills']);

    // Email details
    $to = "careers@bgrtech.in"; // Replace with the recipient's email address
    $subject = "New Application Form Submission";
    $from = $email; // Sender's email address

    // Email headers
    $headers = "From: $to\r\n";
    $headers .= "Reply-To: $to\r\n";
    $headers .= "MIME-Version: 1.0\r\n";

    // Boundary for the email
    $boundary = md5(time());

    // Check if a file is uploaded
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
        $file_tmp_path = $_FILES['attachment']['tmp_name'];
        $file_name = $_FILES['attachment']['name'];
        $file_size = $_FILES['attachment']['size'];
        $file_type = $_FILES['attachment']['type'];

        // Read the file content
        $file_content = file_get_contents($file_tmp_path);
        $file_content = chunk_split(base64_encode($file_content));

        // Headers for attachment
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

        // Email body with attachment
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
        $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $body .= "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Phone: $phone\n";
        $body .= "Qualification: $qualification\n";
        $body .= "Skills: $skills\n\r\n";
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
        $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= $file_content . "\r\n\r\n";
        $body .= "--$boundary--";
    } else {
        // No attachment
        $headers .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Phone: $phone\n";
        $body .= "Qualification: $qualification\n";
        $body .= "Skills: $skills\n";
    }

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your application has been submitted.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your application.";
    }
}
} else {
    echo "Invalid request method.";
}
?>
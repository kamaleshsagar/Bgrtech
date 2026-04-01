<?php

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
    
        # FIX: Replace this email with recipient email
        $mail_to = "marketing@bgrtech.in";
        
        # Sender Data
        $subject = "BGR Tech Enquiry details";
        // $subject = trim($_POST["subject"]);
        // $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $mobile = trim($_POST["phone"]);
        $message = trim($_POST["message"]);
        // $Name = $name . $name2;
    
        # Mail Content
        
          $content = "<h4>Please check the Contact form details</h4>

<p>Email : $email </p>  
<p>Mobile : $mobile </p>   
<p>Message : $message</p>"
;

        # email headers.
        // $headers = "From: $name <$email>";
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= 'From: '.$mail_to."\r\n".
    'Reply-To: '.$mail_to."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            // echo "Thank You! Your message has been sent.";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }

}

?>

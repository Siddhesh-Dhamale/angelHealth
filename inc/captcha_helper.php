<?php
// echo "captcha_helper.php is loaded.";  // Debug message

function verifyRecaptcha($recaptchaResponse)
{
    $secretKey = "6Lflm-8qAAAAAKf5PUvV9vqGTG5m6ZF25xtvlV1h"; 
    $verifyUrl = "https://www.google.com/recaptcha/api/siteverify";

    $data = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse
    ];

    $options = [
        'http' => [
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context  = stream_context_create($options);
    $response = file_get_contents($verifyUrl, false, $context);
    $result = json_decode($response, true);

    return ($result["success"] && $result["score"] >= 0.5);
}

<?php 

require_once "recaptchalib/recaptchalib.php";

// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = "6Le39yYTAAAAALau2dzlGpUErMUCd2rl--uMXQN9";
$secret = "6Le39yYTAAAAAL7CZ-j3d1-T4OUZAKvqpondAQUu";
// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
$lang = "en";

// The response from reCAPTCHA
$resp = null;
// The error code from reCAPTCHA, if any
$error = null;

$reCaptcha = new ReCaptcha($secret);

// Was there a reCAPTCHA response?
if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

?>
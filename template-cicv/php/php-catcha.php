<?php

require_once "recaptchalib.php";

$secret = "6Ld9NiAjAAAAAG1ecjjMecWjY7y0nYpKQUw077eD";
$response = null;

// Verificamos la clave secreta
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

if ($response != null && $response->success) {
    // Añade aquí el código que desees en el caso de que la validación sea correcta
} else {
    // Añade aquí el código que desees en el caso de que la validación no sea correcta o muestra
}

?>
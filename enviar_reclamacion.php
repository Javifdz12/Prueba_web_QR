<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el contenido del archivo con el Account Id
    $file = fopen('account_id.txt', 'r');
    $accountId = fgets($file);
    fclose($file);

    if (!empty($accountId)) {
        // Configurar los detalles del correo electrónico
        $to = 'jfernandezgalan02@gmail.com';
        $subject = 'Reclamación de NFT';
        $message = 'Se ha realizado una reclamación de NFT con el siguiente Account Id: ' . $accountId;
        $headers = 'From: javiernatalia1018@gmail.com' . "\r\n" .
            'Reply-To: javiernatalia1018@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Enviar el correo electrónico
        if (mail($to, $subject, $message, $headers)) {
            echo 'Reclamación enviada. Te contactaremos pronto.';
        } else {
            echo 'Error al enviar la reclamación.';
        }
    } else {
        echo 'Error: No se ha adjuntado un Account Id.';
    }
} else {
    echo 'Error: Método de solicitud no válido.';
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accountId = $_POST['account-id'];
    if (!empty($accountId)) {
        // Guardar el Account Id en un archivo
        $file = fopen('account_id.txt', 'w');
        fwrite($file, $accountId);
        fclose($file);
        echo 'Account Id adjuntado correctamente.';
    } else {
        echo 'Error: No se ha proporcionado un Account Id.';
    }
} else {
    echo 'Error: Método de solicitud no válido.';
}
?>

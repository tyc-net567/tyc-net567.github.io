<?php
$email = htmlspecialchars($_POST['email']);
$my_email = "ilichyov.kolyan@yandex.com";
$theme = "mailing + 1";
$message = "+ mailing $email";
$headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($my_email, $theme, $message, $headers);

echo '<!DOCTYPE html><html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><link rel="stylesheet" href="./css/form.css"></head><body>'; 
echo "<p>Спасибо, что подписались на рассылку))</p>";
echo '</body></html>';


?>
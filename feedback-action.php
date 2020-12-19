<?php
$name = htmlspecialchars($_POST['name']);
$tel = htmlspecialchars($_POST['tel']);
$email = htmlspecialchars($_POST['email']);

echo '<!DOCTYPE html><html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><link rel="stylesheet" href="./css/form.css"></head><body>';
echo "<p class=","text",">$name на ваш e-mail: $email придёт уведомление</p>";


echo '</body></html>';
?>
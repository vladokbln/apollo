<?php
 
/* Задаем переменные */
$subject = htmlspecialchars($_POST["subject"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
 
/* Ваш адрес и тема сообщения */
$address = "tepko01@gmail.com";
$sub = "Сообщение с сайта Appolo";
 
/* Формат письма */
$mes = "Сообщение с сайта ХХХ.\n
Имя отправителя: $subject 
Электронный адрес отправителя: $email
Текст сообщения:
$message";
 
 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
 header('Refresh: 5; URL=https://vladokbln.github.io/apollo/');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено!</body>';}
else {
 header('Refresh: 5; URL=https://vladokbln.github.io/apollo/');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено</body>';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>
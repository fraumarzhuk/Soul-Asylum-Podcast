<?php
$name = $POST['name'];
$email = $POST['email'];
$text = $POST['text'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);

$name = urldecode($name);
$email = urldecode($email);
$text = urldecode($text);

$name = trim($name);
$email = trim($email);
$text = trim($text);


if (mail("fraumarzhuk@gmail.com",
         "Soul Asylum Feedback",
         "Name: ".$name."\n".
         "Email: ".$email."\n".
         "Text: ".$text."\n".
         "From: fraumarzhuk@gmail.com \r\n")
) {
  echo ('Письмо успешно отправлено');
}
  else {

  echo ('Кажется, произошла ошибка... Пожалуйста, проверь данные еще раз.');
}

)

 ?>

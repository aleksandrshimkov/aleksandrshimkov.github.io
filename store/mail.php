<?php
//Принимаем постовые данные
$name=$_POST['user_name'];
$phone=$_POST['user_phone'];
$email=$_POST['user_email'];
//Тут указываем на какой ящик посылать письмо
$to = "maketstore39@yandex.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с Maket Store";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Телефон: <a href='tel:$phone'>".htmlspecialchars($phone)."</a> <br />
Почта: ".htmlspecialchars($email)."";
// Отправляем письмо при помощи функции mail();
$headers = "From: maketstore39.ru <admin@maketstore39.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: index.html');
exit();
?>
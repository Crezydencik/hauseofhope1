 <?php

 $recepient = "deniss.kargins@gmail.com";
 $siteName = "LUMTACH";
 $name = trim($_POST["youname"]);
 $mulic= trim($_POST['subject']);
 $phone = trim($_POST["mess"]);
 $email = trim($_POST['epasts']);
 $message = "Вам отправлен запрос от $name\nВаш клиент из '$mulic' организации\nКонтактная информация для связи:\nEmail: $email\nТелефон: $phone.";
 $pagetitle = "Заявка с сайта \"$siteName\"";
 mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
echo true;
?>

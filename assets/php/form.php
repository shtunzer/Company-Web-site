<meta charset="UTF-8" />

<?php

$to = "wach.company@gmail.com";
$name = clear_data($_POST['username']);
$phone = clear_data($_POST['phone']);
$email = clear_data($_POST['email']);
$subject = "Заявка с сайта.";
$headers = "Content-type: text/html; charset=utf-8\r\n";
$message = '
<html>
<body>
<center>
<table border="1" cellpadding="6" cellspacing="0" width="90%" bordercolor="#dbdbdb">
<tr><td colspan="2" align="center" bgcolor="#e4e4e4"><b>Информация о клиенте</b></td></tr>
';
$message .= '<tr>
<td><b>Имя клиента</b></td>
<td>'. $name .'</td>
</tr>
<tr>
<td><b>Номер телефона</b></td>
<td>'. $phone .'</td>
</tr>
<tr>
<td><b>Email</b></td>
<td>'. $email .'</td>
</tr>';

function clear_data($val){
    $val = trim($val);
    $val = stripcslashes($val);
    $val = htmlspecialchars($val);
    return $val;
}
if (isset($_POST['submit'])){
    mail($to, $subject, $message, $headers);
    echo('Заявка отправлена!');
} 

?>

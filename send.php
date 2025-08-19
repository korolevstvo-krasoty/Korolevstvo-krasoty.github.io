<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$tel = $_POST['tel'];

$name = htmlspecialchars($name);
$lastname = htmlspecialchars($lastname);
$tel = htmlspecialchars($tel);

$name =urlencode($name);
$lastname =urlencode($lastname);
$tel = urlencode($tel);

$name =trim($name);
$lastname = trim($lastname);
$tel = trim($tel);

 if (mail("teuchezhy@mail.ru",
 "заявка с сайта",
"names:".$name."\n".
"lastnames:".$lastname."\n". 
"tels:".$tel,
"from: u140665.test-handyhost.ru\r\n"))

{echo ('Письио успешно отправлено!');
header("refresh:3;url=http://u140665.test-handyhost.ru")};

else {echo('Есть ошибки!');
    header("refresh:3;url=http://u140665.test-handyhost.ru");
exit("ошибка")}

?>

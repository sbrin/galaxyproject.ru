<?
# получаем данные и отсекаем пробельные символы в начале и конце:
$name = @ trim ($_POST['name']);
$email = @ trim ($_POST['email']);
$message = @ trim ($_POST['message']);
# проверка, переданы ли все данные
if (! $name or ! $email or ! $message) exit ('Сообщение не отправлено, пожалуйста заполните все строки формы');
# отправка данных на мыло админу
mail ("decepto@mail.ru",
      "Сообщение с сайта GalaxyProject.ru (отправитель: $name)",
      "$message \n\n Контакты: \n $email");
header ("Location: /index1.html#Links");
?>
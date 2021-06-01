<?php
if(!isset($_POST['submit']))
{
?>
<form action="addUser.php" method="POST">
<p><input type="text" name="userName" placeholder="NICK-NAME"></p>
<p><input type="text" name="userMail" placeholder="EMAIL"></p>
<p><input type="password" name="userPass" placeholder="PASSWORD"></p>
<p><input type="submit" name="submit" value="LOGIN"></p>
</form>
<?php
}else
{
    echo 'You are welcome, '.$_POST["userName"].'!Your email is '.$_POST["userMail"].'<br/>';
}
//Запись информации о пользователь в файл users.txt
$fd = fopen("users.txt", 'a') or die("Не удалось создать файл");
$str = $_POST["userName"].':'.$_POST["userMail"].':'.$_POST["userPass"].PHP_EOL;
// запишем в конце еще одну строку
fwrite($fd, $str); 
fclose($fd);
?>
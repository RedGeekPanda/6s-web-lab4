<?
session_start();
foreach ($_POST as $key => $value)
    $_SESSION['userData'][$key] = $value;
?>
<div><a href="user.php">Контактна інформація</a></div>
<br>
<div><a href="user1.php">Інформація про навчальний заклад</a></div>
<br>
<div><a href="user2.php">Захоплення</a></div>

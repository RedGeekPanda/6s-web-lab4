<?
session_start();
echo "
<ul>
    <li>Прізвище: <b>{$_SESSION['userData']['surname']}</b></li>
    <li>Ім'я: <b>{$_SESSION['userData']['name']}</b></li>
    <li>Домашній телефон: <b>{$_SESSION['userData']['telephone']}</b></li>
    <li>Електронна адреса: <b>{$_SESSION['userData']['email']}</b></li>
</ul>
";

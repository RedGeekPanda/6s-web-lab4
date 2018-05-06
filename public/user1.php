<?
session_start();
echo "
<ul>
    <li>Назва ВУЗа: <b>{$_SESSION['userData']['institution']}</b></li>
    <li>Факультет: <b>{$_SESSION['userData']['department']}</b></li>
    <li>Курс: <b>{$_SESSION['userData']['course']}</b></li>
</ul>
";

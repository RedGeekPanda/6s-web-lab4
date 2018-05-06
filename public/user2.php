<?
session_start();
echo "Захоплення: <b>";
switch ($_SESSION['userData']['passion']) {
    case 'games':
        echo 'Комп\'ютерні ігри';
        break;
    case 'chess':
        echo 'Шахи';
        break;
    case 'sport':
        echo 'Спорт';
        break;
    case 'art':
        echo 'Мистецтво';
        break;
    default:
        echo 'Невідоме';
}
echo "</b>";

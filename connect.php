<?php


/*Устанавливает соединение с локальным хостом */
$connection = mysqli_connect('localhost', 'root', '', 'photo_bd') or die('Ошибка подключения к БД');;


/*Устанавливает кодировку utf8 */
mysqli_set_charset($connection, "utf8") or die('Не установлена кодировка');


if (!$connection) {
    echo "Ошибка: Невозможно установить соединение с MySQL<br>";
    echo "<br>Код ошибки errno: " . mysqli_connect_errno();
    echo "<br>Текст ошибки error: " . mysqli_connect_error();
    exit;
}




?>
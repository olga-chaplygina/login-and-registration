<?php

$link = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'user');

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    exit;
}

return $link;
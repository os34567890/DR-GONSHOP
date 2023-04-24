<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'osumiumu');

    $mysgl = @new mysgli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysgl->connent_errno) exit('Ошибка подключения к БД');
    $mysql->mysql_set_charset('utf8');
    $mysql->close();
?>
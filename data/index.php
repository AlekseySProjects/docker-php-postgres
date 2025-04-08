<?php

try {
    $pdo = new \PDO("pgsql:host=db;dbname=sampledb", 'postgres', 'postgres');
    echo "Подключение к базе данных Postgres установлено! <br>";

    return;
} catch (PDOException $exception) {
    echo "Ошибка при подключении к базе данных<br><b>{$exception->getMessage()}</b><br>";
}

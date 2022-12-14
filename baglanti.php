<?php

$dsn = 'mysql:dbname=ogr;host=127.0.0.1';
$user = 'root';
$password = 'root';

try{
$db = new PDO($dsn, $user, $password);

}catch (PDOException $e){
    echo "Bağlantı Kurulamadı:" . $e->getMessage();
}
?>
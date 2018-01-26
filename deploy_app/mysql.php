<?php

$mysql = new mysqli("mysql", "root", "root", "sample_database");

if( !$mysql ) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "INSERT INTO sample_table(created_at) VALUES('" . date('Y-m-d H:i:s') . "')";
$mysql->query($sql);

$sql = "SELECT * FROM sample_table ORDER BY sample_id desc limit 1";
$result = $mysql->query($sql)->fetch_row();

var_dump($result);
mysqli_close($mysql);

<?php
include('connect.php');

$usd_file = "usd.json";

$data = file_get_contents($usd_file);

$data = json_decode($data, true);


$sql = "INSERT INTO usd(value) VALUES('" . $data["rates"]["BRL"]["rate"] . "');";

mysqli_query($connect, $sql);

echo "\ndados inseridos com sucesso";



$connect->close();

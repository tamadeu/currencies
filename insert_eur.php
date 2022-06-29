<?php
include('connect.php');

$eur_file = "eur.json";

$data = file_get_contents($eur_file);

$data = json_decode($data, true);


$sql = "INSERT INTO eur(value) VALUES('" . $data["rates"]["BRL"]["rate"] . "');";

mysqli_query($connect, $sql);

echo "\ndados inseridos com sucesso";



$connect->close();

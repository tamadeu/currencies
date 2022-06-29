<?php

include('../connect.php');

$dollar = $link->query("
    SELECT DATE_FORMAT(date,'%d/%m') as dia, FORMAT(dollar, 4) as valor from currencies WHERE symbol = 'BRL' ORDER BY dia DESC
    ");

$real = $dolar['valor'];

foreach ($dollar as $data) {
    $dia[] = $data['dia'];
    $valor[] = $data['valor'];
}
<?php

include('../connect.php');

$sql = $link->query("
    SELECT DATE_FORMAT(date,'%d/%m') as dia, FORMAT(value, 4) as valor from eur ORDER BY dia DESC
    ");

foreach ($sql as $data) {
    $dia_euro[] = $data['dia'];
    $valor_euro[] = $data['valor'];
}
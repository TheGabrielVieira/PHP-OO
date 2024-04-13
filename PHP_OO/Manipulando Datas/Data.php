<?php

//echo date('d/m/y') . PHP_EOL;

/*$data = new DateTime();
var_dump($data);*/

/*$data = new DateTime();
echo $data -> format('d-m-Y H:i:s') . PHP_EOL;*/



/*
-> P representação de periodo: vem de dia, mês, ano e semana

Y anos
M meses
D dias
W semanas

-> T representação de tempo: vem antes de hora, minuto, e segundo

H horas
M minutos
S segundo

*/

$data = new DateTime();
$intervalo = new DateInterval('P5DT10H50M'); // adicionar um periodo de 5 minutos
$data -> sub($intervalo);

echo $data -> format('d/m/Y - H:i:s');

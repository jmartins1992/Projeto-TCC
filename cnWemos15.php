<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'test';

//setando hora e data do momento que o script php salva o dado recebido da wemos
date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_ALL, 'pt_BR');

$conexao = new mysqli( $host, $user, $senha, $banco );

//Variável responsável por guardar o valor enviado pelo ESP8266 recebido via GET
$sensor =$_GET['valor'];
//filtra como flot para aumentar a scala de leitura
$sensor2 = filter_input(INPUT_GET, 'valor', FILTER_SANITIZE_NUMBER_FLOAT);

//Captura a Data e Hora do SERVIDOR (onde está hospedada sua página):
$time = time('H:i:s');
$data = date('Y-m-d');


if( mysqli_connect_error() ) die( mysqli_connect_error() );

$query = $conexao->query("INSERT INTO tensiometro15 (data, time, sensor15) VALUES ('$data', '$time', '$sensor2')");


?>

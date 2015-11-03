<?php 
//ler o xml usando a biblioteca simpleXml
$xml = simplexml_load_file('ler_dados_sql/dados_config.xml');
$path = $xml->valor->path;
$baud = $xml->valor->baud;
$vetor = $xml->valor->vetor;
var_dump($path);
var_dump($baud);
var_dump($vetor);

//executa o pyhton passando as variaveis
$valor = exec("/home/thais/sandbox/sensorEduc/oficial/ler_serial.py $path $baud $vetor");
var_dump($valor);
?>



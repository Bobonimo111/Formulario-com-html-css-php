<?php
$DbHost = 'LocalHost';
$DbUsername = 'root';
$DbPassword = '';
$DbName = 'db_pessoas';

$connect = new mysqli($DbHost,$DbUsername,$DbPassword,$DbName);

if(!$connect){
    print("Erro de conexão");
}
?>
<?php
$DbHost = 'LocalHost';
$DbUsername = 'root';
$DbPassword = '';
$DbName = 'db_pessoas';

$connect = new mysqli($DbHost,$DbUsername,$DbPassword,$DbName);

if($connect->connect_errno){
    print("Erro de conexão");
}else{
    print('Conexão sucessida');
}

?>
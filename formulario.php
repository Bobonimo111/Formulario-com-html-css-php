<?php

include_once('conexao.php');

$p_nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];

$connect;
$resultado = mysqli_query($connect, "INSERT INTO pessoa(primeiro_nome,sobrenome,data_nascimento,email,cidade,rua,bairro)
VALUES($p_nome,$sobrenome,$nascimento,$email,$cidade,$rua,$bairro);");

?>

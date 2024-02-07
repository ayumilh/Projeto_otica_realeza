<?php
include("../../../config/connect.php");
// Obtém os valores do formulário
$num_os = $_POST['num_os'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$preco = $_POST['preco'];
$sinal = $_POST['sinal'];
$a_pagar = $_POST['a_pagar'];
$obs = $_POST['obs'];

// Insere os dados na tabela
$sql = "INSERT INTO venda (num_os, nome, telefone, cpf, preco, sinal, a_pagar, obs)
VALUES ('$num_os', '$nome', '$telefone', '$cpf', '$preco', '$sinal', '$a_pagar', '$obs')";

if ($conn->query($sql) === TRUE) {
  echo "Dados inseridos com sucesso!";
} else {
  echo "Erro ao inserir dados: " . $conn->error;
}
?>
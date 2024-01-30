<?php
include("./connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar cliente</title>
</head>
<body>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $num_os = $_POST["num_os"];
      $nome = $_POST["nome"];
      $cpf = $_POST["cpf"];
      $endereco = $_POST["endereco"];
      $bairro = $_POST["bairro"];
      $telefone = $_POST["telefone"];
      $atendimento_local = $_POST["atendimento_local"];

      $sql = "INSERT INTO cliente (num_os, nome, cpf, endereco, bairro, telefone, atendimento_local) VALUES ($num_os, '$nome', '$cpf', '$endereco', '$bairro', '$telefone', '$atendimento_local')";
    
      if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso";
      } else {
        echo "Erro ao inserir dados: " . $conn->error;
      }
    }
  ?>
</body>
</html>
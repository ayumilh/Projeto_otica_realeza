<?php
include("./connect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar atendimento</title>
</head>
<body>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $atendimento_local = $_POST["atendimento_local"];
      $bairro = $_POST["bairro"];
      $data = $_POST["data"];
      $opto = $_POST["opto"];
      $valor_total = $_POST["valor_total"];

      $sql = "INSERT INTO atendimento (atendimento_local, bairro, data, opto, valor_total) VALUES ('$atendimento_local', '$bairro', '$data', '$opto', '$valor_total')";

      if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso";
      } else {
        echo "Erro ao inserir dados: " . $conn->error;
      }
    }
  ?>
</body>
</html>
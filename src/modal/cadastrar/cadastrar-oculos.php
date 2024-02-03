<?php
include("../../../config/connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num_os = $_POST['num_os'];
  $armacao = $_POST['armacao'];
  $lentes = $_POST['lentes'];
  $longe_od_esferico = $_POST['longe_od_esferico'];
  $longe_oe_esferico = $_POST['longe_oe_esferico'];
  $longe_od_cilindrico = $_POST['longe_od_cilindrico'];
  $longe_oe_cilindrico = $_POST['longe_oe_cilindrico'];
  $longe_od_dnp = $_POST['longe_od_dnp'];
  $longe_oe_dnp = $_POST['longe_oe_dnp'];
  $eito_od = $_POST['eito_od'];
  $eixo_oe = $_POST['eixo_oe'];
  $add_oe = $_POST['add_oe'];
  $add_od = $_POST['add_od'];
  $perto_od_esferico = $_POST['perto_od_esferico'];
  $perto_oe_esferico = $_POST['perto_oe_esferico'];
  $perto_od_cilindrico = $_POST['perto_od_cilindrico'];
  $perto_oe_cilindrico = $_POST['perto_oe_cilindrico'];
  $perto_od_dnp = $_POST['perto_od_dnp'];
  $perto_oe_dnp = $_POST['perto_oe_dnp'];
  $alt_pupilar = $_POST['alt_pupilar'];

  // Insere os dados na tabela
  $sql = "INSERT INTO oculos (num_os, armacao, lentes, longe_od_esferico, longe_oe_esferico, longe_od_cilindrico, longe_oe_cilindrico, longe_od_dnp, longe_oe_dnp, eito_od, eixo_oe, add_oe, add_od, perto_od_esferico, perto_oe_esferico, perto_od_cilindrico, perto_oe_cilindrico, perto_od_dnp, perto_oe_dnp, alt_pupilar)
  VALUES ($num_os, '$armacao', '$lentes', '$longe_od_esferico', '$longe_oe_esferico', '$longe_od_cilindrico', '$longe_oe_cilindrico', '$longe_od_dnp', '$longe_oe_dnp', '$eito_od', '$eixo_oe', '$add_oe', '$add_od', '$perto_od_esferico', '$perto_oe_esferico', '$perto_od_cilindrico', '$perto_oe_cilindrico', '$perto_od_dnp', '$perto_oe_dnp', '$alt_pupilar')";

  if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }
}
?>
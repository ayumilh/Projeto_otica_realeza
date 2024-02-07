
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../../public/img/Logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="../../../public/styles/reseat.css">
  <link rel="stylesheet" href="../../../public/styles/vars.css">
  <link rel="stylesheet" href="../../../public/styles/sidebar.css">
  <link rel="stylesheet" href="../../../public/styles/main-content.css">
  <link rel="stylesheet" href="../../../public/styles/tabelas.css">
  <title>Clientes</title>
</head>
<body>
  <nav id="sidebar">
    <div id="logo">
      <span class="logo__img">
        <img src="../../../public/img/Logo.svg" alt="Logo">
      </span>
      <span class="logo__text">
        Realeza
      </span>
    </div>

    <ul>
      <li class="sidebar-item">
        <a href="./clientes.php">
          <span class="sidebar-item__img"><img src="../../../public/img/menu/User.svg" alt="Icone de Clientes"></span>
          <span class="sidebar-item__text">Clientes</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a href="./vendas.php">
          <span class="sidebar-item__img"><img src="../../../public/img/menu/Price.svg" alt="Icone de Vendas" width="36" height="36"></span>
          <span class="sidebar-item__text">Vendas</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a href="./atendimentos.php">
          <span class="sidebar-item__img"><img src="../../../public/img/menu/Service.svg" alt="Icone de Atendimento"></span>
          <span class="sidebar-item__text">Atendimento</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a href="./oculos.php">
          <span class="sidebar-item__img"><img src="../../../public/img/menu/Gear.svg" alt="Icone de Oculos"></span>
          <span class="sidebar-item__text">Oculos</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a href="./assistencias.php">
          <span class="sidebar-item__img"><img src="../../../public/img/menu/Help.svg" alt="Icone de Assistencias"></span>
          <span class="sidebar-item__text">Assistencia</span>
        </a>
      </li>
      
    </ul>

    <ul>
      <!-- Novo registro -->
      <li id="sidebar-registro">
        <button class="sidebar-registro__button">
          <span id="sidebar-registro__span">+</span>
          <p>Novo Registro</p>
        </button>
      </li>

      <!-- Logout -->
      <li id="sidebar-sair">
        <a href="#">
          <img src="../../../public/img/menu/Logout.svg" alt="Icone de sair">
          Sair
        </a>
      </li>
    </ul>
  </nav>

  <main>
    <section id="apresentacao">
      <div id="apresentacao__text">
        <h2>Olá Milena! 👑</h2>
        <p>Deus é fiel!</p>
      </div>
      <div id="apresentacao__img">
        <img src="../../../public/img/Woman-analytics-interface.svg" alt="">
      </div>
    </section>

    <div id="table">
      <?php
        include("../../../config/connect.php");

        $query_cliente   = "SELECT * FROM cliente";
        $result_cliente = $conn->query($query_cliente);

        if($result_cliente->num_rows){
          echo "
            <table>
            <thead>
              <tr>
              <th>Número da OS</th>
              <th>Nome</th>
              <th>CPF</th>
              <th>Endereço</th>
              <th>Bairro</th>
              <th>Telefone</th>
              <th>Atendimento Local</th>
            </tr>
            </thead>
          ";

          while($row = $result_cliente->fetch_assoc()){
            $num_os = $row["num_os"];
            $nome = $row["nome"];
            $cpf = $row["cpf"];
            $endereco = $row["endereco"];
            $bairro = $row["bairro"];
            $telefone = $row["telefone"];
            $atendimento_local = $row["atendimento_local"];
            echo '
              <tbody>
                <tr>
                  <td>'. $num_os .'</td>
                  <td>'. $nome .'</td>
                  <td>'. $cpf .'</td>
                  <td>'. $endereco .'</td>
                  <td>'. $bairro .'</td>
                  <td>'. $telefone .'</td>
                  <td>'. $atendimento_local .'</td>
              </tr>
              </tbody>
            ';
          };
          echo "</table>";
        }else{
          echo "0 resultados";
        }
      ?>
    </div>
  </main>
</body>
</html>
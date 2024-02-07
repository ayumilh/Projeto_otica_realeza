
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/Logo.svg" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles/reseat.css">
  <link rel="stylesheet" href="./styles/vars.css">
  <link rel="stylesheet" href="./styles/sidebar.css">
  <link rel="stylesheet" href="./styles/main-content.css">
  <link rel="stylesheet" href="./styles/tabelas.css">
  <title>Dashboard</title>
</head>
<body>
  <nav id="sidebar">
    <div id="logo">
      <span class="logo__img">
        <img src="./img/Logo.svg" alt="Logo" class="icon-header">
      </span>
      <span class="logo__text">
        Realeza
      </span>
    </div>
    
    <ul id="nav">
      <li class="sidebar-item btn-home">
        <a href="#">
          <span class="sidebar-home__img"><img src="./img/menu/Home.svg" alt="Icone de Home"></span>
          <span class="sidebar-item__text">Home</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a href="../src/view/pages/clientes.php">
          <span class="sidebar-item__img"><img src="./img/menu/User.svg" alt="Icone de Clientes"></span>
          <span class="sidebar-item__text">Clientes</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a href="../src/view/pages/vendas.php">
          <span class="sidebar-item__img"><img src="./img/menu/Price.svg" alt="Icone de Vendas" width="36" height="36"></span>
          <span class="sidebar-item__text">Vendas</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a href="../src/view/pages/atendimentos.php">
          <span class="sidebar-item__img"><img src="./img/menu/Service.svg" alt="Icone de Atendimento"></span>
          <span class="sidebar-item__text">Atendimento</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a href="../src/view/pages/oculos.php">
          <span class="sidebar-item__img"><img src="./img/menu/Gear.svg" alt="Icone de Oculos"></span>
          <span class="sidebar-item__text">Oculos</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a href="../src/view/pages/assistencias.php">
          <span class="sidebar-item__img"><img src="./img/menu/Help.svg" alt="Icone de Assistencias"></span>
          <span class="sidebar-item__text">Assistencia</span>
        </a>
      </li>
      
    </ul>

    <div id="hr-sidebar"></div>

    <ul>
      <!-- Logout -->
      <li id="sidebar-sair">
        <a href="#">
          <img src="./img/menu/Logout.svg" alt="Icone de sair">
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
        <img src="./img/Woman-analytics-interface.svg" alt="">
      </div>
    </section>
  </main>
</body>
</html>
<?php
    session_start();
    include_once('conexao.php');
$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Página com a Foto do Usuário</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/style_perfil.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <style>
    #foto {
      border-radius: 50%;
    }
    .service-card {
      width: 930px;
      height: 380px;
    }
    #subir-itens {
      margin-top: -0px;
    }
    #fonte-p {
      font-size: 18px;
    }
    #Azul {
      margin-left: -90px;
      margin-top: 20px;
      color: blue;
      
    }
    #Azul, #red {
      cursor: pointer;
      font-size: 15px;
    }
    #red {
      margin-top: -70px;
      margin-left: 80px;
      color: red;
    }
  </style>
</head>
<body>
  <header class="header" data-header>
    <div class="container">

      <a href="index.html" class="logo">
        <img id="logo" src="img/logo.jpg" width="90" alt="Studio logo">
      </a>

      <nav class="navbar container" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="#service" class="navbar-link" data-nav-link>Sistema de Exclusão | Studio Estética 🦋</a>
          </li>
          
          <li>
            <a href="form_consultas.php" class="btn btn-primary">Início</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

    </div>
  </header>

<div class="proTopo">
  
      <section class="section service" id="service" aria-label="service">
        <div class="container">

          <h2 class="h2 section-title">⚠️Atenção</cor></h2>

          <p  class="section-text">
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img id="foto" src="img/Delete_Icon-300x241(0).png" alt="Foto do usuário" width="190">
                </div>
                
                <h3 class="h3">
                  <a href="#" class="card-title"><?php echo $adm_user ?></a>
                </h3>
                <h1>Você tem certeza que quer realmente excluir este agendamento?</h1>
                  <br>
                </p>
                <?php
                echo"<a id='Azul' href='deletar.php?id=$id'>Sim</a> | ";
                ?>
                <?php
                echo"<a id='red' href='form_consultas.php'>Não</a>";
                ?>
              </div>
            </li>

          </ul>

        </div>
      </section>
  </div>
</div>

  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" aria-label="back to top" data-back-top-btn class="back-top-btn">
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
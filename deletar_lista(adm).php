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
    .service-card {
      width: 800px;
      height: 380px;
      margin-left: 160;
    }
    #subir-itens {
      margin-top: -0px;
    }
    #fonte-p {
      font-size: 18px;
    }
    #Azul {
      margin-left: -90px;
      color: blue;
      
    }
    #Azul, #red {
      cursor: pointer;
      font-size: 20px;
    }
    #red {
      margin-top: -36px;
      margin-left: 50px;
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
                  <img id="foto" src="img/lixeira.png" alt="Foto do usuário" width="190">
                </div>
                
                
                <h1>Você quer realmente excluir este agendamento?</h1>
                  <br>
                </p>
                <?php
                echo"<a id='Azul' href='drop_lista-clientes(adm).php?id=$id'>Sim</a>";
                ?>
                <?php
                echo"<a id='red' href='listar_clientes(adm).php'>Não</a>";
                ?>
              </div>
            </li>

          </ul>

        </div>
      </section>
  </div>
</div>
      <!-- 
        - #CONTACT
      -->

      <section class="section contact" id="contact" aria-label="contact">
        <div class="container">

          <h2 class="h2 section-title">Contate os Desenvolvedores</h2>

          <p id="fonte" class="section-text">
            Quer saber mais sobre a nossa plataforma? Entre em contato com a gente e saiba mais.
          </p>

          <ul class="contact-list">

            <li class="contact-item">
              <div class="contact-card">

                <div class="card-icon">
                  <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                </div>

                <div class="card-content">

                  <h3 class="h3 card-title">Nosso E-mail</h3>

                  <a href="mailto:Studioestetica2023@gmail.com" class="card-link">Studioestetica2023@gmail.com</a>

                </div>

              </div>
            </li>

            <li class="contact-item">
              <div class="contact-card">

                <div class="card-icon">
                  <ion-icon name="map-outline" aria-hidden="true"></ion-icon>
                </div>

                <div class="card-content">

                  <h3 class="h3 card-title">Visite-nos</h3>

                  <address class="card-address">
                    Palmares, Pernambuco<br>
                    , Br
                  </address>

                </div>

              </div>
            </li>

            <li class="contact-item">
              <div class="contact-card">

                <div class="card-icon">
                  <ion-icon name="headset-outline" aria-hidden="true"></ion-icon>
                </div>

                <div class="card-content">

                  <h3 class="h3 card-title">Ligue-nos</h3>

                  <a href="tel:+1234567890" class="card-link">(81) 97301-2469</a>
                  <a href="tel:+55 81 9189-0522" class="card-link">(81) 9189-0522</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <p id="diminuir2" class="copyright">
        &copy; 2023 Todos os Direitos Reservados à <a href="#top" class="copyright-link">Studio Estetica 🦋✨</a>
      </p>

    </div>
  </footer>

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

<?php
//Exibir mensagem através do session_start 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InnoHub - We're available for marketing</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="img/Screenshot_20230506-151547-removebg-preview.png" type="image/svg+xml" sizes="50×50">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/proprietario.css"/>

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
    <style>
    body {
      background-color: Snow;
      
    }
    input {
      font-size: 40px;
    }
    #aumentar {
      font-size: 20px;
    }
      #logo1 {
        border-radius: 50%;
      }
      cor {
        color: #ff4f61;
      }
      #border {
        border-radius: 50%;
      }
      select {
        width: 50px;
      }
    #diminuir {
      font-size: 13px;
    }
    #red {
      color: red;
      font-size: 13px;
    }
    .box {
      height: 570px;
    }
    #blake {
      color: Black;
    }
    label {
      color: Black;
    }
    .sign-btn {
      font-size: 15px;
    }
    .fonte {
      font-size: 15px;
      border-color: #ff4f61;
    }
    </style>
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.html" class="logo">
        <img id="logo1" src="img/logo.jpg" width="100" alt="Studio logo">
      </a>

      <nav class="navbar container" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="index.html" class="navbar-link" data-nav-link>Início</a>
          </li>

          <li>
            <a href="index.html" class="navbar-link" data-nav-link>Serviços</a>
          </li>

          <li>
            <a href="index.html" class="navbar-link" data-nav-link>Sobre</a>
          </li>


          <li>
            <a href="#contact1" class="navbar-link" data-nav-link>Contacte-nos</a>
          </li>
          
          <li>
            <a href="form_adm.php" class="navbar-link" data-nav-link>Administradores</a>
          </li>

          <li>
            <a href="form_agendamento.php" class="btn btn-primary">Agendar Horário</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

    </div>
  </header>
<br> <br><br>
    <main id="entrar">
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">

            <form action="listar_agendamentos.php" method="POST" autocomplete="off" class="sign-in-form">

              <div class="logo">
                <h4>Studio <cor>Estética</cor></h4>
              </div>

              <div class="heading">
                <h2>Buscar Agendamentos</h2> 
                <h5 id="diminuir">Ainda não possui um agendamento? </h5>
                <a id="red" href="form_agendamento.php">Agende seu horário! 📆</a>  
              </div>

              <div class="actual-form">

              <h4 id="diminuir">E-mail🔎</h4> <br>
                <div class="input-wrap">
                  <input type="email" 
                  name="email"                
                  class="fonte"
                  placeholder="Digite o seu e-mail" 
                  autocomplete="off" 
                  required>
                  
                </div>
          
                <input 
                type="submit" 
                value="Próximo" 
                class="sign-btn">

                <p id="diminuir" class="text">
                 💡 Consulta criptografada
                  <a id="red" href="index.html">Studio Estética</a>
                </p>
              </div>

            </form>
           
          </div>

          <div class="img">
            <div class="images">
              <img src="img/icon3.png" class="image" alt="">
            </div>

          </div>

        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="js/app.js"></script>


      <!-- 
        - #CONTACT
      -->

      <section id="contact1" class="section contact" id="contact" aria-label="contact">
        <div class="container">

          <h2 class="h2 section-title">Contate-nos </h2>

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
                  <a href="tel:+2414524526" class="card-link">(81) 9189-0522</a>

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

  <footer class="rodape">
    <div class="container2">

      <p class="copyright">
        &copy; 2023 Todos os Direitos Reservados <a href="index.html" class="copyright-link">Studio Estetica 🦋✨</a>
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
    - custom js link
  -->
  <script>
    
'use strict';

/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * toggle navbar
 */

const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navToggler = document.querySelector("[data-nav-toggler]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  navToggler.classList.toggle("active");
}

addEventOnElem(navToggler, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  navToggler.classList.remove("active");
}

addEventOnElem(navbarLinks, "click", closeNavbar);



/**
 * header active
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});

  </script>

    <!--script javascript da manipulação do input date-->
    <script>
      let diasOcupados = [
        { data: '2023-03-01', usuarios: 15 },
      ];
      
      const input = document.getElementById('data');
      const mensagem = document.getElementById('mensagem');
      
      input.addEventListener('change', function() {
        const dataSelecionada = input.value;
        const ocupacao = diasOcupados.find(dia => dia.data === dataSelecionada);
        
        if (ocupacao && ocupacao.usuarios >= 15) {
          input.readOnly = true;
          mensagem.textContent = 'Este dia está ocupado. Por favor, escolha outra data.';
        } else {
          input.readOnly = false;
          mensagem.textContent = '';
        }
      });
      
      function atualizarOcupacao(data, usuarios) {
        const index = diasOcupados.findIndex(dia => dia.data === data);
        
        if (index >= 0) {
          const ocupacao = diasOcupados[index];
          if (ocupacao.usuarios >= 15) {
            input.readOnly = true;
            mensagem.textContent = 'Este dia está lotado. Por favor, escolha outra data.';
            return;
          }
          ocupacao.usuarios = usuarios;
        } else {
          diasOcupados.push({ data, usuarios });
        }
        
        if (usuarios >= 15) {
          input.readOnly = true;
          mensagem.textContent = 'Este dia está lotado. Por favor, escolha outra data.';
          const dataElement = document.querySelector(`input[type="date"][value="${data}"]`);
          if (dataElement) {
            dataElement.disabled = true;
          }
        }
      }
      
      input.addEventListener('change', function() {
        const dataSelecionada = input.value;
        const ocupacao = diasOcupados.find(dia => dia.data === dataSelecionada);
        
        if (ocupacao) {
          atualizarOcupacao(dataSelecionada, ocupacao.usuarios + 1);
        } else {
          diasOcupados.push({ data: dataSelecionada, usuarios: 1 });
        }
      });
      
      console.log(diasOcupados);
    </script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

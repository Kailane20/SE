<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Studio Estética - Sistema | ADM</title>

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
    #aumentar_letra {
      font-size: 15px;
    }
    .box {
      margin-top: 40px;
      margin-left: 10px;
      margin-right: 10px;
    }
    </style>
</head>

<body id="top">

  <!-- 
{    - #HEADER
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

            <form 
            method="POST" 
            action="login_prop.php" 
            autocomplete="off" 
            class="sign-in-form">

              <div class="logo">
                <h4>Studio<cor> Estética</cor></h4>
              </div>

              <div class="heading">
                <h2>Bem-Vindo de Volta!</h2>
                <h6 id="diminuir">Ainda não se inscreveu?</h6>
                <a id="diminuir" href="#" class="toggle"><cor>Inscreva-se!</cor></a>
              </div>

              <div class="actual-form">

                <div class="input-wrap">
                  <p id="diminuir">E-mail | ADM <cor>*</cor></p>
                  <input 
                  id="fonte"
                  type="email"
                  name="email"
                  class="input-field" 
                  placeholder="Ex.: contato@dominio.com"
                  autocomplete="off" 
                  required>
                </div>
                <br>
                <div class="input-wrap">
                  <p id="diminuir">Senha | ADM</p>
                  <input 
                  id="fonte"
                  class="input-field"
                  type="text" 
                  minlength="4"
                  name="senha"
                  placeholder="Ex.: login123"
                  autocomplete="off" required>
                </div>
                <br>
                <input 
                id="aumentar_letra"
                type="submit"
                name="submit"
                value="Entrar" 
                class="sign-btn">

              </div>

            </form>
            
            <form action="insert_prop.php" autocomplete="off" method="POST" class="sign-up-form">
             <br>
              <div class="logo">
                <h4>Studio<cor> Estética</cor></h4>
              </div>

              <div class="heading">
                <h2>Junte-se a Nós!</h2>
                <h6 id="diminuir">Já tem uma conta?</h6>
                <a id="diminuir" href="#" class="toggle"><cor>Entrar</cor></a>
                </div>

              <div class="actual-form">

                <div class="input-wrap">
                  <p id="diminuir">Nome | ADM </p>
                  <input 
                  id="fonte"
                  placeholder="Ex.: Maria Luísa Silva"
                  type="text" 
                  name="nome_adm"
                  class="input-field" 
                  autocomplete="off" 
                  required>
                </div>
                <br>
                <div class="input-wrap">
                  <p>E-mail | ADM<cor>*</cor></p>
                  <input 
                  id="fonte"
                  placeholder="Ex.: contato@dominido.com"
                  type="email" 
                  class="input-field" 
                  autocomplete="off"
                  name="email_adm"
                  required>
                </div>
                <br>
                <div class="input-wrap">
                  <p id="diminuir">Senha | ADM <cor>*</cor></p>
                  <input 
                  id="fonte"
                  type="text" 
                  minlength="4" 
                  class="input-field" 
                  placeholder="Ex.: login123"
                  autocomplete="off"
                  name="senha_adm"
                  required>
                </div>
                <br>
                <input 
                id="aumentar_letra"
                type="submit"
                name="cadastrar"
                value="Continuar" 
                class="sign-btn">

                <p id="diminnt">
                  <a href="#">Ao me inscrever, concordo com os <cor>Termos de Serviços e Política de Privacidade</cor></a>
                </p>
              </div>

            </form>
          </div>

          <div class="img">
            <div class="images">
              <img width="50" src="img/consultas.jpg" class="image" alt="">
            </div>

          </div>

        </div>
      </div>
    </main>

    
<script>
const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");

inputs.forEach((inp) => {
    inp.addEventListener("focus", () => {
        inp.classList.add("active");
    });

    inp.addEventListener("blur", () => {
        if (inp.value != "") return;
        inp.classList.remove("active");
    });
});

toggle_btn.forEach((btn) => {
    btn.addEventListener("click", () => {
        main.classList.toggle("sign-up-mode");
    })
});
</script>

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

                  <a href="mailto:hello@luaz.com" class="card-link">studioestetica@gmail.com</a>

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
                  <a href="tel:+2414524526" class="card-link">+241 452 4526</a>

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
        &copy; 2023 Todos os Direitos Reservados <a href="#" class="copyright-link">studio-estetica </a>
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
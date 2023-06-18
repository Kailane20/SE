<?php

//session_start();

if(!empty($_GET['id']))
{
  include_once("conexao.php");
  
  $id =$_GET['id'];
  
 $sql = "SELECT * FROM cliente WHERE id = '$id '";
 $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $id = $registro['id'];
   $cliente = $registro['cliente1'];
   $telefone = $registro['telefone'];
   $email = $registro['email'];
   $servico = $registro['servico'];
   $profissional = $registro['profissional'];
   $data = $registro['data'];
   $hora = $registro['hora'];

   //echo $telefone;
  }
 
} else {
  header('Location: listar_edit.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Studio Estética | Edição de Agendamentos</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="img/Screenshot_20230506-151547-removebg-preview.png" type="image/svg+xml" sizes="50×50">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/formulario.css">
  

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
      font-size: 12px;
    }
    #red1 {
      color: red;
      font-size: 13px;
    }
    .box {
      height: 900px;
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
            <a href="#contact" class="navbar-link" data-nav-link>Contacte-nos</a>
          </li>
          
          <li>
            <a href="form_proprietario.php" class="navbar-link" data-nav-link>Administradores</a>
          </li>

          <li>
            <a href="form_consultas.php" class="btn btn-primary">Ver / Cancelar agendamento</a>
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
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="atualizar.php" method="POST" autocomplete="off" class="sign-in-form">
              <div id="logo" class="logo">
                <h4>Studio <cor>Estética</cor></h4>
              </div>

              <div class="heading">
                <h2>Altere seu Horário!</h2>
                <p id="diminuir">Ainda não possui um agendamento?</p>
                <a id="red1" id="diminuir" href="form_consultas.php">Agende aqui!</a>
              </div>
              <h4>Registro <cor>*</cor> </h4>
              <div class="actual-form">
              <p id="diminuir">Nome<cor>*</cor></p>
                <div class="input-wrap">
                  <input
                    type="text"                    
                    name="cliente1"
                    autocomplete="off"
                    value="<?php echo $cliente ?>"
                    required
                    class="fonte"
                    placeholder="Ex.: Maria Luísa Silva"
                  />
                  
                </div>
                <p id="diminuir">Telefone<cor>*</cor></p>
                <div class="input-wrap">
                  <input
                    type="tel"
                    name="telefone"
                    value="<?php echo $telefone ?>"
                    autocomplete="off"
                    required
                    class="fonte"
                    placeholder="Ex.: (81) 34576-2345"
                  />
                  
                </div>
                <p id="diminuir">E-mail<cor>*</cor></p>
                <div class="input-wrap">
                  <input
                   id="blake"
                    value="<?php echo $email ?>"
                    type="email"
                    name="email"
                    class="fonte"
                    placeholder="Ex.: contato@dominio.com"
                    autocomplete="off"
                    required
                  />
                  
                </div>
              
                <!--Serviços-->
                <div class="input-wrap">
                  
                  <h4>Seu Agendamento<cor>*</cor></h4>
                    <br>
                  <select 
                  id="diminuir" 
                  name="servico"
                  value="<?php echo $servico ?>"
                  id="servicos" 
                  class="input-field" required>
                    
                    <option value="" id="diminuir">Serviços</option>
                    <option value="Visagismo - R$50" <?php echo $servico=='Visagismo - R$50'?'selected' :'';?> >Visagismo - R$50</option>
                    <option value="Sobracelhas - R$30,00" <?php echo $servico=='Sobracelhas - R$30,00'?'selected' :'';?>>Sobracelhas - R$30,00,00 </option>
                    <option value="Maquiagem - R$60,00" <?php echo $servico=='Maquiagem - R$60,00'?'selected' :'';?>>Maquiagem - R$60,00</option>
                    <option value="Penteados de Noiva - R$300,00" <?php echo $servico=='Penteados de Noiva - R$300,00'?'selected' :'';?>>Penteados de Noiva - R$300,00</option>
                    <option value="Manicure - R$25,00" <?php echo $servico=='Manicure - R$25,00'?'selected' :'';?>>Manicure - R$25,00</option>
                    <option value="Pedicure - R$25,00" <?php echo $servico=='Pedicure - R$25,00'?'selected' :'';?>>Pedicure - R$25,00</option>
                    <option value="Manicure em Gel - R$45,00" <?php echo $servico=='Manicure em Gel- R$45,00'?'selected' :'';?>>Manicure em Gel- R$45,00</option>
                    <option value="Pedicure em Gel- R$45,00" <?php echo $servico=='Pedicure em Gel- R$45,00'?'selected' :'';?>>Pedicure em Gel- R$45,00</option>
                    <option value="Depilação com Cera - R$70,00" <?php echo $servico=='Depilação com Cera - R$70,00'?'selected' :'';?>>Depilação com Cera - R$70,00</option>
                    <option value="Depilaçaõ a Laser - R$110,00" <?php echo $servico=='Depilaçaõ a Laser - R$110,00'?'selected' :'';?>>Depilaçaõ a Laser - R$110,00</option>
                    <option value="Alongamneto de cílios - R$80,00" <?php echo $servico=='Alongamneto de cílios - R$80,00'?'selected' :'';?>>Alongamneto de cílios - R$80,00</option>
                    <option value="Permanente de cílios - R$100,00" <?php echo $servico=='Permanente de cílios - R$100,00'?'selected' :'';?>>Permanente de cílios - R$100,00</option>
                    <option value="Banho de lua - R$110,00" <?php echo $servico=='Banho de lua - R$110,00'?'selected' :'';?>>Banho de lua - R$110,00</option>
                    <option value="Massagem Relaxante - R$60,00" <?php echo $servico=='Massagem Relaxante - R$60,00'?'selected' :'';?>>Massagem Relaxante - R$60,00</option>
                    <option value="Cortes Femininos - R$30,00" <?php echo $servico=='Cortes Femininos - R$30,00'?'selected' :'';?>>Cortes Femininos - R$30,00</option>
                    <option value="Cortes Masculinos - R$25,00" <?php echo $servico=='Cortes Masculinos - R$25,00'?'selected' :'';?>>Cortes Masculinos - R$25,00</option>
                    <option value="Barba - R$25,00" <?php echo $servico=='Barba - R$25,00'?'selected' :'';?>>Barba - R$25,00</option>
                    
                  </select>
                </div>    
                <br> <br>
                <div class="input-wrap">
                  
                  <select id="diminuir"
                  value="<?php echo $profissional ?>"
                  name="profissional" class="input-field">
                    
                  <option id="branco" value="">Profissionais</option>
                  <option value="Adriana - Cabeleireira" <?php echo $profissional=='Adriana - Cabeleireira'?'selected' :'';?>>Adriana - Cabeleireira</option> 
                  <option value="Rodrigo Cintra - Cabeleireiro" <?php echo $profissional=='Rodrigo Cintra - Cabeleireiro'?'selected' :'';?>>Rodrigo Cintra - Cabeleireiro</option>     
                  <option value="Lucas - Barbeiro" <?php echo $profissional=='Lucas - Barbeiro'?'selected' :'';?>>Lucas - Barbeiro</option>
                  <option value="Luana - Maquiadora" <?php echo $profissional=='Luana - Maquiadora'?'selected' :'';?>>Luana - Maquiadora</option>
                  <option value="Mateus - Maquiador" <?php echo $profissional=='Mateus - Maquiador'?'selected' :'';?>>Mateus - Maquiador</option>
                  <option value="Bruna - Lash Designer" <?php echo $profissional=='Bruna - Lash Designer'?'selected' :'';?>>Bruna - Lash Designer</option>
                  <option value="Guilherme - Massagista" <?php echo $profissional=='Guilherme - Massagista'?'selected' :'';?>>Guilherme - Massagista</option>
                  <option value="Helena - Esteticista" <?php echo $profissional=='Helena - Esteticista'?'selected' :'';?>>Helena - Esteticista</option>
                  <option value="João - Esteticista" <?php echo $profissional=='João - Esteticista'?'selected' :'';?>>João - Esteticista</option>
                  <option value="Camila - Manicure e Pedicure" <?php echo $profissional=='Camila - Manicure e Pedicure'?'selected' :'';?>>Camila - Manicure e Pedicure</option>
                  <option value="Juliana - Visagista" <?php echo $profissional=='Juliana - Visagista'?'selected' :'';?>>Juliana - Visagista</option>
                  

                  </select>
                </div>    
                <p id="diminuir">Data de Agendamento📆<cor>*</cor> </p>
                <div class="input-wrap">
                <input 
                type="date" 
                id="data" 
                class="fonte"
                value="<?php echo $data ?>"
                name="data">
                </div> 
                <h6><p id="mensagem"></p></h6>
                
                <div class="input-wrap">
                  
                  <select id="diminuir" 
                  value="<?php echo $hora ?>"
                  name="hora" requerid
                  class="input-field">
                    <option selected="true">Horário </option>    
                     <!--Horarios da Manha-->               
                    <option value="07h às 08h" <?php echo $hora=='07h às 08h'?'selected' :'';?>>07h às 08h</option>                    
                    <option value="08h às 09h" <?php echo $hora=='08h às 09'?'selected' :'';?>>08h às 09</option>   
                    <option value="09h às 10h" <?php echo $hora=='09h às 10h'?'selected' :'';?>>09h às 10h</option>
                    <option value="10h às 11h" <?php echo $hora=='10h às 11h'?'selected' :'';?>>10h às 11h</option>
                    <!--Horarios da Tarde-->
                    <option value="13h às 14h" <?php echo $hora=='13h às 14h'?'selected' :'';?>>13h às 14h</option>
                    <option value="14h às 15h" <?php echo $hora=='14h às 15h'?'selected' :'';?>>14h às 15h</option>
                    <option value="15h às 17h" <?php echo $hora=='15h às 16h'?'selected' :'';?>>15h às 16h</option>
                    <option value="15h às 17h" <?php echo $hora=='16h às 17h'?'selected' :'';?>>16h às 17h</option>
                  </select>
                </div>

                <input
                type="hidden"
                name="id"
                value="<?php echo $id ?>" />

                <input type="submit"
                name="update"
                value="Atualizar Horário"  class="sign-btn" />

                <p id="diminuir">
                 Ao me registrar, concordo com os
                  <a id="red1" href="#">Termos de Serviços e Política de Privacidade</a> 
                </p>
              </div>
            </form>


          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="img/gif3.gif" class="image img-1 show" alt="" />
              <img src="/img/gif2.gif" class="image img-2" alt="" />
              <img src="/img/imag3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2 id="aumentar">Seu cabelo, seu estilo!</h2>
                  <h2 id="aumentar">Muito mais brilho!</h2>
                  <h2 id="aumentar">Os melhores profissionais!</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
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

      <section class="section contact" id="contact" aria-label="contact">
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
                  <a href="tel:+55 81 9189-0522" class="card-link">+55 81 9189-0522</a>

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

      <p id="diminuir2" class="copyright">
        &copy; 2023 Todos os Direitos Reservados <a href="#" class="copyright-link">Studio Estetica 🦋✨</a>
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
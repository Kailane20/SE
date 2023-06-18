<?php
//Exibir mensagem através do session_start 
session_start();

//Arquivo de conexão para o B.D.
include_once("conexao.php");

// Função para verificar a disponibilidade da data e hora
function verificarDisponibilidade($conexao, $data, $hora) {
    // Consulta SQL para contar os agendamentos na data e hora específicas
    $sql = "SELECT COUNT(*) AS total FROM cliente WHERE data = '$data' AND hora = '$hora'";

    // Executar a consulta SQL
    $result = $conexao->query($sql);

    // Verificar se a consulta foi bem-sucedida
    if ($result) {
        $row = $result->fetch_assoc();
        $totalAgendamentos = $row['total'];

        // Verificar se há algum agendamento
        if ($totalAgendamentos > 0) {
            return false; // Data e hora estão ocupadas
        }
    }

    return true; // Data e hora estão disponíveis
}

// Variável para armazenar a mensagem de erro
$erro = "";

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST["cliente1"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $servicos = $_POST["servico"];
    $profissional = $_POST["profissional"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];

    // Verificar a disponibilidade da data e hora
if (!verificarDisponibilidade($conexao, $data, $hora)) {
    $erro = "Desculpe, a data ou o horário selecionados não estão disponíveis.";
} else {
    // Inserir os dados no banco de dados
    $sql = "INSERT INTO cliente (cliente1, email, telefone, servico, profissional, data, hora) 
            VALUES ('$nome', '$email', '$telefone', '$servicos', '$profissional', '$data', '$hora')";

    // Executar a consulta SQL
    if ($conexao->query($sql) === TRUE) {
        // Agendamento realizado com sucesso
        header("Location: agradecimento.html");
        exit;
    } else {
        $erro = "Erro ao realizar o agendamento: " . $conn->error;
    }
}

    // Fechar a conexão com o banco de dados
    $conexao->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Studio Estetíca | Agendamentos</title>

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
    .erro {
            color: red;
            font-size: 12px;
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off" class="sign-in-form">
              <div id="logo" class="logo">
                <h4>Studio <cor>Estética</cor></h4>
              </div>

              <div class="heading">
                <h2>Bem-Vindo!</h2>
                <p id="diminuir">Já possui um agendamento?</p>
                <a id="red1" id="diminuir" href="form_consultas.php">Consulte-me!</a>
              </div>
              <div class="actual-form">
              <p id="diminuir">Nome<cor>*</cor></p>
                <div class="input-wrap">
                  <input
                    type="text"                    
                    name="cliente1"
                    autocomplete="true"
                    required
                    class="fonte"
                    placeholder="Ex.: nome completo..."
                  />
                  
                </div>
                <p id="diminuir">Telefone<cor>*</cor></p>
                <div class="input-wrap">
                  <input
                    type="text"
                    name="telefone"
                    autocomplete="true"
                    required
                    class="fonte"
                    placeholder="Ex.: (DD) XXXX-XXXX"
                  />
                  
                </div>
                <p id="diminuir">E-mail<cor>*</cor></p>
                <div class="input-wrap">
                  <input
                   id="blake"
                    type="email"
                    name="email"
                    class="fonte"
                    placeholder="Ex.: contato@dominio.com"
                    autocomplete="true"
                    required
                  />
                  
                </div>
              
                <!--Serviços-->
                <div class="input-wrap">
                  
                  <h4>Agende seu horário<cor>*</cor></h4><br>
                  <div class="erro"><?php echo $erro; ?></div>
                    
                  <select id="diminuir" name="servico"  id="servicos" class="input-field" required
                 >
                    
                    <option value="" id="diminuir">Selecione um Serviço</option>
                    <option value="Visagismo - R$190,00">Visagismo - R$190,00</option>
                    <option value="Sobracelhas - R$30,00">Sobracelhas - R$30,00</option>
                    <option value="Maquiagem - R$60,00">Maquiagem - R$60,00</option>
                    <option value="Penteados de Noiva - R$300,00">Penteados de Noiva - R$300,00</option>
                    <option value="Manicure - R$25,00">Manicure - R$25,00</option>
                    <option value="Pedicure - R$25,00">Pedicure - R$25,00</option>
                    <option value="Manicure em Gel- R$45,00">Manicure em Gel - R$45,00</option>
                    <option value="Pedicure em Gel- R$45,00">Pedicure em Gel - R$45,00</option>
                    <option value="Depilação com Cera - R$70,00">Depilação com Cera - R$70,00</option>
                    <option value="Depilaçaõ a Laser - R$110,00">Depilaçaõ a Laser - R$110,00</option>
                    <option value="Alongamneto de cílios - R$80,00">Alongamneto de cílios - R$80,00</option>
                    <option value="Permanente de cílios - R$100,00">Permanente de cílios - R$100,00</option>
                    <option value="Banho de lua - R$110,00">Banho de lua- R$110,00 </option>
                    <option value="Massagem Relaxante - R$60,00">Massagem Relaxante - R$60,00</option>
                    <option value="Cortes Femininos - R$30,00">Cortes Femininos - R$30,00</option>
                    <option value="Cortes Masculinos - R$25,00">Cortes Masculinos - R$25,00</option>
                    <option value="Barba - R$25,00">Barba - R$25,00</option>
                    
                  </select>
                </div>    
                <br> <br><br>
                
                <div class="input-wrap">    
                  <select id="diminuir" name="profissional" class="input-field"
                  id="funcionarios"
                  >
                    
                    <option id="branco" value="">Selecione um Profissional</option>
                                  
                    <option data-servico="Cortes Femininos - R$30,00" data-servico="Penteados de Noiva - R$300,00" value="Adriana - Cabeleireira">Adriana - Cabeleireira</option>                 
                    <option data-servico="Cortes Masculinos - R$25,00" data-servico="Penteados de Noiva - R$300,00" value="Rodrigo Cintra - Cabeleireiro">Rodrigo Cintra - Cabeleireiro</option>
                    <option data-servico="Barba - R$25,00" value="Lucas - Barbeiro">Lucas - Barbeiro</option>                  
                    <option data-servico="Maquiagem - R$60,00" value="Luana - Maquiadora">Luana - Maquiadora</option>
                    <option data-servico="Maquiagem - R$60,00" value="Mateus - Maquiador">Mateus - Maquiador</option>
                    <option data-servico="Permanente de cílios - R$100,00" data-servico="Sobracelhas - R$30,00" data-servico="Alongamneto de cílios - R$80,00" value="Bruna - Lash Designer">Bruna - Lash Designer</option>                    
                    <option data-servico="Massagem Relaxante - R$60,00" value="Guilherme - Massagista">Guilherme - Massagista</option>
                    <option data-servico="Banho de lua - R$110,00" data-servico="Depilaçaõ a Laser - R$110,00" value="Helena - Esteticista">Helena - Esteticista</option>
                    <option data-servico="Depilação com Cera - R$70,00" value="João - Esteticista">João - Esteticista</option>
                    <option data-servico="Pedicure em Gel- R$45,00" data-servico="Manicure em Gel- R$45,00" data-servico="Manicure - R$25,00" data-servico="Pedicure - R$25,00" value="Camila - Manicure e Pedicure">Camila - Manicure e Pedicure</option>
                    <option data-servico="Visagismo - R$190,00" value="Juliana - Visagista">Juliana - Visagista</option>
                    
                  </select>
                </div>    

                <p id="diminuir">Data de Agendamento📆<cor>*</cor> </p>
                <div class="input-wrap">
                <input 
                type="date" 
                id="data" 
                class="fonte"                
                name="data">
                </div> 
                <h6><p id="mensagem"></p></h6>
                
                <div class="input-wrap">
                  
                  <select id="diminuir" name="hora" requerid
                  class="input-field">
                    <option selected="true">Selecione um Horário</option>
                    <!---Horarios da Manhã-->
                    <option value="07h às 08h">07h às 08h</option>
                    <option value="08h às 09h">08h às 09h</option>                   
                    <option value="09h às 10h">09h às 10h</option>                   
                    <option value="10h às 11h">10h às 11h</option>
                    <!---Horarios da Tarde-->
                    <option value="13h às 14h">13h às 14h</option>
                    <option value="14h às 15h">14h às 15h</option>
                    <option value="15h às 16h">15h às 16h</option>
                    <option value="16h às 17h">16h às 17h</option>
                  </select>
                </div>

                <input type="submit"
                name="submit"
                value="Agendar Horário"  class="sign-btn" />

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

  <script>
    function atualizarFuncionarios() {
      var servicosSelect = document.getElementById("servicos");
      var funcionariosSelect = document.getElementById("funcionarios");
      var servicoSelecionado = servicosSelect.value;

      // Exibe todos os funcionários
      for (var i = 0; i < funcionariosSelect.options.length; i++) {
        funcionariosSelect.options[i].style.display = "";
      }

      // Esconde os funcionários que não correspondem ao serviço selecionado
      for (var i = 0; i < funcionariosSelect.options.length; i++) {
        var option = funcionariosSelect.options[i];
        var optionServico = option.getAttribute("data-servico");

        if (optionServico && optionServico !== servicoSelecionado) {
          option.style.display = "none";
        }
      }
    }
  </script>
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

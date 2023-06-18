<?php
session_start();

 // Conectando ao banco de dados:
 include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="kaylane Maria da silva" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alterar o Agendamento</title>   
    <!--style-->
    <!-- Importando a folha de estilos do framework por meio da CDN: -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">

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
    .centralizar {
      text-align: center;
    }
    #color1{
      margin-left: -30px;
      color: blue;
      width: -20px;
      
    }
    
    #color2 {
      margin-top: -30px;
      margin-left: 40px;
      color: orangered;
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
    #titulo-p {
      font-size: 30px;
    }
    a {
      text-decoration: none;
    }
    </style>
  </head>
  <body>

  <header class="header" data-header>
    <div class="container">

      <a href="sair.php" class="logo">
        <img id="logo1" src="img/logo.jpg" width="70" alt="Studio logo">
      </a>

      <nav class="navbar container" data-navbar>
        <ul class="navbar-list">

          <li>
            <a class="navbar-link" href="#tabela" data-nav-link>Sistema ADM | Studio Estética 🦋</a>
          </li>

          <li>
            <a class="navbar-link" href="#contact" data-nav-link>Contate-nos</a>
          </li>

          <li>
            <a href="painel_adm3_funcionando.php" class="btn btn-primary">Voltar / Dashboard</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

    </div>
  </header>
<br> <br><br><br> <br>
<ul>
          <li>
            <a href="form_agendamento.php" class="btn btn-primary">Agendar horário</a>
          </li>
</ul>
<br>
  <div class="centralizar" id="tabela">
    <h1 id="titulo-p">Olá, Administrador(a)!✨</h1>
      
    <h3>Aqui estão os agendamentos registrados dos clientes</h3>
  </div>
    
  <br>
   
    <?php 
      //Imprimir mensagem
      if(isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      //A msg só vai aparecer uma vez pós-envio
      unset($_SESSION['msg']);
    }
    ?>
   <br>
  <div class="m-5">
  <table class="table table-hover" >
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Cliente</th>
        <th scope="col">Telefone</th>
        <th scope="col">E-mail</th>
        <th scope="col">Serviço</th>
        <th scope="col">Profissional</th  >
        <th scope="col">Data</th>
        <th scope="col">horário</th>
        <th scope="col">Ações</th>
   </tr>
  </thead>
  <tbody>
  <?php
 $sql = "SELECT * FROM cliente";
 $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($user_data = mysqli_fetch_array($resultado))
 {
   $id = $user_data['id'];
   $cliente = $user_data['cliente1'];
   $telefone = $user_data['telefone'];
   $email = $user_data['email'];
   $servico = $user_data['servico'];
   $profissional = $user_data['profissional'];
   $data = $user_data['data'];
   $hora = $user_data['hora'];
   echo "<tr>";
   echo "<td>".$id."</td>";
   echo "<td>".$cliente."</td>";
   echo "<td>".$telefone."</td>";
   echo "<td>".$email."</td>";
   echo "<td>".$servico."</td>";
   echo "<td>".$profissional."</td>";
   echo "<td>".$data."</td>";
   echo "<td>".$hora."</td>";
   echo "<td>
      <a id='color1' class='btn btn-sm bi-pencil-square' href='editar_cliente(adm).php?id=$user_data[id]'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
          <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
        </svg>
      </a>
   <a id='color2'  href='deletar_lista(adm).php?id=$user_data[id]'>
     <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
       <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
     </svg>
   </a>
   </td>";
   echo "</tr>";
 }
 mysqli_close($conexao);
?>
  </tbody>
</table>
      <!-- 
        - #CONTACT
      -->
<br><br><br>
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
                  <a href="tel:+55 81 9189-0522" class="card-link">(81) 9189-0522</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        
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

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

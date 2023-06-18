<?php
    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: form_adm.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM cliente WHERE id LIKE '%$data%' or cliente1 LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM cliente ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/Screenshot_20230506-151547-removebg-preview.png" type="image/svg+xml" sizes="50×50">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style_adm.css">
  <link rel="stylesheet" href="css/painel_teste3.css">
  <link rel="stylesheet" href="css/detalhes_adm.css" >
  
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    rel="stylesheet" />
	   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
	<!--Javascript material icon-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
	
	<!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">

    <title>Studio Estética | Dashboard Adm</title> 
    
    <style>
    #modal, #modal1 {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    }
    #color2 {
      color: red;
    }
    #modal:target {
      opacity: 1;
      visibility: visible;
    }
    #modal1:target {
      opacity: 1;
      visibility: visible;
    }
    
    #modal-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: snow;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    #centro3 {
      margin-left: 90px;
    }
    
    #margin-top {
      margin-top: -60px;
    }
    #logo2 {
      width: 30px;
      margin-left: 145px;
      margin-top: -28px;
    }
    #logo3 {
      width: 30px;
      margin-left: 230px;
      margin-top: -26px;
    }

    #logo4 {
      width: 30px;
      margin-left: 240px;
      margin-top: -25px;
    }
    #espac {
      margin-left: 250px;
    }
    </style>
</head>
<body>
    <nav>
            <span id="logo" class="logo_name" id="cor4">Studio <cor1>Estetica<cor1></span>
        </div>

        <div id="aumentar" class="menu-items">
            <ul class="nav-links">
                <li><a href="#margin-top">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="perfil_adm.html">
                    <i class="material-icons">person</i>
                    <span class="link-name">Perfil</span>
                </a></li>
                <li>
                  <a href="listar_clientes(adm).php">
                    <i class="material-icons">border_color</i>
                    <span class="link-name">Agendamentos</span>
                </a></li>
            
            <ul class="logout-mode">
                <li><a href="sair_adm.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard" id="margin-top">
        <div class="top">
            <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
            <h1 id="center">✨Bem - Vindo, <?php echo $logado ?>!✨</h1>
            </div>
            
            <img id="tamanho" src="img/logo.jpg" alt="Logo Studio ">
        </div>
            
            <img id="tamanho" src="img/logo.jpg" alt="Logo Studio ">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i id="colorir" class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard <img src="img/Screenshot_20230506-151547-removebg-preview.png" alt="logo" id="logo2"></span>
                </div>

             
              <br>
              
                <div class="boxes">
                    <div id="card_adm" class="box box1">
                      
            <button id="modal_btn" onclick="abrirModal()">💡Editar Foto</button> <br>
          
            <!-- Modal de upload de foto -->
            <div id="myModal" class="modal">
              <div class="modal-content">
                <span class="close" onclick="fecharModal()">&times;</span>
                <h2>Upload de Foto</h2>
                <form id="uploadForm">
                  <label for="fotoInput">Selecionar Foto</label>
                  <input type="file" id="fotoInput" accept="image/*" />
                  <input type="submit" value="Salvar">
                </form>
                <span onclick="fecharModal()">Cancelar</span>
              </div>
            </div>
          
            <img id="foto" src="" alt="Foto do usuário" width="140"  height="140"> <br>
                        <span class="text">
                 Administrador(es)</span> <br><br>
          <ul class="contact-list">
            <li>
              <a id="fonte" href="#" class="contact-link icon-box">
                <span id="cor" class="material-symbols-rounded  icon">mail</span>

                <p id="lado" id="fonte" class="text"><?php echo $logado ?></p>
              </a>
            </li>
            
            

          </ul>
        </div>
                    
        <div id="card2" id="altura" class="box box2">
          <div class="icon">
            <i class="fas fa-users"></i>
        </div><br>
        <span class="text">Total Funcionários</span> 
        <p>Temos <strong>100</strong> funcionários.</p>
        <br>
        <div class="chart">
            <div class="bar" data-value="100" style="height: 100px;"></div>
            <div class="bar decrease" data-value="60" style="height: 60px;"></div>
            <div class="bar" data-value="80" style="height: 80px;"></div>
            <div class="bar decrease" data-value="40" style="height: 40px;"></div>
            <div class="bar" data-value="120" style="height: 120px;"></div>
        </div><br>
                        
        </div>
        <div id="largura" id="card2" class="box box3">
					<i class="material-icons">border_color</i><br>
            <span class="text">Total Clientes</span>
            <p>Temos <strong>100</strong> Clientes.</p><br>
        <div class="chart">
            <div class="bar" data-value="100" style="height: 100px;"></div>
            <div class="bar decrease" data-value="60" style="height: 60px;"></div>
            <div class="bar" data-value="80" style="height: 80px;"></div>
            <div class="bar decrease" data-value="40" style="height: 40px;"></div>
            <div class="bar" data-value="120" style="height: 120px;"></div>
        </div><br>
        </div>
        </div>
        </div> <br>

        <div class="title">
					<i id="colorir" class="material-icons">equalizer</i>
            <span class="text">Recursos Recentes <img src="img/Screenshot_20230506-151547-removebg-preview.png" alt="logo" id="logo4"></span>
        </div>

        <div class="boxes">
      <!-- 
        - #PROJECTS
      -->

      <section class="projects">
        <ul class="project-list">

          <li class="project-item">
            <div id="card_adm2" class="card project-card">

              <time class="card-date" datetime="2023-04-09">Abril 09, 2023</time>

              <h3 class="card-title">
                
<a href="#modal">Contratar Profissionais - criptografado</a>
  
  <div id="modal">
    <div id="modal-content">
      <h1 id="cor1"><cor>Contratação de Profissionais</cor></h1>
      <br><h3>⚠️ Este recurso não está disponível! Esta sendo desenvolvido pelos programadores da <cor>Studio Estética</cor></h3>
      <br>
      <button onclick="location.href='#'">Fechar</button>
    </div>
  </div>
              </h3>
              
              <div class="card-badge blue">Select </div>
              
              <div class="card-badge orange">Update</div>
              
              <div class="card-badge cyan">Drop </div>

              <p class="card-text">
                Encontre ou adicione seus funcionários quando e onde quiser...
              </p>

              <div class="card-progress-box">

                <div class="progress-label">
                  <span class="progress-title">Progress</span>

                  <data class="progress-data" value="75">75%</data>
                </div>

                <div class="progress-bar">
                  <div class="progress" style="--width: 75%; --bg: var(--emerald);"></div>
                </div>

              </div>

              <ul class="card-avatar-list">

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="img/foto3.jpg" alt="Studio fotos" width="32" height="32">
                  </a>
                </li>

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="img/foto4.jpg" alt="John Foster" width="32" height="32">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="project-item">
            <div id="card_adm2" class="card project-card">

              <time class="card-date" datetime="2023-04-09">Abril 09, 2023</time>

              <h3 class="card-title">
                <a href="listar_clientes(adm).php">
                  Agendar Horário - criptografado
                </a>
              </h3>
              
              <div class="card-badge blue">Select</div>

              <div class="card-badge orange">Update</div>
              
              <div class="card-badge cyan">Drop </div>
              <br>
              <p class="card-text">
                Altere ou adicione facilmente os seus clientes em um click...
              </p>

              <div class="card-progress-box">

                <div class="progress-label">
                  <span class="progress-title">Progress</span>

                  <data class="progress-data" value="50">50%</data>
                </div>

                <div class="progress-bar">
                  <div class="progress" style="--width: 50%; --bg: var(--imperial-red);"></div>
                </div>

              </div>

              <ul class="card-avatar-list">

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="img/foto5.jpg" alt="Elizabeth Foster" width="32" height="32">
                  </a>
                </li>

                <li class="card-avatar-item" id="centro2">
                  <a href="#">
                    <img src="img/foto6.jpg" alt="John Foster" width="32" height="32">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="project-item" id="centro3">
            <div id="card_adm2" class="card project-card">

              <time class="card-date" datetime="2023-04-09">Abril 09, 2023</time>

              <h3 class="card-title">
<a href="#modal1">Adicionar Serviços - criptografado</a>
  
  <div id="modal1">
    <div id="modal-content">
      <h1 id="cor1"><cor>Adicionar Serviços</cor></h1>
      <br><h3>⚠️ Este recurso não está disponível! Esta sendo desenvolvido pelos programadores da <cor>Studio Estética</cor></h3>
      <br>
      <button onclick="location.href='#'">Fechar</button>
    </div>
  </div>
              </h3>
              
              <div class="card-badge blue">Select</div>
              
              <div class="card-badge cyan">Update</div>
              
              <div class="card-badge orange">Drop </div>

              <p class="card-text">
                Adicione + serviços de forma simples e direta com um click...
              </p>

              <div class="card-progress-box">

                <div class="progress-label">
                  <span class="progress-title">Progress</span>

                  <data class="progress-data" value="60">60%</data>
                </div>

                <div class="progress-bar">
                  <div class="progress" style="--width: 60%; --bg: var(--sunglow);"></div>
                </div>

              </div>

              <ul class="card-avatar-list">

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="img/pexels.jpeg" alt="Foto Foster" width="32" height="32">
                  </a>
                </li>

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="img/img_mulher2_ia.jpg" alt="John Foster" width="32" height="32">
                  </a>
                </li>

              </ul>

            </div>
          </li>

        </ul>

      </section>

    <br> 
    </div>
                
            <div class="activity">
                <div class="title">
                    <i id="colorir" class="uil uil-clock-three"></i>
                    <span class="text">Clientes Recentes <img src="img/Screenshot_20230506-151547-removebg-preview.png" alt="logo" id="logo3"></span>
                </div>
                
        <div class="section-title-wrapper">
          <h2 class="section-title">
            
          </h2>

          <button class="btn btn-link icon-box">
            
            <a href="listar_clientes.php">
            <span>Ver todos</span>
            </a>
            
            <span class="material-symbols-rounded  icon" aria-hidden="true">arrow_forward</span>
          </button>
        </div>
                <div class="activity-data">

          
                <div id="centro" class="m-5">
                    <table class="table text-white table-bg">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Serviço</th>
                                <th scope="col">Profissional</th>
                                <th scope="col">Data</th>
                                <th scope="col">Hora</th>
                                <th scope="col">...</th>
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
                  <a id='color1' class='btn btn-sm bi-pencil-square' href='edit_cliente(painel).php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                      <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                    </svg>
                  </a>
              <a id='color2'  href='deletar_cliente(painel).php?id=$user_data[id]'>
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
                </div>
              </div>
            </div>
        
       
              </div>
            </div>
        </div>
    </section>

    <br>
  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <center id="espac"><p id="diminuir2" class="copyright">
        &copy; 2023 Todos os Direitos Reservados à <a href="#top" class="copyright-link">Studio Estetica 🦋✨</a>
      </p></center>

    </div>
  </footer>
  <br> <br>
  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" aria-label="back to top" data-back-top-btn class="back-top-btn">
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>



    <script src="js/script_adm.js"></script>
    
  <script>
    // Função para abrir o modal
    function abrirModal() {
      document.getElementById('myModal').style.display = 'block';
    }

    // Função para fechar o modal
    function fecharModal() {
      document.getElementById('myModal').style.display = 'none';
    }

    // Função para salvar a imagem no localStorage
    function salvarImagem() {
      if (localStorage.getItem('foto')) {
        localStorage.removeItem('foto');
      }
      const foto = document.getElementById('foto');
      localStorage.setItem('foto', foto.src);
      alert('Imagem salva com sucesso!');
    }

    // Função para carregar a imagem salva do localStorage
    function carregarImagemSalva() {
      const fotoSalva = localStorage.getItem('foto');
      if (fotoSalva) {
        const foto = document.getElementById('foto');
        foto.src = fotoSalva;
      }
    }

    // Evento de envio do formulário de upload
    const form = document.getElementById('uploadForm');
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      const input = document.getElementById('fotoInput');
      const foto = document.getElementById('foto');
      const file = input.files[0];
      const reader = new FileReader();

      reader.onloadend = function() {
        foto.src = reader.result;
        salvarImagem();
      };

      if (file) {
        reader.readAsDataURL(file);
      } else {
        foto.src = '';
        salvarImagem();
      }

      fecharModal();
    });

    // Carrega a imagem salva ao carregar a página
    window.addEventListener('load', function() {
      carregarImagemSalva();
    });
  </script>
  
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                datasets: [{
                    label: 'Baixa de Funcionários',
                    data: [5, 3, 1, 0, 2, 4, 6, 4, 2, 1, 2, 4],
                    borderColor: 'red',
                    borderWidth: 2,
                    fill: false
                }, {
                    label: 'Aumento de Funcionários',
                    data: [2, 1, 3, 5, 7, 9, 11, 12, 10, 8, 6, 4],
                    borderColor: 'green',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
<script>
  function openModal() {
    document.getElementById("modal1").style.display = "block";
  }
  
  function closeModal() {
    document.getElementById("modal1").style.display = "none";
  }
</script>
</body>
</html>
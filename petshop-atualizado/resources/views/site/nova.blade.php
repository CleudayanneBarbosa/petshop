<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="icon" href="imagens/logo.jpg" type="image/x-icon" />
  <title>
    PETSPACE
  </title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!---->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/my-style.css">
<!---->
</head>
<body class="fundo">

  <div class="container fbranco">
<!---->
       <div class="text-center">
          <br>
            
            
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./imagens/capa.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./imagens/capa2.png" alt="">
              <div class="carousel-caption d-none d-md-block text-justify">
                
              </div>

            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./imagens/capa3.png" alt="">
              <div class="carousel-caption d-none d-md-block text-justify">
                
              </div>
            </div>
              <div class="carousel-item mag">
              <img class="d-block w-100" src="./imagens/1.jpg" alt="">
              <div class="carousel-caption d-none d-md-block text-justify">
                
              </div>
            </div>
            <div class="carousel-item mag">
              <img class="d-block w-100" src="./imagens/2.jpg" alt="">
              <div class="carousel-caption d-none d-md-block text-justify">
                
              </div>
            </div>
            <div class="carousel-item mag">
              <img class="d-block w-100" src="./imagens/3.jpg" alt="">
              <div class="carousel-caption d-none d-md-block text-justify">
                
              </div>
            </div>
            <div class="carousel-item mag">
              <img class="d-block w-100" src="./imagens/4.jpg" alt="">
              <div class="carousel-caption d-none d-md-block text-justify">
                
              </div>
            </div>
              
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>

          </div>
<!---->

          <nav class="navbar navbar-expand-lg navbar-light cor_menu">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav menu">
            <a class="nav-item nav-link active" href="home.php">Home</a>
            <a class="nav-item nav-link" href="nova.php">Nova Solicitação</span></a>
            <a class="nav-item nav-link" href="dicas.php">Dicas e Saúde</span></a>
            <a class="nav-item nav-link" href="acessorio.php">Acessórios</span></a>
            <a class="nav-item nav-link" href="fale.php">Fale com o cuidador</span></a>
            <a class="nav-item nav-link" href="contato.php">Contatos</span></a>
 <!-- area do login-->
             <div class="nav-item  nav-link" id="infuser">
               <b><span> Seu Aplicativo Favorito :</span>
               <span>PetSpace</span>
               <span >Usuario :</span>
               <span><?php echo "" ?> </span>
               <span><a href="index.php" >Sair</a></span></b>
<!-- fim da area do login-->
          </div>
        </div>
      </nav>
<!---->
<div class="conteud">
          <hr>
           <h2 class="text-center">Nova Solicitação de Atendimento!</h2>
          <hr>
<div class="row">
          <!--Formulario de Usuarios-->
          <form action="" class="centralizar col-6" id="" method="" name="servicos">
            <h2>Cadastro de Usuarios</h2>
            <div class="form-group">
              <label>Nome do Usuario:</label>
              <input type="text" name="nome_usuario" class="form-control " value="" placeholder="Digite seu nome" id="" >
            </div>

            <div class="form-group">
              <label>Email:</label>
              <input type="Email" name="email" class="form-control " value="" placeholder="Insira uma Descrição" id="" >
            </div>

            <div class="form-group">
              <label>Senha:</label>
              <input type="password" name="senha" class="form-control " value="" placeholder="Digite sua senha" id="" >
            </div>

            <div class="form-group">
              <label>Endereço:</label>
              <input type="text" name="endereco_usuario" class="form-control" value="" placeholder="Digite seu endereço" id="" >
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-primary"> limpar</button>

          </form>
          <!--Final usuarios-->
<!---->
          <!--Formulario de Petshop-->
          <form action="" class="centralizar col-6" id="" method="" name="servicos">
            <h2>Cadastro de Petshop</h2>
            <div class="form-group">
              <label>Nome do Petshop:</label>
              <input type="text" name="nome_petshop" class="form-control" value="" placeholder="Digite do Petshop" id="" >
            </div>

            <div class="form-group">
              <label>Endereco:</label>
              <input type="text" name="endereco_petshop" class="form-control"  value="" placeholder="Digite o endereço do Petshop" id="" >
            </div>

            <div class="form-group">
              <label>Telefone:</label>
              <input type="Telefone" name="telefone_petshop" class="form-control"  value="" placeholder="Digite numero de telefone" id="" >
            </div>

            <div class="form-group">
              <label>Celular para contato:</label>
              <input type="Telefone" name="celular_petshop" class="form-control"  value="" placeholder="Digite numero de celular" id="" >
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-primary"> limpar</button>
          </form>
</div>
          <!--Final Petshop-->
<!---->
<br><br>
<div class="row">
            <!--Formulario de Medicos-->
          <form action="" class="centralizar col-6" id="" method="" name="servicos">
            <h2>Cadastro Medicos</h2>
            <div class="form-group">
              <label>Nome do Medico:</label>
              <input type="text" name="nome_medico" class="form-control " value="" placeholder="Insira nome do medico" id="" >
            </div>

            <div class="form-group">
              <label>Endereco:</label>
              <input type="text" name="endereco_medico" class="form-control" value="" placeholder="Endereço" id="" >
            </div>

            <div class="form-group">
              <label>Celular:</label>
              <input type="Telefone" name="valor" class="form-control" value="" placeholder="" id="" >
            </div>

            <div class="form-group">
              <label>Numero do CRMV:</label>
              <input type="number" name="num_crmv" class="form-control " value="" placeholder="000000000" id="" >
            </div>

            <div class="form-group">
              <label>Especialidade:</label>
              <input type="text" name="especialidade_medico" class="form-control " value="" placeholder="Especialidade..." id="" >
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="Email" name="email_medico" class="form-control " value="" placeholder="exemplo@teste.com" id="" >
            </div>

            <div class="form-group">
              <label>Petshop Contratante</label>
              <input type="number" name="petshop_id" class="form-control " value="" placeholder="" id="" >
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-primary"> limpar</button>
            
          </form>

          <!--Final Medicos-->
<!---->
          <!--Formulario de Serviços-->
          <form action="" class="centralizar col-6" id="" method="" name="servicos">
            <h2>Cadastre Seus Serviços</h2>
            <div class="form-group">
              <label>Nome de Serviço:</label>
              <input type="text" name="nome_servico" class="form-control"  value="" placeholder="Insira Nome do Serviço" id="" >
            </div>

            <div class="form-group">
              <label>Descrição do Serviço:</label>
              <input type="text" name="descricao" class="form-control" value="" placeholder="Insira uma Descrição" id="" >
            </div>

            <div class="form-group">
              <label>Valor do Serviço:</label>
              <input type="number" name="valor" class="form-control col-6" value="" placeholder="R$..." id="" >
            </div>

            <div class="form-group">
              <label>Nome do Petshop</label>
              <input type="text" name="nome_petshop" class="form-control " value="" placeholder="Petshop Name" id="" >
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-primary"> limpar</button>
          </form>
          <!--Final Serviço-->
<!---->
         
</div>    


      <footer class="footer">
        <hr>
        <p class="text-center">
        PetSpace &copy;  Todos os direitos reservados
        <br><br>
        </p>

      </footer>

      </div>
    

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
</body>
</html>
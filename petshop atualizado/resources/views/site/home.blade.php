<!doctype html>
<html lang="pt-br">
  <head>
    <link rel="icon" href="imagens/logo.jpg" type="image/x-icon" />
    <meta charset="utf-8">
    <title>PETSPACE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/my-style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
  <body class="back">
    
     <div class="container">
          <div class="card card-container">
              <img id="profile-img" class="profile-img-card" src="imagens/logo.jpg" />
              <p id="profile-name" class="profile-name-card"></p>
              <form class="form-signin" action="home.php">
                  <span id="reauth-email" class="reauth-email"></span>
                  <input type="nome" id="inputEmail" class="form-control" placeholder="Login" required autofocus>
                  <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                  <div id="remember" class="checkbox">
                      <label>
                          <input type="checkbox" value="remember-me"> Lembrar deste usuario
                      </label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
              </form><!-- /form -->
              
          </div><!-- /card-container -->
      </div><!-- /container -->
      

    <script src="js/jquery-3.2.1.slim.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="cordova.js"></script>
      <script type="text/javascript" src="js/index.js"></script>
      <script type="text/javascript" src="js/login.js"></script>
  </body>
</html>
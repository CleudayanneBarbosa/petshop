    <nav class="navbar navbar-expand-lg navbar-light cor_menu">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon top"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav menu">
            <a class="nav-item nav-link active" href="index.blade.php">Home</a>
            <a class="nav-item nav-link" href="nova.blade.php">Nova Solicitação</span></a>
            <a class="nav-item nav-link" href="{{ action('HomeController@dicas_saude') }}">Dicas e Saúde</span></a>
            <a class="nav-item nav-link" href="{{ action('HomeController@acessorio') }}">Acessórios</span></a>
            <a class="nav-item nav-link" href="{{ action('HomeController@fale') }}">Fale com o cuidador</span></a>
            <a class="nav-item nav-link" href="contato.blade.php">Contatos</span></a>
 <!-- area do login-->
             <div class="nav-item  nav-link" id="infuser">
               <b><span> Seu Aplicativo Favorito :</span>
               <span>PetSpace</span>
               <span >Usuario :</span>
               <span><?php echo "" ?> </span>
               <span><a href="home.blade.php" >Sair</a></span></b>
<!-- fim da area do login-->
            </div>
          </div>
        </div>         
</nav>
@extends('layout.main')
@section('conteudo')
<hr>
  <h2 class="text-center">Olá, bem vindo ao PETSPACE!!!</h2>
  <hr>

  <p class="text-justify"> Encontre tudo para seu pet, tudo que fazemos é com todo amor e carinho aos animais, por tanto, pode - se assegurar que seu pet será super bem tratado com todo amor, carinho e atenção, pois sabemos o quanto ele é importante para voce,assim se tornando para conosco.
  Tudo que seu animal precisa está aqui, trabalhamos com pessoas nas quais são de extrema confiança, tendo toda uma estrutura adequada e confortavel para receber seu pet.</p>
  <br>

  <p class="text-center">Aquele que não é capaz de amar um animal não é capaz de amar ninguém."</p>
  <hr>
  <h4> Minhas solicitações anteriores:</h4><br>
  <div class="table-responsive">
   <table border="2px" class="table table-hover">
    <tr class="thead-inverse">
      <th>Nome Pet:</th>
      <th> idade Pet:</th>
      <th>data</th>
      
      <th> Horario do atendimento:</th>
      <th>Tipo de atendimento</th>
    </tr>
    <tr class="table default"><td> Laila   </td><td> 3 anos    </td><td>01/07/2017</td><th></th><td>Banho e Tosa</td></tr>
    <tr class="table default"><td>  Luna  </td><td> 2 anos    </td><td>01/08/2017</td><th></th><td>Tosa</td></tr>
    <tr class="table default"><td> Peppa   </td><td> 4 anos    </td><td>01/09/2017</td><th></th><td>Banho</td></tr>
    <tr class="table default"><td> Sol   </td><td> 3 meses    </td><td>01/10/2017</td><td> 13:00 horas</td><td>hospedagem</td></tr>
  </table>

</div>


<hr>
<h2 class="text-center">Mural da Semana
</h2>
<hr>

<div class="row">

  <div class="col-md-4 d-md-block d-sm-none d-none">
    <img src="imagens/cao.jpg" class="img-fluid img-thumbnail">
  </div>

  <div class="col-md-8">
    
    <p class="text-justify">
      O cão (Canis lupus familiaris[1]), no Brasil também chamado de cachorro, é um mamífero canídeo, subespécie do lobo, e talvez o mais antigo animal domesticado pelo ser humano. Teorias postulam que surgiu do lobo cinzento no continente asiático há mais de 100 000 anos. Ao longo dos séculos, através da domesticação, o ser humano realizou uma seleção artificial dos cães por suas aptidões, características físicas ou tipos de comportamentos. O resultado foi uma grande diversidade de raças caninas, as quais variam em pelagem e tamanho dentro de suas próprias raças, atualmente classificadas em diferentes grupos ou categorias. As designações vira-lata (no Brasil) ou rafeiro (em Portugal) são dadas aos cães sem raça definida ou mestiços descendentes.<br>      

    </div>
    <div class="col-md-8">
      
     
      <p  class="text-justify">
        A afeição e a companhia deste animal são alguns dos motivos da famosa frase: "O cão é o melhor amigo do homem", já que não há registro de amizade tão forte e duradoura entre espécies distintas quanto a de humano e cão. Esta relação figura em filmes, livros e revistas, que citam, inclusive, diferentes relatos reais de diferentes épocas e em várias nações. Entre os cães mais famosos que viveram e marcaram sociedades estão Balto, Laika e Hachiko. Na mitologia, o Cérbero é dito um dos mais assustadores seres. No cinema, Lassie é um dos mais difundidos nomes e, na animação, Pluto, Snoopy e Scooby-Doo há décadas fazem parte da infância de várias gerações.
      </p>
      
      

    </div>
    <div class="col-md-4 d-md-block d-sm-none d-none">
      <img src="imagens/cao2.jpg" class="img-fluid img-thumbnail">
    </div>


  </div>
  
  <!--gatos-->
  <div class="row">

    <div class="col-md-4 d-md-block d-sm-none d-none">
      <img src="imagens/gato.png" class="img-fluid img-thumbnail">
    </div>

    <div class="col-md-8">
      
      <p class="text-justify">
        O gato (Felis silvestris catus), também conhecido como gato caseiro, gato urbano ou gato doméstico, é um animal da Família dos felídeos, muito popular como animal de estimação. Ocupando o topo da cadeia alimentar, é um predador natural de diversos animais, como roedores, pássaros, lagartixas e alguns insetos.
        <br>A primeira associação com os humanos da qual se tem notícia ocorreu há cerca de 9.500 anos,período superior ao estimado anteriormente, que oscilava entre 3500 e 8000 anos. A subfamília Felinae, que agrupa os gatos domésticos, surgiu há cerca de 12 milhões de anos, expandindo-se a partir da África subsariana até alcançar as terras do atual Egito. Acredita-se que o gato-selvagem-africano (Felis silvestris lybica) era seu antepassado imediato, no entanto evidencias genéticas assinalam que os gatos domésticos atuais partilham uma procedência direta com os gatos selvagens do oriente médio.</p>
      </div>
      <div class="col-md-8">
        <p class="text-justify">

        Existem cerca de 250 raças de gato doméstico, cujo peso variável classifica a espécie como animal doméstico de pequeno a médio porte. Assim como cães com estas dimensões, vive entre quinze e vinte anos. De personalidade independente, tornou-se um animal de companhia em diversos lares ao redor do mundo, para pessoas dos mais variados estilos de vida. Na cultura humana, figura da mitologia às superstições, passando por personagens de desenhos animados, tiras de jornais, filmes e contos de fadas. Entre suas mais conhecidas representações, estão os gatos: Tom, Frajola, Manda-Chuva, Gato Félix, Gaturro, O Gato de Botas e Garfield.</p>

        

      </div>

      
      <div class="col-md-4 d-md-block d-sm-none d-none">
        <img src="imagens/gato2.jpg" class="img-fluid img-thumbnail">
      </div>
    </div>
@endsection
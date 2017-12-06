<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="icon" href="imagens/logo.jpg" type="image/x-icon" />
  <title>		PETSPACE
  </title>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  @include('layout.partial.header')
</head>
<body class="fundo">
 <div class="container fbranco">
  <!---->
  @include('layout.partial.carousel')
</div>
<!---->

@include('layout.partial.navbar')

<!---->
<div class="conteud">
  @yield('conteudo')
    


    @include('layout.partial.foot')

  </div>
</div>


@include('layout.partial.footer')

</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        @routes
        <!-- Fontes do google  -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">

        <!-- Vuejs  -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

        <!-- Bootstrap  -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
   <!-- Css das páginas  -->
        <link rel="stylesheet" href="/style.css">
        <!-- Scripts das páginas -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" integrity="sha256-u7MY6EG5ass8JhTuxBek18r5YG6pllB9zLqE4vZyTn4=" crossorigin="anonymous"></script>

 <!-- Scripts do ajax e máscara-->
<script src="/js/script.js"></script>


    </head>
    <body>

        <header>
       <nav class= "navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
   <a href="/" class="navbar-brand" >
    <img src="/img/logo.jpg" width="100px" alt="robo">
</a>
<ul class="navbar-nav">

   <li class="nav-item">
   <a href="/produtos/novo" class="nav-link">Cadastrar</a>

   </li>

   <li class="nav-item">
   <a data-target="#modalAlterar" data-toggle="modal" class="nav-link"  href="#modalAlterar">Editar</a>

   </li>

   <li class="nav-item">
   <a href="/produtos/lista" class="nav-link">Lista</a>

   </li>

   <li class="nav-item">
   <a data-target="#modalAlterar" data-toggle="modal" class="nav-link"  href="#modalAlterar">Deletar</a>

   </li>


</ul>
</a>
</div>



       </nav>

</header>



<div class="alert alert-success d-none messageBox" role="alert">
</div>
<!-- Modal Padrao do bootstrap -->
<div class="modal fade" id="modalAlterar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger d-none messageBox" role="alert">
</div>
<div class="alert alert-danger d-none messageBox" id='caixinha' role="alert">
</div>

      <form name="FormBuscar" action=" {{ route('buscar') }}"  method="POST">
@csrf

<input type="text"  class="form-control" id="id" name="id" ><br/>


<button class="btn btn-secondary btn-lg">Alterar</button>
    </form>
<meta name="csrf-token" content="{{csrf_token() }}">
      </div>
    </div>
  </div>
</div>



<!-- Modal Para a exclusão  -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">




    <input id="q" name="q" type="text" />
    <button type="submit" id="submitButton" class="btn btn-primary">Apagar</button>
      </div>
    </div>
  </div>
</div>

@yield('content')
<footer>
    <p> Cadastro de eletrodomesticos &copy; 2022</p>
</footer>




    </body>
</html>

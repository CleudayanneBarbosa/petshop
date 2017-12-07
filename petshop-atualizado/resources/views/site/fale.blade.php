@extends('layout.main')
@section('conteudo')

<!----><hr>
          
          <div class="row">
        <div class="col">
          <div class="text-center">
            <h1>Fale com Cuidador sobre seu Pet</h1>            
            <hr>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Olá!!</strong> Entre em contato com a gente!!
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <form>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" placeholder="Estado" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault05">Cep</label>
                <input type="text" class="form-control" id="cep" placeholder="Cep" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="pet">Nome do Pet</label>
                <input type="text" class="form-control" id="pet" placeholder="Nome do seu Pet" required>
              </div>
            </div>
             <div class="row">
              <div class="col-md-12 mb-3">
                <label for="comentario">Observação</label>
                <textarea class="form-control" id="Algo" placeholder="Algo importante que deveriamos saber sobre seu pet ?" value="Mark" required rows="10"></textarea>
              </div>
            </div>
            <button class="btn btn-primary  btn-lg btn-block" type="submit">Enviar</button>
          </form>
        </div>
      </div>
      
@endsection

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Formulário de Contato</title>
  </head>
  <body style="background: #f2f2f2;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <h1 class="mt-5">Formulário de Contato</h1>
          <form action="enviar.php" method="GET">
            <div class="mb-3 mt-5">
              <label>Nome</label>
              <input type="text" name="nome" class="form-control">
            </div>
            <div class="mb-3">
              <label>E-mail</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
              <label>Mensagem</label>
              <textarea rows="5" name="mensagem" class="form-control"></textarea> 
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-success">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>    
  </body>
</html>

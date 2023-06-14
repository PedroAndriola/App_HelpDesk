  <?php require_once "validador_acesso.php"; ?>

  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .card-abrir-chamado {
        padding: 30px 0;
        width: 100%;
        margin: 0 auto;
      }
      img{
        height: 0px;
        margin: 0px;
        border-radius: 50px;
        background-attachment: fixed;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo" aria-placeholder="Abrir-Chamado">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">
      <div class="row justify-content-center">
        <div class="card-abrir-chamado mt-5">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">

                  <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label for="titulo">Título</label>
                      <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Título" required>
                    </div>

                    <div class="form-group">
                      <label for="categoria">Categoria</label>
                      <select name="categoria" class="form-control" id="categoria">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="descricao">Descrição</label>
                      <textarea name="descricao" class="form-control" id="descricao" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>

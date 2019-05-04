<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar contato</title>

  <link type="text/css" rel="stylesheet" href="./css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="./css/index.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body>

  <div class="container">
    <div class="card-panel">
      <form action="atualizar_processo.php" method="post">

        <h5>Editar Contato</h5>
        <div class="row">
          <div class="input-field col s8">
            <input type="text" name="nome_at" id="nome_at" value="<?php echo $_REQUEST['name'] ?>" />
          </div>

          <div class="input-field col s4">
            <input type="text" name="telefone_at" id="telefone_at" value="<?php echo $_REQUEST['tel'] ?>" />
          </div>
        </div>

        <div class="row oculto">
          <input  type="text" name="id_at" id="id_at" value="<?php echo $_REQUEST['edit'] ?>" />
        </div>

        <a class="btn waves-effect waves-light left" href='index.php'>Cancelar
          <i class="material-icons left">cancel</i>
        </a>

        <button class="btn waves-effect waves-light right" type="submit" name="submit" value="Submit">Atualizar
          <i class="material-icons right">save</i>
        </button>
      </form>
    </div>

</body>
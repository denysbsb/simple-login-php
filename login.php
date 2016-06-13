<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Allget">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <div class="container">
    <div class="row">
      <br/> <br/> <br/> <br/> <br/>
    </div>
      <!-- Conteúdo -->
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading">Login - Painel Administrativo</div>
            <div class="panel-body">
              <form method="post" action="valida.php" name="login">
                <div class="form-group">
                  <label class="control-label">Login:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" placeholder="Login" name="login" id="login" maxlength="50" autofocus required/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Senha:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha" maxlength="20" required/>
                  </div>
                </div>
                <button type="submit" class="btn btn-success">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Rodapé -->
    <div class="footer">
      <div class="col-xs-12 col-md-12">
        <hr/>
        <p class="text-muted">Sistema desenvolvido por <a href="http://www.allget.com.br" target="_blank">AllGet TI</a> - Todos os direitos reservados - 2016</p>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>
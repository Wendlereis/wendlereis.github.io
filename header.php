<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
        <title><?php echo $page_title ?></title>
        <!-- Incluindo o CSS do Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
         <link href="css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  </button>
                  <a class="navbar-brand" href="lista.php">Loja Virtual</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li<?php if(isset($lista)) echo " class=\"active\""; ?>><a href="lista.php">Listar Produtos<span class="sr-only">(current)</span></a></li>
                    <li<?php if(isset($cadastrar)) echo " class=\"active\""; ?>><a href="cadastrar.php">Cadastrar Produtos</a></li>
                    <li<?php if(isset($vendas)) echo " class=\"active\""; ?>><a href="venda.php">Vendas</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-right" method="post" action="lista.php">
                     <button type="submit" class="btn btn-danger" name="sair">Sair</button>
                    </form>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </header>
<!DOCTYPE html>
<html>
    <head>
        <title>Loja - Virtual</title>
        <!-- Incluindo o CSS do Bootstrap -->
        <meta charset="utf-8
        ">
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
                  <a class="navbar-brand" href="index.php">Loja Virtual</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="index.php">Home <span class="sr-only"></span></a></li>
                    <li class="active"><a href="sobre.php">Sobre</a></li>
                    <li><a href="faleconosco.php">Fale Conosco</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-right" method="post" action="sobre.php">
						<div class="form-group">
                      <input name="inputEmail" type="email" class="form-control" placeholder="E-mail">
                      <input name="inputPass" type="password" class="form-control" placeholder="Senha">
                    </div>
                    <button type="submit" value="Enviar" class="btn btn-danger">Entrar</button>
                    </form>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </header>
         <section>
          <div class="col-md-12">
              <p class="container" style="color: #EEEEEE; font-size: 1.6em">
                Esse é o site protótipo de uma loja virtual, um inicio de aprendizado sobre como manipular banco de dados com a linguagem de programação PHP. 
                O site contém poucas páginas, e conta com páginas introdutórias, de apresentação e fixo no menu de navegação o usuário pode fazer login e gerenciar um pequeno 
                banco de dados sobre produtos da loja. O site foi implementado para ajudar na nota da PS de Games e Soluções para Web, creditando um ponto caso o site seja criado com sucesso.
              </p>
              <p class="container" style="color: #EEEEEE; font-size: 1.6em">
                O site faz uso do Bootstrap para definir o design e aplicar o conceito de fluidez.

              </p>
          </div>
        </section>
        <?php
          if($_POST){
            $email = $_POST['inputEmail'];        
            $senha = $_POST['inputPass'];
            
            //Conexao
            $strCon = mysqli_connect('localhost','root', '') or die ("A conexão não foi executada com sucesso");
            
            mysqli_select_db($strCon, 'loja');
            
            //Cosulta
            $strSql = "Select * From funcionarios where email = '$email' and senha = '$senha'";
            
            $resultado = mysqli_query($strCon, $strSql);
                 
            if($resultado->num_rows > 0) {    
              header('location:/lojavirtual/lista.php'); 
            }
            else{
              echo"<script language='javascript' type='text/javascript'>window.location.href='/lojavirtual/index.php'; alert('Login e/ou senha incorretos');</script>";
            }
          }
        ?>
    </body>
</html>
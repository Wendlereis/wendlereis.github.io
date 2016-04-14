<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Loja - Virtual</title>
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
                  <a class="navbar-brand" href="index.php">Loja Virtual</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
					<li><a href="index.php">Home <span class="sr-only"></span></a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li class="active"><a href="faleconosco.php">Fale Conosco</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-right" method="post" action="faleconosco.php">
                    <div class="form-group">
                      <input name="inputEmail" type="email" class="form-control" placeholder="E-mail">
                      <input name="inputPass" type="password" class="form-control" placeholder="Senha">
                    </div>
                    <button type="submit" value="Enviar" class="btn btn-danger" name="entrar">Entrar</button>
                  </form>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </header>
        <section>
            <form class="form-horizontal" method="post" action="">
            <div class="form-group">
              <label for="inputNome" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="inputNome" id="inputNome" placeholder="Nome">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">E-mail
              </label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="inputEmail" id="inputEmail" placeholder="E-mail">
              </div>
            </div>
            <div class="form-group">
              <label for="inputText" class="col-sm-2 control-label">Mensagem
              </label>
              <div class="col-sm-4">
                <textarea class="form-control" id="inputText" name="inputText" placeholder="Mensagem" style="height: 250px;"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" class="btn btn-danger" name="inserir">Enviar</button>
                 <button type="submit" class="btn btn-danger" name="limpar">Limpar</button>
              </div>
            </div>
          </form>
        </section>
		<?php	
			function selecionaFuncao($name)
			{
				$params = func_get_args();

				foreach ($params as $name) {
					if (isset($_POST[$name])) {
						return $name;
					}
				}
			}
			
			switch (selecionaFuncao('inserir', 'limpar', 'entrar')) {
				case 'inserir':
					inserir();
					break;

				case 'limpar':
					limpar();
					break;

				case 'entrar':
					entrar();
					break;
			}
			
			function inserir(){
					$nome = $_POST['inputNome'];
					$email = $_POST['inputEmail'];
					$mensagem = $_POST['inputText'];
								
					//Conec Database
					$strCon = mysqli_connect('localhost','root', '', 'loja') or die ("A conexão não foi executada com sucesso");

					//Inserir
					$strSql = "Insert Into faleconosco(nome, email, mensagem) values('$nome', '$email', '$mensagem')";
					
					//executar
					$resultado = mysqli_query($strCon,$strSql);
					
			}
			
			function limpar(){
				echo '<script type="text/javascript">
							document.getElementById("inputPreco") = " ";
							document.getElementById("inputEmail") = " ";
							document.getElementById("inputText") = " ";
					  </script>';
			}
			
			function entrar(){
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
			}			
		?>
    </body>
</html>
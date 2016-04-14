<?php

	$page_title = "Loja Virtual - Cadastro de Produtos";
	$cadastrar = true;

?>
<?php require_once("header.php"); ?>

        <section>
         <form class="form-horizontal" method="post" action="cadastrar.php">
            <div class="form-group">
              <label for="inputNome" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="inputNome" id="inputNome" placeholder="Nome do Produto">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPreco" class="col-sm-2 control-label">Preço</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="inputPreco" id="inputPreco" placeholder="Preço">
              </div>
            </div>
            <div class="form-group">
              <label id="inputCate" class="col-sm-2 control-label">Categoria do Produto</label>
              <div class="col-sm-4">
                <select class="form-control" name="inputCate" id="inputCate">
					<option value="0">Selecione...</option>		
					<?php
						$resultado = popularSelect();
						
						while($row = mysqli_fetch_array($resultado)) {
							echo "<option value=\"" . $row['categoria'] . "\">" . $row['categoria'] . "</option>";
						}						
					?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" class="btn btn-danger" name="inserir">Inserir Produto</button>
                 <button type="submit" class="btn btn-danger" name="limpar">Limpar</button>
                 <button type="submit" class="btn btn-danger" name="cancelar">Cancelar</button>
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
			
			switch (selecionaFuncao('inserir', 'limpar', 'cancelar', 'sair')) {
				case 'inserir':
					inserir();
					break;

				case 'limpar':
					limpar();
					break;

				case 'cancelar':
					header('location:/lojavirtual/lista.php');
					break;
					
				case 'sair':
					header('location:/lojavirtual/index.php');
					break;
			}
			
			function inserir(){
					$nome = $_POST['inputNome'];
					$categoria = $_POST['inputCate'];
					$preco = $_POST['inputPreco'];
								
					//Conec Database
					$strCon = mysqli_connect('localhost','root', '', 'loja') or die ("A conexão não foi executada com sucesso");

					//Inserir
					$strSql = "Insert Into produtos(nome_produto, categoria, preco) values('$nome', '$categoria', $preco)";
					
					//executar
					$resultado = mysqli_query($strCon,$strSql);
					
			}
			
			function limpar(){
				echo '<script type="text/javascript">
							document.getElementById("inputPreco") = " ";
							document.getElementById("inputNome") = " ";
							document.getElementById("inputCate") = "Selecione...";
					  </script>';
			}
			
			function popularSelect(){
				//Conec Database
				$strCon = mysqli_connect('localhost','root', '', 'loja') or die ("A conexão não foi executada com sucesso");
				
				//Busca para o Select
				$strSql_busca = "Select Distinct categoria From produtos";
				
				$resultadoBuscaSelect = mysqli_query($strCon,$strSql_busca); 			
				
				return $resultadoBuscaSelect;
			}			
		?>
    </body>
</html>
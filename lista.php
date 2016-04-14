<?php

	$page_title = "Loja Virtual - Lista de Produtos";
	$lista = true;

?>
<?php require_once("header.php"); ?>
        <section>
         <form class="form-horizontal" method="post" action="lista.php">
            <div class="form-group">
              <label for="inputBuscar" class="col-sm-2 control-label">Buscar Produto</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="inputBuscar" placeholder="Nome do Produto">
              </div>
               <button type="submit" value="Buscar" class="btn btn-danger" name="buscar">Buscar</button>
            </div>
          </form>
        </section>
		
		<?php
			function selecionaAcao($nomebotao){
				$parametros = func_get_args();
				
				foreach($parametros as $nomebotao){
					if(isset($_POST[$nomebotao])){
						return $nomebotao;
					}
				}
			}
			
			switch(selecionaAcao('buscar', 'sair')){
				case 'sair' :
					sair();
					break;
				case 'buscar' :
					listar();
					break;
			}
			
			function sair(){
				header('location:/lojavirtual/index.php');
			}
			
			function listar(){
				$produto = $_POST['inputBuscar'];
					
				//Conec Database
				$strCon = mysqli_connect('localhost','root', '', 'loja') or die ("A conexão não foi executada com sucesso");
			
				//Inserir
				$strSql = "Select nome_produto, categoria, preco From produtos Where nome_produto like '%$produto%' Order by nome_produto";
				
				//executar
				$resultado = mysqli_query($strCon,$strSql);
							
				//exibir
				
				echo '<div style="padding:15px;"><table class="table table-striped table-bordered table-hover" style="background-color:#FFF;">
				<tr><th>Produto</th><th>Categoria</th><th>Preço</th></tr>';
				while(list($nome_produto, $categoria, $preco) = mysqli_fetch_row($resultado)) {
					
					echo '
							 <tr>
								<td>'.$nome_produto.'</td>
								<td>'.$categoria.'</td>
								<td>'.$preco.'</td>
							 </tr>';
				}
				echo '</table></div>';
			}
		?>
    </body>
</html>
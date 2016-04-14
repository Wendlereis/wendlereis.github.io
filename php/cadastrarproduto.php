<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" media="all" href="estilo.css">
        <title></title>
    </head>

    <body>
		<div id="header">
			<a href="#"><img src="img/logotipo.png"></a>
			<div class="text">Loja Informatica</div>
		</div>
		
		<div id="menu">
			<p> Administração da Loja</p>
			<ul>
				<li><a href="listar produto.php">Listar Produto</a></li>
				<li><a href="relatorioVendas.php">Relatorio Vendas</a></li>
				<li><strong><a href="novoProduto.php">Novo Produto</a></strong></li>
			</ul>
		</div>
		
		<div id="conteudo">
			<p><strong>Cadastrar Produtos</strong></p>
			
			<form name="form1" method="post" action="cadastrarproduto.php">
				Nome: <input name="nomeProduto" type="text"><br>
				Categoria: <select name="categoriaProduto">
								<option value="Processador">Processador</option>
								<option value="Placa Mãe">Placa Mãe</option>
						   </select><br>
				Preço: <input name="precoProduto" type="text"><br>
				
				<input name="btnSalvar" type="submit">
			</form>
			
			<?php
				$nome = $_POST['nomeProduto'];
				$categoria = $_POST['categoriaProduto'];
				$preco = $_POST['precoProduto'];
			
				//Conec Database
				$strCon = mysqli_connect('localhost','root', '', 'loja') or die ("A conexão não foi executada com sucesso");
			
				//Inserir
				$strSql = "Insert Into produtos(nome_produto, categoria, preco) values('$nome', '$categoria', $preco)";
				
				//executar
				$resultado = mysqli_query($strCon,$strSql);
							
				//exibir
				//while(list($cod_produto, $nome_produto, $categoria, $preco) = mysqli_fetch_row($resultado)) {
			    //echo "$cod_produto | $nome_produto | $categoria | $preco <br> | <input name="btnSalvar" type="submit"> | ";
				//}
				
				//echo 'Pagina <a href="listar produto.php?pagina=0">1</a> - <a href="listar produto.php?pagina=1">2</a> - <a href="listar produto.php?pagina=2">3</a> ';
			?>
		</div>	
    </body>
</html>

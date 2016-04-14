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
		header('location:/lojavirtual/inicio.html');
	}
	
	function listar(){
		$produto = $_POST['inputBuscar'];
			
		//Conec Database
		$strCon = mysqli_connect('localhost','root', '', 'loja') or die ("A conexão não foi executada com sucesso");
	
		//Inserir
		$strSql = "Select nome_produto, categoria, preco From produtos Where nome_produto like '%$produto%'";
		
		//executar
		$resultado = mysqli_query($strCon,$strSql);
					
		//exibir
		while(list($nome_produto, $categoria, $preco) = mysqli_fetch_row($resultado)) {
			echo '<table <table style="width:350px; border: 1px solid;">
					 <tr>
						<td>'.$nome_produto.'</td>
						<td></td>
						<td>'.$categoria.'</td>
						<td></td>
						<td>'.$preco.'</td>
					 </tr>
				  </table>';
		}
	}
?>
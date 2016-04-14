<!DOCTYPE html>
<html>
	<?php
		$page_title = "Loja Virtual - Relatório de Vendas";
		$vendas = true;
	?>
	<?php require_once("header.php"); ?>
	<?php 
		$strCon = mysqli_connect('localhost','root', '', 'loja') or die ("A conexão não foi executada com sucesso");
		
		//Inserir
		$strSql = "select 
					v.cod_venda,
					p.nome_produto,
					c.nome_cliente, 
					f.nome,
					v.quantidade
				  From 
					  vendas v
				  inner join 
					  clientes c on c.cod_cliente = v.cod_cliente
				  inner join 
					  funcionarios f on f.idFuncionario = v.cod_funcionario
				  inner join 
					  produtos p on p.cod_produto = v.cod_produto";
					  
		$resultado = mysqli_query($strCon,$strSql);
		
		echo '<div style="padding:15px;"><table class="table table-striped table-bordered table-hover" style="background-color:#FFF;">
			<tr><th>Codigo da Venda</th><th>Produto</th><th>Cliente</th><th>Funcionário</th><th>Quantidade</th></tr>';
			while(list($Codigo_da_Venda, $Produto, $Cliente, $Funcionario, $Quantidade) = mysqli_fetch_row($resultado)) {
				echo '<tr>
						<td>'.$Codigo_da_Venda.'</td>
						<td>'.$Produto.'</td>
						<td>'.$Cliente.'</td>
						<td>'.$Funcionario.'</td>
						<td>'.$Quantidade.'</td>
					  </tr>';
			}
			echo '</table></div>';			
	?>
</html>
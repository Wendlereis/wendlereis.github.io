<?php
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
		echo"<script language='javascript' type='text/javascript'>window.location.href='/lojavirtual/inicio.html'; alert('Login e/ou senha incorretos');</script>";
	}
?>
<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro ingredientes</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	</head>
	</body>
		<form method="POST" action="form.php">
			<div class="form-control"><input type="text" name="nome" placeholder="Digite o nome do ingrediente: "></div>
			<div class="form-control"><input type="number" name="calorias" placeholder="Digite as calorias:"></div>
			<div class="btn btn-primary"><input type="submit" value="Cadastrar"></div>
		</form>
	</body>
</html>
<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title> Cadastro ingredientes</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="style/stylecding.css">

</head>

<body>

	<div class="container mt-3"><form action="index.php" method="POST">
			
		<div class="logo">
			<img src="../frontend/img/logo.png" class="flot-start" alt="IFRS">
		</div>
		<h2>Cadastro de Ingredientes</h2>
			<div class="mb-3 mt-3">
				<label for="ing">Ingrediente:</label>
				<input type="text" class="form-control" name="nome" placeholder="Digite o nome do ingrediente: " required>
				<div class="valid-feedback">Válido.</div>
				<div class="invalid-feedback">Inválido.</div>
			</div>
			<div class="mb-3">
				<label for="cal">Calorias:</label>
				<input type="number" class="form-control" name="calorias" placeholder="Digite as calorias:" required>
				<div class="valid-feedback">Válido.</div>
				<div class="invalid-feedback">Inválido.</div>
			</div>
			<button type="submit" class="btn btn-success">Cadastrar</button>
		
				
		</form>
	</div>
</body>

</html>
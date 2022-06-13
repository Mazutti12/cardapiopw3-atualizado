<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title> Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style/stylecding.css">
</head>

<body>
	<span id="msgalert"></span>
	<form method="POST" id="form-ingre" action="processa_cad_refeicao.php">
		<div class="container mt-3">
			<form action="index.php" method="POST">

				<div class="logo">
					<img src="../frontend/img/logo.png" class="flot-start" alt="IFRS">
				</div>
				<h2>Cadastro da Refeição</h2>
				<div class="mb-3 mt-3">
					<input id="nome" type="text" class="form-control" name="nome" placeholder="Digite o nome da refeição ">
				</div>
				<div class="mb-3 mt-3">
					<input id="data" type="date" class="form-control" name="data_refeicao" placeholder="Digite a data ">
				</div>
				<div class="mb-3 mt-3">
					<select id="tipo" class="form-control" name="tipo_refeicao">
						<option value="0"disabled selected>Selecione sua opção</option>
						<option value="1">Café da manhã</option>
						<option value="2">Almoço</option>
						<option value="3">Janta</option>
					</select>

					<?php
					$result_ingredientes = "SELECT * FROM ingredientes";
					$resultado_ingredientes = mysqli_query($conn, $result_ingredientes);
					$data = "";
					while ($row_ingredientes = mysqli_fetch_assoc($resultado_ingredientes)) {
						$data .= "{id: '{$row_ingredientes['id']}', nome: '{$row_ingredientes['nome']}'},";
					?>
					<?php
					}
					?>
					</select>
				</div>

				<button type="button" class="btn btn-primary" onClick="add()">+</button>
				<ul id="ingredientes"></ul>

				<button type="submit" class="btn btn-success">Cadastrar</button>

			</form>
		</div>

</body>

</html>
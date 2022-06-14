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
	
		<div class="container mt-3">
		<form method="POST" id="form-ingre" action="processa_cad_refeicao.php">

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
				<div class="mb-3 mt-3">
					<select class="form-control" id="select" name="select_ingredientes">
					<option value="-1">Selecione</option>
					<?php
						$result_ingredientes = "SELECT * FROM ingredientes";
						$resultado_ingredientes = mysqli_query($conn, $result_ingredientes);
						$data = "";
						while($row_ingredientes = mysqli_fetch_assoc($resultado_ingredientes)){ 
								$data .= "{id: '{$row_ingredientes['id']}', nome: '{$row_ingredientes['nome']}'},";
							?>
							 <?php
						}
					?>
				</select></div>
				<button class="btn btn-primary" type="button" onClick="add()">+</button>
					</select>
				</div>

				<button type="button" class="btn btn-success" onClick="add()">+</button>
				<ul id="ingredientes"></ul>
			
			<input type="button" class="btn btn-primary" onClick="salvar()" value="Cadastrar">
	</form>
		</div>
		<script>
			const baseUrl= `//localhost/cardapiopw3-atualizado/backend/`
			const data = [<?php echo $data;  ?>]

			onload = async () => {
				//const response = await  fetch(``)
				//const data = await response.json()
				
			
				data.forEach(d => {
					const option = document.createElement('OPTION')
					option.setAttribute('value', d.id)
					option.innerHTML = d.nome
					console.log(option)
					document.getElementById('select').appendChild(option)
				})

			}
			const ingredientes = []
			const add = () => {
				const v = document.getElementById('select').value
				const ul = document.getElementById('ingredientes')
				const li = document.createElement('LI')
				ingredientes.push(v)
				li.innerHTML = data.find(d => d.id === v).nome
				ul.appendChild(li)
			}

			const salvar = async() => {
				const nome = document.getElementById('nome').value
				const data = document.getElementById('data').value
				const tipo = document.getElementById('tipo').value

				const body = new FormData()
				body.append('nome', nome)
				body.append('data', data)
				body.append('tipo', tipo)
				body.append('ingredientes', ingredientes)

				const response = await fetch(`${baseUrl}salvar.php`, {
					method: "POST",
					body
				})


			}
			</script>
</body>

</html>
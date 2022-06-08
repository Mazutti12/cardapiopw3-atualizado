<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	</body>
	<span id="msgalert"></span>
		<form method="POST" id="form-ingre"action="processa_cad_refeicao.php">
			<div class="form-group">
			<input id="nome" type="text" class="form-control" name="nome" placeholder="Digite o nome da refeição ">
			</div>
			<div class="form-group">
			<input id="data" type="date" class="form-control" name="data_refeicao" placeholder="Digite a data ">
			</div>
			<div class="form-group">
			<select id="tipo" class="form-control" name="tipo_refeicao">
				<option value="1">Café da manhã</option>
				<option value="2">Almoço</option>
				<option value="3">Janta</option>
			</select>
				<select id="select" class="form-control"name="select_ingredientes">
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
				
				<button type="button" class="btn btn-primary" onClick="add()">+</button>
				<ul id="ingredientes"></ul>
			
			<input type="button" class="btn btn-primary" onClick="salvar()" value="Cadastrar">
		</form>
		<script>
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

				const formref = document.getElementById("form-ingre");
				if(formref){
					formref.addEventListener("submit",async(event)=>{
						event.preventdefault();
						const dadosForm = new FormData(formref);
						const dados = await fetch("processa_cad_refeicao.php"{
							method: "POST",
							body:dadosForm 
						});
						const resposta = await dados.json();
						if(resposta['status']){
							document.getElementById('msgalert').innerHTML = resposta['msg'];
							formref.reset();
						}else if{
							document.getElementById('msgalert').innerHTML = resposta['msg'];
						}
					});
				}
			}
			
			</script>
	</body>
</html>
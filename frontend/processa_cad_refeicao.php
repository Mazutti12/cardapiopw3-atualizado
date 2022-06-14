<?php
	include_once("conexao.php");

	$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

	if(empty($dados['nome'])){
		$retorna = ['status' => false ,'msg'=>"<p style='color:red;'>Preencha o campo tipo nome</p>"];
	}else if(empty($dados['data_refeicao'])){
		$retorna = ['status' => false ,'msg'=>"<p style='color:red;'>Preencha o campo data da refeição</p>"];
	}else if(empty($dados['tipo_refeicao'])){
		$retorna = ['status' => false ,'msg'=>"<p style='color:red;'>Preencha o campo tipo da refeição</p>"];
	}else{
		$query_ref = "INSERT INTO refeicao (nome,data_refeicao,tipo_refeicao,id_ingredientes) VALUES (:nome,:data_refeicao,:tipo_refeicao,:select_ingredientes)";
		$cad_ref =$conn->prepare($query_ref);
		$cad_ref->bindParam(':nome', $dados['nome']);
		$cad_ref->bindParam(':data_refeicao',$dados['data_refeicao']);
		$cad_ref->bindParam(':tipo_refeicao',$dados['tipo_refeicao']);
		$cad_ref->bindParam(':id_ingredientes',$dados['select_ingredientes']);
		$cad_ref->execute();

		// if($cad_ref->rowCount(){
		// 	// $retorna = ['status' => true ,'msg'=>"<p style='color:green;'>Usuário cadastrado com sucesso</p>"];

		// // }else if{
		// // 	// $retorna = ['status' => false ,'msg'=>"<p style='color:red;'>Usuário não cadastrado com sucesso</p>"];
		// // }
		// }
	
	}
		echo json_encode($retorna);

?>
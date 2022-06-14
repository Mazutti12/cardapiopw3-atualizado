<?php
require "lib/classCardapio.php";

try {
    $refeicao = new Refeicoes();
    $refeicao->setNome($_POST['nome']);
    $refeicao->setCalorias($_POST['data_refeicao']);
    $refeicao->inserir();
    
}catch(Exception $e){
    print json_encode([
        "error" => true,
        "message" => $e->getMessage()
    ]);
}

?>
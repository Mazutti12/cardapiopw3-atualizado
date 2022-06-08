<?php

include_once("conexao.php");
$nome = $_POST['nome'];
$calorias = $_POST['calorias'];


$result_ingredientes = "INSERT INTO ingredientes(nome,calorias) VALUES ('$nome','$calorias')";
$resultado_ingredientes = mysqli_query($conn, $result_ingredientes);

if(mysqli_affected_rows($conn) != 0){
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/cardapioatt/frontend/login/login-vitinho/cadastroingre.php'>
                <script type=\"text/javascript\">
                    alert(\"Ingredientes cadastrados com Sucesso.\");
                </script>
            ";	
        }else{
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/cardapioatt/frontend/login/login-vitinho/cadastroingre.php'>
                <script type=\"text/javascript\">
                    alert(\"Os ingredientes não foram cadastrados com Sucesso.\");
                </script>
            ";	
        }


?>
<?php

class Cardapio 
{
    private $id;
    private $data;
    private $tipo;
   
}


class Refeicao 
{
    private $idRefeicao;
    private $descricao;
    // nao sei como armazena isso(dado abaixo) no banco de dados
    private $ingrdientesRefeicao = [];
    // chave = ingrediente 
    //key = caloria 
    function __construct($nome,$ingredeintes)
    {      
        $this->descricao = $nome;
        $this->ingrdientesRefeicao = $ingredeintes;         
    }

    function getIngrediente()
    {
        return $this->ingrdientesRefeicao;
    }


    //puxar uma refeição em especifico 
    
   
    function somaCaloria()
    {
        $a = $this->ingrdientesRefeicao;
        $soma = 0;
            foreach($a as $key=>$value)
            {
                $soma +=$value/*['calorias']*/;
            }

        return $soma;
    }
    
   
}



class Ingredientes 
{
    private $id;
    private $nome;
    private $calorias;  

    function setNome($n){$this->nome = $n;}
    function setCalorias($c){$this->calorias = $c;}
    function getNome(){return $this->name;}
    function getCalorias(){return $this->calorias;}
    function setId($i){$this->id = $i;}
    function getId(){return $this->id;}

    //fazer alguma verificação pra nao ter dois igredientes iguais
    function inserir()
    {
        try 
        {
            $db = new PDO("mysql:host=localhost;dbname=cardapio", "root", "");
            $consulta = $db->prepare("INSERT INTO ingredientes(nome,calorias) VALUES(:nome,:calorias)");
            $consulta-> execute([':nome' =>$this->nome, ':calorias' => $this->calorias]);

            $consulta = $db->prepare("SELECT id_ingredientes FROM ingredientes ORDER BY id_ingredientes DESC");
            $consulta->execute(); 
            $data = $consulta->fetch(PDO::FETCH_ASSOC);
            $this->id = $data['id_ingredientes'];
        } 
        catch(PDOException $e)
        {
            throw new Exception("Ocorreu um erro interno!");
        }
    }

    function alterar()
    {
        try
        {
            $db = new PDO("mysql:host=localhost;dbname=cardapio", "root", "");
            $consulta = $db->prepare("UPDATE ingredientes SET nome = :nome, calorias = :calorias WHERE id_ingredientes = :id");
            $consulta->execute([
            ':id' => $this->id,
            ':nome' => $this->nome, 
            ':calorias' => $this->calorias
            ]);  
        }
        catch(PDOException $e)
        {
            die($e);
        }
    }

    function excluir()
    {
        try
        {
            $db = new PDO("mysql:host=localhost;dbname=cardapio;","root","");
            $consulta = $db->prepare("DELETE FROM ingredientes WHERE id_ingredientes = :id");
            $consulta->execute([':id'=> $this->id]);
        }
        catch(PDOException $e)
        {
            die($e);
        }
    }

    /*
        to tendo problema para atualizar 
        
    static function findByPk($id){
        $db = new PDO("mysql:host=localhost;dbname=cardapio", "root", "");
        $consulta = $db->prepare("SELECT  nome,calorias, id_ingredientes FROM ingredientes WHERE id_ingredientes = :id");
        $consulta->execute([':id' => $id]);
        $consulta->setFetchMode(PDO::FETCH_CLASS, 'Ingredientes');
        return $consulta->fetch();
        
    }
*/
    
   
    
    
}
    
    
    



?>
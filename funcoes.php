<?php

//FUNÇÃO PARA REALIZAR LOGIN
function Logar($email, $senha){
    
    //CONEXÃO AO BANCO
    require_once('conexao.php');

    // BUSCA NO BANCO
    $stmt = $conn->prepare('SELECT * FROM usuario u inner join senha s on s.email = u.email WHERE u.email = :email and s.senha = :senha');
    $stmt->execute(array('email' => $email, 'senha' => $senha));

    $result = $stmt->fetchAll();

    //TESTE DA BUSCA REALIZADA 
    if ( count($result) ) {
        foreach($result as $row) {
            echo "Logado com sucesso!";
        }
    } else {
        echo "Nennhum resultado retornado.";
    }
}

?>
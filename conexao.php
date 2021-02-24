<?php
$username = '(USUARIO BANCO DE DADOS)';
$password = '(SENHA USUARIO DO BANCO DE DADOS)';

//TESTE DE ERRO DE CONEXÃO
try {

  //CONFIGURAÇÃO ACESSO AO BANCO PDO
  $conn = new PDO('mysql:host=localhost;dbname=pjlg', $username, $password);

} catch(PDOException $e) {
    //RESPOSTA SE ERRO
    echo 'ERROR: ' . $e->getMessage();
}

?>
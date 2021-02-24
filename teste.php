<?php 

//FUNÇÕES 
require_once('funcoes.php');

//INPUT DO USUÁRIO
$email = $_POST["txt_email"] ;
$senha = $_POST["txt_senha"];

//EXECUTANDI A FUÇÃO LOGAR
Logar($email,$senha);

?>
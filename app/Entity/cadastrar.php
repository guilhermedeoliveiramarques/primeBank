<?php

include('../db/database.php');

// Receber Dados do Formulário e Armazenar
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

// Inserindo os dads na tabela
$sql= "INSERT INTO tab_usuario (nome , sobrenome, email, senha, telefone) values('$nome','$sobrenome','$email','$senha','$telefone') " ;


if($ligar->query($sql)==true){
   
    echo "<script>alert('Usuário cadastrado com sucesso');</script>";
    header("Location: http://localhost/Sistema%20Banc%c3%a1rio/index.php");
    
}else{

  echo "<script>alert('Informações incorretas, insira novos dados!);</script>";
  header("Location: http://localhost/Sistema%20Banc%c3%a1rio/public/cadastro.php");
    
}
?>

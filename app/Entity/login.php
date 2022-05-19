<?php
session_start();
 
  // Verificar se os dados não estão vazios, se estiverem , irá redirecionar para o index.php
    if(!isset($_SESSION['login'])){

       if(isset($_POST['acao']) ){
        $login = 'admin';
        $senha = 'root';

        $loginForm = $_POST['login'];
        $senhaForm = $_POST['senha'];

        if($login == $loginForm && $senha == $senhaForm){
            //Logado com sucesso!
            $_SESSION['login'] = true;
            header("Location: ./public/home.php");
        }else{
            //Algum erro ocorreu.
            echo "<script>alert('Informações incorretas, insira novos dados!);</script>";
          
        
       }
   }
       include('../index.php');
    }else{
        include('./public/home.php');
    }

    ?>
    
    


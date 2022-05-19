<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Prime B - Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->  
 <link rel="icon" type="image/png" href="./images/icons/favicon.ico"/>
    <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./css/servico.css">


</head>
<body>

  <div class="limiter">
  <div class="container-login100">
  <div class="wrap-login100">
  <div class="login100-pic js-tilt" data-tilt>
    <img src="./images/home/logoprime.png" alt="IMG">
  </div>

    <form class="login100-form validate-form" action="./saldo.php" method="#">

      <label for="email">Agência:</label>
      <input class="input100" type="text" name="login" placeholder="Informe sua Agência">
        <span class="focus-input100"></span> 
    
    <span class="symbol-input100">
        <i class="fa fa-envelope" aria-hidden="true"></i>
      </span>

    <label for="senha">Conta:</label>
    <input class="input100" type="text" name="senha" placeholder="Informe sua conta">
    <span class="focus-input100"></span>
    <br>
    <span class="symbol-input100">
      <i class="fa fa-lock" aria-hidden="true"></i>
    </span><br>

       <input type="submit" name="acao" class="login100-form-btn" value="ACESSAR SERVIÇOS">

         <div class="container-img">
      <img src="../public/images/home/banco.png"/>
    </div>
    
  </form>
</body>
</html>
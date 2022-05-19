<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Prime B - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./public/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/logiin.css">


</head>
<body>
	<div class="limiter">
	<div class="container-login100">
	<div class="wrap-login100">
	<div class="login100-pic js-tilt" data-tilt>
		<img src="./public/images/home/logoprime.png" alt="IMG">
	</div>

    <form class="login100-form validate-form" action="./public/home.php" method="#">

	    <label for="email">Login:</label>
	    <input class="input100" type="text" name="login" placeholder="Usuário">
        <span class="focus-input100"></span> 
		
		<span class="symbol-input100">
	      <i class="fa fa-envelope" aria-hidden="true"></i>
	    </span>

		<label for="senha">Senha:</label>
		<input class="input100" type="password" name="senha" placeholder="Password">
		<span class="focus-input100"></span>

		<span class="symbol-input100">
		  <i class="fa fa-lock" aria-hidden="true"></i>
		</span><br>

       <input type="submit" name="acao" class="login100-form-btn" value="Entrar">
		
    <center>     
		<p>Não possui login? <a href="./public/cadastro.php">Cadastre-se</a></p>
    </center>	
		
	</form>
	
</body>
</html>
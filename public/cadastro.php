<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
   	<link rel="icon" type="image/png" href="./images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./css/cadastro.css">

    <title>Formulário</title>
</head>

<body>
    <div class="container">
    <div class="form-image">
    <img src="./images/home/logoprime.png" alt="">
    </div>
    <div class="form">
      <form action="../index.php" method="#">
    <div class="form-header">
    <div class="title">
      <h1>Cadastre-se</h1>
    </div>
    <div class="login-button">
    <button><a href="../index.php">Entrar</a></button>
    </div>
    </div>
    <div class="input-group">
        <div class="input-box">
            <label for="firstname">Primeiro Nome</label>
            <input id="firstname" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
         </div>
         <div class="input-box">
             <label for="lastname">Sobrenome</label>
             <input id="lastname" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
         </div>
         <div class="input-box">
             <label for="email">E-mail</label>
             <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
         </div>
         <div class="input-box">
             <label for="password">Senha</label>
             <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
         </div>
                      
         <div class="input-box">
             <label for="number">Celular</label>
             <input id="number" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" required>
         </div>
         </div>
         <div class="continue-button">
              <button>Cadastrar-se</button>
         </div>
               
            </form>
        </div>
    </div>
</body>

</html>
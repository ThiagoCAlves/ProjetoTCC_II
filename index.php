<?php 
require_once("conexao.php");
$query = $pdo->query("SELECT * from usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
$senha = '123';
$senha_crip = md5($senha);
//Criando o acesso de administrador
if($linhas == 0){
	$pdo->query("INSERT INTO usuarios SET nome = '$nome_sistema', email = '$email_sistema', senha = '$senha', senha_crip = '$senha_crip', nivel = 'Administrador', ativo = 'Sim', foto = 'sem-foto.jpg', telefone = '$telefone_sistema', data = curDate()");
}

 ?>
  <!DOCTYPE html>
<html>
<head>
	
	<title><?php echo $nome_sistema ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="img/icone.png">
	<link href="css/font-awesome.css"" rel="stylesheet"> 
</head>

<body>
	<header>
		<div class="imagem">
        	<img src = "img/icon.png"  width= "100" height="100"></img>
    	</div>
	</header>
	
	<div class="container">		
		<div class="login-container">
			<img src="img/logo.png" class="imagem">
			<br><br>
			<hr noshade>
			<br><br>
			<form method="post" action="autenticar.php">
				<div class="form-campo">
				
				<input type="email" name="usuario" placeholder="Seu Email" required>
				</div>
				<div class="form-campo">
				<input type="password" name="senha" placeholder="Senha" required>
				
				</div>
				<button class="btn">Login</button>
			</form>	
			
		</div>
	</div>
	<footer>
        <p>© 2023 BSH - BrandSphere Hub. Todos os direitos reservados.</p>
    </footer>
</body>
</html>


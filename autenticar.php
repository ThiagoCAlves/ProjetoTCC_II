<?php 
@session_start();
//conexao
require_once("conexao.php");
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);
//busca no banco de dados, usuario (email) e senha criptografada
$query = $pdo->prepare("SELECT * from usuarios where email = :email and senha_crip = :senha");
$query->bindValue(":email", "$usuario");
$query->bindValue(":senha", "$senha_crip");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);



if($linhas > 0){
//mensagems em javascript
	if($res[0]['ativo'] != 'Sim'){
		echo '<script>window.alert("Seu acesso foi desativado!!")</script>'; 
		echo '<script>window.location="index.php"</script>';  
	}

	$_SESSION['nome'] = $res[0]['nome'];
	$_SESSION['id'] = $res[0]['id'];
	$_SESSION['nivel'] = $res[0]['nivel'];
	if ($res[0]['nivel'] != 'Administrador') {
		echo '<script>window.location="painel/index2.php"</script>';
	}else{
		echo '<script>window.location="painel"</script>';
	}
}else{
	echo '<script>window.alert("Dados Incorretos!!")</script>'; 
	echo '<script>window.location="index.php"</script>';  
}


 ?>
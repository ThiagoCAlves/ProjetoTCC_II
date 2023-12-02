<?php
	$tabela = 'usuarios';
	require_once("../../../conexao.php");

	//recebe os dados do form
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$senha = '123';
	$senha_crip = md5($senha);
	$id = $_POST['id'];

	//validação se não há duplicações
	$query = $pdo->query("SELECT * from $tabela where email = '$email'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$id_reg = @$res[0]['id'];
	if(@count($res) > 0 and $id != $id_reg){
		echo 'Email já cadastrado!';
		exit();
	}

	//validação do telefone
	$query = $pdo->query("SELECT * from $tabela where email = '$email'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$id_reg = @$res[0]['id'];
	if(@count($res) > 0 and $id != $id_reg){
		echo 'Email já cadastrado!';
		exit();
	}


//insere os dados no banco de dados
	if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, email = :email, senha = '$senha', senha_crip = '$senha_crip', nivel = 'Cliente', ativo = 'Sim', foto = 'sem-foto.jpg', telefone = :telefone, data = curDate(), endereco = :endereco");
	} else {
		$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco where id = '$id'");
	}
	$query->bindValue(":nome", "$nome");
	$query->bindValue(":email", "$email");
	$query->bindValue(":telefone", "$telefone");
	$query->bindValue(":endereco", "$endereco");
	$query->execute();

	echo 'Salvo com Sucesso';
	?>
	
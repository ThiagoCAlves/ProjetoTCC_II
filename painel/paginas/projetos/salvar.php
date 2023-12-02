<?php
	$tabela = 'projetos';
	require_once("../../../conexao.php");

	//recebe os dados do form
	$id_projeto = $_POST['id_projeto'];
	$id_usuario = $_POST['id_usuario'];
	$nomeprojeto = $_POST['nomeprojeto'];
	

	//validação se não há duplicações
	$query = $pdo->query("SELECT * from $tabela where id_usuario = '$id_usuario'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$id_reg = @$res[0]['id'];
	if(@count($res) > 0 and $id != $id_reg){
		echo 'Usuário já cadastrado!';
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
	$query = $pdo->prepare("INSERT INTO $tabela SET id_projeto = :id_projeto, id_usuario = '$id', nomeprojeto = nomeprojeto");
	} else {
		$query = $pdo->prepare("UPDATE $tabela SET id_projeto = :id_projeto, id_usuario = '$id', nomeprojeto = nomeprojeto where id_projeto = '$id_projeto'");
	}
	$query->bindValue(":nomeprojeto", "$nomeprojeto");
	$query->bindValue(":email", "$email");
	$query->bindValue(":telefone", "$telefone");
	$query->bindValue(":endereco", "$endereco");
	$query->execute();

	echo 'Salvo com Sucesso';
	?>
	
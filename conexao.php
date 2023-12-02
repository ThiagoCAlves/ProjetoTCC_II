<?php

//Definir horario

date_default_timezone_set('America/Sao_Paulo');

//Conexão com o banco de dados
	$servidor = 'localhost';
	$banco = 'tcc';
	$usuario = 'root';
	$senha = '';

	try {
		$pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
	} catch (Exception $e) {
		echo 'Erro ao conectar ao banco de dados!<br>'.$e;
		
	}

	//variaveis globais
	$nome_sistema ='BBS';
	$email_sistema ='thiago@hotmail.com';
	$telefone_sistema ='(61) 9 9999-9999';
	

	$query = $pdo->query("SELECT * from config");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$linhas = @count($res);
if ($linhas == 0) {
	$pdo->query("INSERT INTO config SET nome = '$nome_sistema', email = '$email_sistema', telefone = '$telefone_sistema', logo = 'logo.png', logo_rel = 'logo.jpg', icone = 'icone.png' ");
}else{
	$nome_sistema = $res[0]['nome'];
	$email_sistema = $res[0]['email'];
	$telefone_sistema = $res[0]['telefone'];
	$endereco_sistema = $res[0]['endereco'];
	$instagram_sistema = $res[0]['instagram'];
	$logo_sistema = $res[0]['logo'];
	$logo_rel = $res[0]['logo_rel'];
	$icone_sistema = $res[0]['icone'];
}
?>
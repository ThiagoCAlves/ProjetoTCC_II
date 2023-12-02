<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera o ID do projeto e as respostas do formulário
    $id_projeto = $_POST['id_projeto'];
    $respostas = [];

    // Coleta as respostas do formulário
    for ($i = 1; $i <= 10; $i++) {
        $pergunta = "pergunta_$i";
        $respostas[] = $_POST[$pergunta];
    }

    // Insere as respostas na tabela de Briefing
    $conexao = mysqli_connect("localhost", "usuario", "senha", "nome_do_banco");

    foreach ($respostas as $indice => $resposta) {
        $pergunta = "Pergunta " . ($indice + 1);

        // Query para inserir pergunta e resposta na tabela de Briefing
        $query_inserir_briefing = "INSERT INTO Briefing (project_id, pergunta, resposta) VALUES ('$id_projeto', '$pergunta', '$resposta')";

        // Executa a query
        $resultado = mysqli_query($conexao, $query_inserir_briefing);

        if (!$resultado) {
            // Em caso de erro na inserção, exibe uma mensagem
            echo "Erro ao inserir pergunta e resposta: " . mysqli_error($conexao);
            break; // Para o loop em caso de erro
        }
    }

    mysqli_close($conexao);

    // Mensagem de sucesso após inserir todas as perguntas e respostas do briefing
    echo "Respostas armazenadas com sucesso!";
}
?>

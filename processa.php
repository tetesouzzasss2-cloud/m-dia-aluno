<?php
// Verifica se todos os campos foram enviados via POST
if (isset($_POST['usuario'], $_POST['matricula'], $_POST['curso'], $_POST['idade'])) {
    // Pega e limpa os dados
    $usuario   = trim($_POST['usuario']);
    $matricula = trim($_POST['matricula']);
    $curso     = trim($_POST['curso']);
    $idade     = trim($_POST['idade']);

    // Verifica se nenhum campo está vazio
    if ($usuario !== '' && $matricula !== '' && $curso !== '' && $idade !== '') {
        // Monta a linha para salvar no arquivo
        $linha = $usuario . '|' . $matricula . '|' . $curso . '|' . $idade . "\n";

        // Salva a linha no arquivo (em modo append para adicionar no final)
        file_put_contents('usuarios.txt', $linha, FILE_APPEND | LOCK_EX);

        // Redireciona para a lista de usuários
        header("Location: lista.php");
        exit;
    } else {
        echo "Todos os campos devem ser preenchidos.";
    }
} else {
    echo "Dados do formulário não recebidos corretamente.";
}
?>


<?php
// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se todos os campos foram preenchidos
    if (isset($_POST['nome_completo']) && isset($_POST['telefone']) && isset($_FILES['foto_chip'])) {
        // Armazenar dados do formulário
        $nomeCompleto = $_POST['nome_completo'];
        $telefone = $_POST['telefone'];

        // Pasta onde a foto será armazenada
        $uploadDir = 'uploads/';

        // Verificar se o arquivo de imagem foi enviado sem erros
        if ($_FILES['foto_chip']['error'] == 0) {
            // Nome do arquivo de imagem
            $fileName = basename($_FILES['foto_chip']['name']);
            $uploadFile = $uploadDir . $fileName;

            // Mover o arquivo de imagem para o diretório de uploads
            if (move_uploaded_file($_FILES['foto_chip']['tmp_name'], $uploadFile)) {
                // Abrir o arquivo de texto para escrita
                $file = fopen('funcionarios.txt', 'a');

                // Escrever os dados do funcionário no arquivo
                fwrite($file, "$nomeCompleto | $telefone | $uploadFile\n");

                // Fechar o arquivo
                fclose($file);

                // Redirecionar para a página de exibição
                header("Location: view.php");
                exit;
            } else {
                echo "<h2>Erro ao Enviar a Foto do Chip.</h2>";
            }
        } else {
            echo "<h2>Erro ao Enviar a Foto do Chip.</h2>";
        }
    } else {
        echo "<h2>Por favor, preencha todos os campos do formulário.</h2>";
    }
}
?>

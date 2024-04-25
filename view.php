<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados dos Funcionários</title>
</head>
<body>
    <h1>Dados dos Funcionários</h1>
    <?php
    // Abrir o arquivo de texto e exibir os dados dos funcionários
    $file = fopen('funcionarios.txt', 'r');
    if ($file) {
        echo "<ul>";
        while (($line = fgets($file)) !== false) {
            $data = explode('|', $line);
            $nomeCompleto = trim($data[0]);
            $telefone = trim($data[1]);
            $fotoChip = trim($data[2]);
            echo "<li><strong>Nome Completo:</strong> $nomeCompleto - <strong>Telefone Funcional:</strong> $telefone - <img src='$fotoChip' alt='Foto do Chip'></li>";
        }
        echo "</ul>";
        fclose($file);
    } else {
        echo "<p>Nenhum funcionário cadastrado.</p>";
    }
    ?>
</body>
</html>

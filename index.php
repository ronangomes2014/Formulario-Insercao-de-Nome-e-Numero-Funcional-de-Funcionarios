<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
</head>
<body>
    <h1>Cadastro de Número Funcional Empresa-TO</h1>
    <!-- Adicionar o logotipo da Empresa -->
    <img src="\\local.do.arquivo.com.a.logo\brasaonovo.png" alt="Setic-TO">

    <form method="post" action="process.php" enctype="multipart/form-data">
        <label for="nome_completo">Nome Completo:</label><br>
        <input type="text" id="nome_completo" name="nome_completo" required><br><br>

        <label for="telefone">Telefone Funcional do Concursado, Administrativo ou Terceirizado:</label><br>
        <input type="text" id="telefone" name="telefone" required><br><br>

        <label for="foto_chip">Foto do Chip contendo o número ICCID:</label><br>
        <input type="file" id="foto_chip" name="foto_chip" accept="image/*" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

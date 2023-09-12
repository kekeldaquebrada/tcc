<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cad.css">
</head>
<body>


    
  
    <h1>Cadastre-se</h1>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php
        include "conexao.php";
        // Inicializa a sessão

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $Nome = $_POST['nome'];
$Usuario = $_POST['usuario'];
$Senha = $_POST['senha']; // Hash da senha

// Inserir os dados no banco de dados
$sql = "INSERT INTO usuario (Nome, Usuario, Senha) VALUES ('$Nome', '$Usuario', '$Senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
        }


?>
<a href="index.php">Voltar</a>
</body>
</html>
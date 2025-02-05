<?php
// Conexão à base de dados
$conn = new mysqli('localhost', 'root', '', 'sistema_login');
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Aluno</title>
    <link rel="stylesheet" href="css/adicionar.css">
</head>
<body>
    <h1>Adicionar Novo Aluno</h1>
    <form method="post" action="">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" <?php ?> name="email" required><br><br>
        Palavra-passe: <input type="text" name="senha" required>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['senha'];
    
    if (empty($nome) && empty($email) && empty($contacto)) {

        echo "<p style='text-align:center;margin-top:10px;margin-bottom:5px;'>Todos os campos são obrigatórios.";
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $passwordHash);

        if ($stmt->execute()) {
            header('Location: index.php');
            exit();
        } else {
            echo "Erro: " . $stmt->error;
        }
        $stmt->close();
    }
}?><br><br>
        <input type="submit" value="Adicionar">
    </form>

    
    <a href="index.php">Voltar à lista</a>
</body>
</html>

<?php
$conn->close();
?>
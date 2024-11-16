<?php
// Conexão à base de dados
$conn = new mysqli('localhost', 'root', '', 'sistema_login');
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obter dados atuais
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $aluno = $resultado->fetch_assoc();
    $stmt->close();

    if (!$aluno) {
        echo "Aluno não encontrado!";
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['password'];

    // Validar os dados
    if (strlen($senha)<8 && empty($senha)) {
        echo "Todos os campos são obrigatórios.";
    }
    else if (empty($nome) || empty($email)){
        echo "A password tem que tem 8 caracteres";
    } else {
        if (!empty($senha)) {
            $senhaHash = password_hash($senha, PASSWORD_BCRYPT);
            $stmt = $conn->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
            $stmt->bind_param("sssi", $nome, $email, $senhaHash, $id);
        } else {
            $stmt = $conn->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
            $stmt->bind_param("ssi", $nome, $email, $id);
        }
        // Atualizar registo

        if ($stmt->execute()) {
            header('Location: index.php');
            exit();
        } else {
            echo "Erro: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="css/editar.css">
</head>
<body>
    <h1>Editar Aluno</h1>
    <form method="post" action="">
        Nome: <input type="text" name="nome" value="<?php echo $aluno['nome']; ?>"><br><br>
        Email: <input type="email" name="email" value="<?php echo $aluno['email']; ?>"><br><br>
        Password: <input type="text" name="password" value="<?php echo $aluno['senha']; ?>"><br><br>
        <input type="submit" value="Atualizar">
    </form>
    <br>
    <a href="index.php">Voltar à lista</a>
</body>
</html>

<?php
$conn->close();
?>
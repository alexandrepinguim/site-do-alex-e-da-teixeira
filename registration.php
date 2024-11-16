<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Registo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
</head>
<body>
<nav class="nav-bar">
        <a id = "logo" href="index.php">Cheira melhor que sabe</a>
        <div class="nav-bar-links">
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Products</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <?php if(isset($_SESSION["user"])){?><li><a href="utilizadores/index.php">Utilizadores</a><?php } else{}?></li>
            <?php if(isset($_SESSION["user"])){?><li><a class="button-style" href="logout.php">Logout</a><?php } else{?><a class="button-style" href="login.php">Login</a><?php }?></li>
        </ul>

        </div>
    </nav>
    <nav class="nav-bar-responsive">
        <a id = "logo" href="index.php">Cheira melhor que sabe</a>
        <div class="nav-bar-links">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
              </svg>
        </div>
    </nav>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];
           

           //https://www.php.net/manual/en/function.password-hash.php

           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"Todos os campos são obrigatórios");
           }

           //https://www.php.net/manual/en/function.filter-var.php

           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email não é válido");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password deve de ter no mínimo 8 caracteres");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password não coincide");
           }
           require_once "db.php";
           $sql = "SELECT * FROM usuarios WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email já existente!");
           }
           if (count($errors)>0) {
                foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Alguma coisa correu mal!");
            }
           }
          

        }
        ?>
        <h1>Register</h1>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Nome:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="E-mail:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repete a Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Registar" name="submit">
            </div>
        </form>
        <div>
        <div><p>Já estou registado! <a href="login.php">Faz Login aqui!</a></p></div>
      </div>
    </div>
    <footer id="footer">
        <div>
            <h1 class="big-text">Cheira melhor que sabe</h1>
            <p>&copy; 2024 Cheira melhor que sabe - Todos os direitos reservados</p>
            
        </div>
        <div>
            <h2 class="big-text">Horario</h2>
            <p>Segunda: Sexta: 10.00 - 23.00 
                <br>
                Sabado: 10.00 - 19.00</p>
                <div id="social-logos">
                    <a href="https://facebook.com"><i class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a>
                </div>
        </div>
        <div>
            <h2 class="big-text">Contacta nos </h2>
            <p>Tel: (+351) 912 733 666</p>               
            <p>Email: margaridateixeira@gmail.com</p>             
            <p>Endereco: Rua Dom Joao Pereira Venancio, Fatima</p>
                
        </div>
    </footer>
</body>
</html>
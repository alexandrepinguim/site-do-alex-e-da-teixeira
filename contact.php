<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <title>Contacto - Cheira melhor que sabe</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        /* Estilo do formulário */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            background-color: #f9f9f9;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        textarea:focus {
            outline: none;
            border-color: #2a9d8f;
            background-color: #fff;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }

        /* Estilo do botão */
        .btn-enviar {
            padding: 12px;
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-enviar:hover {
            background-color: #d80f0f;
        }
    </style>
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
    <h1>Entre em Contato</h1>
    <p>Preencha o formulário abaixo e entraremos em contato o mais breve possível.</p>
    <form>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="nome" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="e-mail" required>

        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" placeholder="xxx xxx xxx" required>

        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" placeholder="Escreva a sua mensagem aqui..." required></textarea>

        <button type="submit" class="btn-enviar">Enviar Mensagem</button>
    </form>
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

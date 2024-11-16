<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perfume CR7</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .product-container {
            display: flex;
            align-items: flex-start; /* Alinha o topo das seções */
            gap: 20px; /* Espaço entre as seções */
        }
        .image-section, .details-section {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1;
        }
        .image-section img {
            width: 100%;
            border-radius: 8px;
        }
        .details-section {
            display: flex;
            flex-direction: column;
            max-width: 600px; /* Define uma largura máxima para o texto */
        }
        .product-name {
            font-size: 28px;
            font-weight: bold;
            margin: 10px 0;
        }
        .rating {
            color: #f1c40f;
            margin: 10px 0;
        }
        .product-description {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }
        .product-price {
            font-size: 24px;
            color: #e6007e;
            font-weight: bold;
            margin: 20px 0;
        }
        .product-features {
            margin-top: 20px;
        }
        .feature-item {
            font-size: 15px;
            color: #333;
            margin-bottom: 8px;
            list-style: inside;
        }
        .buy-button {
            background-color: #e6007e;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        .buy-button:hover {
            background-color: #d40071;
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
        <div class="product-container">
            <!-- Seção de Imagem -->
            <div class="image-section">
                <img src="imagens/cr71.jpg" style="width: 600px;" alt="Perfume CR7">
            </div>
            <!-- Seção de Detalhes -->
            <div class="details-section">
                <h1 class="product-name">Perfume CR7</h1>
                <p class="rating">★★★★★ 4.8 (120 Avaliações)</p>
                <p class="product-description">
                    Uma fragrância vibrante e fresca que desperta a paixão. CR7 é ideal para homens
                    confiantes e dinâmicos, com notas de menta fresca, limão italiano e maçã verde, combinadas com
                    a sensualidade da baunilha e o toque amadeirado do cedro.
                </p>
                
                <p class="product-price">69€</p>
                
                <ul class="product-features">
                    <li class="feature-item"><strong>Capacidade:</strong> 100 ml</li>
                    <li class="feature-item"><strong>Tipo:</strong> Eau de Toilette</li>
                    <li class="feature-item"><strong>Notas de Topo:</strong> Menta, Limão Italiano</li>
                    <li class="feature-item"><strong>Notas de Coração:</strong> Gerânio, Fava Tonka</li>
                    <li class="feature-item"><strong>Notas de Base:</strong> Baunilha, Cedro</li>
                </ul>
                <a href="https://cr7fragrances.store/products/cristiano-ronaldo-fearless-eau-de-toilette" class="buy-button">Comprar Agora</a>
            </div>
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
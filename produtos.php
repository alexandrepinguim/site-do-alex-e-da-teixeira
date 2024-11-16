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
    <title>Perfumes - Nossa Loja</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Estilos dos produtos */
        .produtos {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .produto {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            width: 400px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .produto:hover {
            transform: translateY(-5px);
        }
        .produto img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .produto h3 {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }
        .produto p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        .preco {
            font-size: 16px;
            color: #000000;
            font-weight: bold;
        }
        .btn-comprar {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #000000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-comprar:hover {
            background-color: #df0a0a;
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
    <h1></br>OS NOSSOS PRODUTOS</br></br></br></h1>
    <div class="produtos">
        <!-- Produto 1 -->
        <div class="produto">
            <img src="imagens/cr71.jpg" alt="Perfume A">
            <h3>CR7</h3>
            <p>Fragrância floral com notas de baunilha.</p>
            <div class="preco">69€</div>
            <a href="cr7.php" class="btn-comprar">Comprar</a>
        </div>

        <!-- Produto 2 -->
        <div class="produto">
            <img src="imagens/cr72.jpg" alt="Perfume B">
            <h3>THE GOAT</h3>
            <p>Aroma amadeirado com toques de especiarias.</p>
            <div class="preco">69€</div>
            <a href="cr7.php" class="btn-comprar">Comprar</a>
        </div>

        <!-- Produto 3 -->
        <div class="produto">
            <img src="imagens/cr73.jpg" alt="Perfume C">
            <h3>CRIS</h3>
            <p>Perfume cítrico e refrescante.</p>
            <div class="preco">69€</div>
            <a href="cr7.php" class="btn-comprar">Comprar</a>
        </div>
        <!-- Produto 4 -->
        <div class="produto">
            <img src="imagens/cr74.jpg" alt="Perfume A">
            <h3>CRISTIANO RONALDO</h3>
            <p>Coco e abacaxi, exótico e perfeito para o verão.</p>
            <div class="preco">69€</div>
            <a href="cr7.php" class="btn-comprar">Comprar</a>
        </div>

        <!-- Produto 5 -->
        <div class="produto">
            <img src="imagens/cr75.jpg" alt="Perfume B">
            <h3>PAPAI CRIS</h3>
            <p>Floral leve com peônia e lírio, fresco e delicado.</p>
            <div class="preco">69€</div>
            <a href="cr7.php" class="btn-comprar">Comprar</a>
        </div>

        <!-- Produto 6 -->
        <div class="produto">
            <img src="imagens/cr76.jpg" alt="Perfume C">
            <h3>THE BEST</h3>
            <p>Ate te vais sentir um homem renovado.</p>
            <div class="preco">69€</div>
            <a href="cr7.php" class="btn-comprar">Comprar</a>
        </div>

        <!-- Produto 7 -->
        <div class="produto">
            <img src="imagens/cr77.jpg" alt="Perfume A">
            <h3>7</h3>
            <p>Frutas vermelhas e jasmim, perfeito para momentos especiais.</p>
            <div class="preco">69€</div>
            <a href="cr7.php" class="btn-comprar">Comprar</a>
        </div>

        <!-- Produto 8 -->
        <div class="produto">
            <img src="imagens/cr78.jpg" alt="Perfume B">
            <h3>RONALDO</h3>
            <p>Frescor de limão e lavanda, ideal para o dia a dia.</p>
            <div class="preco">69€</div>
            <a href="cr7.php" class="btn-comprar">Comprar</a>
        </div>

        <!-- Produto 9 -->
        <div class="produto">
            <img src="imagens/cr79.jpg" alt="Perfume C">
            <h3>THEMAN7</h3>
            <p>Patchouli e baunilha, aroma marcante e inesquecível.</p>
            <div class="preco">69€</div>
            <a href="cr7.php" class="btn-comprar">Comprar</a>
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

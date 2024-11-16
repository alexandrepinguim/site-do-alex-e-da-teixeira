<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A nossa loja</title>
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
    
    <div class="container-1">
        <div class="container-text">
            <h1 class="extra-large-text">Cheira a nossa arte</br></br></br></h1> Apenas produtos biologicos regados com agua premium das serras do caramulo
        </div>
        <div id="image-container-1">
            <img src="imagens/first-image.png" alt="image">
        </div>
    </div>

    <div class="container-2">
        <div class="slogan">
            <h1 class="large-text">Cheira melhor que sabe</h1>
            <p>"Tem um efeito incrivel, usei um dos vossos perfumes no meu primeiro encontro e no dia a seguir fui pedido em casamento" - Manuel Pires</br></br>"Comprei e senti me uma pessoa totalmente renovada, sai de casa e todo os meus vizinhos sairam para cheirar, recomendo!!!" - Rosalinda  Pica-Pau</br></br>"Todas as mina fugiram, cheira a gases de cavalo morto a duas semanas, nao recomendo!" - Samuel Gostoso da Silva</p>
        </div>
        <div>
            <img src="imagens/second-image.jpg" alt="">
        </div>
        <div class="container-text">
            <h2 class="big-text">Porque comprar com o Cheira melhor que sabe?</br></br></br></h2>
            Os nossos produtos sao os melhores no mercado, simples.
            <p></p>
        </div>
    </div>

    <div class="container-3">
        <div class="container-3-services">
            <div>
                <img src="logos/recommendation.png" alt="">
                <h2>Recomendacoes</h2>
                <p>Mete muito para se gastar mais rapido e assim teres que comprar mais, das nos mais dinheiro</p>
            </div>
            <div>
                <img src="logos/giftbox.png" alt="">
                <h2>Presentes</h2>
                <p>Todos gostamos de receber um bom perfume!</p>
            </div>
            <div>
                <img src="logos/perfume-spray.png" alt="">
                <h2>A nossa formula</h2>
                <p>So utilizamos produtos biologicos, fresquinhos do quintal da minha avo materna</p>
            </div>
            <div>
                <img src="logos/refund.png" alt="">
                <h2>Devolucoes</h2>
                <p>Nao a ca nada disso</p>
            </div>
        </div>
    </div>

    <div class="container-4">
        <h1 class="big-text">Os nossos produtos</h1>
        <p>Sao incriveis, comprem, temos</p>
        <div>
                 Flores,
                 Ervinhas,
                 Frutas e
                 Frescos
    </div>

    <div class="container-4-collection">
        <img src="imagens/perfume-image1.jpg" alt="">
       <img src="imagens/perfume-image2.jpg" alt="">
        <img src="imagens/perfume-image3.jpg" alt="">
        <img src="imagens/perfume-image4.jpg" alt="">
        <img src="imagens/perfume-image5.jpg" alt="">
        <img src="imagens/perfume-image6.jpg" alt="">
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
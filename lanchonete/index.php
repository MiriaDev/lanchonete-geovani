
<?php
$nome = "Magic Oven ★ Lanchonete";
$descricao = "Os melhores lanches da cidade, feitas com amor e ingredientes frescos! Explore nosso cardápio e descubra sabores incríveis.<br>
Uma lanchonete recém aberta, que te espera de portas abertas para o seu gosto pessoal e o seu paladar!";
$horario = true;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <header>
        <h1><?php echo $nome; ?></h1>
        <p><?php echo $descricao; ?></p>
    </header>

    <nav>
        <a href="#inicio">Início</a>
        <a href="#produtos">Produtos</a>
        <a href="#sobre">Sobre</a>
    </nav>

    <section id="inicio" class="inicio">
        <h2>Venha nos visitar e aproveite nossas promoções especiais!</h2>
        <p>Aberto das 18h até as 23:30, sempre prontos para servi-los e fazer o melhor para você.</p>
    </section>

    <section id="produtos">
        <h2>Nossos Produtos</h2>

        <div class="container">

            <div class="card">
                <img src="imagens/aborgue.png" alt="Hambúrguer artesanal">
                <h3>Hambúrguer Artesanal</h3>
                <p>Hambúrguer com carne bovina, queijo, alface e molho da casa.</p>
                <span>R$ 29,90</span>
                <button>COMPRAR</button>
            </div>

            <div class="card">
                <img src="imagens/pizza.png" alt="Pizza especial">
                <h3>Pizza(sabores) </h3>
                <p>Pizzas de diferentes sabores:<br>
                Frango com cheddar, quatro queijos, mexicana, portuguesa, lombo, crocante, brócolis, strogonoff, doritos, etc.
                </p>
                <span>R$ 49,90</span>
                <button>COMPRAR</button>
            </div>

            <div class="card">
                <img src="imagens/batata.png"
                     alt="Batata frita">
                <h3>Batata Frita</h3>
                <p>Batatas crocantes e deliciosas para acompanhar seu lanche.</p>
                <span>R$ 19,90</span>
                <button>COMPRAR</button>
            </div>

        </div>
    </section>

    <section id="sobre" class="sobre">
        <h2>Sobre Nós</h2>
        <p>
            Somos uma lanchonete que oferece produtos saborosos,
            preparados com qualidade e muito carinho.
            Nosso objetivo é deixar seu dia mais gostoso!
        </p>

        <h3>Horário de funcionamento</h3>

        <?php
        if ($horario == true) {
            echo "<p>Estamos abertos! Faça seu pedido.</p>";
        } else {
            echo "<p>No momento estamos fechados. Volte em breve!</p>";
        }
        ?>
    </section>

    <footer class="footer">
                    <div class="footer-content">
                        <p><i class="fa-solid fa-phone"></i> Telefone: (41) 9 2310-2024</p>
                        <p><i class="fa-solid fa-envelope"></i> Email: contato@magicoven.com</p>
                        <p><i class="fa-solid fa-location-dot"></i> Endereço: Rua das Cerejeiras, 23 ★ Curitiba, PR
                        </p>
                        <p>&copy; 2025 Magic Oven ★ Todos os direitos reservados.</p>
                    </div>
                </footer>

</body>
</html>

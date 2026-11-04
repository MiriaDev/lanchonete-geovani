
<?php
$nome = "Lanchonete Fast-Food";
$descricao = "Os melhores lanches para matar sua fome!";
$horario = true;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">
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
        <h2>Bem-vindo à nossa lanchonete!</h2>
        <p>Delícias preparadas com carinho para você!</p>
    </section>

    <section id="produtos">
        <h2>Nossos Produtos</h2>

        <div class="container">

            <div class="card">
                <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=500"
                     alt="Hambúrguer artesanal">
                <h3>Hambúrguer Artesanal</h3>
                <p>Hambúrguer com carne bovina, queijo, alface e molho da casa.</p>
                <span>R$ 29,90</span>
                <button>COMPRAR</button>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?w=500"
                     alt="Pizza especial">
                <h3>Pizza Especial</h3>
                <p>Pizza recheada com queijo, tomate e ingredientes selecionados.</p>
                <span>R$ 49,90</span>
                <button>COMPRAR</button>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1573080496219-bb080dd4f877?w=500"
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

    <footer>
        <p>&copy; 2026 <?php echo $nome; ?> - Todos os direitos reservados.</p>
    </footer>

</body>
</html>

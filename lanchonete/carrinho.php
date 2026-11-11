
<?php
session_start();

$produtos = [
    "hamburguer" => [
        "nome" => "Hambúrguer Artesanal",
        "preco" => 29.90,
        "imagem" => "imagens/aborgue.png"
    ],

    "pizza" => [
        "nome" => "Pizza (sabores)",
        "preco" => 49.90,
        "imagem" => "imagens/pizza.png"
    ],

    "batata" => [
        "nome" => "Batata Frita",
        "preco" => 19.90,
        "imagem" => "imagens/batata.png"
    ]
];

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if (isset($_POST['adicionar'])) {

    $id = $_POST['produto'];

    if (isset($produtos[$id])) {

        if (isset($_SESSION['carrinho'][$id])) {
            $_SESSION['carrinho'][$id]++;
        } else {
            $_SESSION['carrinho'][$id] = 1;
        }
    }

    header("Location: carrinho.php");
    exit;
}

if (isset($_POST['remover'])) {

    $id = $_POST['remover'];

    unset($_SESSION['carrinho'][$id]);

    header("Location: carrinho.php");
    exit;
}

if (isset($_POST['limpar'])) {

    $_SESSION['carrinho'] = [];

    header("Location: carrinho.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Meu Carrinho - Magic Oven</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap"
          rel="stylesheet">

</head>

<body>

<header>
    <h1>Magic Oven ★ Lanchonete</h1>

    <p>Seu pedido está quase pronto!</p>
</header>

<nav>
    <a href="index.php#inicio">Início</a>
    <a href="index.php#produtos">Produtos</a>
    <a href="index.php#sobre">Sobre</a>
    <a href="carrinho.php">Carrinho</a>
</nav>

<section class="carrinho">

    <h2> Meu Carrinho</h2>

    <?php

    $total = 0;

    if (!empty($_SESSION['carrinho'])) {

        foreach ($_SESSION['carrinho'] as $id => $quantidade) {

            if (!isset($produtos[$id])) {
                continue;
            }

            $produto = $produtos[$id];

            $subtotal = $produto['preco'] * $quantidade;

            $total += $subtotal;
    ?>

        <div class="item-carrinho">

            <img src="<?php echo $produto['imagem']; ?>"
                 alt="<?php echo htmlspecialchars($produto['nome']); ?>">

            <div class="info-produto">

                <h3>
                    <?php echo htmlspecialchars($produto['nome']); ?>
                </h3>

                <p>
                    Quantidade:
                    <?php echo $quantidade; ?>
                </p>

                <p>
                    Preço unitário:
                    R$ <?php echo number_format(
                        $produto['preco'], 2, ',', '.'
                    ); ?>
                </p>

                <span>
                    Subtotal:
                    R$ <?php echo number_format(
                        $subtotal, 2, ',', '.'
                    ); ?>
                </span>

                <form method="POST" action="carrinho.php">

                    <button type="submit"
                            name="remover"
                            value="<?php echo htmlspecialchars($id); ?>"
                            class="btn-remover">

                        REMOVER

                    </button>

                </form>

            </div>

        </div>

    <?php
        }
    ?>

        <div class="resumo-carrinho">

            <h3>
                Total do pedido:
                R$ <?php echo number_format($total, 2, ',', '.'); ?>
            </h3>

            <form method="POST" action="carrinho.php">

                <button type="submit"
                        name="limpar"
                        class="btn-limpar">

                    ESVAZIAR CARRINHO

                </button>

            </form>

            <a href="index.php#produtos" class="btn-voltar">
                CONTINUAR COMPRANDO
            </a>

        </div>

    <?php

    } else {

        echo "<p class='carrinho-vazio'>
              Seu carrinho está vazio!
              </p>";

        echo "<a href='index.php#produtos' class='btn-voltar'>
              VER PRODUTOS
              </a>";
    }

    ?>

</section>

<footer class="footer">

    <div class="footer-content">

        <p>Telefone: (41) 9 2310-2024</p>

        <p>Email: contato@magicoven.com</p>

        <p>
            © 2025 Magic Oven ★
            Todos os direitos reservados.
        </p>

    </div>

</footer>

</body>
</html>

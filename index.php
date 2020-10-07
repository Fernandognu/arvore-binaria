<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arvore Binaria</title>
</head>

<body>
    <h1>Arvore Binaria</h1>
    <h2>Random de 10 numeros, de 1 a 100</h2>
    <?php

        include 'class/arvore.class.php';
        include 'class/no.class.php';

        $no1 = New No();
        $arvore = New Arvore();

        echo '<pre>';

        $i = 1;
        while ($i <= 10) {
            $i++;
            $arvore->inserir($no1, random_int(1, 100));
        }

    ?>
    <h2>Totais</h2>
    <?php

        echo '<br>Quantidade da Esquerda = '.$valorEsquerda;
        echo '<br>Total de pontos da Esquerda = '.$valorEsquerda * 200;

        echo '<br><br><br>';

        echo '<br>quantidade da Direita = '.$valorDireita -= 1;
        echo '<br>Total de pontos da Direita = '.$valorDireita * 100;

        echo '<br><br><br>';

    ?>
    <h2>Estrutura do nó</h2>
    <?php

        print_r($no1);

    ?>

</body>

</html>


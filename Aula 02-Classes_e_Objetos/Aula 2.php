<!DOCTYPE html>
<hmtl>
<head>
        <meta charset="utf-08">
        <title>Aula 02</title>
</head>
<body>
    <?php
    require_once 'Classe 1.php';

    $c1 = new Caneta;
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampada = true;

    $c1->destampar();
    $c1->rabiscar();

    $c2 = new Caneta;
    $c1->cor = "Verde";
    $c1->ponta = 0.7;
    $c1->tampada = false;
    print "<br>";
    print_r($c2);
    ?>
</body>

</hmtl>
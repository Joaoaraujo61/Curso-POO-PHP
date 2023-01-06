<!DOCTYPE html>
<hmtl>
<head>
        <meta charset="utf-08">
        <title>Aula 03</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Classe 03.php';
    $c1 = new Caneta;
    $c1->modelo = "Bic Cristal";
   # $c1->cor = "Azul";   PRIVADO(olhar em Classe 03.php)
    # $c1->carga = 99;    PROTEGIDO
    # A mesma coisa com os metodos(function)
   $c1->ponta = 0.5;
    var_dump($c1);
    ?>
    </pre>
</body>

</hmtl>
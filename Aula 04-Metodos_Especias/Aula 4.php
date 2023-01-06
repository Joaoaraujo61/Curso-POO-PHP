<!DOCTYPE html>
<hmtl>
<head>
        <meta charset="utf-08">
        <title>Aula 04</title>
</head>
<body>
<pre>
    <?php
        require_once 'Classe4.php';

        $c1 = new Caneta("BIC","Azul",0.5);
        $c1->setModelo("BIC");
        $c1->setPonta(0.5);//so e possivel mexer na ponta com o metodo setter pois ele e privado
        print_r($c1);
        print "<br>eu tenho uma caneta {$c1->getModelo()} com ponta {$c1->getPonta()}";
    ?>

</pre> 
</body>

</hmtl>
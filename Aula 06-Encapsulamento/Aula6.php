<!DOCTYPE html>
<hmtl>
<head>
        <meta charset="utf-08">
        <title>Aula 06</title>
</head>
<body>
<pre>
    <?php
         require_once 'Classe6.php';
         $c1 = new ControleRemoto();
         $c1->ligar(true);
         $c1->abrirMenu();
         $c1->maisVolume();
         print "<br>";
         $c1->abrirMenu();
         $c1->maisVolume();
         $c1->maisVolume();
         $c1->menosVolume();
         print "<br>";
         $c1->abrirMenu();
    ?>
</pre>
</body>

</hmtl>
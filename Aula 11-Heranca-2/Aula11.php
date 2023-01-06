<!DOCTYPE html>
<hmtl>
<head>
        <meta charset="utf-08">
        <title>Aula 11</title>
</head>
<body>
<pre>
    <?php
    require_once 'Classe11-aluno.php';
    require_once 'Classe11-visitante.php';
    require_once 'Classe11-bolsista.php';

    $a = new Aluno("Jão", 13, "masculino");
    $v = new Visitante("Jão", 13, "masculino");
    $b = new Bolsista("Jão", 13, "masculino");

    print_r($a);
    print "<br>";
    print_r($v);
    print "<br>";
    print_r($b);
    
    ?>
</pre>
</body>

</hmtl>
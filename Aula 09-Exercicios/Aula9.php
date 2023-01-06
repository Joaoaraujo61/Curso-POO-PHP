<!DOCTYPE html>
<hmtl>
<head>
        <meta charset="utf-08">
        <title>Aula 01</title>
</head>
<body>
<pre>
    <?php
    require_once 'Classe9.php';
    require_once 'Classe9-1.php';
    $p = array();
    $p[0] = new Pessoa("João", 14, "Masculino");
    $p[1] = new Pessoa("Maria", 30, "Feminino");

    $l = array();
    $l[0] = new Livro("A arte de enganar", "Kevin Mitnick", 250, $p[0]);
    $l[1] = new Livro("Mein Kampf", "AH", 300, $p[1]);

    $l[0]->folhear(53);print "<br>";
    $l[0]->avançarPag();print "<br>";
    $l[0]->voltarPag();
    ?>
    </pre>
</body>

</hmtl>
<!DOCTYPE html>
<hmtl>
<head>
        <meta charset="utf-08">
        <title>Aula 08</title>
</head>
<body>
    <?php
    require_once 'Classe7.php';
    require_once 'Classe8.php';
    $l = array();
    $l[0] = new Lutador("abc", "brasil", 20, 1.75, 90, 20, 10, 3);
    $l[1] = new Lutador("bca", "frança", 27, 1.80, 90, 6, 0, 0);
    $l[2] = new Lutador("cba", "Colombia", 30, 1.70, 85, 14, 7, 3);
    $l[3] = new Lutador("bac", "argentina", 23, 1.83, 73.8, 13, 0, 2);
    $l[4] = new Lutador("cab", "brasil", 33, 1.64, 110, 5, 6, 2);
    $l[5] = new Lutador("bcd", "italia", 37, 1.90, 85.9, 8, 4, 3);
    $UEC = array();
        $UEC[0] = new Luta();
        $UEC[0]->marcarLuta($l[0], $l[1]);
        $UEC[0]->lutar();
    ?>
</body>

</hmtl>
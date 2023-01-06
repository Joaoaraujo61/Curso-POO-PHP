<!DOCTYPE html>
<hmtl>
<head>
        <meta charset="utf-08">
        <title>Aula 05</title>
</head>
<body>
<pre>
    <?php
    require_once 'Classe5-ContaBanco.php';
    $cb = New ContaBanco();
    $cb->abrirConta("cp");//ao abrir a conta cp voce ganha 150 e cc 50
    $cb->depositar(20);
    $cb->sacar(100);
    $cb->PagMensal();
    print_r($cb);
    
    print_r($cb);
    $cb->sacar(50);
    $cb->fecharConta();
    print_r($cb);
    ?>
    </pre>
</body>

</hmtl>
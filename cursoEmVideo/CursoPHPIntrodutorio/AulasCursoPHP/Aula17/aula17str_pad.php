<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "Guanabara";
        $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
        print("Meu professor $novo é lindo!");
    

    ?>
</body>
</html>
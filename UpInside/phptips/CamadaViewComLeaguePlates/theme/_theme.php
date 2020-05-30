<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <link rel="stylesheet" type="text/css" href="<?= url("/theme/style.css"); ?>" />
</head>
<body>

    <nav class="main_nav">
    <?php if($v->section("sidebar")): 
        echo $v->section("sidebar");
    else:
        ?>
        <a title="" href="<?= url(); ?>">Home</a>
        <a title="" href="<?= url("contato"); ?>">Contato</a>
        <a title="" href="<?= url("teste"); ?>">Teste</a>
    <?php
    endif;
    ?>
        
    </nav>

    <main class="main_content">
        <?= $v->section("content"); ?>
    </main>

    
    <footer class="main_footer">
        <?= SITE;?> - Todos os direitos reservados
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>    
    <?= $v->section("scripts"); ?>
</body>
</html>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Webdesign em Foco">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRICSS.'Style.css'?>">
    <?php echo $this->addHead();?>
</head>
<body>

</body>
<div class="Nav">
    <a href="<?php echo DIRPAGE; ?>">Home</a>
    <a href="<?php echo DIRPAGE.'contato'; ?>">Contato</a>
    <a href="<?php echo DIRPAGE.'cadastro'; ?>">Cadastro</a>
</div>
<div class="Header">

    <img src="<?php echo DIRIMG.'banner.jpg'?>"alt="banner">
    <?php
    echo "<br>";
    $breadcrumb = new Src\Classes\ClassBreadcrumb();
    $breadcrumb->addBreadcrumb();
    ?>

    <br><br>
    <hr><hr>
    TEL.: (XX) XXXXXXX <BR>
    <?php echo $this->addHeader();?>

</div>

<div class="Main">
    <?php echo $this->addMain();?>

</div>

<div class="Footer">
    2020 - TODOS OS DIREITOS RESERVADO WEBDESIGN EM FOCO <BR>
    <?php echo $this->addFooter();?>
<br>
</div>
</html>
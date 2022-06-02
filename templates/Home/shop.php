<!DOCTYPE html>
<html>
<head>
    
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="webroot/css/home.css" /> -->
    <?= $this->Html->css(['style1', 'styleshop']) ?>
    
</head>
<body>
    
    <!-- navbar -->
    <section id="header">
        <a href="#"><?= $this->Html->image('logo.png') ?></a>

        <div>
            <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href=<?= $this->Url->build(['controller'=>'Home','action'=>'shop']); ?>>Shop</a></li>
                <li><a href=>Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>  

    <section id="page-header">
        <h2>#stayhome</h2>
        <p>sannnnnnnnnnnnnnnnnnn</p>
    </section>

    <section id="product" class="section-p1">
        <div class="prd-container">
            <?= $this->element('product') ?>
            <?= $this->element('product2') ?>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fas fa-arrow-circle-right"></i></a>
    </section>

    
    <?= $this->element('contact') ?>

    <?= $this->element('footer') ?>

    <?= $this->Html->script('home') ?>
</body>
</html>

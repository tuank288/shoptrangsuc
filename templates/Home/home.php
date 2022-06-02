<!DOCTYPE html>
<html>
<head>
    
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/home.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/users.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/app.css" />
    
    
</head>
<body>
    
    <!-- navbar -->
    <?= $this->element('navbar') ?>

    <?= $this->element('caption') ?>

    <?= $this->element('feature') ?>

    <section id="product" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="prd-container">
            
            <?= $this->element('product') ?>
        </div>
    </section>

    <?= $this->element('banner') ?>

    <!-- <section id="product" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="prd-container">
            
        </div>
    </section> -->

    

    <?= $this->element('sm-banner') ?>

    <section id="banner3">
        <div class="banner-box">
            <h2>Amanda Cerny</h2>
            <h3>Sự quyến rũ của thiên nhiên</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>Influencers X GLAMIRA</h2>
            <h3>Những xu hướng mới nhất</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>DREAMY HUES</h2>
            <h3>Những giấc mơ kéo dài mãi</h3>
        </div>
    </section>

    <?= $this->element('contact') ?>

    <?= $this->element('footer') ?>

    <script src="http://localhost:8080/SHOP/webroot/js/home.js"></script>
</body>
</html>

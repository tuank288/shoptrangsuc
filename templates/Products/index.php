<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="webroot/css/home.css" /> -->
    
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/home.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/shop.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/users.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/app.css" />
</head>

<body>

    <?= $this->element('navbar') ?>

    <!-- products content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="./index.html">home</a>
                    <span><i class="fas fa-angle-double-right"></i></span>
                    <a href="./products.html">all products</a>
                </div>
            </div>
            <div class="box">
                <div class="row">
                    <div class="col-2 filter-col" id="filter-col">
                        <div class="box filter-toggle-box">
                            <button class="btn-flats btn-hover" id="filter-close">close</button>
                        </div>
                        <div class="box">
                            <span class="filter-header">
                                Categories
                            </span>
                            <ul class="filter-list">
                                <?php foreach ($categories as $key => $categorie): ?>
                                    <li><a href="#"><?= $categorie->name ?></a></li>
        
                                <?php endforeach; ?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-10 col-md-12">
                        <div class="box filter-toggle-box">
                            <button class="btn-flats btn-hover" id="filter-toggle">filter</button>
                        </div>
                        <div class="box">
                        <section id="product" class="section-p1">
                            <div class="prd-container">
                                <?= $this->element('product') ?>
                                
                            </div>
                        </section>
                        </div>
                        <div class="box">
                            <ul class="pagination">
                                <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- end products content -->
    <?= $this->element('contact') ?>
    <!-- footer -->
    <?= $this->element('footer') ?>
    <!-- end footer -->

    <!-- app js -->
    
    <script src="http://localhost:8080/SHOP/webroot/js/home.js"></script>
    <script src="http://localhost:8080/SHOP/webroot/js/filter.js"></script>
    <!-- <script src="webroot/js/productss.js"></script> -->
</body>

</html>
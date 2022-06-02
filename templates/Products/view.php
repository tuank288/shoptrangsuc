
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
<?php echo $this->Form->create(NULL, ['url' => ['controller' => 'products', 'action' => 'add']]); ?>
<?php echo $this->Form->input('id', ['type' => 'hidden', 'value' => $product->id]); ?>

    <?= $this->element('navbar') ?> 

    <section id="page-header">
        <div class="verproduct">
            <h2>#shopping</h2>
            <!-- <p>LEAVE A MESSAGE.We love to hear from you!</p> -->
        </div>
    </section>
    

    <section>
    
    <!-- product-detail content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="./index.html">home</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./products.html">all products</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./product-detail.html"><?= $product->name; ?></a>
                </div>
            </div>
            
            <div class="row product-row">
                <div class="col-5 col-md-12">
                    <div class="product-img" id="product-img">
                    <img src="http://localhost:8080/SHOP/webroot/img/products/11<?= $product->id; ?>.jpg">
                    </div>
                    <div class="box">
                        <div class="product-img-list">
                            <div class="product-img-item">
                                <img src="http://localhost:8080/SHOP/webroot/img/products/11<?= $product->id; ?>.jpg">
                            </div>
                            <div class="product-img-item">
                                <img src="http://localhost:8080/SHOP/webroot/img/products/111<?= $product->id; ?>.jpg">
                            </div>
                            <div class="product-img-item">
                                <img src="http://localhost:8080/SHOP/webroot/img/products/1111<?= $product->id; ?>.jpg">
                            </div>
                            <div class="product-img-item">
                                <img src="http://localhost:8080/SHOP/webroot/img/products/11111<?= $product->id; ?>.jpg">
                            </div>
                            <div class="product-img-item">
                                <img src="http://localhost:8080/SHOP/webroot/img/products/11111<?= $product->id; ?>.gif">
                            </div>
                            <div class="product-img-item">
                                <img src="http://localhost:8080/SHOP/webroot/img/products/111111<?= $product->id; ?>.gif">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-7 col-md-12">
                    <div class="product-info">
                        <h2>
                            <?= $product->name; ?>
                        </h2>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Danh mục:</span>
                            <a href="#"><?= $product->has('category') ? h($product->category->name) : '' ?></a>
                        </div>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Đánh giá:</span>
                            <span class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <p class="product-description">
                            Những viên kim cương ở độ tinh khiết này có chứa những mảnh nhỏ hoặc rất nhỏ có thể nhìn thấy dưới kính phóng đại x10 và không thể nhìn thấy bằng mắt thường.
                        </p>
                        <div class="product-info-price"><?= $product->price; ?></div>
                        <!-- <div class="product-quantity-wrapper">
                            <span class="product-quantity-btn">
                                <i class='bx bx-minus'></i>
                            </span>
                            <span class="product-quantity">1</span>
                            <span class="product-quantity-btn">
                                <i class='bx bx-plus'></i>
                            </span>
                        </div> -->
                        <div>
                        <?= $this->Form->button(' Add to Cart', ['class' => 'btn btn-success btn-sm btn-flats btn-hover', 'id' => 'addtocart', 'escape' => false]);?>
                        <?= $this->Form->end(); ?>
                       
                            <!-- <button class="btn-flats btn-hover">add to cart</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    description
                </div>
                <div class="product-detail-description">
                    <button class="btn-flats btn-hover btn-view-description" id="view-all-description">
                        view all
                    </button>
                    <div class="product-detail-description-content">
                        <p>
                            <?= $product->description; ?>
                        </p>
                        <img src="http://localhost:8080/SHOP/webroot/img/products/sswhite<?= $product->id; ?>.jpg">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium officia, quae fuga in exercitationem aliquam labore ex doloribus repellendus beatae facilis ipsam. Veritatis vero obcaecati iste atque aspernatur ducimus.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat quam praesentium id sit amet magnam ad, dolorum, cumque iste optio itaque expedita eius similique, ab adipisci dicta. Quod, quibusdam quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, in corrupti ipsam sint error possimus commodi incidunt suscipit sit voluptatum quibusdam enim eligendi animi deserunt recusandae earum natus voluptas blanditiis?
                        </p>
                        <img src="http://localhost:8080/SHOP/webroot/img/products/sssswhite<?= $product->id; ?>.jpg">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ullam quam fugit veniam ipsum recusandae incidunt, ex ratione, magnam labore ad tenetur officia! In, totam. Molestias sapiente deserunt animi porro?
                        </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    related products
                </div>
                <div class="row" id="related-products"></div>
            </div>
        </div>
    </div>
    </section>

    
    <!-- end product-detail content -->
    <?= $this->element('contact') ?>
    <!-- footer -->
    <?= $this->element('footer') ?>
    <!-- end footer -->

    <!-- app js -->
    <script src="http://localhost:8080/SHOP/webroot/js/home.js"></script>
    <script src="http://localhost:8080/SHOP/webroot/js/app.js"></script>
    <script src="http://localhost:8080/SHOP/webroot/js/cart.js"></script>
    <!-- <script src="http://localhost:8080/SHOP/webroot/js/product_view.js"></script> -->
    <script src="http://localhost:8080/SHOP/webroot/js/product-details.js"></script>
    <script src="http://localhost:8080/SHOP/webroot/js/zoomsl.js"></script>
    
    <!-- <script src="./js/app.js"></script>
    <script src="./js/product-detail.js"></script> -->
     <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script> -->
</body>

</html>
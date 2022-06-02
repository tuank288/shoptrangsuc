<!DOCTYPE html>
<html>
<head>
    
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="webroot/css/home.css" /> -->

    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/home.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/shop.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/carts.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/users.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/SHOP/webroot/css/app.css" />
</head>
<body>
<?php echo $this->Html->script(['product_cart.js'], ['block' => 'script']); ?>
    <!-- navbar -->
    <?= $this->element('navbar') ?> 

    <section id="page-header">
        <div class="vercart">
            <h2>#shopping_time</h2>
            <p>Siêu ưu đãi ngập tràn voucher quà tặng</p>
        </div>
    </section>


    <h2 class="cent"> Giỏ hàng của bạn</h2>

    <?php if(empty($shop)) : ?>

    <p class="cent">Shopping Cart is empty</p>

    <?php else: ?>

<?= $this->Form->create(NULL, ['url' => ['controller' => 'products', 'action' => 'cartupdate']]); ?>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <?php $tabindex = 1; ?>
            <?php foreach ($shop['Orderproducts'] as $key => $item): ?>
            <tbody class="list">
                <tr>
                    <td><?= $this->Html->link('<i class="fas fa-times"></i>', ['controller' => 'products', 'action' => 'remove', $key], ['class' => 'btn btn-secondary btn-sm', 'escape' => false]); ?></td>
                    <td><?= $this->Html->image( $item['image'], ['class' => 'img-fluid']); ?></td>
                    <td><?= $this->Html->link($item['name'], ['controller' => 'products', 'action' => 'view']); ?></td>
                    <td><?= $item['price']; ?></td>
                    <td><?= $this->Form->input('quantity-' . $key, ['label' => false, 'div' => false, 'class' => 'numeric form-control input-small', 'type' => 'tel', 'size'=> 2, 'min' => 1, 'max' => 99, 'maxlength' => 2, 'tabindex' => $tabindex++, 'data-id' => $item['product_id'], 'value' => $item['quantity']]); ?></td>
                    <td><?= $item['subtotal']; ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </section>

    <div class="row">
    <div class="col col-sm-12">
        <div class="pull-right">
        <?php echo $this->Html->link(' Clear Shooping Cart', ['controller' => 'products', 'action' => 'clear'], ['class' => 'btn btn-danger btn-sm', 'escape' => false]); ?>
        &nbsp; &nbsp;
        <?php echo $this->Form->button(' Update', ['class' => 'btn btn-warning btn-sm', 'escape' => false]);?>
        <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

    <section id="cartadd" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td><?= $shop['Order']['subtotal']; ?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong><?= $shop['Order']['subtotal']; ?></strong></td>
                </tr>
            </table>
            <!-- <button class="normal">Proceed to checkout</button> -->
            <?php echo $this->Html->link('<i class="fa fa-check"></i> &nbsp; Checkout', ['controller' => 'orders', 'action' => 'address', '_ssl' => false], ['class' => 'btn btn-success btn-sm normal', 'escape' => false]); ?>
        </div>
    </section>
    <?php endif; ?>
    <?= $this->element('footer') ?>


    <script src="http://localhost:8080/SHOP/webroot/js/home.js"></script>
    <script src="http://localhost:8080/SHOP/webroot/js/app.js"></script>
    
    <!-- <script src="http://localhost:8080/SHOP/webroot/js/product_cart.js"></script> -->
    
</body>
</html> 

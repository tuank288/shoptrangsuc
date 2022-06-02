            <?php foreach ($products as $product): ?>
            
            <div class="prd">
                <?= $this->Html->image('products/white1.jpg') ?>
                <div class="desc">
                    <span><?= $product->has('category') ? h($product->category->name) : '' ?></span>
                    <h4><?= $product->name ?></h4>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?= $product->price ?></h4>
                </div>
                <a href="/shop/shop/<?= $product->id ?>"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <?php endforeach ?>
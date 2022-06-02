<header class="header">

  <a href="#" class="logoo">
    <?= $this->Html->image('logo.png') ?>
  </a>

  <nav class="navbars">
      <a href=<?= $this->Url->build(['controller'=>'Home','action'=>'home']); ?>>Home</a>
      <a href=<?= $this->Url->build(['controller'=>'Products','action'=>'index']); ?>>Products</a>
      <a href=<?= $this->Url->build(['controller'=>'Home','action'=>'about']); ?>>About</a>
      <a href=<?= $this->Url->build(['controller'=>'Home','action'=>'contact']); ?>>Contact</a>
      <a href=<?= $this->Url->build(['controller'=>'Home','action'=>'blogs']); ?>>Blogs</a>
  </nav>

  <div class="icons">
      <div class="fas fa-user" id="search-btn"></div>																
			<a href="http://localhost:8080/shop/products/cart" class="cart-label header-icon">
                <div class="fas fa-shopping-cart" id="cart-btn"></div>
					<?php if($this->request->getSession()->read('Shop')) : ?>
						<div class="cart-info">
							<span class="cartCount count_item_pr" id="cart-total"><?php echo $this->request->getSession()->read('Shop.Order.quantity'); ?></span>
						</div>
					<?php endif; ?>
			</a>
      
      <div class="fas fa-bars" id="menu-btn"></div>
  </div>

  <!-- <div class="cart-items-container">
      <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/cart-item-1.png" alt="">
          <div class="content">
              <h3>cart item 01</h3>
              <div class="price">$15.99/-</div>
          </div>
      </div>
      <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/cart-item-2.png" alt="">
          <div class="content">
              <h3>cart item 02</h3>
              <div class="price">$15.99/-</div>
          </div>
      </div>
      <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/cart-item-3.png" alt="">
          <div class="content">
              <h3>cart item 03</h3>
              <div class="price">$15.99/-</div>
          </div>
      </div>
      <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/cart-item-4.png" alt="">
          <div class="content">
              <h3>cart item 04</h3>
              <div class="price">$15.99/-</div>
          </div>
      </div>
      <a href="#" class="btnn">checkout now</a>
  </div> -->

</header>
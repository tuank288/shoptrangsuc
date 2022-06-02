<?php echo $this->Form->create(NULL, ['url' => ['controller' => 'products', 'action' => 'add']]); ?>
<?php echo $this->Form->input('id', ['type' => 'hidden', 'value' => $product->id]); ?>
<?= $this->Form->button(' Add to Cart', ['class' => 'btn btn-success btn-sm btn-flats btn-hover', 'id' => 'addtocart', 'escape' => false]);?>
                        <?= $this->Form->end(); ?>
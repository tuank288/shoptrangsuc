<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Các sản phẩm</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</a></li>
      <li class="breadcrumb-item">Các thành phần</li>
      <li class="breadcrumb-item">Đơn đặt hàng</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">
            <div class="card-body mt-3">
              <h5 ><?= $this->Html->link(__(' New'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm bi bi-plus-lg']) ?></h5>
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th class="actions"><?= __('Actions') ?></th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $this->Number->format($product->id) ?></td>
                        <td><?= h($product->name) ?></td>
                        <td><?= h($product->image) ?></td>
                        <td><?= $product->price === null ? '' : $this->Number->format($product->price) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__(' View'), ['action' => 'view', $product->id], ['class' => 'btn btn-primary btn-sm bi bi-eye']) ?>
                            <?= $this->Html->link(__(' Edit'), ['action' => 'edit', $product->id], ['class' => 'btn btn-success btn-sm bi bi-pencil-square']) ?>
                            <?= $this->Form->postLink(__(' Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Bạn có chắc chắn muốn xóa {0}?', $product->name), 'class' => 'btn btn-danger btn-sm bi bi-trash']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->

      </div>
    </div><!-- End Left side columns -->

  </div>
</section>

</main><!-- End #main -->
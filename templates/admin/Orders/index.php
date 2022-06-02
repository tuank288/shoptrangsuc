<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Các sản phẩm</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</a></li>
      <li class="breadcrumb-item">Các thành phần</li>
      <li class="breadcrumb-item">Các sản phẩm</li>
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
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Tổng tiền</th>
                    <th class="actions"><?= __('Actions') ?></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= $this->Number->format($order->id) ?></td>
                        <td>
                          <?= h($order->first_name) ?>
                          <?= h($order->last_name) ?>
                        </td>
                        <td><?= h($order->email) ?></td>
                        <td><?= h($order->phone) ?></td>
                        <td><?= $order->total === null ? '' : $this->Number->format($order->subtotal) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__(' View'), ['action' => 'view', $order->id], ['class' => 'btn btn-primary btn-sm bi bi-eye']) ?>
                            <?= $this->Html->link(__(' Edit'), ['action' => 'edit', $order->id], ['class' => 'btn btn-success btn-sm bi bi-pencil-square']) ?>
                            <?= $this->Form->postLink(__(' Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Bạn có chắc chắn muốn xóa {0}?', $order->name), 'class' => 'btn btn-danger btn-sm bi bi-trash']) ?>
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
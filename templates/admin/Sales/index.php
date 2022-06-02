<?php
/**
 * @var \App\View\AppView $this
 */
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Sales</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</a></li>
      <li class="breadcrumb-item">Sales</li>
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
                    <th scope="col">Ngày bán</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng tiền</th>
                    <th class="actions"><?= __('Actions') ?></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($sales as $sale): ?>
                <tr>
                    <td><?= $this->Number->format($sale->id) ?></td>
                    <td><?= h($sale->created) ?></td>
                    <td>
                        <?= $sale->has('order') ? h($sale->order->first_name) : '' ?>
                        <?= $sale->has('order') ? h($sale->order->last_name) : '' ?>
                    </td>
                    <td><?= h($sale->name) ?></td>
                    <td><?= $sale->quantity === null ? '' : $this->Number->format($sale->quantity) ?></td>
                    <td><?= $sale->subtotal === null ? '' : $this->Number->format($sale->subtotal) ?></td>
                    <td>
                        <?= $this->Html->link(__(' View'), ['action' => 'view', $sale->id], ['class' => 'btn btn-primary btn-sm bi bi-eye']) ?>
                        
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
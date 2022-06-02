<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 */
?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>View</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</a></li>
                        <li class="breadcrumb-item">Sales</a></li>
                        <li class="breadcrumb-item">View</li>
                    </ol>
                </nav>
        </div>
            <div class="card mt-3">
                <div class="card-body">
                    <!-- Table with stripped rows -->
                    <table class="table table-striped mt-3">
                        <tbody>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($sale->id) ?></td>
                        </tr>
                        <tr>
                            <th>Ngày bán</th>
                            <td><?= h($sale->created) ?></td>
                        </tr>
                        <tr>
                            <th class="mt-3">Tên khách hàng</th>
                            <td>
                                <?= $sale->has('order') ? h($sale->order->first_name) : '' ?>
                                <?= $sale->has('order') ? h($sale->order->last_name) : '' ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Sản phẩm</th>
                            <td><?= h($sale->pay_id) ?></td>
                        </tr>
                        <tr>
                            <th>Giá</th>
                            <td><?= $sale->price === null ? '' : $this->Number->format($sale->price) ?></td>
                        </tr>
                        <tr>
                            <th>Số lượng</th>
                            <td><?= $sale->quantity === null ? '' : $this->Number->format($sale->quantity) ?></td>
                        </tr>
                        <tr>
                            <th>Tổng tiền</th>
                            <td><?= $sale->subtotal === null ? '' : $this->Number->format($sale->subtotal) ?></td>
                        </tr>
                        </tbody>
                    </table>
                <!-- End Table with stripped rows -->
                <h5 ><?= $this->Html->link(__(' Quay lại'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm bi bi-arrow-left mt-3']) ?></h5>

            </div>
          </div>
</main>
 
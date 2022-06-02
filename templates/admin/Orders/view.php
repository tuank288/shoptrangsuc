<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>View</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</a></li>
                        <li class="breadcrumb-item">Các thành phần</a></li>
                        <li class="breadcrumb-item">Đơn đặt hàng</a></li>
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
                                <th>ID</th>
                                <td><?= h($order->id) ?></td>
                            </tr>
                            <tr>
                                <th>Tên khách hàng</th>
                                <td>
                                    <?= h($order->first_name) ?>
                                    <?= h($order->last_name) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?= h($order->email) ?></td>
                            </tr>
                            <tr>
                                <th>Số điện thoại</th>
                                <td><?= h($order->phone) ?></td>
                            </tr>
                            <tr>
                                <th>Giá sản phẩm</th>
                                <td><?= $order->has('product') ? h($order->product->price) : '' ?></td>  
                            </tr>
                            <tr>
                                <th>Số lượng</th>
                                <td>
                                    <?= $order->order_item_count === null ? '' : $this->Number->forma($order->order_item_count)?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tổng phụ</th>
                                <td>
                                    <?= $order->subtotal === null ? '' : $this->Number->format($order->subtotal) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Thuế</th>
                                <td>
                                    <?= $order->tax === null ? '' : $this->Number->format($order->tax) ?> đ
                                </td>
                            </tr>
                            <tr>
                                <th>Tổng tiền</th>
                                <td>
                                    <?= $order->total === null ? '' : $this->Number->format($order->total) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Trạng thái</th>
                                <td>
                                    <?= h($order->status) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <!-- End Table with stripped rows -->
                <h5 ><?= $this->Html->link(__(' Quay lại'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm bi bi-arrow-left mt-3']) ?></h5>
            </div>
          </div>
</main>
 
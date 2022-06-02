<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>View</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</a></li>
                        <li class="breadcrumb-item">Các thành phần</a></li>
                        <li class="breadcrumb-item">Các sản phẩm</a></li>
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
                                <th>Tên danh mục</th>
                                <td><?= $product->has('category') ? h($product->category->name) : '' ?></td>
                            </tr>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <td><?= h($product->name) ?></td>
                            </tr>
                            <tr>
                                <th>Hình ảnh</th>
                                <td><?= h($product->image) ?></td>
                             </tr>
                             <tr>
                            <th>Giá sản phẩm</th>
                                <td><?= $product->price === null ? '' : $this->Number->format($product->price) ?></td>
                            </tr>
                            <tr>
                                <th>Ngày tạo</th>
                                <td><?= h($product->created) ?></td>
                            </tr>
                            <tr>
                                <th>Ngày sửa đổi</th>
                                <td><?= h($product->modified) ?></td>
                            </tr>
                        </tbody>
                    </table>
                <!-- End Table with stripped rows -->
                <h5 ><?= $this->Html->link(__(' Quay lại'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm bi bi-arrow-left mt-3']) ?></h5>
            </div>
          </div>
</main>
 
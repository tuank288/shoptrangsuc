<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>View</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</a></li>
                        <li class="breadcrumb-item">Các thành phần</a></li>
                        <li class="breadcrumb-item">Thể loại</a></li>
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
                                <td>
                                    <td><?= $this->Number->format($category->id) ?></td>
                                </td>
                            </tr>
                            <tr>
                                <th>Tên danh mục</th>
                                <td>
                                    <td><?= h($category->name) ?></td>
                                </td>
                            </tr>
                            <tr>
                                <th>Mô tả</th>
                                <td>
                                    <td><?= h($category->description) ?></td>
                                </td>
                            </tr>
                            <tr>
                                <th>Ngày tạo</th>
                                <td>
                                    <td><?= h($category->created) ?></td>
                                </td>
                            </tr>
                            <tr>
                                <th>Ngày sửa đổi</th>
                                <td>
                                    <td><?= h($category->modified) ?></td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <!-- End Table with stripped rows -->
                <h5 ><?= $this->Html->link(__(' Quay lại'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm bi bi-arrow-left mt-3']) ?></h5>
            </div>
          </div>
</main>
 
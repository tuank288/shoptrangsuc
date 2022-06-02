<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Thể loại</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</a></li>
      <li class="breadcrumb-item">Các thành phần</li>
      <li class="breadcrumb-item">Thể loại</li>
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
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Ngày sửa đổi</th>
                    <th class="actions"><?= __('Actions') ?></th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?= $this->Number->format($category->id) ?></td>
                        <td><?= h($category->name) ?></td>
                        <td><?= h($category->created) ?></td>
                        <td><?= h($category->modified) ?></td>
                        <td class="actions justify-content-center">
                            <?= $this->Html->link(__(' View'), ['action' => 'view', $category->id], ['class' => 'btn btn-primary btn-sm bi bi-eye']) ?>
                            <?= $this->Html->link(__(' Edit'), ['action' => 'edit', $category->id], ['class' => 'btn btn-success btn-sm bi bi-pencil-square']) ?>
                            <?= $this->Form->postLink(__(' Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Bạn có chắc chắn muốn xóa {0}?', $category->name), 'class' => 'btn btn-danger btn-sm bi bi-trash']) ?>
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
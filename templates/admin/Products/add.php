<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>New</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</a></li>
      <li class="breadcrumb-item">Các thành phần</li>
      <li class="breadcrumb-item">Các sản phẩm</li>
      <li class="breadcrumb-item">New</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
        <div class="card">
            <div class="card-body mt-3">
            <?= $this->Form->create($product) ?>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Tên danh mục</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('category_id', ['options' => $categories,  'type' => 'select', 'class' => 'accordion-button']); ?>
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('name', ['class' => 'form-control']); ?>
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Mô tả</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->textarea('description', ['class' => 'form-control', 'style' => 'height: 100px']); ?>
                        </div>
                    </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Hình ảnh</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('image', ['class' => 'form-control', 'type' => 'file', 'id' => 'formFile']); ?>
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Giá</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('price', ['class' => 'form-control', 'type' => 'number']); ?>
                        </div>
                </div>
                <ul class="nav d-flex">
                    <li class="nav-item flex-fill">
                        <?= $this->Html->link(__(' Quay lại'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm bi bi-arrow-left']) ?>
                    </li>
                    <li class="d-flex justify-content-end">
                        <?= $this->Form->button(' Save', ['class' => 'btn bg-info btn-sm bi bi-save']) ?>
                    </li>
                    
                </ul>
                <?= $this->Form->end() ?>
                        
            </div>
        </div>
</main>

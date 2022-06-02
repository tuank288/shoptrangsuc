<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</a></li>
      <li class="breadcrumb-item">Các thành phần</li>
      <li class="breadcrumb-item">Các sản phẩm</li>
      <li class="breadcrumb-item">Edit</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
        <div class="card">
            <div class="card-body mt-3">
                <?= $this->Form->create($order) ?>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Thuế</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('tax', ['class' => 'form-control', 'type' => 'number']); ?>
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Trạng thái</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->textarea('status', ['class' => 'form-control', 'style' => 'height: 100px']); ?>
                        </div>
                    </div>
                <ul class="nav d-flex">
                    <li class="nav-item flex-fill">
                        <?= $this->Html->link(__(' Quay lại'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm bi bi-arrow-left']) ?>
                    </li>
                    <li class="d-flex justify-content-end">
                        <?= $this->Form->button(' Upload', ['class' => 'btn btn-success btn-sm bi bi-upload bi']) ?>
                    </li>
                    
                </ul>
                <?= $this->Form->end() ?>
                </form><!-- End General Form Elements -->
            </div>
        </div>

</main>

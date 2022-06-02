<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Users</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</a></li>
      <li class="breadcrumb-item">Users</li>
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
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Active</th>
                    <th class="actions"><?= __('Actions') ?></th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                    <td>
                        <?= h($user->first_name) ?>
                        <?= h($user->last_name) ?>
                    </td>
                    <td><?= h($user->phone) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= $user->active === null ? '' : $this->Number->format($user->active) ?></td>
                    <td class="actions">
                          <?= $this->Html->link(__(' View'), ['action' => 'view', $user->id], ['class' => 'btn btn-primary btn-sm bi bi-eye']) ?>
                          <?= $this->Form->postLink(__(' Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Bạn có chắc chắn muốn xóa {0}?', $user->name), 'class' => 'btn btn-danger btn-sm bi bi-trash']) ?>
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
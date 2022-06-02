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
                        <li class="breadcrumb-item">Users</a></li>
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
                                    <?= $this->Number->format($user->id) ?>
                                </td>
                            </tr>
                            <tr>
                                <th><?= __('Role') ?></th>
                                <td>
                                    <?= h($user->role) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tên khách hàng</th>
                                <td>
                                    <?= h($user->first_name) ?>
                                    <?= h($user->last_name) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Số điện thoại</th>
                                <td>
                                    <?= h($user->phone) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    <?= h($user->email) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Mật khẩu</th>
                                <td>
                                    <?= h($user->password) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Active</th>
                                <td>
                                    <?= $user->active === null ? '' : $this->Number->format($user->active) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Ngày tạo</th>
                                <td>
                                    <?= h($user->created) ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Ngày sửa đổi</th>
                                <td>
                                    <?= h($user->modified) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <!-- End Table with stripped rows -->
                <h5 ><?= $this->Html->link(__(' Quay lại'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm bi bi-arrow-left mt-3']) ?></h5>
            </div>
          </div>
</main>
 
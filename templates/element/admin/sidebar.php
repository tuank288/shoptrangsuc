<?php
/**
 * @var \App\View\AppView $this
 */

  $a_name = $this->request->getParam('controller')
?>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link <?= $a_name == 'Admin' ? '' : 'collapsed' ?>" href=<?=$this->Url->build(['controller' => 'admin', 'action' => 'index']); ?>>
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?= $a_name == 'Sales' ? '' : 'collapsed' ?>" href=<?=$this->Url->build(['controller' => 'sales', 'action' => 'index']); ?>>
          <i class="bi bi-cash-coin"></i>
          <span>Sales</span>
        </a>
      </li><!-- End Sales Nav-->

      <li class="nav-item">
        <a class="nav-link <?= (($a_name == 'Categories') OR ($a_name == 'Orders') OR ($a_name == 'Products')) ? '' : 'collapsed' ?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Các thành phần</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" data-bs-parent="#sidebar-nav" class="nav-content <?= (($a_name == 'Categories') OR ($a_name == 'Orders') OR ($a_name == 'Products')) ? '' : 'collapse' ?>">
          <li >
            <a href=<?=$this->Url->build(['controller' => 'categories', 'action' => 'index']); ?> class=<?= $a_name == 'Categories' ? 'active' : ''?>>
              <i class="bi bi-circle"></i><span>Thể loại</span>
            </a>
          </li>
          <li>
            <a href=<?=$this->Url->build(['controller' => 'orders', 'action' => 'index']); ?> class=<?= $a_name == 'Orders' ? 'active' : ''?>>
              <i class="bi bi-circle"></i><span>Đơn đặt hàng</span>
            </a>
          </li>
          <li>
            <a href=<?=$this->Url->build(['controller' => 'products', 'action' => 'index']); ?> class=<?= $a_name == 'Products' ? 'active' : ''?>>
              <i class="bi bi-circle"></i><span>Các sản phẩm</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Manage</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href=<?=$this->Url->build(['controller' => 'users', 'action' => 'index']); ?>>
          <i class="bi bi-person"></i><span>Users</span>
        </a>

    </ul>

  </aside><!-- End Sidebar-->
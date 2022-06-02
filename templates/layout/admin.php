<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

  

  <?= $this->Html->css('bootstrap.min')?>
  <?= $this->Html->css('bootstrap-icons')?>
  <?= $this->Html->css('boxicons.min')?>
  <?= $this->Html->css('quill.snow')?>
  <?= $this->Html->css('quill.bubble')?>
  <?= $this->Html->css('remixicon')?>
  <?= $this->Html->css('style')?>

  <?= $this->Html->css('admin')?>

</head>

<body>
  <?= $this->element('admin/header') ?>

  <?= $this->element('admin/sidebar') ?>

  <?=$this->fetch('content')?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?= $this->element('admin/footer')?>

  <!-- Template Main JS File -->

  <?= $this->Html->script('apexcharts.min') ?>
  <?= $this->Html->script('bootstrap.bundle.min') ?>
  <?= $this->Html->script('chart.min') ?>
  <?= $this->Html->script('echarts.min') ?>
  <?= $this->Html->script('quill.min') ?>
  <?= $this->Html->script('simple-datatables') ?>
  <?= $this->Html->script('tinymce.min') ?>
  <?= $this->Html->script('validate') ?>

  <?= $this->Html->script('admin') ?>
</body>

</html>
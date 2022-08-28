<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?> -->
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#"><?= $this->element('latest') ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$this->Url->build('/post')?>">Home</a>
      </li>
      <li class="nav-item">
<!--         <a class="nav-link" href="#">About</a> -->
<!--        <?= $this->Html->link('About', '/about', ['class' => 'nav-link']); ?> -->
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Contact</a>
      </li> -->
      <li>
        <?= $this->Html->link('Add Post', '/post/create', ['class' => 'nav-link']); ?>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-3">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</div>

<?= $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') ?>
</body>
</html>

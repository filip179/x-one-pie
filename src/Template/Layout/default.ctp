<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        X-One Pie
        <cake>
    </title>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

    <link rel="stylesheet" href="/css/material-dashboard.css">
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white">
        <div class="logo">
            <a href="/" class="simple-text logo-normal">
                X-One pie
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <?php foreach (\App\Menu\MenuContainer::get() as $menu) : ?>
                    <li class="nav-item <?php if ($menu->isActive($this->request->getRequestTarget())): ?> active <?php endif ?> ">
                        <a class="nav-link" href="<?= $menu->getHref() ?>">
                            <i class="material-icons"><?= $menu->getIcon() ?></i>
                            <p><?= $menu->getLabel() ?></p>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <div class="content">
            <?= $this->fetch('content') ?>
        </div>
    </div>

    <footer>
    </footer>
</div>
<script type="text/javascript" src="/js/core/jquery.min.js"></script>
<script type="text/javascript" src="/js/core/popper.min.js"></script>
<script type="text/javascript" src="/js/core/bootstrap-material-design.min.js"></script>
<script type="text/javascript" src="/js/plugins/chartist.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript" src="/js/x-one.js"></script>
</body>
</html>

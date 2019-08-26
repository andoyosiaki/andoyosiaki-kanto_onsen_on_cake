<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('detail.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
</head>
<body>
    <div class="wrap_contaienr">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>

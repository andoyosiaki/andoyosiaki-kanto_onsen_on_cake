<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('styles.css') ?>
</head>
<body>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>

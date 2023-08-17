l<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
    use Cake\Core\Configure;

    $cakeDescription = 'Administrativo';
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content+"IE=edge">

<title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
</title>

<?= $this->Html->meta('icon') ?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="/img/favicon.png" type="image/png">

<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>


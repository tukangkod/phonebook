<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('mdb.min.css') ?>
    <?= $this->Html->css('style.min.css') ?>
    <?= $this->Html->css('landing.css') ?>
    <?= $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>

<?= $this->element('public/header') ?>
<?= $this->Flash->render() ?>

<main>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
</main>

<?= $this->element('public/footer') ?>

<?= $this->Html->script('jquery-3.2.1.min.js') ?>
<?= $this->Html->script('popper.min.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('mdb.min.js') ?>
<?= $this->Html->script('public.js') ?>
<?= $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') ?>


<?= $this->fetch('script') ?>
<script type="text/javascript">
    new WOW().init();
</script>
</body>
</html>

<?php
$cakeDescription = 'Phonebook by TukangKod';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
        <?= $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') ?>
        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('mdb.min.css') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('style2.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
    </head>
    <body>
        <nav class="top-bar expanded" data-topbar role="navigation">
            <ul class="title-area large-3 medium-4 columns">
                <li class="name">
                    <h1>
                        <?= $this->html->link($this->fetch('title'), ['controller' => 'contacts', 'action' => 'index', 'prefix' => 'admin']) ?>
                    </h1>
                </li>
            </ul>
            <div class="top-bar-section">
                <ul class="right">
                    <li><?= $this->Html->link('Public Page', ['controller' => 'pages', 'action' => 'index', 'prefix' => false])?></li>
                </ul>
            </div>
        </nav>
        <?= $this->Flash->render() ?>
        <div class="container clearfix">
            <?= $this->fetch('content') ?>
        </div>
        <?= $this->fetch('script') ?>
    </body>
</html>

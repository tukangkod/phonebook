<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PhoneType $phoneType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $phoneType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $phoneType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Phone Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="phoneTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($phoneType) ?>
    <fieldset>
        <legend><?= __('Edit Phone Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
$confirm = __('Are you sure you want to delete number: {0}?', $phone->number);
?>
<div class="phones form columns content">
    <?= $this->Form->create($phone) ?>
    <fieldset>
        <legend>
            <?= __('Edit Phone') ?>
            [<?= $this->element('action', ['type' => 8, 'model' => $phone, 'confirmDelete' => $confirm]) ?>]
        </legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('is_main');
            echo $this->Form->control('phone_type_id', ['options' => $phoneTypes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

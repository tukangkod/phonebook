<?php
$confirm = __('Are you sure you want to delete contact: {0}?', $contact->full_name ?? $contact->first_name);
?>
<div class="contacts form columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend>
            <?= __('Edit Contact') ?>
            [<?= $this->element('action', ['type' => 5, 'model' => $contact, 'confirmDelete' => $confirm]) ?>]
        </legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

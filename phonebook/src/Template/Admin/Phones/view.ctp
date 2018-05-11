<?php
$confirm = __('Are you sure you want to delete number: {0}?', $phone->number);
?>
<div class="phones view columns content">
    <h3>
        <?= h($phone->number) ?>
        [
        <?= $this->element('action', ['type' => 4, 'controller' => 'contacts', 'model' => $phone->contact]) ?>
        <?= $this->element('action', ['type' => 24, 'model' => $phone, 'confirmDelete' => $confirm]) ?>
        ]
    </h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Main Phone') ?></th>
            <td><?= $phone->is_main ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= $phone->has('contact') ? $this->Html->link($phone->contact->full_name, ['controller' => 'Contacts', 'action' => 'view', $phone->contact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Type') ?></th>
            <td><?= $phone->has('phone_type') ? $this->Html->link(ucfirst($phone->phone_type->name), ['controller' => 'PhoneTypes', 'action' => 'view', $phone->phone_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($phone->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($phone->modified) ?></td>
        </tr>
    </table>
</div>

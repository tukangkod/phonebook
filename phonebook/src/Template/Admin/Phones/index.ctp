<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Phone[]|\Cake\Collection\CollectionInterface $phones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Phone'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phone Types'), ['controller' => 'PhoneTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone Type'), ['controller' => 'PhoneTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="phones index large-9 medium-8 columns content">
    <h3><?= __('Phones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_main') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($phones as $phone): ?>
            <tr>
                <td><?= h($phone->id) ?></td>
                <td><?= $phone->has('contact') ? $this->Html->link($phone->contact->id, ['controller' => 'Contacts', 'action' => 'view', $phone->contact->id]) : '' ?></td>
                <td><?= h($phone->number) ?></td>
                <td><?= $phone->has('phone_type') ? $this->Html->link($phone->phone_type->name, ['controller' => 'PhoneTypes', 'action' => 'view', $phone->phone_type->id]) : '' ?></td>
                <td><?= h($phone->is_main) ?></td>
                <td><?= h($phone->created) ?></td>
                <td><?= h($phone->modified) ?></td>
                <td><?= h($phone->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $phone->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $phone->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $phone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phone->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

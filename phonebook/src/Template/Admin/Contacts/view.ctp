<?php
$confirm = __('Are you sure you want to delete contact: {0}?', $contact->full_name ?? $contact->first_name);
$mainPhoneObj = json_decode($contact->main_phone_full) ?? null;
$mainPhone = (count($mainPhoneObj) > 0) ? (json_decode($mainPhoneObj[0])) : [];
?>
<div class="contacts view columns content">
    <h3>
        <?= h($contact->full_name) ?>
        [<?= $this->element('action', ['type' => 25, 'model' => $contact, 'confirmDelete' => $confirm]) ?>]
    </h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Main Phone') ?></th>
            <td>
                <?= h($mainPhone->phone ?? "") ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Phone Type') ?></th>
            <td>
                <?= h($mainPhone->type ?? "") ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($contact->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contact->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contact->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <div class="col">
            <?= $this->Text->autoParagraph(h($contact->address)); ?>
        </div>
    </div>
    <div class="related">
        <h4><?= __('Phones') ?></h4>
        <?php if (!empty($contact->phones)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Number') ?></th>
                    <th scope="col"><?= __('Type') ?></th>
                    <th scope="col"><?= __('Main Phone') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($contact->phones as $phones): ?>
                    <tr>
                        <td><?= h($phones->number) ?></td>
                        <td><?= h($phones->phone_type->name) ?></td>
                        <td><?= h($phones->is_main ? "Yes" : "") ?></td>
                        <td class="actions">
                            <?= $this->element('action', [
                                'type' => 28,
                                'controller' => 'Phones',
                                'model' => $phones,
                                'confirmDelete' => __('Are you sure you want to delete contact: {0}?', $phones->number)
                            ]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>

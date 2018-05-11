<div class="contacts form columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend>
            <?= __('Add Contact') ?>
            [<?= $this->element('action', ['type' => 1]) ?>]
        </legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');

            echo $this->Form->control('phones.0.number');
            echo $this->Form->control('phones.0.phone_type_id', ['options' => $phoneType]);

            echo $this->Form->control('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

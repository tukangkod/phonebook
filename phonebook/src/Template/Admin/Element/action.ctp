<?php
$action = new stdClass();
$action->list = 1;
$action->add = 2;
$action->view = 4;
$action->edit = 8;
$action->delete = 16;

$link = !empty($controller) ? ['controller' => $controller] : [];
?>
<?= ($type & $action->list) ? $this->Fa->link('list', null, array_merge($link, ['action' => 'index']), ['class' => 'm-2']) : "" ?>
<?= ($type & $action->add) ? $this->Fa->link('plus', null, array_merge($link, ['action' => 'add']), ['class' => 'm-2']) : "" ?>
<?= ($type & $action->view) ? $this->Fa->link('file-text-o', null, array_merge($link, ['action' => 'view', $model->id]), ['class' => 'm-2']) : "" ?>
<?= ($type & $action->edit) ? $this->Fa->link('edit', null, array_merge($link, ['action' => 'edit', $model->id]), ['class' => 'm-2']) : "" ?>
<?= ($type & $action->delete) ? $this->Form->postLink(
    '<i class="fa fa-trash"></i>',
    array_merge($link, ['action' => 'delete', $model->id]),
    ['escape' => false, 'class' => 'm-2', 'confirm' => $confirmDelete]
) : "" ?>

<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
$title = __("Error");
$this->Html->scriptBlock("$(document).ready(() => toastr.error('{$message}', '{$title}'));", ['block' => true]);

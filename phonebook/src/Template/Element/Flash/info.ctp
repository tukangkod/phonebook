<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message info" onclick="this.classList.add('hidden')"><?= $message ?></div>

<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */

 // Loading the JS for bootstrap alerts
echo $this->Html->script('bootstrap.js', ['block'=>true]);


if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $message ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


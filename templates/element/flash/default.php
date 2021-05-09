<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */

// Loading the JS for bootstrap alerts
echo $this->Html->script('bootstrap.js', ['block'=>true]);

$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?= $message ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

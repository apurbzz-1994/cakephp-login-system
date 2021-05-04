<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor $contractor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contractor'), ['action' => 'edit', $contractor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contractor'), ['action' => 'delete', $contractor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contractors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contractor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contractors view content">
            <h3><?= h($contractor->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($contractor->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $contractor->has('user') ? $this->Html->link($contractor->user->id, ['controller' => 'Users', 'action' => 'view', $contractor->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contractor->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

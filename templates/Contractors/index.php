<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor[]|\Cake\Collection\CollectionInterface $contractors
 */
?>
<div class="contractors index content">
    <?= $this->Html->link(__('New Contractor'), ['controller'=>'Users','action' => 'addContractor'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contractors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contractors as $contractor): ?>
                <tr>
                    <td><?= $this->Number->format($contractor->id) ?></td>
                    <td><?= h($contractor->name) ?></td>
                    <td><?= $contractor->has('user') ? $this->Html->link($contractor->user->id, ['controller' => 'Users', 'action' => 'view', $contractor->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contractor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller'=>'Users','action' => 'editContractor', $contractor->user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller'=>'Users','action' => 'delete', $contractor->user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->name)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

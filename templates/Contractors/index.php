<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor[]|\Cake\Collection\CollectionInterface $contractors
 */
?>
<div class="row px-5 py-5">
    <h4>All Contractors</h4>
</div>
<div class="row py-5 px-5">
    <?php foreach ($contractors as $contractor): ?>
        <div class="col-12 col-md-4 col-lg-4 pt-4">
        <div class="card">
            <div class="card-header">
            <i class="fas fa-user"></i> <?= $contractor->name ?>
            </div>
            <div class="card-body">
                <p class="card-text">Phone Number: <?= $contractor->phone_number ?></p>
                <p class="card-text">Expertise: <?= $contractor->expertise ?></p>
                <?= $this->Html->link(__('Edit'), ['controller'=>'Users','action' => 'editContractor', $contractor->user->id], ['class'=>'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Delete'), 
                ['controller'=>'Users','action' => 'delete', $contractor->user->id], 
                ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->name), 'class'=>'btn btn-danger']) 
                ?>
            </div>
        </div>
    </div>  
    <?php endforeach; ?>
</div>
<div class="row py-5 px-5">
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

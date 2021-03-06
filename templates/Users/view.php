<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($user->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Contractors') ?></h4>
                <?php if (!empty($user->contractors)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->contractors as $contractors) : ?>
                        <tr>
                            <td><?= h($contractors->id) ?></td>
                            <td><?= h($contractors->name) ?></td>
                            <td><?= h($contractors->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contractors', 'action' => 'view', $contractors->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contractors', 'action' => 'edit', $contractors->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contractors', 'action' => 'delete', $contractors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractors->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Inspectors') ?></h4>
                <?php if (!empty($user->inspectors)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->inspectors as $inspectors) : ?>
                        <tr>
                            <td><?= h($inspectors->id) ?></td>
                            <td><?= h($inspectors->name) ?></td>
                            <td><?= h($inspectors->phone_number) ?></td>
                            <td><?= h($inspectors->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Inspectors', 'action' => 'view', $inspectors->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Inspectors', 'action' => 'edit', $inspectors->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inspectors', 'action' => 'delete', $inspectors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inspectors->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

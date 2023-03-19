<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Issued $issued
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Issued'), ['action' => 'edit', $issued->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Issued'), ['action' => 'delete', $issued->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issued->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Issued'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Issued'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="issued view content">
            <h3><?= h($issued->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($issued->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fine Status') ?></th>
                    <td><?= h($issued->fine_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Category') ?></th>
                    <td><?= h($issued->item_category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Condition') ?></th>
                    <td><?= h($issued->item_condition) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Comment') ?></th>
                    <td><?= h($issued->item_comment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Member') ?></th>
                    <td><?= $issued->has('member') ? $this->Html->link($issued->member->id, ['controller' => 'Members', 'action' => 'view', $issued->member->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($issued->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fine') ?></th>
                    <td><?= $issued->fine === null ? '' : $this->Number->format($issued->fine) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Number') ?></th>
                    <td><?= $issued->item_number === null ? '' : $this->Number->format($issued->item_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Issue') ?></th>
                    <td><?= h($issued->date_issue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Return') ?></th>
                    <td><?= h($issued->date_return) ?></td>
                </tr>
                <tr>
                    <th><?= __('Due Date') ?></th>
                    <td><?= h($issued->due_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($issued->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($issued->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

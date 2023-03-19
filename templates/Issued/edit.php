<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Issued $issued
 * @var string[]|\Cake\Collection\CollectionInterface $members
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $issued->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $issued->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Issued'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="issued form content">
            <?= $this->Form->create($issued) ?>
            <fieldset>
                <legend><?= __('Edit Issued') ?></legend>
                <?php
                    echo $this->Form->control('date_issue', ['empty' => true]);
                    echo $this->Form->control('date_return', ['empty' => true]);
                    echo $this->Form->control('status');
                    echo $this->Form->control('due_date', ['empty' => true]);
                    echo $this->Form->control('fine');
                    echo $this->Form->control('fine_status');
                    echo $this->Form->control('item_category');
                    echo $this->Form->control('item_condition');
                    echo $this->Form->control('item_comment');
                    echo $this->Form->control('item_number');
                    echo $this->Form->control('member_id', ['options' => $members, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
